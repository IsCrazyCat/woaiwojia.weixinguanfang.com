<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"./template/pc/rainbow/goods\ajaxComment.html";i:1491382656;}*/ ?>
<?php if(is_array($commentlist) || $commentlist instanceof \think\Collection): $i = 0; $__LIST__ = $commentlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
<div class="people-comment">
    <div class="deta-descri p">
        <div class="person-ph-name">
            <div class="per-img-n p">
                <div class="img-aroun"><img src="<?php echo (isset($v['head_pic']) && ($v['head_pic'] !== '')?$v['head_pic']:'__STATIC__/images/defaultface_user_small.png'); ?>"/></div>
                <div class="menb-name">
                    <?php if($v['is_anonymous'] == 0): ?>
                    匿名用户
                    <?php else: ?>
                    <?php echo $v['nickname']; endif; ?>
                </div>
            </div>
            <!--<p class="member">金牌会员</p>-->
        </div>
        <div class="person-com">
            <div class="lifr4 p">
                <div class="dstar start5">
                    <i class="start start<?php echo floor($v['goods_rank']); ?>"></i>
                </div>
                <div class="star-aftr">
                    <?php $impression_arr= explode(',',$v['impression']);
                        if(empty($v['impression'])){
                        echo "<a>服务好</a><a>物美价廉</a>";
                        }else{
                            foreach($impression_arr as $key)
                            {
                            echo "<a>".$key."</a>";
                            }
                        }
                     ?>
                    <!--<a href="javascript:void(0);">非常漂亮</a>-->
                </div>
            </div>
            <div class="lifr4 comfis p">
                <span class="faisf"><?php echo htmlspecialchars_decode($v['content']); ?></span>
            </div>
            <div class="lifr4 requiimg p">
                <?php if(is_array($v['img']) || $v['img'] instanceof \think\Collection): if( count($v['img'])==0 ) : echo "" ;else: foreach($v['img'] as $key=>$v2): ?>
                <a href="<?php echo $v2; ?>" target="_blank"><img src="<?php echo $v2; ?>"/></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="lifr4 bolist p">
                <span><?php echo date("Y-m-d H:i:s",$v['pay_time']); ?></span>
                <span><?php echo htmlspecialchars_decode($v['spec_key_name']); ?></span>
                <span>购买<?php echo round(($v['add_time']-$v['pay_time'])/3600/24); ?>天后评价</span>
                <!--<span>来自Android客户端</span>-->
            </div>
        </div>
        <div class="g_come">
            <a href="javascript:void(0);"><i class="detai-ico c-cen"></i><?php echo $v['reply_num']; ?></a>
            <a href="javascript:void(0);" onclick="zan(this);"  data-comment-id="<?php echo $v['comment_id']; ?>"><i class="detai-ico z-ten"></i><span id="span_zan_<?php echo $v['comment_id']; ?>" data-io="<?php echo $v['zan_num']; ?>"><?php echo $v['zan_num']; ?></span></a>
        </div>
    </div>
    <div class="reply-textarea">
        <div class="reply-arrow"><b class="layer1"></b><b class="layer2"></b></div>
        <div class="inner">
            <textarea class="reply-input J-reply-input" data-id="replytext_<?php echo $v['comment_id']; ?>" placeholder="回复 <?php echo $v['nick_name']; ?>：" maxlength="120"></textarea>
            <div class="operate-box">
                <span class="txt-countdown">还可以输入<em>120</em>字</span>
                <a class="reply-submit J-submit-reply J-submit-reply-lz" href="javascript:void(0);" target="_self">提交</a>
            </div>
        </div>
    </div>
    <!-- 商家回复-s -->
    <?php if(is_array($v['seller_comment']) || $v['seller_comment'] instanceof \think\Collection): $k = 0; $__LIST__ = $v['seller_comment'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sc): $mod = ($k % 2 );++$k;?>
    <div class="comment-replylist">
        <div class="comment-reply-item hide" style="display: block;">
            <div class="reply-infor clearfix">
                <div class="main">
                            <span class="user-name" style="color: red;">商家回复
                            </span> ：
                    <span class="words"><?php echo $sc['content']; ?></span>
                </div>
                <div class="side">
                    <span class="date"><?php echo date('Y-m-d H:i:s',$sc['add_time']); ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <!-- 商家回复-d -->
    <!--用户回复评论-s-->
    <div class="comment-replylist">
        <?php if(is_array($v['parent_id']) || $v['parent_id'] instanceof \think\Collection): $k = 0; $__LIST__ = $v['parent_id'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$reply_list): $mod = ($k % 2 );++$k;if($k < 6): ?>
        <div class="comment-reply-item hide" data-vender="0" data-name="<?php echo $reply_list['user_name']; ?>" data-uid="" style="display: block;">
            <div class="reply-infor clearfix">
                <div class="main">
                  <span class="user-name"><?php echo $reply_list['user_name']; if(strtoupper($reply_list['to_name']) != ''): ?>&nbsp;<font style="color: #1a2226">回复</font>&nbsp;<?php echo $reply_list['to_name']; endif; ?>
                  </span> ：
                    <span class="words"><?php echo $reply_list['content']; ?></span>
                </div>
                <div class="side">
                    <span class="date"><?php echo date('Y-m-d H:i:s',$reply_list['reply_time']); ?></span>
                </div>
            </div>
            <div class="comment-operate">
                <a class="reply J-reply-trigger" href="#none" target="_self">回复</a>
                <div class="reply-textarea">
                    <div class="reply-arrow"><b class="layer1"></b><b class="layer2"></b></div>
                    <div class="inner">
                        <textarea class="reply-input J-reply-input" data-id="replytext_<?php echo $v['comment_id']; ?>" placeholder="回复<?php echo $reply_list['user_name']; ?>：" maxlength="120"></textarea>
                        <div class="operate-box">
                            <span class="txt-countdown">还可以输入<em>120</em>字</span>
                            <a class="reply-submit J-submit-reply J-submit-reply-lz" href="javascript:void(0);" data-id="<?php echo $reply_list['reply_id']; ?>" onclick="" target="_self">提交</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php endif; endforeach; endif; else: echo "" ;endif; if($v['reply_num'] > 5): ?>
        <div class="view-all-reply show">
            <a href="<?php echo U('Home/Goods/reply',array('comment_id'=>$v['comment_id'])); ?>" class="view-link reply">查看全部回复</a>
        </div>
        <?php endif; ?>
    </div>
    <!--用户回复评论-e-->
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
<div class="operating fixed" id="bottom">
    <div class="fn_page clearfix">
        <?php echo $page; ?>
    </div>
