<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:42:"./template/pc/rainbow/goods\goodsList.html";i:1565681205;s:46:"./template/pc/rainbow/public\footer_index.html";i:1562731764;s:46:"./template/pc/rainbow/public\sidebar_cart.html";i:1491382656;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>商品列表</title>
	<link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
	<script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="__PUBLIC__/js/layer/layer-min.js"></script>
	<script src="__PUBLIC__/js/global.js"></script>
	<script src="__PUBLIC__/js/pc_common.js"></script>
</head>
<body>
<!--header-s-->
<div class="tpshop-tm-hander p">
    <div class="top-hander p">
        <div class="w1430 pr">
            <link rel="stylesheet" href="__STATIC__/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
			<div class="fl">
			    <div class="ls-dlzc fl nologin">
			        <a href="<?php echo U('Home/user/login'); ?>">Hi,请登录</a>
			        <a class="red" href="<?php echo U('Home/user/reg'); ?>">免费注册</a>
			    </div>
			    <div class="ls-dlzc fl islogin">
			        <a class="red userinfo" href="<?php echo U('Home/user/index'); ?>"></a>
			        <a href="<?php echo U('Home/user/logout'); ?>">退出</a>
			    </div>
			    <div class="fl spc" style="margin-top:10px"></div>
			    <div class="sendaddress pr fl">
			        <!-- 收货地址，物流运费 -start-->
			        <ul class="list1">
			            <li class="jaj"><span>配&nbsp;&nbsp;送：</span></li>
			            <li class="summary-stock though-line" style="margin-top:-1px">
			                <div class="dd" style="border-right:0px;">
			                    <div class="store-selector add_cj_p">
			                        <div class="text" style="margin-top:3px;border-left: 0 !important;"><div></div><b></b></div>
			                        <div onclick="$(this).parent().removeClass('hover')" class="close"></div>
			                    </div>
			                </div>
			            </li>
			        </ul>
			        <!--<i class="jt-x"></i>-->
			        <!-- 收货地址，物流运费 -end-->
			    </div>
			</div>
			<div class="top-ri-header fr">
			    <ul>
			        <li><a target="_blank" href="<?php echo U('/Home/Order/order_list'); ?>">我的订单</a></li>
			        <li class="spacer"></li>
			        <li><a target="_blank" href="<?php echo U('/Home/User/account'); ?>">我的银币</a></li>
			        <li class="spacer"></li>
			        <li><a target="_blank" href="<?php echo U('/Home/User/coupon'); ?>">我的优惠券</a></li>
			        <li class="spacer"></li>
			        <li><a target="_blank" href="<?php echo U('/Home/User/goods_collect'); ?>">我的收藏</a></li>
			        <!--<li class="spacer"></li>
			        <li class="hover-ba-navdh">
			            <div class="nav-dh">
			                <span>网站导航</span>
			                <i class="jt-x"></i>
			                <div class="conta-hv-nav">
			                    <ul>
			                        <li>
			                            <a href="<?php echo U('/Home/Activity/group_list'); ?>">团购</a>
			                        </li>
			                        <li>
			                            <a href="<?php echo U('Home/Activity/flash_sale_list'); ?>">抢购</a>
			                        </li>
			                    </ul>
			                </div>
			            </div>
			        </li>-->
					<!-- <li class="spacer"></li>
                   <li class="navoxth">
                        <div class="nav-dh">
                            <i class="fl ico"></i>
                            <span>手机shop网</span>
                            <i class="jt-x"></i>
                        </div>
                        <div class="sub-panel m-lst">
                          <p>扫一扫，下载客户端</p>
                          <dl>
                            <dt class="fl mr10"><a target="_blank" href=""><img height="80" width="80" src="/Template/pc/soubao/Static/images/qrcode_vmall_app01.jpg"></a></dt>
                            <dd class="fl mb10"><a target="_blank" href=""><i class="andr"></i> Andiord</a></dd>
                            <dd class="fl"><a target="_blank" href=""><i class="iph"></i> iPhone</a></dd>
                          </dl>
                        </div>
                    </li>-->
			        <li class="spacer"></li>
			        <li class="wxbox-hover">
			            <a target="_blank" href="">关注我们：</a>
			            <img class="wechat-top" src="__STATIC__/images/wechat.png" alt="">
			            <div class="sub-panel wx-box">
			              <span class="arrow-b">◆</span>
			              <span class="arrow-a">◆</span>
			              <p class="n"> 扫描二维码 <br>  关注网官方微信 </p>
			              <img src="__STATIC__/images/qrcode_vmall_app01.jpg">
			            </div>
			        </li>
			    </ul>
			</div>
        </div>
    </div>
    <div class="nav-middan-z p">
        <div class="header w1430">
            <div class="ecsc-logo">
			    <a href="/" class="logo"> <img src="<?php echo $tpshop_config['shop_info_store_logo']; ?>"></a>
			</div>
			<div class="ecsc-join">
			    <?php $pid =2;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1568800800 and end_time > 1568800800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
			        <a href="<?php echo $v['ad_link']; ?>" target="_blank"> <img src="<?php echo $v[ad_code]; ?>" style="width: 113px;height: 57px;"></a>
			    <?php endforeach; ?>
			</div>
			<div class="ecsc-search">
			    <form id="sourch_form" name="sourch_form" method="post" action="<?php echo U('Home/Goods/search'); ?>" class="ecsc-search-form">
			        <div class="ecsc-search-tabs">
			            <i class="sc-icon-right"></i>
			            <ul class="shop_search" id="shop_search">
			                <li rev="0"><span id="sp">商品</span></li>
			                <li rev="1" class="curr"><span id="dp">店铺</span></li>
			            </ul>
			        </div>
			        <input autocomplete="off" name="q" id="q" type="text" value="<?php echo \think\Request::instance()->param('q'); ?>" placeholder="搜索关键字" class="ecsc-search-input">
			        <button type="submit" class="ecsc-search-button" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();"><i></i></button>
			    </form>
			    <div class="keyword">
			        <ul>
			            <?php if(is_array($tpshop_config['hot_keywords']) || $tpshop_config['hot_keywords'] instanceof \think\Collection): if( count($tpshop_config['hot_keywords'])==0 ) : echo "" ;else: foreach($tpshop_config['hot_keywords'] as $k=>$wd): ?>
			                <li>
			                    <a href="<?php echo U('Home/Goods/search',array('q'=>$wd)); ?>" target="_blank"><?php echo $wd; ?></a>
			                </li>
			            <?php endforeach; endif; else: echo "" ;endif; ?>
			        </ul>
			    </div>
			</div>
			<div class="shopingcar-index fr">
			    <div class="u-g-cart fr fixed" id="hd-my-cart">
			        <a href="<?php echo U('Home/Cart/cart'); ?>">
			            <p class="c-n fl">我的购物车</p>
			            <p class="c-num fl">(<span class="count cart_quantity" id="cart_quantity"></span>)
			                <i class="i-c oh"></i>
			            </p>
			        </a>
			        <div class="u-fn-cart u-mn-cart" id="show_minicart">
			            <div class="minicartContent" id="minicart">
			            </div>
			        </div>
			    </div>
			</div>
        </div>
    </div>
    <div class="nav p">
        <div class="w1430 p">
            <div class="categorys home_categorys">
			    <div class="dt">
			        <a href="">全部商品分类</a>
			    </div>
			    <!--全部商品分类-s-->
			    <div class="dd">
			        <div class="cata-nav">
			            <?php if(is_array($goods_category_tree) || $goods_category_tree instanceof \think\Collection): if( count($goods_category_tree)==0 ) : echo "" ;else: foreach($goods_category_tree as $k=>$vo): ?>
			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$vo[id])); ?>" title="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></a></h3>
			                        </div>
			                        <b>&gt;</b>
			                    </div>
			                    <div class="cata-nav-layer">
			                        <div class="cata-nav-left">
			                            <div class="item-channels">
			                                <div class="channels">
			                                    <a href="" target="_blank">品牌日<i>&gt;</i></a>
			                                    <a href="" target="_blank">家电城<i>&gt;</i></a>
			                                    <a href="" target="_blank">智能生活馆<i>&gt;</i></a>
			                                    <a href="" target="_blank">净化馆<i>&gt;</i></a>
			                                    <a href="" target="_blank">帮服务店<i>&gt;</i></a>
			                                    <a href="" target="_blank">值得买精选<i>&gt;</i></a>
			                                </div>
			                            </div>
			                            <div class="subitems">
			                                <dl>
			                                    <?php if(is_array($vo['tmenu']) || $vo['tmenu'] instanceof \think\Collection): if( count($vo['tmenu'])==0 ) : echo "" ;else: foreach($vo['tmenu'] as $k2=>$v2): ?>
			                                        <dt><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>" target="_blank"><?php echo $v2['name']; ?><i>&gt;</i></a></dt>
			                                        <dd>
			                                            <?php if(is_array($v2['sub_menu']) || $v2['sub_menu'] instanceof \think\Collection): if( count($v2['sub_menu'])==0 ) : echo "" ;else: foreach($v2['sub_menu'] as $key=>$v3): ?>
			                                                <a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v3[id])); ?>" target="_blank"><?php echo $v3['name']; ?></a>
			                                            <?php endforeach; endif; else: echo "" ;endif; ?>
			                                        </dd>
			                                    <?php endforeach; endif; else: echo "" ;endif; ?>
			                                </dl>
			                                <div class="item-brands">
			                                    <ul>
			                                    </ul>
			                                </div>
			                                <div class="item-promotions">
			                                </div>
			                            </div>
			                        </div>
			                        <div class="cata-nav-rigth">
			                            <div class="item-brands">
			                                <ul>
			                                    <?php if(is_array($brand_list) || $brand_list instanceof \think\Collection): $i = 0; $__LIST__ = $brand_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;if(($v2[cat_id1] == $vo[id]) AND ($v2[is_hot] == 1)): ?>
			                                            <li>
			                                                <a href="<?php echo U('Home/Goods/goodsList',array('brand_id'=>$v2[id])); ?>" target="_blank" title="<?php echo $v2['name']; ?>">
			                                                <img src="<?php echo $v2['logo']; ?>" width="91" height="40"></a>
			                                            </li>
			                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                <?php
                                   
                                $md5_key = md5("select * from __PREFIX__goods g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id where start_time < UNIX_TIMESTAMP(NOW()) and end_time > UNIX_TIMESTAMP(NOW()) and status = 1 and cat_id1 = $vo[id] limit 2");
                                $result_name = $sql_result_promote = S("sql_".$md5_key);
                                if(empty($sql_result_promote))
                                {                            
                                    $result_name = $sql_result_promote = \think\Db::query("select * from __PREFIX__goods g inner join __PREFIX__flash_sale as f on g.goods_id = f.goods_id where start_time < UNIX_TIMESTAMP(NOW()) and end_time > UNIX_TIMESTAMP(NOW()) and status = 1 and cat_id1 = $vo[id] limit 2"); 
                                    S("sql_".$md5_key,$sql_result_promote,31104000);
                                }    
                              foreach($sql_result_promote as $promote_key=>$promote): ?>
			                                    <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$promote[goods_id])); ?>" target="_blank">
			                                        <img width="181" height="120" src="<?php echo goods_thum_images($promote['goods_id'],181,120); ?>">
			                                    </a>
			                                <?php endforeach; ?>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            <?php endforeach; endif; else: echo "" ;endif; ?>
			        </div>
			    </div>
			<!--全部商品分类-e-->
			</div>
			<div class="navitems" id="nav">
			    <ul>
			    	<li><a  href="/">首页</a></li>
			        <?php
                                   
                                $md5_key = md5("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
			            <li><a href="<?php echo $v[url]; ?>" <?php  if($_SERVER['REQUEST_URI']==str_replace('&amp;','&',$v[url])){ echo "class='selected'";} ?> ><?php echo $v[name]; ?></a></li>
			        <?php endforeach; ?>
			    </ul>
			    <div class="wrap-line" style="width: 72px; left: 20px;">
			        <span style="left:15px;"></span>
			    </div>
			</div>
        </div>
    </div>
</div>
<!--------收货地址，物流运费-开始-------------->
<script src="__STATIC__/js/location.js"></script>
<!--------收货地址，物流运费--结束-------------->
<div class="search-box p">
	<div class="w1430">
		<div class="search-path fl">
			<a href="<?php echo U('Home/Goods/goodsList',array('id'=>$cat_id)); ?>">全部结果</a>
			<i class="litt-xyb"></i>
			<?php if($goodsCate['parent_id'] == 0): ?>
				<a href="<?php echo U('Home/Goods/goodsList',array('id'=>$goodsCate['id'])); ?>"><?php echo $goodsCate['parent_name']; ?></a>
				<?php else: ?>
				<a href="<?php echo U('Home/Goods/goodsList',array('id'=>$goodsCate['parent_id'])); ?>"><?php echo $goodsCate['parent_name']; ?></a>
			<?php endif; ?>
			<i class="litt-xyb"></i>
			<!--如果当前分类是三级分类 则二级也要显示-->
			<?php if($goodsCate[level] == 3): ?>
				<div class="havedox">
					<div class="disenk"><span><?php echo $goods_category[$goodsCate[parent_id]][name]; ?></span><i class="litt-xxd"></i></div>
					<div class="hovshz">
						<ul>
							<?php if(is_array($goods_category) || $goods_category instanceof \think\Collection): if( count($goods_category)==0 ) : echo "" ;else: foreach($goods_category as $k=>$v): if(($v[parent_id] == $goods_category[$goodsCate[parent_id]][parent_id])): ?>
									<li><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v['id'])); ?>"><?php echo $v[name]; ?></a></li>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
				<i class="litt-xyb"></i>
			<?php endif; ?>
			<!--如果当前分类是三级分类 则二级也要显示-->
			<?php if($goodsCate[level] == 2): ?>
				<div class="havedox">
					<div class="disenk"><span><?php echo $goodsCate['name']; ?></span><i class="litt-xxd"></i></div>
					<div class="hovshz">
						<ul>
							<?php if(is_array($goods_category) || $goods_category instanceof \think\Collection): if( count($goods_category)==0 ) : echo "" ;else: foreach($goods_category as $k=>$v): if(($v[parent_id] == $goodsCate[parent_id])): ?>
									<li><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v['id'])); ?>"><?php echo $v[name]; ?></a></li>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
				<i class="litt-xyb"></i>
			<?php endif; ?>
			<!--当前分类-->
			<?php if($goodsCate[level] == 1): ?>
				<div class="havedox">
					<div class="disenk"><span><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$goodsCate['id'])); ?>"><?php echo $goodsCate['name']; ?></a></span><i class="litt-xxd"></i></div>
					<div class="hovshz">
						<ul>
							<?php if(is_array($cateArr) || $cateArr instanceof \think\Collection): if( count($cateArr)==0 ) : echo "" ;else: foreach($cateArr as $k=>$v): ?>
								<li><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v['id'])); ?>"><?php echo $v[name]; ?></a></li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
				<i class="litt-xyb"></i>
			<?php endif; ?>
		</div>
		<?php if(is_array($filter_menu) || $filter_menu instanceof \think\Collection): if( count($filter_menu)==0 ) : echo "" ;else: foreach($filter_menu as $k=>$v): ?> 
		    <a title="<?php echo $v['text']; ?>" href="<?php echo $v['href']; ?>" class="u-av-label"><?php echo $v['text']; ?><i>x</i></a>
	    <?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="search-clear fr">
			<span><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$cat_id)); ?>">清空筛选条件</a></span>
		</div>
	</div>
