<?php
//000000000000s:86167:"<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>商品列表</title>
	<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css" />
	<script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/public/js/layer/layer-min.js"></script>
	<script src="/public/js/global.js"></script>
	<script src="/public/js/pc_common.js"></script>
</head>
<body>
<!--header-s-->
<div class="tpshop-tm-hander p">
    <div class="top-hander p">
        <div class="w1430 pr">
            <link rel="stylesheet" href="/template/pc/rainbow/static/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
			<div class="fl">
			    <div class="ls-dlzc fl nologin">
			        <a href="/Home/user/login.html">Hi,请登录</a>
			        <a class="red" href="/Home/user/reg.html">免费注册</a>
			    </div>
			    <div class="ls-dlzc fl islogin">
			        <a class="red userinfo" href="/Home/user/index.html"></a>
			        <a href="/Home/user/logout.html">退出</a>
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
			        <li><a target="_blank" href="/Home/Order/order_list.html">我的订单</a></li>
			        <li class="spacer"></li>
			        <li><a target="_blank" href="/Home/User/account.html">我的银币</a></li>
			        <li class="spacer"></li>
			        <li><a target="_blank" href="/Home/User/coupon.html">我的优惠券</a></li>
			        <li class="spacer"></li>
			        <li><a target="_blank" href="/Home/User/goods_collect.html">我的收藏</a></li>
			        <!--<li class="spacer"></li>
			        <li class="hover-ba-navdh">
			            <div class="nav-dh">
			                <span>网站导航</span>
			                <i class="jt-x"></i>
			                <div class="conta-hv-nav">
			                    <ul>
			                        <li>
			                            <a href="/Home/Activity/group_list.html">团购</a>
			                        </li>
			                        <li>
			                            <a href="/Home/Activity/flash_sale_list.html">抢购</a>
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
			            <img class="wechat-top" src="/template/pc/rainbow/static/images/wechat.png" alt="">
			            <div class="sub-panel wx-box">
			              <span class="arrow-b">◆</span>
			              <span class="arrow-a">◆</span>
			              <p class="n"> 扫描二维码 <br>  关注网官方微信 </p>
			              <img src="/template/pc/rainbow/static/images/qrcode_vmall_app01.jpg">
			            </div>
			        </li>
			    </ul>
			</div>
        </div>
    </div>
    <div class="nav-middan-z p">
        <div class="header w1430">
            <div class="ecsc-logo">
			    <a href="/" class="logo"> <img src="/public/upload/logo/2019/07-10/f019db4c7c20d0ebab07b06dc1b071f6.png"></a>
			</div>
			<div class="ecsc-join">
			    			        <a href="http://woaiwojia.weixinguanfang.com/index.php/Home/Goods/goodsInfo/id/48.html" target="_blank"> <img src="/public/upload/ad/2019/07-22/527906e44c1c489ed2c14e23e3783e72.jpg" style="width: 113px;height: 57px;"></a>
			    			</div>
			<div class="ecsc-search">
			    <form id="sourch_form" name="sourch_form" method="post" action="/Home/Goods/search.html" class="ecsc-search-form">
			        <div class="ecsc-search-tabs">
			            <i class="sc-icon-right"></i>
			            <ul class="shop_search" id="shop_search">
			                <li rev="0"><span id="sp">商品</span></li>
			                <li rev="1" class="curr"><span id="dp">店铺</span></li>
			            </ul>
			        </div>
			        <input autocomplete="off" name="q" id="q" type="text" value="" placeholder="搜索关键字" class="ecsc-search-input">
			        <button type="submit" class="ecsc-search-button" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();"><i></i></button>
			    </form>
			    <div class="keyword">
			        <ul>
			            			                <li>
			                    <a href="/Home/Goods/search/q/%E6%99%BA%E8%83%BD%E5%AE%B6%E5%B1%85.html" target="_blank">智能家居</a>
			                </li>
			            			        </ul>
			    </div>
			</div>
			<div class="shopingcar-index fr">
			    <div class="u-g-cart fr fixed" id="hd-my-cart">
			        <a href="/Home/Cart/cart.html">
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
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/48.html" title="食品">食品</a></h3>
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
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/49.html" target="_blank">生鲜<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/50.html" target="_blank">特产<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/51.html" target="_blank">休闲零食<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/52.html" target="_blank">粮油调味<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/85.html" target="_blank">烟酒糖茶<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                                <a href="/Home/Goods/goodsList/id/86.html" target="_blank">白酒</a>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/87.html" target="_blank">保健品<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                                <a href="/Home/Goods/goodsList/id/88.html" target="_blank">阿胶</a>
			                                            			                                        </dd>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/14.html" title="环卫设施">环卫设施</a></h3>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/53.html" title="图书">图书</a></h3>
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
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/54.html" target="_blank">文学综合馆<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/55.html" target="_blank">童书馆<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/56.html" target="_blank">教育馆<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/57.html" target="_blank">人文社科馆<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/58.html" target="_blank">经管综合馆<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/59.html" target="_blank">励志成功馆<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/60.html" target="_blank">计算机馆<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/42.html" title="电脑">电脑</a></h3>
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
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/43.html" target="_blank">笔记本电脑<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/45.html" target="_blank">游戏外设<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/46.html" target="_blank">台式电脑<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/77.html" title="环卫设备">环卫设备</a></h3>
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
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/78.html" target="_blank">简易厕所<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                                <a href="/Home/Goods/goodsList/id/79.html" target="_blank">单厕位简易厕所</a>
			                                            			                                        </dd>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/39.html" title="服装">服装</a></h3>
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
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/40.html" target="_blank">男装<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/41.html" target="_blank">女装<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/47.html" target="_blank">童装<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/34.html" title="工具">工具</a></h3>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/32.html" title="眼镜">眼镜</a></h3>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/31.html" title="手表">手表</a></h3>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/30.html" title="珠宝">珠宝</a></h3>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/21.html" title="母婴">母婴</a></h3>
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
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/22.html" target="_blank">奶粉<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                                <a href="/Home/Goods/goodsList/id/23.html" target="_blank">婴幼奶粉</a>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/36.html" target="_blank">亲子玩具<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/7.html" title="家用电器">家用电器</a></h3>
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
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/25.html" target="_blank">坐便器<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/89.html" target="_blank">智能家居<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                                <a href="/Home/Goods/goodsList/id/90.html" target="_blank">智能锁</a>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/18.html" target="_blank">电视<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                                <a href="/Home/Goods/goodsList/id/19.html" target="_blank">液晶电视</a>
			                                            			                                                <a href="/Home/Goods/goodsList/id/20.html" target="_blank">黑白电视</a>
			                                            			                                        </dd>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/1.html" title="数码产品，手机，通讯">数码产品，手机，通讯</a></h3>
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
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/11.html" target="_blank">手机通讯<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                                <a href="/Home/Goods/goodsList/id/12.html" target="_blank">手机</a>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/2.html" target="_blank">手机配件<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                                <a href="/Home/Goods/goodsList/id/3.html" target="_blank">电池 电源 充电器</a>
			                                            			                                                <a href="/Home/Goods/goodsList/id/4.html" target="_blank">手机城</a>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/13.html" target="_blank">摄影设备<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                                <a href="/Home/Goods/goodsList/id/10.html" target="_blank">相机数码</a>
			                                            			                                                <a href="/Home/Goods/goodsList/id/17.html" target="_blank">单反</a>
			                                            			                                        </dd>
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
			                                    			                                            <li>
			                                                <a href="/Home/Goods/goodsList/brand_id/2.html" target="_blank" title="">
			                                                <img src="/public/upload/brand/2019/02-17/7cf1857623c81bf7c66767bcfb2ca04d.jpg" width="91" height="40"></a>
			                                            </li>
			                                        			                                            <li>
			                                                <a href="/Home/Goods/goodsList/brand_id/3.html" target="_blank" title="">
			                                                <img src="/public/upload/brand/2019/02-17/eb6bb366d22d1adbb85957ca42b1be5f.png" width="91" height="40"></a>
			                                            </li>
			                                        			                                            <li>
			                                                <a href="/Home/Goods/goodsList/brand_id/4.html" target="_blank" title="">
			                                                <img src="/public/upload/brand/2019/02-17/0a5db4ec1e308a13efc0c61130865f20.png" width="91" height="40"></a>
			                                            </li>
			                                        			                                            <li>
			                                                <a href="/Home/Goods/goodsList/brand_id/5.html" target="_blank" title="">
			                                                <img src="/public/upload/brand/2019/02-17/b96478bc1dcd122b06dc1618b3c891bb.jpg" width="91" height="40"></a>
			                                            </li>
			                                        			                                            <li>
			                                                <a href="/Home/Goods/goodsList/brand_id/6.html" target="_blank" title="">
			                                                <img src="/public/upload/brand/2019/07-12/214c31eb564e521c6db0b5898f855975.jpg" width="91" height="40"></a>
			                                            </li>
			                                        			                                            <li>
			                                                <a href="/Home/Goods/goodsList/brand_id/7.html" target="_blank" title="">
			                                                <img src="/public/upload/brand/2019/07-12/f3bf8b1c28a0773f3a1b2bb72ed87fed.jpg" width="91" height="40"></a>
			                                            </li>
			                                        			                                            <li>
			                                                <a href="/Home/Goods/goodsList/brand_id/8.html" target="_blank" title="">
			                                                <img src="/public/upload/brand/2019/07-12/bff7bcd4f5a21af2f840afa63d9445e4.jpg" width="91" height="40"></a>
			                                            </li>
			                                        			                                            <li>
			                                                <a href="/Home/Goods/goodsList/brand_id/9.html" target="_blank" title="">
			                                                <img src="/public/upload/brand/2019/07-12/0f96f575cec6b811536d0a6dd1ac79ed.png" width="91" height="40"></a>
			                                            </li>
			                                        			                                            <li>
			                                                <a href="/Home/Goods/goodsList/brand_id/10.html" target="_blank" title="">
			                                                <img src="/public/upload/brand/2019/07-12/26fb30edc96124b155200389d5c18bd5.jpg" width="91" height="40"></a>
			                                            </li>
			                                        			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			                <div class="item fore1">
			                    <div class="item-left">
			                        <div class="cata-nav-name">
			                            <h3><a href="/Home/Goods/goodsList/id/27.html" title="美妆">美妆</a></h3>
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
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/33.html" target="_blank">口红<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/35.html" target="_blank">牙膏<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/37.html" target="_blank">洗护<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
			                                    			                                        <dt><a href="/Home/Goods/goodsList/id/38.html" target="_blank">保健品<i>&gt;</i></a></dt>
			                                        <dd>
			                                            			                                        </dd>
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
			                                    			                                </ul>
			                            </div>
			                            <div class="item-promotions">
			                                			                            </div>
			                        </div>
			                    </div>
			                </div>
			            			        </div>
			    </div>
			<!--全部商品分类-e-->
			</div>
			<div class="navitems" id="nav">
			    <ul>
			    	<li><a  href="/">首页</a></li>
			        			            <li><a href="/index.php?m=Home&c=Activity&a=promoteList"  >限时抢购</a></li>
			        			            <li><a href="/index.php?m=Home&c=activity&a=promoteList"  >促销活动</a></li>
			        			            <li><a href="/index.php?m=Home&c=Activity&a=group_list"  >团购精品</a></li>
			        			            <li><a href="/index.php/Home/Goods/goodsList/id/1.html"  >手机 、 数码 、 通信</a></li>
			        			    </ul>
			    <div class="wrap-line" style="width: 72px; left: 20px;">
			        <span style="left:15px;"></span>
			    </div>
			</div>
        </div>
    </div>
