<?php
/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 聊城博商网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: IT宇宙人
 * Date: 2015-09-09
 * 
 *  公共逻辑类  将放到Application\Common\Logic\   由于很多模块公用 将不在放到某个单独模下面
 */

namespace app\common\logic;

use think\Model;
use think\Db;
//use think\Page;

/**
 * 分销逻辑层
 * Class CatsLogic
 * @package Home\Logic
 */
class DistributLogic //extends Model
{
     public function hello(){
        echo 'function hello(){'; 
     }
     
     /**
      * 生成分销记录(智能家居进行拆分)
      */
     public function rebate_log($order)
     {      
         // 看看分销规则由谁设置
         $distribut = tpCache('distribut');

         if($distribut['distribut_set_by'] == 1)// 商家设置
         {                      
            $store_distribut = M('store_distribut')->where("store_id = {$order['store_id']}")->find();
            if(empty($store_distribut) || $store_distribut['switch'] == 0) return false;                                             
            $pattern = $store_distribut['pattern']; // 分销模式  
            $first_rate = $store_distribut['first_rate']; // 一级比例
            $second_rate = $store_distribut['second_rate']; // 二级比例
            $third_rate = $store_distribut['third_rate']; // 三级比例
             $self_rate = 0; // 自购比例
         }
         else
         {
            if(empty($distribut['switch']) || $distribut['switch']== 0) return false;
            $pattern = $distribut['pattern'];
            $first_rate =$distribut['first_rate']; // 一级比例（智能家居）
            $second_rate = $distribut['second_rate']; // 二级比例  （智能家居）
            $third_rate = $distribut['third_rate']; // 三级比例（智能家居）
            $self_rate = $distribut['self_rate']; // 自购比例（智能家居）

             $first_rate2 = $distribut['first_rate2']; // 一级比例（普品）
             $self_rate2 = $distribut['self_rate2']; // 自购比例（普品）

            $seller_rate = $distribut['seller_rate']; // 推荐供应商获得分成比例

         }

         $user = M('users')->where("user_id = {$order['user_id']}")->find();
         $pattern = 0; //默认只有商品分成模式

         //按照商品分成 每件商品的佣金拿出来
         if($pattern  == 0) 
         {
            // 获取所有商品分类 
             //$cat_list =  M('goods_category')->getField('id,parent_id,commission_rate');             
             $order_goods0 = M('order_goods')->where("order_id = {$order['order_id']}  and goodstype = 0")->select(); // 普品
             $order_goods1 = M('order_goods')->where("order_id = {$order['order_id']}  and goodstype = 1")->select(); // 智能

             //普品分成总额计算
             $commission0 = 0;
             foreach($order_goods0 as $k => $v0)
             {
                    $tmp_commission0 = 0;
                    $goods0 = M('goods')->where("goods_id = {$v0['goods_id']}")->find(); // 单个商品的佣金
                    $tmp_commission0 = $goods0['distribut']; // 多商家版 已改名 distribut  为了 不跟平台抽成字段冲突
                    $tmp_commission0 = $tmp_commission0  * $v0['goods_num']; // 单个商品的分佣乘以购买数量
                    $commission0 += $tmp_commission0; // 所有商品的累积佣金
             }

             //智能家居总额计算
             $commission1 = 0;
             foreach($order_goods1 as $k => $v1)
             {
                 $tmp_commission1 = 0;
                 $goods1 = M('goods')->where("goods_id = {$v1['goods_id']}")->find(); // 单个商品的佣金
                 $tmp_commission1 = $goods1['distribut']; // 多商家版 已改名 distribut  为了 不跟平台抽成字段冲突
                 $tmp_commission1 = $tmp_commission1  * $v1['goods_num']; // 单个商品的分佣乘以购买数量
                 $commission1 += $tmp_commission1; // 所有商品的累积佣金
             }
         }else{
             $order_rate = $store_distribut['order_rate']; // 订单分成比例  
             $commission = $order['goods_price'] * ($order_rate / 100); // 订单的商品总额 乘以 订单分成比例
         }

         if(($commission0+$commission1) == 0){
             return false;
         }

         //------------------------------推荐分成-----------------------------------

         //  微信消息推送
         $wx_user = M('wx_user')->find();
         $jssdk = new \app\mobile\logic\Jssdk($wx_user['appid'],$wx_user['appsecret']);



         //----------------推荐商家分成，根据每件商品所属的商家进行分成START!!-----------------
         $order_goods = M('order_goods')->where("order_id = {$order['order_id']} ")->select(); // 所有商品
         foreach($order_goods as $k => $v)
         {

             //计算每种商品的分成之和
             $tmp_commission = 0;
             $goods = M('goods')->where("goods_id = {$v['goods_id']}")->find(); // 单个商品的佣金
             $tmp_commission = $goods['distribut']; // 多商家版 已改名 distribut  为了 不跟平台抽成字段冲突
             $tmp_commission = $tmp_commission  * $v['goods_num']; // 单个商品的分佣乘以购买数量

            if($tmp_commission>0){  //如果有分成，继续下一步，查询供应商推荐关系

                if((int)$v['store_id']>0){
                    $store = M('store')->where(array('store_id' => $v['store_id']))->find();
                    $recommend_user_id = (int)$store['recommend_user_id'];
                    $seller_rate_money = 0;

                    if($recommend_user_id>0  && $seller_rate > 0){ //如果有分成、有推荐人、分成比例>0,则计算分成
                        $seller_rate_money =  $tmp_commission * ($seller_rate / 100); // 推荐入驻分成


                        if($seller_rate_money>0){ //如果分成金额>0，继续进行下一步，分成。

                            //推荐供应商获得分成比例 by lishibo 2019-07-12
                            if($recommend_user_id > 0 && $seller_rate_money > 0.00)
                            {

                                /**验证推等级 update lishibo 20190815**/
                                $recommend_user = M('users')->where("user_id", $recommend_user_id)->find();
                                $recommend_user_level = (int)$recommend_user['level'];

                                if($recommend_user_level>2){ //金牌会员资格
                                    $data = array(
                                        'user_id' =>$recommend_user_id,//推荐供应商用户id
                                        'buy_user_id'=>$user['user_id'],
                                        'nickname'=>$user['nickname'],
                                        'order_sn' => $order['order_sn'],
                                        'order_id' => $order['order_id'],
                                        'goods_price' => $order['goods_price'],
                                        'money' => $seller_rate_money,
                                        'level' => 1,
                                        'remark' => "您推荐的供应商产生了一笔订单:{$order['order_sn']} 如果交易成功，您将获得 ￥".$seller_rate_money."奖励 !",
                                        'create_time' => time(),
                                        'store_id' =>$order['store_id'],
                                    );
                                    M('rebate_log')->add($data);

                                    // 微信推送消息
                                    $tmp_user = M('users')->where("user_id = {$recommend_user_id}")->find();
                                    if($tmp_user['oauth']== 'weixin')
                                    {
                                        $wx_content = "您推荐的供应商产生了一笔订单:{$order['order_sn']} 如果交易成功，您将获得 ￥".$seller_rate_money."奖励 !";
                                        $jssdk->push_msg($tmp_user['openid'],$wx_content);
                                    }

                                    unset($data);
                                    unset($tmp_user);
                                    unset($wx_content);
                                    unset($recommend_user);
                                    unset($recommend_user_level);
                                }
                                /**验证推等级 update lishibo 20190815**/

                            }
                        }


                    }

                    unset($store);
                    unset($recommend_user_id);
                    unset($seller_rate_money);
                }
            }

             unset($goods);
             unset($tmp_commission);
         }
         //----------------推荐商家分成，根据每件商品所属的商家进行分成END!!-----------------




         //-----------------------普品START!!------------------------
         if($commission0 > 0){

             $first_money0 = $commission0 * ($first_rate2 / 100); // 一级赚到的钱
             $self_rate_dmoney0 = $commission0 * ($self_rate2 / 100); // 自购分成

             //自购分成 by lishibo 2019-07-12 验证等级update lishbio 20190815
             if($user['user_id'] > 0 && $self_rate_dmoney0 > 0.01&&$user['level'] > 2 )
             {
                 $data = array(
                     'user_id' =>$user['user_id'],
                     'buy_user_id'=>$user['user_id'],
                     'nickname'=>$user['nickname'],
                     'order_sn' => $order['order_sn'],
                     'order_id' => $order['order_id'],
                     'goods_price' => $order['goods_price'],
                     'money' => $self_rate_dmoney0,
                     'remark' => "您刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥".$self_rate_dmoney0."奖励 !",
                     'level' => 1,
                     'create_time' => time(),
                     'store_id' =>$order['store_id'],
                 );
                 M('rebate_log')->add($data);
                 // 微信推送消息
                 $tmp_user = M('users')->where("user_id = {$user['user_id']}")->find();
                 if($tmp_user['oauth']== 'weixin')
                 {
                     $wx_content = "您刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥".$self_rate_dmoney0."奖励 !";
                     $jssdk->push_msg($tmp_user['openid'],$wx_content);
                 }
             }

             // 一级 分销商赚 的钱. 小于一分钱的 不存储
             if($user['first_leader'] > 0 && $first_money0 > 0.01)
             {

                 /**验证推等级 update lishibo 20190815**/
                 $first_leader = M('users')->where("user_id", $user['first_leader'])->find();
                 $first_leader_level = (int)$first_leader['level'];

                 if($first_leader_level==3) {
                     $data = array(
                         'user_id' => $user['first_leader'],
                         'buy_user_id' => $user['user_id'],
                         'nickname' => $user['nickname'],
                         'order_sn' => $order['order_sn'],
                         'order_id' => $order['order_id'],
                         'goods_price' => $order['goods_price'],
                         'money' => $first_money0,
                         'remark' => "你的一级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $first_money0 . "奖励 !",
                         'level' => 1,
                         'create_time' => time(),
                         'store_id' => $order['store_id'],
                     );
                     M('rebate_log')->add($data);
                     // 微信推送消息
                     $tmp_user = M('users')->where("user_id = {$user['first_leader']}")->find();
                     if ($tmp_user['oauth'] == 'weixin') {
                         $wx_content = "你的一级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $first_money0 . "奖励 !";
                         $jssdk->push_msg($tmp_user['openid'], $wx_content);
                     }
                 }

                 unset($data);
                 unset($first_leader);
                 unset($first_leader_level);
                 unset($tmp_user);
             }
         }
         //-----------------------普品END!!------------------------



         //-----------------------智能家居START!!------------------------
         if($commission1 > 0){

             $first_money = $commission1 * ($first_rate / 100); // 一级赚到的钱
             $second_money = $commission1 * ($second_rate / 100); // 二级赚到的钱
             $thirdmoney = $commission1 * ($third_rate / 100); // 三级赚到的钱
             $self_rate_dmoney = $commission1 * ($self_rate / 100); // 自购分成
             $seller_rate_money = 0;


             //自购分成 by lishibo 2019-07-12 验证等级update lishbio 20190815
             if($user['user_id'] > 0 && $self_rate_dmoney > 0.01&&$user['level'] > 2 )
             {
                 $data = array(
                     'user_id' =>$user['user_id'],
                     'buy_user_id'=>$user['user_id'],
                     'nickname'=>$user['nickname'],
                     'order_sn' => $order['order_sn'],
                     'order_id' => $order['order_id'],
                     'goods_price' => $order['goods_price'],
                     'money' => $self_rate_dmoney,
                     'remark' => "您刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥".$self_rate_dmoney."奖励 !",
                     'level' => 1,
                     'create_time' => time(),
                     'store_id' =>$order['store_id'],
                 );
                 M('rebate_log')->add($data);
                 // 微信推送消息
                 $tmp_user = M('users')->where("user_id = {$user['user_id']}")->find();
                 if($tmp_user['oauth']== 'weixin')
                 {
                     $wx_content = "您刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥".$self_rate_dmoney."奖励 !";
                     $jssdk->push_msg($tmp_user['openid'],$wx_content);
                 }
             }

             // 一级 分销商赚 的钱. 小于一分钱的 不存储
             if($user['first_leader'] > 0 && $first_money > 0.01)
             {

                 /**验证推等级 update lishibo 20190815**/
                 $first_leader = M('users')->where("user_id", $user['first_leader'])->find();
                 $first_leader_level = (int)$first_leader['level'];

                 if($first_leader_level==3) {
                     $data = array(
                         'user_id' => $user['first_leader'],
                         'buy_user_id' => $user['user_id'],
                         'nickname' => $user['nickname'],
                         'order_sn' => $order['order_sn'],
                         'order_id' => $order['order_id'],
                         'goods_price' => $order['goods_price'],
                         'money' => $first_money,
                         'remark' => "你的一级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $first_money . "奖励 !",
                         'level' => 1,
                         'create_time' => time(),
                         'store_id' => $order['store_id'],
                     );
                     M('rebate_log')->add($data);
                     // 微信推送消息
                     $tmp_user = M('users')->where("user_id = {$user['first_leader']}")->find();
                     if ($tmp_user['oauth'] == 'weixin') {
                         $wx_content = "你的一级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $first_money . "奖励 !";
                         $jssdk->push_msg($tmp_user['openid'], $wx_content);
                     }
                 }
             }
             // 二级 分销商赚 的钱.
             if($user['second_leader'] > 0 && $second_money > 0.01)
             {
                 /**验证推等级 update lishibo 20190815**/
                 $second_leader = M('users')->where("user_id", $user['second_leader'])->find();
                 $second_leader_level = (int)$second_leader['level'];

                 if($second_leader_level==3) {

                     $data = array(
                         'user_id' => $user['second_leader'],
                         'buy_user_id' => $user['user_id'],
                         'nickname' => $user['nickname'],
                         'order_sn' => $order['order_sn'],
                         'order_id' => $order['order_id'],
                         'goods_price' => $order['goods_price'],
                         'money' => $second_money,
                         'remark' => "你的二级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $second_money . "奖励 !",
                         'level' => 2,
                         'create_time' => time(),
                         'store_id' => $order['store_id'],
                     );
                     M('rebate_log')->add($data);
                     // 微信推送消息
                     $tmp_user = M('users')->where("user_id = {$user['second_leader']}")->find();
                     if ($tmp_user['oauth'] == 'weixin') {
                         $wx_content = "你的二级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $second_money . "奖励 !";
                         $jssdk->push_msg($tmp_user['openid'], $wx_content);
                     }
                 }
             }

         }
         //-----------------------智能家居START!!------------------------

         M('order')->where("order_id = {$order['order_id']}")->save(array("is_distribut"=>1));  //修改订单为已经分成
     }