</div>
<!-- 筛选 start -->
<div class="search-opt troblect">
    <div class="w1430">
        <div class="opt-list">
            <!-- 品牌筛选 start -->
            <?php if($filter_brand != null): ?>
                <dl class="brand-section m-tr">
                    <dt>品牌</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-box brand-list">
                                <div class="clearfix p">
                                    <?php if(is_array($filter_brand) || $filter_brand instanceof \think\Collection): if( count($filter_brand)==0 ) : echo "" ;else: foreach($filter_brand as $k=>$v): ?>
                                        <a href="<?php echo $v[href]; ?>" data-href="<?php echo $v[href]; ?>"  data-key='brand' data-val='<?php echo $v[id]; ?>'>
                                            <i class="litt-zd"></i>
                                            <img src="<?php echo $v[logo]; ?>"/>
                                            <span><?php echo $v[name]; ?></span>
                                        </a>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm" onClick="submitMoreFilter('brand',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                            <?php if(count($filter_brand) > 10): ?>
                                <a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>
                            <?php endif; ?>
                        </div>
                    </dd>
                </dl>
            <?php endif; ?>
            <!-- 品牌筛选 end -->
            <!-- 规格筛选 start -->
            <?php if(is_array($filter_spec) || $filter_spec instanceof \think\Collection): if( count($filter_spec)==0 ) : echo "" ;else: foreach($filter_spec as $k=>$v): if(!empty($v['name'])): ?>
                    <dl class="brand-section m-tr">
                        <dt><?php echo $v['name']; ?></dt>
                        <dd class="ri-section">
                            <div class="lf-list">
                                <div class="brand-list">
                                    <div class="clearfix p">
                                        <?php if(is_array($v[item]) || $v[item] instanceof \think\Collection): if( count($v[item])==0 ) : echo "" ;else: foreach($v[item] as $k2=>$v2): ?>
                                            <a href="<?php echo $v2[href]; ?>" data-href="<?php echo $v2[href]; ?>" data-key='<?php echo $v2[key]; ?>' data-val='<?php echo $v2[val]; ?>'>
                                                <input class="shaix_la" type="checkbox" style="display: none"/>
                                                <span><?php echo $v2[item]; ?></span>
                                            </a>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                    <div class="surclofix p">
                                        <a href="javascript:;" class="u-confirm" onClick="submitMoreFilter('spec',this);">确定</a>
                                        <a href="javascript:;" class="u-cancel">取消</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lr-more">
                                <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                                <?php if(count($v['item']) > 11): ?>
                                    <a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>
                                <?php endif; ?>
                            </div>
                        </dd>
                    </dl>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            <!-- 规格筛选 end -->
            <!-- 属性筛选 start -->
            <?php if(is_array($filter_attr) || $filter_attr instanceof \think\Collection): if( count($filter_attr)==0 ) : echo "" ;else: foreach($filter_attr as $k=>$v): ?>
                <dl class="brand-section m-tr">
                    <dt><?php echo $v['attr_name']; ?></dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                    <?php if(is_array($v[attr_value]) || $v[attr_value] instanceof \think\Collection): if( count($v[attr_value])==0 ) : echo "" ;else: foreach($v[attr_value] as $k2=>$v2): ?>
                                        <a href="<?php echo $v2[href]; ?>" data-href="<?php echo $v2[href]; ?>" data-val='<?php echo $v2[val]; ?>' data-key='<?php echo $v2[key]; ?>'>
                                            <input class="shaix_la" type="checkbox" style="display: none"/>
                                            <span ><?php echo $v2[attr_value]; ?></span>
                                        </a>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <div class="surclofix p">
                                    <a href="javascript:;" class="u-confirm"  onClick="submitMoreFilter('attr',this);">确定</a>
                                    <a href="javascript:;" class="u-cancel">取消</a>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>
                            <?php if(count($v['attr_value']) > 11): ?>
                                <a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>
                            <?php endif; ?>
                        </div>
                    </dd>
                </dl>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- 属性筛选 end -->
            <!-- 价格筛选 start -->
            <?php if($filter_price != null): ?>
                <dl class="brand-section m-tr">
                    <dt>价格</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                    <?php if(is_array($filter_price) || $filter_price instanceof \think\Collection): if( count($filter_price)==0 ) : echo "" ;else: foreach($filter_price as $k=>$v): ?>
                                        <a href="<?php echo $v[href]; ?>">
                                            <span><?php echo $v[value]; ?></span>
                                        </a>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <!--<a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>-->
                            <!--<a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>-->
                            <!--填写筛选价格区间-s-->
                            <form action="<?php echo urldecode(U('/Home/Goods/goodsList',$filter_param,''));?>" method="post" id="price_form">
                                <input type="text" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" name="start_price" id="start_price" value=""/>
                                <span>-</span>
                                <input type="text" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"  name="end_price" id="end_price" value=""/>
                                <input type="submit" value="确定" onClick="if($('#start_price').val() !='' && $('#end_price').val() !='' ) $('#price_form').submit();"/>
                            </form>
                            <!--填写筛选价格区间-e-->
                        </div>
                    </dd>
                </dl>
            <?php endif; ?>
            <!-- 价格筛选 end -->
        </div>
        <p class="moreamore"><a >浏览更多</a></p>
    </div>
</div>
<!-- 筛选 end -->

<div class="shop-list-tour ma-to-20 p">
	<div class="w1430">
		<div class="tjhot fl">
			<div class="sx_topb"><h3>推荐热卖</h3></div>
			<div class="tjhot-shoplist" id="ajax_hot_goods">
				<script>
					/****左侧边栏热卖商品****/
					function ajax_hot_goods() {
						$.ajax({
							type: "POST",
							url: "/index.php?m=Home&c=Goods&a=ajaxHotGoods",//+tab,
							data:{filter_goods_id_str:"<?php echo $filter_goods_id_str; ?>"},
							success: function (data) {
								if(data){
									$('#ajax_hot_goods').html(data);
									lazy_ajax();
								}
							}
						});
					}
				</script>
			</div>
			<div class="sx_topb ma-to-20"><h3>销量排行</h3></div>
			<div class="tjhot-shoplist" id="ajax_sales_goods">
				<script>
					/****左侧边栏销量排行****/
					function ajax_sales_goods() {
						$.ajax({
							type: "POST",
							url: "/index.php?m=Home&c=Goods&a=ajaxSalesGoods",//+tab,
							data:{filter_goods_id_str:"<?php echo $filter_goods_id_str; ?>"},
							success: function (data) {
								if(data){
									$('#ajax_sales_goods').html(data);
									lazy_ajax();
								}
							}
						});
					}
				</script>
			</div>
		</div>
		<div class="stsho fr">
			<div class="sx_topb ba-dark-bg">
				<div class="f-sort fl">
					<ul>
						<li class="<?php if(\think\Request::instance()->param('sort') == ''): ?>red<?php endif; ?>"><a href="<?php echo urldecode(U("/Home/Goods/goodsList",$filter_param,''));?>">综合</a></li>
						<li class="<?php if(\think\Request::instance()->param('sort') == 'sales_sum'): ?>red<?php endif; ?>"><a href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'sales_sum')),''));?>">销量</a></li>
						<?php if(\think\Request::instance()->param('sort_asc') == 'desc'): ?>
							<li class="<?php if(\think\Request::instance()->param('sort') == 'shop_price'): ?>red<?php endif; ?>"><a href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'shop_price','sort_asc'=>'asc')),''));?>">价格<i class="litt-zzx1"></i></a></li>
						<?php else: ?>
							<li class="<?php if(\think\Request::instance()->param('sort') == 'shop_price'): ?>red<?php endif; ?>"><a href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'shop_price','sort_asc'=>'desc')),''));?>">价格<i class="litt-zzx1"></i></a></li>
						<?php endif; ?>
						<li class="<?php if(\think\Request::instance()->param('sort') == 'comment_count'): ?>red<?php endif; ?>"><a href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'comment_count')),''));?>">评论</a></li>
						<li class="<?php if(\think\Request::instance()->param('sort') == 'is_new'): ?>red<?php endif; ?>"><a href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('sort'=>'is_new')),''));?>">新品</a></li>
					</ul>
				</div>
				<div class="f-address fl">
					<div class="shd_address">
						<div class="shd">收货地：</div>
						<div class="add_cj_p"><input type="text" id="city" /></div>
                        </ul>
					</div>
				</div>
				<div class="f-total fr">
					<?php $nowPage = $page->nowPage;$totalPages = $page->totalPages; ?>
					<div class="all-sec">共<span><?php echo $page->totalRows; ?></span>个商品<?php echo $var; ?></div>
					<div class="all-fy">
						<a <?php if($nowPage > 1): ?>href="<?php echo U('Home/Goods/goodsList',array_merge($filter_param,array('p'=>$nowPage-1))); ?>" <?php endif; ?>>&lt;</a>
							<p class="fy-y"><span class="z-cur"><?php echo $nowPage; ?></span>/<span><?php echo $totalPages; ?></span></p>
						<a <?php if(($nowPage+1) < $totalPages): ?>href="<?php echo U('Home/Goods/goodsList',array_merge($filter_param,array('p'=>$nowPage+1))); ?>" <?php endif; ?>>&gt;</a>
					</div>
				</div>
			</div>
			<div class="sx_topb">
				<div class="choice-mo-shop">
					<ul>
						<li>
							<?php if(\think\Request::instance()->param('own_shop') == '1'): ?>
								<a class="red" href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('own_shop'=>'0')),''));?>">
									<i class="litt-zzdg1 litt-zzdg2">
							<?php else: ?>
								<a href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('own_shop'=>'1')),''));?>">
									<i class="litt-zzdg1">
							<?php endif; ?>
									</i><?php echo $tpshop_config['shop_info_store_name']; ?>自营
								</a>
						</li>
						<li>
							<?php if(\think\Request::instance()->param('recommend') == '1'): ?>
								<a class="red" href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('recommend'=>'0')),''));?>">
									<i class="litt-zzdg1 litt-zzdg2">
							<?php else: ?>
								<a href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('recommend'=>'1')),''));?>">
									<i class="litt-zzdg1">
							<?php endif; ?>
								</i>推荐好货
							</a>
						</li>
						<li>
							<?php if(\think\Request::instance()->param('promotion') == '1'): ?>
								<a class="red" href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('promotion'=>'0')),''));?>">
									<i class="litt-zzdg1 litt-zzdg2">
							<?php else: ?>
								<a href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('promotion'=>'1')),''));?>">
									<i class="litt-zzdg1">
							<?php endif; ?>
								</i>优惠促销
							</a>
						</li>
						<li>
							<?php if(\think\Request::instance()->param('stock') == '1'): ?>
								<a class="red" href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('stock'=>'0')),''));?>">
									<i class="litt-zzdg1 litt-zzdg2">
							<?php else: ?>
								<a href="<?php echo urldecode(U("/Home/Goods/goodsList",array_merge($filter_param,array('stock'=>'1')),''));?>">
									<i class="litt-zzdg1">
							<?php endif; ?>
								</i>仅显示有货
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="shop-list-splb p">
				<ul>
                    <?php if(empty($goods_list) || ($goods_list instanceof \think\Collection && $goods_list->isEmpty())): ?>
                        <p class="ncyekjl" style="font-size: 16px;margin:100px auto;text-align: center;">-- 抱歉没找到您要搜索的商品，换个条件试试！--</p>
                    <?php else: if(is_array($goods_list) || $goods_list instanceof \think\Collection): if( count($goods_list)==0 ) : echo "" ;else: foreach($goods_list as $k=>$v): ?>
						<li>
							<div class="s_xsall">
								<div class="xs_img">
									<a href="<?php echo U('/Home/Goods/goodsInfo',array('id'=>$v[goods_id])); ?>">
										<img class="lazy-list" data-original="<?php echo goods_thum_images($v['goods_id'],236,236); ?>"/>
									</a>
								</div>
								<div class="xs_slide">
									<div class="small-xs-shop">
										<ul>
											<?php if(is_array($goods_images) || $goods_images instanceof \think\Collection): if( count($goods_images)==0 ) : echo "" ;else: foreach($goods_images as $k2=>$v2): if($v2[goods_id] == $v[goods_id]): ?>
													<li>
														<a href="javascript:void(0);">
															<img class="lazy-list" data-original="<?php echo $v2[image_url]; ?>"/>
														</a>
													</li>
												<?php endif; endforeach; endif; else: echo "" ;endif; ?>
										</ul>
									</div>
								</div>
								<div class="price-tag">
									<span class="now"><em class="li_xfo">￥</em><em><?php echo $v[shop_price]; ?></em></span>
									<span class="old"><em>￥</em><em><?php echo $v[market_price]; ?></em></span>
								</div>
								<div class="shop_name2">
									<a href="<?php echo U('/Home/Goods/goodsInfo',array('id'=>$v[goods_id])); ?>">
										<?php echo $v[goods_name]; ?>
									</a>
								</div>
								<div class="shop_name2">
									<a class="co_hchh" href="<?php echo U('/Home/Store/index',array('id'=>$v[store_id])); ?>">
										<?php echo $v[store_name]; ?>
									</a>
								</div>
								<div class="J_btn_statu">
									<div class="p-num">
										<input class="J_input_val" id="number_<?php echo $v['goods_id']; ?>" type="text" value="1">
										<p class="act">
											<a href="javascript:void(0);" onClick="goods_add(<?php echo $v['goods_id']; ?>);" class="litt-zzyl1"></a>
											<a href="javascript:void(0);" onClick="goods_cut(<?php echo $v['goods_id']; ?>);"  class="litt-zzyl2"></a>
										</p>
									</div>
									<div class="p-btn">
										<a href="javascript:void(0);" onclick="AjaxAddCart(<?php echo $v[goods_id]; ?>,$('#number_'+<?php echo $v['goods_id']; ?>).val(),0);">加入购物车</a>
									</div>
								</div>
							</div>
						</li>
					<?php endforeach; endif; else: echo "" ;endif; endif; ?>
				</ul>
			</div>
			<div class="page p">
				<!--<div class="fr">-->
					<!--<div class="p-num">-->
						<!--<a class="pn-prev disabled" href="">-->
							<!--<i><</i>-->
							<!--<em>上一页</em>-->
						<!--</a>-->
						<!--<a class="red" href="">1</a>-->
						<!--<a href="">2</a>-->
						<!--<a href="">3</a>-->
						<!--<a href="">4</a>-->
						<!--<a href="">5</a>-->
						<!--<b>...</b>-->
						<!--<a class="pn-next disabled"  href="">-->
							<!--<em>下一页</em>-->
							<!--<i>></i>-->
						<!--</a>-->
					<!--</div>-->
					<!--<div class="p-skip">-->
						<!--<em>共<b>100</b>页&nbsp;&nbsp;到第</em>-->
						<!--<input class="input-txt" type="text" value="1">-->
						<!--<em>页</em>-->
						<!--<a class="btn btn-default" href="javascript:void(0);">确定</a>-->
					<!--</div>-->
				<!--</div>-->
				<?php echo $page->show(); ?>
			</div>
		</div>
	</div>