</div>
<script>
    // 点击分页触发的事件
    $("#ajax_comment_return .pagination  a").click(function(){
        ajaxComment(commentType,$(this).data('p'));
    });
    /**
     * 点赞ajax
     * dyr
     * @param obj
     */
    function zan(obj) {
        var comment_id = $(obj).attr('data-comment-id');
        var zan_num = parseInt($("#span_zan_" + comment_id).text());
        $.ajax({
            type: "POST",
            data: {comment_id: comment_id},
            dataType: 'json',
            url: "/index.php?m=Home&c=Order&a=ajaxZan",//
            success: function (res) {
                if (res.success) {
                    $("#span_zan_" + comment_id).text(zan_num + 1);
                } else {
                    layer.msg('只能点赞一次哟~', {icon: 2});
                }
            },
            error : function(res) {
                if( res.status == "200"){ // 兼容调试时301/302重定向导致触发error的问题
                    layer.msg("请先登录!", {icon: 2});
                    return;
                }
                layer.msg("请求失败!", {icon: 2});
                return;
            }
        });
    }
    //字数限制
    $(function() {
        $('.c-cen').click(function() {
            $(this).parents('.deta-descri').siblings('.reply-textarea').toggle();
        })
        $('.J-reply-trigger').click(function(){
            $(this).siblings('.reply-textarea').toggle();
        })
        $('.reply-input').keyup(function() {
            var nums = 120;
            var len = $(this).val().length;
            if(len > nums) {
                $(this).val($(this).val().substring(0, nums));
                layer.msg("超过字数限制！" , {icon: 2});
            }
            var num = nums - len;
            var su = $(this).siblings().find('.txt-countdown em');
            su.text(num);
        })

        $(document).on('click','.operate-box .reply-submit',function() {
            var content = $(this).parents('.inner').find('.reply-input').val();
            var comment_id = $(this).parents('.inner').find('.reply-input').attr('data-id').substr(10);
            var comment_name = $(this).parents('.comment-operate').siblings('.reply-infor').find('.main .user-name').text();
            var reply_id = $(this).attr('data-id');
            submit_reply(comment_id,content,comment_name,reply_id);
            $(this).parents('.reply-textarea').hide();
        });
    })

    /**
     * 回复
     * @param comment_id
     * @param content
     * @param to_name
     * @param reply_id
     */
    function submit_reply(comment_id,content,to_name,reply_id)
    {
        if(getCookie('user_id') == ''){
            pop_login();
        }else {
            $.ajax({
                type: 'post',
                dataType: 'json',
                data: {comment_id: comment_id, content: content, to_name: to_name, reply_id: reply_id, goods_id: '<?php echo $goods_id; ?>'},
                url: "<?php echo U('Home/Order/reply_add'); ?>",
                success: function (res) {
                    if (res.success) {
                        layer.msg('回复已提交', {icon: 1});
                    } else {
                        layer.msg(res.msg, {icon: 2});
                    }
                },
                error: function (res) {
                    if (res.status == "200") { // 兼容调试时301/302重定向导致触发error的问题
                        layer.msg("请先登录!", {icon: 2});
                        return;
                    }
                    layer.msg("请求失败!", {icon: 2});
                }
            });
        }
    }
</script>