     /**
      * 生成分销记录
      */
     public function rebate_logbak($order)
     {
         // 看看分销规则由谁设置
         $distribut = tpCache('distribut');

         if($distribut['distribut_set_by'] == 1)// 商家设置
         {
            $store_distribut = M('store_distribut')->where("store_id = {$order['store_id']}")->find();
            if(empty($store_distribut) || $store_distribut['switch'] == 0) return false;
            $pattern = $store_distribut['pattern']; // 分销模式
            $first_rate = $store_distribut['first_rate']; // 一级比例
            $second_rate = $store_distribut['second_rate']; // 二级比例
            $third_rate = $store_distribut['third_rate']; // 三级比例
             $self_rate = 0; // 自购比例
         }
         else
         {
            if(empty($distribut['switch']) || $distribut['switch']== 0) return false;
            $pattern = $distribut['pattern'];
            $first_rate =$distribut['first_rate']; // 一级比例
            $second_rate = $distribut['second_rate']; // 二级比例
            $third_rate = $distribut['third_rate']; // 三级比例
            $self_rate = $distribut['self_rate']; // 自购比例
            $seller_rate = $distribut['seller_rate']; // 推荐供应商获得分成比例

         }

         $user = M('users')->where("user_id = {$order['user_id']}")->find();
         $pattern = 0; //默认只有商品分成模式

         //按照商品分成 每件商品的佣金拿出来
         if($pattern  == 0)
         {
            // 获取所有商品分类
             //$cat_list =  M('goods_category')->getField('id,parent_id,commission_rate');
             $order_goods = M('order_goods')->where("order_id = {$order['order_id']}")->select(); // 订单所有商品
             $commission = 0;
             foreach($order_goods as $k => $v)
             {
                    $tmp_commission = 0;
                    $goods = M('goods')->where("goods_id = {$v['goods_id']}")->find(); // 单个商品的佣金
                    $tmp_commission = $goods['distribut']; // 多商家版 已改名 distribut  为了 不跟平台抽成字段冲突
                    $tmp_commission = $tmp_commission  * $v['goods_num']; // 单个商品的分佣乘以购买数量
                    $commission += $tmp_commission; // 所有商品的累积佣金
             }
         }else{
             $order_rate = $store_distribut['order_rate']; // 订单分成比例
             $commission = $order['goods_price'] * ($order_rate / 100); // 订单的商品总额 乘以 订单分成比例
         }

         // 如果这笔订单没有分销金额
         if($commission == 0)
             return false;

            $first_money = $commission * ($first_rate / 100); // 一级赚到的钱
            $second_money = $commission * ($second_rate / 100); // 二级赚到的钱
            $thirdmoney = $commission * ($third_rate / 100); // 三级赚到的钱
            $self_rate_dmoney = $commission * ($self_rate / 100); // 自购分成
            $seller_rate_money = 0;

            //查询供应商推荐关系
            if((int)$order['store_id']>0){
             $store = M('store')->where(array('store_id' => $order['store_id']))->find();
             $recommend_user_id = (int)$store['recommend_user_id'];

             if($recommend_user_id>0){
                 $seller_rate_money =  $commission * ($seller_rate / 100); // 推荐入驻分成
             }
            }

            //  微信消息推送
            $wx_user = M('wx_user')->find();
            $jssdk = new \app\mobile\logic\Jssdk($wx_user['appid'],$wx_user['appsecret']);

         //推荐供应商获得分成比例 by lishibo 2019-07-12
         if($recommend_user_id > 0 && $seller_rate_money > 0.01)
         {

             /**验证推等级 update lishibo 20190815**/
             $recommend_user = M('users')->where("user_id", $recommend_user_id)->find();
             $recommend_user_level = (int)$recommend_user['level'];

             if($recommend_user_level==3){
                $data = array(
                    'user_id' =>$recommend_user_id,//推荐供应商用户id
                    'buy_user_id'=>$user['user_id'],
                    'nickname'=>$user['nickname'],
                    'order_sn' => $order['order_sn'],
                    'order_id' => $order['order_id'],
                    'goods_price' => $order['goods_price'],
                    'money' => $seller_rate_money,
                    'level' => 1,
                    'remark' => "您推荐的供应商产生了一笔订单:{$order['order_sn']} 如果交易成功，您将获得 ￥".$seller_rate_money."奖励 !",
                    'create_time' => time(),
                    'store_id' =>$order['store_id'],
                );
                M('rebate_log')->add($data);
                // 微信推送消息
                $tmp_user = M('users')->where("user_id = {$recommend_user_id}")->find();
                if($tmp_user['oauth']== 'weixin')
                {
                    $wx_content = "您推荐的供应商产生了一笔订单:{$order['order_sn']} 如果交易成功，您将获得 ￥".$seller_rate_money."奖励 !";
                    $jssdk->push_msg($tmp_user['openid'],$wx_content);
                }
            }
             /**验证推等级 update lishibo 20190815**/

         }

         //自购分成 by lishibo 2019-07-12 验证等级update lishbio 20190815
         if($user['user_id'] > 0 && $self_rate_dmoney > 0.01&&$user['level'] > 2 )
         {
             $data = array(
                 'user_id' =>$user['user_id'],
                 'buy_user_id'=>$user['user_id'],
                 'nickname'=>$user['nickname'],
                 'order_sn' => $order['order_sn'],
                 'order_id' => $order['order_id'],
                 'goods_price' => $order['goods_price'],
                 'money' => $self_rate_dmoney,
                 'remark' => "您刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥".$self_rate_dmoney."奖励 !",
                 'level' => 1,
                 'create_time' => time(),
                 'store_id' =>$order['store_id'],
             );
             M('rebate_log')->add($data);
             // 微信推送消息
             $tmp_user = M('users')->where("user_id = {$user['user_id']}")->find();
             if($tmp_user['oauth']== 'weixin')
             {
                 $wx_content = "您刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥".$self_rate_dmoney."奖励 !";
                 $jssdk->push_msg($tmp_user['openid'],$wx_content);
             }
         }

          // 一级 分销商赚 的钱. 小于一分钱的 不存储
         if($user['first_leader'] > 0 && $first_money > 0.01)
         {

             /**验证推等级 update lishibo 20190815**/
             $first_leader = M('users')->where("user_id", $user['first_leader'])->find();
             $first_leader_level = (int)$first_leader['level'];

             if($first_leader_level==3) {
                 $data = array(
                     'user_id' => $user['first_leader'],
                     'buy_user_id' => $user['user_id'],
                     'nickname' => $user['nickname'],
                     'order_sn' => $order['order_sn'],
                     'order_id' => $order['order_id'],
                     'goods_price' => $order['goods_price'],
                     'money' => $first_money,
                     'remark' => "你的一级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $first_money . "奖励 !",
                     'level' => 1,
                     'create_time' => time(),
                     'store_id' => $order['store_id'],
                 );
                 M('rebate_log')->add($data);
                 // 微信推送消息
                 $tmp_user = M('users')->where("user_id = {$user['first_leader']}")->find();
                 if ($tmp_user['oauth'] == 'weixin') {
                     $wx_content = "你的一级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $first_money . "奖励 !";
                     $jssdk->push_msg($tmp_user['openid'], $wx_content);
                 }
             }
         }
          // 二级 分销商赚 的钱.
         if($user['second_leader'] > 0 && $second_money > 0.01)
         {
             /**验证推等级 update lishibo 20190815**/
             $second_leader = M('users')->where("user_id", $user['second_leader'])->find();
             $second_leader_level = (int)$second_leader['level'];

             if($second_leader_level==3) {

                 $data = array(
                     'user_id' => $user['second_leader'],
                     'buy_user_id' => $user['user_id'],
                     'nickname' => $user['nickname'],
                     'order_sn' => $order['order_sn'],
                     'order_id' => $order['order_id'],
                     'goods_price' => $order['goods_price'],
                     'money' => $second_money,
                     'remark' => "你的二级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $second_money . "奖励 !",
                     'level' => 2,
                     'create_time' => time(),
                     'store_id' => $order['store_id'],
                 );
                 M('rebate_log')->add($data);
                 // 微信推送消息
                 $tmp_user = M('users')->where("user_id = {$user['second_leader']}")->find();
                 if ($tmp_user['oauth'] == 'weixin') {
                     $wx_content = "你的二级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $second_money . "奖励 !";
                     $jssdk->push_msg($tmp_user['openid'], $wx_content);
                 }
             }
         }

          // 三级 分销商赚 的钱.
         if($user['third_leader'] > 0 && $thirdmoney > 0.01)
         {
             /**验证推等级 update lishibo 20190815**/
             $third_leader = M('users')->where("user_id", $user['third_leader'])->find();
             $third_leader_level = (int)$third_leader['level'];

             if($third_leader_level==3) {

                 $data = array(
                     'user_id' => $user['third_leader'],
                     'buy_user_id' => $user['user_id'],
                     'nickname' => $user['nickname'],
                     'order_sn' => $order['order_sn'],
                     'order_id' => $order['order_id'],
                     'goods_price' => $order['goods_price'],
                     'money' => $thirdmoney,
                     'remark' => "你的三级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $thirdmoney . "奖励 !",
                     'level' => 3,
                     'create_time' => time(),
                     'store_id' => $order['store_id'],
                 );
                 M('rebate_log')->add($data);
                 // 微信推送消息
                 $tmp_user = M('users')->where("user_id = {$user['third_leader']}")->find();
                 if ($tmp_user['oauth'] == 'weixin') {
                     $wx_content = "你的三级下线,刚刚下了一笔订单:{$order['order_sn']} 如果交易成功你将获得 ￥" . $thirdmoney . "奖励 !";
                     $jssdk->push_msg($tmp_user['openid'], $wx_content);
                 }
             }

         }


         M('order')->where("order_id = {$order['order_id']}")->save(array("is_distribut"=>1));  //修改订单为已经分成
     }






























































     
     /**
      * 自动分成 符合条件的 分成记录
      */
     function auto_confirm($store_id){
         
         // 看看分销规则由谁设置
         $distribut_set_by = M('config')->where("name = 'distribut_set_by'")->getField('value');
         if($distribut_set_by == 1)// 商家设置
         {                      
            $store_distribut = M('store_distribut')->where("store_id = {$store_id}")->find();
            if(empty($store_distribut) || $store_distribut['switch'] == 0) 
               return false;         
         }
         else
         {
             $switch = M('config')->where("name = 'switch'")->getField('value');
             if(empty($switch) || $switch == 0) 
               return false;             
         }
         $today_time = time();
         $distribut_date = tpCache('shopping.auto_transfer_date'); // 商家结算时间拿来 跟分销结算一起同一时间
         $distribut_time = $distribut_date * (60 * 60 * 24); // 计算天数 时间戳

         $rebate_log_arr = M('rebate_log')->where("store_id = $store_id and status = 2 and ($today_time - confirm) >  $distribut_time")->select();
         foreach ($rebate_log_arr as $key => $val)
         {
             accountLog($val['user_id'], $val['money'], 0,"订单:{$val['order_sn']}分佣",$val['money']);             
             $val['status'] = 3;
             $val['confirm_time'] = $today_time;
//             $val['remark'] = $val['remark']."满{$distribut_date}天,程序自动分成.";
             $val['remark'] = "满{$distribut_date}天,程序自动分成.";
             M("rebate_log")->where("id = {$val[id]}")->save($val);
         }
     }
}