</div>
<!--猜你喜欢-s-->
<div class="underheader-floor p specilike">
	<div class="w1430">
		<div class="layout-title">
			<span class="fl">猜你喜欢</span>
					<span class="update_h fr" onclick="favourite();">
						<i class="litt-hyh"></i>
						换一换
					</span>
		</div>
		<ul class="ul-li-column p" id="favourite_goods">
		</ul>
	</div>
</div>
<!--猜你喜欢-e-->
<script>
	/****猜你喜欢****/
	var favorite_page = 0;
	function favourite()
	{
		favorite_page++;
		$.ajax({
			type: "GET",
			url: "/index.php?m=Home&c=Index&a=ajax_favorite&i=7&p="+favorite_page,//+tab,
			success: function (data) {
				if(data == ''){
					favorite_page = 0;
					favourite();
				}else{
					$('#favourite_goods').html(data);
					lazy_ajax();
				}

			}
		});
	}
</script>
<!--footer-s-->
<div class="footer p">
	<div class="mod_service_inner">
		<div class="w1430">
			<ul>
				<li>
					<div class="mod_service_unit">
						<h5 class="mod_service_duo">多</h5>
						<p>品类齐全，轻松购物</p>
					</div>
				</li>
				<li>
					<div class="mod_service_unit">
						<h5 class="mod_service_kuai">快</h5>
						<p>多仓直发，极速配送</p>
					</div>
				</li>
				<li>
					<div class="mod_service_unit">
						<h5 class="mod_service_hao">好</h5>
						<p>正品行货，精致服务</p>
					</div>
				</li>
				<li>
					<div class="mod_service_unit">
						<h5 class="mod_service_sheng">省</h5>
						<p>天天低价，畅选无忧</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="w1430">
		<div class="footer-ewmcode">
    <div class="foot-list-fl">
        <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id = 2"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
            <ul>
                <li class="foot-th">
                    <?php echo $v[cat_name]; ?>
                </li>
                <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v2,31104000);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
                    <li>
                        <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </div>
    <!--<div class="QRcode-fr" style="display:none;">
        <ul>
            <li class="foot-th">客户端</li>
            <li><img src="__STATIC__/images/qrcode.png"/></li>
        </ul>
        <ul>
            <li class="foot-th">微信</li>
            <li><img src="__STATIC__/images/qrcode.png"/></li>
        </ul>
    </div>-->