</div>
<!--------收货地址，物流运费-开始-------------->
<script src="/template/pc/rainbow/static/js/location.js"></script>
<!--------收货地址，物流运费--结束-------------->
<div class="search-box p">
	<div class="w1430">
		<div class="search-path fl">
			<a href="/Home/Goods/goodsList/id/79.html">全部结果</a>
			<i class="litt-xyb"></i>
							<a href="/Home/Goods/goodsList/id/78.html">环卫设备</a>
						<i class="litt-xyb"></i>
			<!--如果当前分类是三级分类 则二级也要显示-->
							<div class="havedox">
					<div class="disenk"><span>简易厕所</span><i class="litt-xxd"></i></div>
					<div class="hovshz">
						<ul>
																<li><a href="/Home/Goods/goodsList/id/78.html">简易厕所</a></li>
														</ul>
					</div>
				</div>
				<i class="litt-xyb"></i>
						<!--如果当前分类是三级分类 则二级也要显示-->
						<!--当前分类-->
					</div>
				<div class="search-clear fr">
			<span><a href="/Home/Goods/goodsList/id/79.html">清空筛选条件</a></span>
		</div>
	</div>
</div>
<!-- 筛选 start -->
<div class="search-opt troblect">
    <div class="w1430">
        <div class="opt-list">
            <!-- 品牌筛选 start -->
                        <!-- 品牌筛选 end -->
            <!-- 规格筛选 start -->
                        <!-- 规格筛选 end -->
            <!-- 属性筛选 start -->
                        <!-- 属性筛选 end -->
            <!-- 价格筛选 start -->
                            <dl class="brand-section m-tr">
                    <dt>价格</dt>
                    <dd class="ri-section">
                        <div class="lf-list">
                            <div class="brand-list">
                                <div class="clearfix p">
                                                                            <a href="/home/Goods/goodsList/id/79/price/0-376">
                                            <span>376元以下</span>
                                        </a>
                                                                    </div>
                            </div>
                        </div>
                        <div class="lr-more">
                            <!--<a href="javascript:void(0)"><span class="dx_choice">多选</span><i class="litt-pluscr"></i></a>-->
                            <!--<a href="javascript:void(0)"><span class="gd_more">更多</span><i class="litt-tcr"></i></a>-->
                            <!--填写筛选价格区间-s-->
                            <form action="/Home/Goods/goodsList/id/79" method="post" id="price_form">
                                <input type="text" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" name="start_price" id="start_price" value=""/>
                                <span>-</span>
                                <input type="text" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"  name="end_price" id="end_price" value=""/>
                                <input type="submit" value="确定" onClick="if($('#start_price').val() !='' && $('#end_price').val() !='' ) $('#price_form').submit();"/>
                            </form>
                            <!--填写筛选价格区间-e-->
                        </div>
                    </dd>
                </dl>
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
							data:{filter_goods_id_str:"52,70"},
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
							data:{filter_goods_id_str:"52,70"},
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
						<li class="red"><a href="/Home/Goods/goodsList/id/79">综合</a></li>
						<li class=""><a href="/Home/Goods/goodsList/id/79/sort/sales_sum">销量</a></li>
													<li class=""><a href="/Home/Goods/goodsList/id/79/sort/shop_price/sort_asc/desc">价格<i class="litt-zzx1"></i></a></li>
												<li class=""><a href="/Home/Goods/goodsList/id/79/sort/comment_count">评论</a></li>
						<li class=""><a href="/Home/Goods/goodsList/id/79/sort/is_new">新品</a></li>
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
										<div class="all-sec">共<span>2</span>个商品</div>
					<div class="all-fy">
						<a >&lt;</a>
							<p class="fy-y"><span class="z-cur">1</span>/<span>1</span></p>
						<a >&gt;</a>
					</div>
				</div>
			</div>
			<div class="sx_topb">
				<div class="choice-mo-shop">
					<ul>
						<li>
															<a href="/Home/Goods/goodsList/id/79/own_shop/1">
									<i class="litt-zzdg1">
																</i>我爱我家生活圈自营
								</a>
						</li>
						<li>
															<a href="/Home/Goods/goodsList/id/79/recommend/1">
									<i class="litt-zzdg1">
															</i>推荐好货
							</a>
						</li>
						<li>
															<a href="/Home/Goods/goodsList/id/79/promotion/1">
									<i class="litt-zzdg1">
															</i>优惠促销
							</a>
						</li>
						<li>
															<a href="/Home/Goods/goodsList/id/79/stock/1">
									<i class="litt-zzdg1">
															</i>仅显示有货
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="shop-list-splb p">
				<ul>
                    						<li>
							<div class="s_xsall">
								<div class="xs_img">
									<a href="/Home/Goods/goodsInfo/id/52.html">
										<img class="lazy-list" data-original="/public/upload/goods/thumb/52/goods_thumb_52_236_236.jpeg"/>
									</a>
								</div>
								<div class="xs_slide">
									<div class="small-xs-shop">
										<ul>
																								<li>
														<a href="javascript:void(0);">
															<img class="lazy-list" data-original="/public/upload/goods/2019/07-22/0b93a043461f635830b272c50649f4f7.jpg"/>
														</a>
													</li>
																									<li>
														<a href="javascript:void(0);">
															<img class="lazy-list" data-original="/public/upload/goods/2019/07-22/949e2aa420741ace0a0843441f75a824.jpg"/>
														</a>
													</li>
																									<li>
														<a href="javascript:void(0);">
															<img class="lazy-list" data-original="/public/upload/goods/2019/07-22/c48a10ec934f6b309f1261bae189a5d1.jpg"/>
														</a>
													</li>
																									<li>
														<a href="javascript:void(0);">
															<img class="lazy-list" data-original="/public/upload/goods/2019/07-22/3ca948f7a73eede0eedea8248016d318.jpg"/>
														</a>
													</li>
																									<li>
														<a href="javascript:void(0);">
															<img class="lazy-list" data-original="/public/upload/goods/2019/07-22/3152413158c5a1b164fa737be6a24f76.jpg"/>
														</a>
													</li>
																									<li>
														<a href="javascript:void(0);">
															<img class="lazy-list" data-original="/public/upload/goods/2019/07-22/7d70df58137da1e6644b4a05587f1fcb.jpg"/>
														</a>
													</li>
																						</ul>
									</div>
								</div>
								<div class="price-tag">
									<span class="now"><em class="li_xfo">￥</em><em>1880.00</em></span>
									<span class="old"><em>￥</em><em>2200.00</em></span>
								</div>
								<div class="shop_name2">
									<a href="/Home/Goods/goodsInfo/id/52.html">
										单厕位简易卫生间									</a>
								</div>
								<div class="shop_name2">
									<a class="co_hchh" href="/Home/Store/index/id/9.html">
										聊城市舒洁环保科技有限公司									</a>
								</div>
								<div class="J_btn_statu">
									<div class="p-num">
										<input class="J_input_val" id="number_52" type="text" value="1">
										<p class="act">
											<a href="javascript:void(0);" onClick="goods_add(52);" class="litt-zzyl1"></a>
											<a href="javascript:void(0);" onClick="goods_cut(52);"  class="litt-zzyl2"></a>
										</p>
									</div>
									<div class="p-btn">
										<a href="javascript:void(0);" onclick="AjaxAddCart(52,$('#number_'+52).val(),0);">加入购物车</a>
									</div>
								</div>
							</div>
						</li>
											<li>
							<div class="s_xsall">
								<div class="xs_img">
									<a href="/Home/Goods/goodsInfo/id/70.html">
										<img class="lazy-list" data-original="/public/upload/goods/thumb/70/goods_thumb_70_236_236.png"/>
									</a>
								</div>
								<div class="xs_slide">
									<div class="small-xs-shop">
										<ul>
																								<li>
														<a href="javascript:void(0);">
															<img class="lazy-list" data-original="/public/upload/goods/2019/08-13/5ed08959f89f5da718003d82bff88464.png"/>
														</a>
													</li>
																									<li>
														<a href="javascript:void(0);">
															<img class="lazy-list" data-original="/public/upload/goods/2019/08-13/f10f55174c02225cd2c396e623f3605b.png"/>
														</a>
													</li>
																						</ul>
									</div>
								</div>
								<div class="price-tag">
									<span class="now"><em class="li_xfo">￥</em><em>0.01</em></span>
									<span class="old"><em>￥</em><em>1.00</em></span>
								</div>
								<div class="shop_name2">
									<a href="/Home/Goods/goodsInfo/id/70.html">
										补差价									</a>
								</div>
								<div class="shop_name2">
									<a class="co_hchh" href="/Home/Store/index/id/9.html">
										聊城市舒洁环保科技有限公司									</a>
								</div>
								<div class="J_btn_statu">
									<div class="p-num">
										<input class="J_input_val" id="number_70" type="text" value="1">
										<p class="act">
											<a href="javascript:void(0);" onClick="goods_add(70);" class="litt-zzyl1"></a>
											<a href="javascript:void(0);" onClick="goods_cut(70);"  class="litt-zzyl2"></a>
										</p>
									</div>
									<div class="p-btn">
										<a href="javascript:void(0);" onclick="AjaxAddCart(70,$('#number_'+70).val(),0);">加入购物车</a>
									</div>
								</div>
							</div>
						</li>
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
				<div class='dataTables_paginate paging_simple_numbers'><ul class='pagination'>    </ul></div>			</div>
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
                    <ul>
                <li class="foot-th">
                    入驻流程                </li>
                            </ul>
                    <ul>
                <li class="foot-th">
                    联系方式                </li>
                            </ul>
                    <ul>
                <li class="foot-th">
                    招商标准                </li>
                            </ul>
                    <ul>
                <li class="foot-th">
                    资费标准                </li>
                            </ul>
            </div>
    <!--<div class="QRcode-fr" style="display:none;">
        <ul>
            <li class="foot-th">客户端</li>
            <li><img src="/template/pc/rainbow/static/images/qrcode.png"/></li>
        </ul>
        <ul>
            <li class="foot-th">微信</li>
            <li><img src="/template/pc/rainbow/static/images/qrcode.png"/></li>
        </ul>
    </div>-->
