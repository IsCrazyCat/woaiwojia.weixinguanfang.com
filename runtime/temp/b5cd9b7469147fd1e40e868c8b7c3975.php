<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"./template/pc/rainbow/goods\ajaxSalesGoods.html";i:1491382656;}*/ ?>
<?php if(is_array($goods) || $goods instanceof \think\Collection): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	<div class="alone-shop">
		<a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$vo['goods_id'])); ?>"><img class="lazy" data-original="<?php echo goods_thum_images($vo['goods_id'],180,180); ?>" /></a>
		<p class="line-two-hidd"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$vo['goods_id'])); ?>"><?php echo $vo['goods_name']; ?></a></p>
		<p class="price-tag"><span class="li_xfo">￥</span><span><?php echo $vo['shop_price']; ?></span></p>
		<p class="store-alone"><a href="<?php echo U('Home/Store/index',array('id'=>$vo['store_id'])); ?>"><?php echo $vo['store_name']; ?></a></p>
	</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