</div>
<div class="mod_copyright p">
    <div class="grid-top">
        <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = 5 and is_open=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
            <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v[article_id])); ?>"><?php echo $v[title]; ?></a>
            <span>|</span>
        <?php endforeach; ?>
        <a href="javascript:void (0);">客服热线:<?php echo $tpshop_config['shop_info_phone']; ?></a>
    </div>
    <p>Copyright © 2016-2025  版权所有 保留一切权利 备案号:粤00-123456号</p>

    <p class="mod_copyright_auth">
        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
        <a class="mod_copyright_auth_ico mod_copyright_auth_ico_6" href="" target="_blank">网络举报APP下载</a>
    </p>
</div>
	</div>
	<div class="soubao-sidebar">
    <div class="soubao-sidebar-bg"></div>
    <div class="sidertabs tab-lis-1">
        <div class="sider-top-stra sider-midd-1">
            <div class="icon-tabe-chan">
                <a href="<?php echo U('Home/User/index'); ?>">
                    <i class="share-side share-side1"></i>
                    <i class="share-side tab-icon-tip triangleshow"></i>
                </a>
                <div class="dl_login">
                    <div class="hinihdk">
                        <img src="__STATIC__/images/dl.png"/>
                        <p class="loginafter nologin"><span>你好，请先</span><a href="<?php echo U('Home/user/login'); ?>">登录</a>！</p>
                        <!--未登录-e--->
                        <!--登录后-s--->
                        <p class="loginafter islogin"><span class="id_jq userinfo">陈xxxxxxx</span><span>点击</span><a href="<?php echo U('Home/user/logout'); ?>">退出</a>！</p>
                        <!--未登录-s--->
                    </div>
                </div>
            </div>
            <div class="icon-tabe-chan shop-car">
                <a href="javascript:void(0);" onclick="ajax_side_cart_list()">
                    <div class="tab-cart-tip-warp-box">
                        <div class="tab-cart-tip-warp">
                            <i class="share-side share-side1"></i>
                            <i class="share-side tab-icon-tip"></i>
                            <span class="tab-cart-tip">购物车</span>
                            <span class="tab-cart-num J_cart_total_num" id="tab_cart_num">0</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="icon-tabe-chan massage">
                <a href="<?php echo U('Home/User/message_notice'); ?>" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">消息</span>
                </a>
            </div>
        </div>
        <div class="sider-top-stra sider-midd-2">
            <div class="icon-tabe-chan mmm">
                <a href="<?php echo U('Home/User/goods_collect'); ?>" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">收藏</span>
                </a>
            </div>
            <div class="icon-tabe-chan hostry">
                <a href="<?php echo U('Home/User/visit_log'); ?>" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">足迹</span>
                </a>
            </div>
            <div class="icon-tabe-chan sign">
                <a href="" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">签到</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidertabs tab-lis-2">
        <div class="icon-tabe-chan advice">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">在线咨询</span>
            </a>
        </div>
        <div class="icon-tabe-chan request">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">意见反馈</span>
            </a>
        </div>
        <div class="icon-tabe-chan qrcode">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <i class="share-side tab-icon-tip triangleshow"></i>
				<span class="tab-tip qrewm">
					<img src="__STATIC__/images/qrcode.png"/>
					扫一扫下载APP
				</span>
            </a>
        </div>
        <div class="icon-tabe-chan comebacktop">
            <a href="" target="_blank">
                <i class="share-side share-side1"></i>
                <!--<i class="share-side tab-icon-tip"></i>-->
                <span class="tab-tip">返回顶部</span>
            </a>
        </div>
    </div>
    <div class="shop-car-sider">

    </div>