</div>
<div class="mod_copyright p">
    <div class="grid-top">
                <a href="javascript:void (0);">客服热线:15166577171</a>
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
                <a href="/Home/User/index.html">
                    <i class="share-side share-side1"></i>
                    <i class="share-side tab-icon-tip triangleshow"></i>
                </a>
                <div class="dl_login">
                    <div class="hinihdk">
                        <img src="/template/pc/rainbow/static/images/dl.png"/>
                        <p class="loginafter nologin"><span>你好，请先</span><a href="/Home/user/login.html">登录</a>！</p>
                        <!--未登录-e--->
                        <!--登录后-s--->
                        <p class="loginafter islogin"><span class="id_jq userinfo">陈xxxxxxx</span><span>点击</span><a href="/Home/user/logout.html">退出</a>！</p>
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
                <a href="/Home/User/message_notice.html" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">消息</span>
                </a>
            </div>
        </div>
        <div class="sider-top-stra sider-midd-2">
            <div class="icon-tabe-chan mmm">
                <a href="/Home/User/goods_collect.html" target="_blank">
                    <i class="share-side share-side1"></i>
                    <!--<i class="share-side tab-icon-tip"></i>-->
                    <span class="tab-tip">收藏</span>
                </a>
            </div>
            <div class="icon-tabe-chan hostry">
                <a href="/Home/User/visit_log.html" target="_blank">
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
					<img src="/template/pc/rainbow/static/images/qrcode.png"/>
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
<script src="/template/pc/rainbow/static/js/common.js"></script>
</div>
<!--footer-e-->
<script src="/template/pc/rainbow/static/js/lazyload.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/template/pc/rainbow/static/js/popt.js" type="text/javascript" charset="utf-8"></script>
<script src="/template/pc/rainbow/static/js/headerfooter.js" type="text/javascript" charset="utf-8"></script>
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
    get_parment = {"id":"79"};
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
</html>";
?>