</div>
<script src="__STATIC__/js/common.js"></script>
</div>
<!--footer-e-->
<script src="__STATIC__/js/lazyload.min.js" type="text/javascript" charset="utf-8"></script>
<script src="__STATIC__/js/popt.js" type="text/javascript" charset="utf-8"></script>
<script src="__STATIC__/js/headerfooter.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

    //        更多
    $('.gd_more').parent().click(function(){
        var jed = $(this).parents('.lr-more').siblings();
        jed.toggleClass('ov-inh').find('.brand-box').toggleClass('ov-inh');
        if(jed.toggleClass('ov-inh').find('.brand-list')){
            jed.toggleClass('ov-inh').find('.brand-list').toggleClass('ov-inh');
        }
        if(jed.hasClass('ov-inh')){
            $(this).find('.gd_more').html('收起');
        }else{
            $(this).find('.gd_more').html('更多');
        }
    })
    var cancelBtn = null;
    /***多选 start*****/
    $('.dx_choice').parent().click(function(){
        var _this = this;
        var st = 0;
        var jed = $(_this).parents('.ri-section'); //当前选项层DIV

        //关闭前一个多选框
        if(cancelBtn != null){
            $(cancelBtn).parent().siblings('.clearfix').find('a').each(function(i,o){
                $(o).removeClass('addhover-js').find('.litt-zd').hide(); //针对品牌筛选的红色边框和右下角对勾隐藏
                $(o).removeClass('red_hov_cli')    //针对纯文字型选项，隐藏筛选的选中状态
                        .attr('href',$(o).data('href'))  //还原连接
                        .children('input').prop('checked',false).hide(); //隐藏多选框
                $(o).unbind('click');
            });
            $(cancelBtn).parents('.lf-list').siblings('.lr-more').show(); //显示其它多选按钮
            $(cancelBtn).parents('.ri-section').removeClass('sum_ov_inh'); //移除多选样式

        }
        cancelBtn = jed.find('.u-cancel'); //前一个取消按钮

        //打开多选
        jed.addClass('sum_ov_inh'); //添加这一行的样式
        //遍历a标签
        jed.find('.clearfix>a').each(function(i,o){
            $(o).attr('href','javascript:;'); //移除连接
            $(o).children('input').show();  //显示多选框
            $(o).bind('click',function(){
                if($(o).hasClass('red_hov_cli')){
                    //取消选中
                    $(o).find('i').toggle()
                    $(o).removeClass('addhover-js'); //针对品牌选项，改变筛选的选中状态
                    $(o).removeClass('red_hov_cli')
                    $(o).children('input').prop("checked",false);
                    $(o).parent().siblings('.surclofix').children('.u-confirm').removeClass('u-confirm01');
                    st--;
                }else{
                    $(o).addClass('red_hov_cli')
                    $(o).children('input').prop("checked",true);
                    $(o).find('i').toggle()
                    $(o).addClass('addhover-js');
                    $(o).parent().siblings('.surclofix').children('.u-confirm').addClass('u-confirm01');
                    st++;
                }
                //如果没有选中项,确定按钮点不了
                if(st==0){
                    jed.find('.u-confirm').disabled=true;
                }
            });
        });
        //隐藏当前多选按钮
        $(_this).parent().hide();
    });

    /***多选 end*****/
        //############   取消多选        ###########
    $('.surclofix .u-cancel').each(function(){
        $(this).click(function(){
            var jed = $(this).parents('.ri-section');
            //遍历a标签
            jed.find('.clearfix>a').each(function(i,o){
                $(o).removeClass('addhover-js').find('.litt-zd').hide(); //针对品牌筛选的红色边框和右下角对勾隐藏
                $(o).removeClass('red_hov_cli')    //针对纯文字型选项，隐藏筛选的选中状态
                        .attr('href',$(o).data('href'))  //还原连接
                        .children('input').prop('checked',false).hide(); //隐藏多选框
                $(o).unbind('click');
            });
            jed.find('.lr-more').show(); //显示多选按钮
            jed.removeClass('sum_ov_inh') //移除这一行的样式
            $('.u-confirm').removeClass('u-confirm01'); //移除确定按钮可点击标识
        });
    })

    $(function() {
        favourite();
        //左侧边栏JS
		ajax_hot_goods();
		ajax_sales_goods();
        //############   更多类别属性筛选  start     ###########
        $('.moreamore').click(function(){
            $('.m-tr').each(function(i,o){
                if(i >  7){
                    var attrdisplay = $(o).css('display');
                    if(attrdisplay == 'none'){
                        $(o).css('display','block');
                    }
                    if(attrdisplay == 'block'){
                        $(o).css('display','none');
                    }
                }
            });
            if($(this).hasClass('checked')){
                $(this).removeClass('checked').html('<a class="red">收起</a>');
            }else{
                $(this).addClass('checked').html('<a >更多选项</a>');
            }
        })
        $('.moreamore').trigger('click').html('<a >更多选项</a>'); //  默认点击一下
        //############   更多类别属性筛选   end    ###########

        /***价格排序 start*****/
        var price_i = 0;
        $('.f-sort ul li').click(function(){
            $(this).addClass('red').siblings().removeClass('red').find('i').removeClass('litt-zzx2').removeClass('litt-zzx3').addClass('litt-zzx1');
            var jd = $(this).find('i');
            price_i++;
            if(price_i>2)price_i=1;
            switch(price_i){
                case 1:jd.addClass('litt-zzx2').removeClass('litt-zzx1').removeClass('litt-zzx3');break;
                case 2:jd.addClass('litt-zzx3').removeClass('litt-zzx2').removeClass('litt-zzx1');break;
            }
        })
        /***价格排序 end*******/
        /***地址选择 start*****/
        $("#city").click(function (e) {
            SelCity(this,e);
        });
        /***地址选择 end*****/
        /***是否自营 start****/
        $('.choice-mo-shop ul li').click(function(){
            $(this).find('.litt-zzdg1').toggleClass('litt-zzdg2');
            $(this).find('a').toggleClass('red');
        })
        /***是否自营 end****/
        /***滑过浏览商品 start***/
        $('.small-xs-shop ul li').hover(function(){
            $(this).addClass('bored').siblings().removeClass('bored');
            var small_src = $(this).find('img').attr('src');
            $(this).parents('.s_xsall').find('.xs_img').find('img').attr('src',small_src);
        },function(){

        })
        /***滑过浏览商品 end***/
    })

    /****加减购物车数额***/
    function goods_cut($val){
        var num_val=document.getElementById('number_'+$val);
        var new_num=num_val.value;
        var Num = parseInt(new_num);
        if(Num>1)Num=Num-1;
        num_val.value=Num;
    }

    function goods_add($val){
        var num_val=document.getElementById('number_'+$val);
        var new_num=num_val.value;
        var Num = parseInt(new_num);
        Num=Num+1;
        num_val.value=Num;
    }
    /****加减购物车数额***/

        //############   点击多选确定按钮      ############
// t 为类型  是品牌 还是 规格 还是 属性
// btn 是点击的确定按钮用于找位置
    get_parment = <?php echo json_encode($_GET); ?>;
    function submitMoreFilter(t,btn)
    {
        // 没有被勾选的时候
        if(!$(btn).hasClass("u-confirm01")){
            return false;
        }

        // 获取现有的get参数
        var key = ''; // 请求的 参数名称
        var val = new Array(); // 请求的参数值
        $(btn).parent().siblings(".clearfix").find(".red_hov_cli").each(function(i,o){
            key = $(o).data('key');
            val.push($(o).data('val'));
        });
        //parment = key+'_'+val.join('_');
//        return false;
        // 品牌
        if(t == 'brand')
        {
            get_parment.brand_id = val.join('_');
        }
        // 规格
        if(t == 'spec')
        {
            if(get_parment.hasOwnProperty('spec'))
            {
                get_parment.spec += '@'+key+'_'+val.join('_');
            }
            else
            {
                get_parment.spec = key+'_'+val.join('_');
            }
        }
        // 属性
        if(t == 'attr')
        {
            if(get_parment.hasOwnProperty('attr'))
            {
                get_parment.attr += '@'+key+'_'+val.join('_');
            }
            else
            {
                get_parment.attr = key+'_'+val.join('_');
            }
        }
        // 组装请求的url
        var url = '';
        for ( var k in get_parment )
        {
            url += "&"+k+'='+get_parment[k];
        }
//        console.log('get_parment',get_parment);
        location.href ="/index.php?m=Home&c=Goods&a=goodsList"+url;
    }
</script>
</body>
</html>