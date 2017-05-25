<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="女装,日韩女装,韩版女装,时尚女装,男装,奢侈品,运动,休闲,内衣,箱包,鞋,丝袜等,货到付款." />
<meta name="keywords" content="网上购物,网上购物网站,网上购物中心,女装,日韩女装,韩版女装,时尚女装,男装,奢侈品,运动,休闲,内衣,文胸,箱包,鞋子,丝袜,货到付款" />
<base href="<?php echo site_url();?>">
<title>网上购物麦路客</title>
<script type="text/javascript" src="assets/js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="assets/js/public.js"></script>
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
<link href="assets/css/base.css" rel="stylesheet" type="text/css" />
<link href="assets/css/index.css" rel="stylesheet" type="text/css" />

</head>
<body>
<h1 class="descriptionhide">网上购物,网上购物网站,网上购物中心,女装,日韩女装,韩版女装,时尚女装,男装,奢侈品,运动,休闲,内衣,文胸,箱包,鞋子,丝袜,货到付款</h1>
<div class="side_con">
	<div class="l_m">
		<div class="f_l l_m_l">
			您好，欢迎来到服装商城！
			<?php 
                   // session_start();
					if(isset($_SESSION['uname'])){
						$name=$_SESSION['uname'];
						echo "<a>".$name."</a>已登录"."&nbsp;";
						echo "<a href='index.php/user/logout?name=$name'  class='huise''>[注销]</a>";
					}else{
						echo"<a href='index.php/user/login' class='huise'>[登录]</a>";
						echo"<a href='index.php/user/register' class='huise'>[免费注册]</a>";
						echo"<a href='index.php/user/managerlogin' calss='huise'>[管理员登录]</a>";
					}
             ?>            		
		</div><!--l_m_l end-->
		<div class="f_r l_m_r">
			<ul class="clearfix">
				<!-- <li class="collect"><a onclick="bookmark();" href="javascript:void(0);">加入收藏</a></li> -->
				<li><a href="index.php/user/index">帮助中心</a></li>
				<li><a href="index.php/user/myOrder">我的订单</a></li>
			</ul>
		</div><!--l_m_r end-->
	</div><!--l_m end-->
</div><!--side_con end-->
<div class="header container">
	<div class="l_s">
		<a title="网上购物麦路客商城" class="f_l logo" href="index.php/user/index"><img src="assets/images/logo.gif" alt="网上购物麦路客商城" width="152" height="71" /></a>
		
		<ul class="f_r l_s_r">
			<li class="icon_01"><a title="货到付款" href="index.php/user/payment">货到付款</a></li><li class="icon_02"><a title="支付宝支付" href="index.php/user/payment">支付宝支付</a></li><li class="icon_03"><a title="7天退换" href="index.php/user/policy">7天退换</a></li><li class="icon_04"><a title="提供发票" href="index.php/user/invoiceSystem">提供发票</a></li>
		</ul><!--l_s_r end-->
	</div><!--l_s end-->
	<div class="site-nav">
		<div class="floor_nav">
			<ul class="floors">
				<li id="floor_0"><a class="track" title="首页" href="index.php/user/index">首页</a></li>
				<!-- <li id="floor_1"><a class="track" title="飞机模型" href="index.php/user/airplane">飞机模型</a></li> -->
				<li id="floor_2"><a class="track" title="女装" href="index.php/user/women">女装</a></li>
				<li id="floor_3"><a class="track" title="男装" href="index.php/user/man">男装</a></li>
				<li id="floor_4"><a class="track" title="鞋子" href="index.php/user/shoes">鞋子</a></li>
				<li id="floor_5"><a class="track" title="箱包" href="index.php/user/bags">箱包</a></li>
				<!-- <li id="floor_6"><a class="track" title="折扣积分" href="index.php/user/discount">折扣积分</a></li>
				<li id="floor_7"><a class="track" title="所有分类" href="index.php/user/sort">所有分类</a></li> -->
			</ul>
			
		</div><!--floor_nav end-->
		<div class="sub-floor-menus">
			<div class="menu" id="sub_floor_2">
				<div class="meun_sort">
					<div class="sort clearfix">
						<ul class="f_l sort_nav">
							<li>
								<dl>
									<dt><a href="index.php/user/women?id1=5">上装 ></a></dt>
									<dd><span><a href="index.php/user/women?id=15">T恤</a></span><span><a href="index.php/user/women?id=17">打底衫</a></span><span><a href="index.php/user/women?id=16">雪纺衫</a></span></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><a href="index.php/user/women?id1=6">下装 ></a></dt>
									<dd><span><a href="index.php/user/women?id=18">亚麻裤</a></span><span><a href="index.php/user/women?id=19">小脚裤</a></span></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><a href="index.php/user/women?id1=6">裙子 ></a></dt>
									<dd><span><a href="index.php/user/women?id=20">连衣裙</a></span><span><a href="index.php/user/women?id=21">蓬蓬裙</a></span></dd>
								</dl>
							</li>
						</ul><!--sort_nav end-->
						<!-- <div class="f_l sort_pp">
							<h3>热门品牌</h3>
							<ul>
								<li><a href="#">JACKJONES</a><a href="#">九牧王</a><a href="#">七匹狼</a><a href="#">马克华菲</a><a href="#">稻草人</a><a href="#">TONYJEANS</a><a href="#">凡诺</a></li>
							</ul>
							<div class="blank10"></div>
							<h3>新品推荐</h3>
							<p align="center"><a href="#"><img src="assets/images/polo.jpg" width="135" height="137" alt="美素活悦弹力系列" /></a></p>
						</div> --><!--sort_pp end-->
					</div><!--sort end-->
				</div><!--meun_sort end-->	
			</div><!--sub_floor_2 end-->
			<div class="menu" id="sub_floor_3">
				<div class="meun_sort">
					<div class="sort clearfix" style="width:100px;">
						<ul class="f_l sort_nav">
							<li>
								<dl>
									<dt><a href="index.php/user/man?id1=8">上装 ></a></dt>
									<dd><span><a href="index.php/user/man?id=22">T恤</a></span><span><a href="index.php/user/man?id=23">风衣</a></span></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><a href="index.php/user/man?id1=9">下装 ></a></dt>
									<dd><span><a href="index.php/user/man?id=24">哈伦裤</a></span><span><a href="index.php/user/man?id=25">小脚裤</a></span><span><a href="index.php/user/man?id=26">短裤</a></span></dd>
								</dl>
							</li>
						</ul><!--sort_nav end-->
						<!-- <div class="f_l sort_pp">
							<h3>热门品牌</h3>
							<ul>
								<li><a href="#">JACKJONES</a><a href="#">九牧王</a><a href="#">七匹狼</a><a href="#">马克华菲</a><a href="#">稻草人</a><a href="#">TONYJEANS</a><a href="#">凡诺</a></li>
							</ul>
							<div class="blank10"></div>
							<h3>新品推荐</h3>
							<p align="center"><a href="#"><img src="assets/images/polo.jpg" width="135" height="137" alt="美素活悦弹力系列" /></a></p>
						</div> --><!--sort_pp end-->
					</div><!--sort end-->
				</div><!--meun_sort end-->	
			</div><!--sub_floor_3 end-->
			<div class="menu" id="sub_floor_4">
				<div class="meun_sort">
					<div class="sort clearfix" style="width:100px;">
						<ul class="f_l sort_nav">
							<li>
								<dl>
									<dt><a href="index.php/user/shoes?id1=10">男鞋 ></a></dt>
									<dd><span><a href="index.php/user/shoes?id=27">运动鞋</a></span></dd>
								</dl>
							</li>
							 <li>
								<dl>
									<dt><a href="index.php/user/shoes?id1=11">女鞋 ></a></dt>
									<dd><span><a href="index.php/user/shoes?id=29">凉鞋</a></span><span><a href="index.php/user/shoes?id=28">高跟鞋</a></span>
								</dl>
							</li> 
						</ul><!--sort_nav end-->
						<!-- <div class="f_l sort_pp">
							<h3>热门品牌</h3>
							<ul>
								<li><a href="#">JACKJONES</a><a href="#">九牧王</a><a href="#">七匹狼</a><a href="#">马克华菲</a><a href="#">稻草人</a><a href="#">TONYJEANS</a><a href="#">凡诺</a></li>
							</ul>
							<div class="blank10"></div>
							<h3>新品推荐</h3>
							<p align="center"><a href="#"><img src="assets/images/polo.jpg" width="135" height="137" alt="美素活悦弹力系列" /></a></p>
						</div> --><!--sort_pp end-->
					</div><!--sort end-->
				</div><!--meun_sort end-->	
			</div><!--sub_floor_4 end-->
			<div class="menu" id="sub_floor_5">
				<div class="meun_sort">
					<div class="sort clearfix" style="width:100px;">
						<ul class="f_l sort_nav">
							<li>
								<dl>
									<dt><a href="index.php/user/bags?id=30">箱包></a></dt>
									<dd><span><a href="index.php/user/bags?id=30">拉杆箱</a></span><span><a href="index.php/user/bags?id=31">布箱</a></span></dd>
								</dl>
							</li>
					</div><!--sort end-->
				</div><!--meun_sort end-->	
			</div><!--sub_floor_5 end-->
		</div><!--sub_floor_menus end-->
	</div><!--site-nav end-->
</div><!--header end-->

<div class="content container">
	<div class="blank10"></div>
	<div class="f_l slide-banner">
		<ul class="slide-clip">
			<li><a href="index.php/user/index" title="花朵内衣的私语甜美吸引力难以抗拒" target="_blank"><img alt="花朵内衣的私语甜美吸引力难以抗拒" title="花朵内衣的私语甜美吸引力难以抗拒" src="assets/images/focus/banner1.jpg" width="731" height="312" /></a></li>
			<li><a href="index.php/user/index" title="3月末 必购基础款" target="_blank"><img alt="3月末 必购基础款" title="3月末 必购基础款" src="assets/images/focus/banner2.jpg" width="731" height="312" /></a></li>
			<li><a href="index.php/user/index"  title="经典衬衫全面升级" target="_blank"><img alt="经典衬衫全面升级" title="经典衬衫全面升级" src="assets/images/focus/banner3.jpg" width="731" height="312" /></a></li>
			<li><a href="index.php/user/index" title="带有罩杯的上装，让你的胸部轻松呼吸" target="_blank"><img alt="带有罩杯的上装，让你的胸部轻松呼吸" title="带有罩杯的上装，让你的胸部轻松呼吸" src="assets/images/focus/banner4.jpg" width="731" height="312" /></a></li>
		</ul>
		<ul class="slide-trigger">
			<li class="current"><a href="#" title="花朵内衣的私语甜美吸引力难以抗拒" target="_blank">花朵内衣的私语甜美吸引力难以抗拒</a></li>
			<li><a href="#" title="3月末 必购基础款" target="_blank">3月末 必购基础款</a></li>
			<li><a href="#" title="经典衬衫全面升级" target="_blank">经典衬衫全面升级</a></li>
			<li><a href="#" title="带有罩杯的上装，让你的胸部轻松呼吸" target="_blank">带有罩杯的上装，让你的胸部轻松呼吸</a></li>
		</ul>
	</div><!--slide-banner end-->
	<div class="f_r sale_con">
		<div class="w_box mb-10">
			<div class="w_box_t">
				<div class="f_l w_box_t_l"></div>
				<h2 class="f_l red">促销活动</h2>
				<div class="f_r w_box_t_r"></div>
			</div><!--w_box_t end-->
			<div class="w_box_m sale">
				<ul>
					<li><span>·</span><a href="index.php/user/index"><em class="red">[新品]</em> 入秋必败甜美款 蝙蝠袖衫仅￥69</a></li>
					<li><span>·</span><a href="index.php/user/index"><em class="red">[特卖]</em> 145款秋衣 低至3折29元起</a></li>
					<li><span>·</span><a href="index.php/user/index"><em class="red">[疯抢]</em> PINK全面上新 100款秋装49元起</a></li>
					<li><span>·</span><a href="index.php/user/index"><em class="red">[新品]</em> 入秋必败甜美款 蝙蝠袖衫仅￥69</a></li>
					<li><span>·</span><a href="index.php/user/index"><em class="red">[特卖]</em> 145款秋衣 低至3折29元起</a></li>
				</ul>
			</div><!--w_box_m end-->
			<div class="w_box_b">
				<div class="f_l w_box_b_l"></div>
				<div class="f_r w_box_b_r"></div>
			</div><!--w_box_b end-->
		</div><!--w_box end-->
		<div class="promotions"><a href="index.php/user/index" title="圆型保鲜盒3件套价值69元"><img src="assets/images/promotions.jpg" alt="圆型保鲜盒3件套价值69元" width="240" height="168" /></a></div><!--promotions end-->
	</div><!--sale_con end-->
	
	<div class="clear mb-10"></div>

	<div class="f_l sort_brand_l">
		<div class="w_box">
			<div class="w_box_t">
				<div class="f_l w_box_t_l"></div>
				<h2 class="f_l red">商品分类</h2>
				<div class="f_r w_box_t_r"></div>
				<!-- <div class="f_r more"><a href="">查看所有分类>></a></div> -->
			</div><!--w_box_t end-->
			<div class="w_box_m cate_list">
				<ul>
					<li>
						<dl>
							<dt><a href="#">女装<span class="icon_01"></span></a></dt>
							<dd><a href="index.php/user/women?id=15">T恤</a><a href="index.php/user/women?id=17">打底衫</a><a href="index.php/user/women?id=16">雪纺衫</a><a href="index.php/user/women?id=18">亚麻裤</a><a href="index.php/user/women?id=19">小脚裤</a><a href="index.php/user/women?id=20">连衣裙</a><a href="index.php/user/women?id=21">蓬蓬裙</a>
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt><a href="#">男装<span class="icon_02"></span></a></dt>
							<dd><a href="index.php/user/man?id=22">T恤</a><a href="index.php/user/man?id=23">风衣</a><a href="index.php/user/man?id=24">哈伦裤</a><a href="index.php/user/man?id=25">小脚裤</a><a href="index.php/user/man?id=26">短裤</a>
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt><a href="#">鞋子<span class="icon_04"></span></a></dt>
							<dd><a href="index.php/user/shoes?id=29">凉鞋</a><a href="index.php/user/shoes?id=28">高跟鞋</a><a href="index.php/user/bags?id=27">运动鞋</a>
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt><a href="#">箱包<span class="icon_03"></span></a></dt>
							<dd><a href="index.php/user/bags?id=30">拉杆箱</a><a href="index.php/user/bags?id=31">布箱</a>
							</dd>
						</dl>
					</li>
					
					<!-- <li>
						<dl class="last">
							<dt><a href="#">配饰<span class="icon_05"></span></a></dt>
							<dd><a href="#">太阳镜</a><a href="#">丝巾</a><a href="#">披肩</a><a href="#">帽子</a><a href="#">手套</a><a href="#">皮带</a><a href="#">吊坠</a><a href="#">项链</a><a href="#">发饰</a><a href="#">胸针</a><a href="#">戒指</a>
							</dd>
						</dl>
					</li> -->
					
				</ul>
			</div><!--w_box_m end-->
			<div class="w_box_b">
				<div class="f_l w_box_b_l"></div>
				<div class="f_r w_box_b_r"></div>
			</div><!--w_box_b end-->
		</div><!--w_box end-->
	</div><!--sort_brand_l end-->
	
	<div class="f_r rank">
		<ul class="tabcon">
			<li class="current">
				<div class="p-name"><span class="f_l num">1</span><a href="#">新款短袖衬衫 自选两件168元</a></div>
				<div class="p-img"><a href="index.php/user/index" target="_blank"><img title="新款短袖衬衫 自选两件168元" src="assets/images/spacer.gif" lazyload="assets/images/women/top/but_home_women_list-2-0315-2.jpg" width="235" height="118" /></a></div>
			</li>
			<li>
				<div class="p-name"><span class="f_l num">2</span><a href="#">女款衬衫 特惠价88元起</a></div>
				<div class="p-img"><a href="index.php/user/index" target="_blank"><img title="女款衬衫 特惠价88元起" src2="assets/images/women/top/but_home_women_list-2-0315.jpg" width="235" height="118" /></a></div>
			</li>
			<li>
				<div class="p-name"><span class="f_l num">3</span><a href="#">针织衫+牛津纺衬衫两件168元</a></div>
				<div class="p-img"><a href="index.php/user/index" target="_blank"><img title="针织衫+牛津纺衬衫两件168元" src2="assets/images/women/top/but_home_women_list-3-0312.jpg" width="235" height="118" /></a></div>
			</li>
			<li>
				<div class="p-name"><span class="f_l num">4</span><a href="#">情侣衬衫两件仅售128元起</a></div>
				<div class="p-img"><a href="index.php/user/index" target="_blank"><img title="情侣衬衫两件仅售128元起" src2="assets/images/women/top/but_home_women_list-4-0301.jpg" width="235" height="118" /></a></div>
			</li>
		</ul>
	</div><!--rank end-->
	
	<div class="clear mb-10"></div>

	<div class="subject subimg-01">
		<!-- <h2>畅销新品</h2> -->
		
	</div><!-- subject end -->
	<div class="module mb-10 clearfix">
		<div class="f_l focusbrand">
			<div class="focuspic mb-10">
				<img class="load_img" src="assets/images/spacer.gif" lazyload="assets/images/index/w0.jpg" width="397" height="500" alt="" />
                <!-- <img class="load_img" src="assets/images/spacer.gif" lazyload="assets/images/women/104620.gif" width="190" height="82" alt="" />
				<img class="load_img" src="assets/images/spacer.gif" lazyload="assets/images/women/180128.jpg" width="190" height="82" alt="" /> -->
			<div class="clear mb-10"></div>
			
			</div> <!--brands end-->
		</div><!--focusbrand end-->
		<div class="f_l modpic news-modpic bigTarget">
			<ul>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=100"><img class="load_img" src="assets/images/index/w1.jpg" lazyload="assets/images/index/w1.jpg" width="180" height="180" alt="美腿配长裙" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=100">美腿配长裙</a></div>
					<div class="p-price"><del title="市场价">¥100.00元</del><strong title="麦路客价">&yen;80.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=101"><img class="load_img" src="assets/images/index/w2.jpg" lazyload="assets/images/index/w2.jpg" width="180" height="180" alt="精美套装" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=101">精美套装</a></div>
					<div class="p-price"><del title="市场价">¥150.00元</del><strong>&yen;100.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=102"><img class="load_img" src="assets/images/index/p3.jpg" lazyload="assets/images/index/p3.jpg" width="180" height="180" alt="时尚小包" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=102">时尚小包</a></div>
					<div class="p-price"><del title="市场价">¥160.00元</del><strong>&yen;70.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=103"><img class="load_img" src="assets/images/index/w4.jpg" lazyload="assets/images/index/w4.jpg" width="180" height="180" alt="精美风衣" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=103">精美风衣</a></div>
					<div class="p-price"><del title="市场价">¥180.00元</del><strong>&yen;150.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=104"><img class="load_img" src="assets/images/index/m5.jpg" lazyload="assets/images/index/m5.jpg" width="180" height="180" alt="帅气男装" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=104">帅气男装</a></div>
					<div class="p-price"><del title="市场价">¥280.00元</del><strong>&yen;160.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=105"><img class="load_img" src="assets/images/index/m6.jpg" lazyload="assets/images/index/m6.jpg" width="180" height="180" alt="舒适T恤" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=105">舒适T恤</a></div>
					<div class="p-price"><del title="市场价">¥260.00元</del><strong>&yen;150.00元</strong></div>
				</li>
			</ul>
		</div>	
	</div><!--module end-->
	<!-- 女装 -->
	<div class="subject subimg-03">
		
	</div><!--men_p end-->
	<div class="module mb-10 clearfix">
		<div class="f_l focusbrand">
			<div class="focuspic mb-10">
				<img class="load_img" src="assets/images/spacer.gif" lazyload="assets/images/women/150242.jpg" width="397" height="500" alt="" />
				<div class="clear mb-10"></div>
				<!-- <a class="f_l" href="#"><img class="load_img" src="assets/images/spacer.gif" lazyload="assets/images/women/104620.gif" width="190" height="112" alt="" /></a>
				<a class="f_r" href="#"><img class="load_img" src="assets/images/spacer.gif" lazyload="assets/images/women/180128.jpg" width="190" height="112" alt="" /></a> -->
			</div><!--focuspic end-->
		</div><!--focusbrand end-->
		<div class="f_l modpic man-modpic bigTarget">
			<ul>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=100"><img class="load_img" src="assets/images/index/w1.jpg" lazyload="assets/images/index/w1.jpg" width="180" height="180" alt="美腿配长裙" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=100">美腿配长裙</a></div>
					<div class="p-price"><del title="市场价">¥100.00元</del><strong title="麦路客价">&yen;80.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=101"><img class="load_img" src="assets/images/index/w2.jpg" lazyload="assets/images/index/w2.jpg" width="180" height="180" alt="精美套装" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=101">精美套装</a></div>
					<div class="p-price"><del title="市场价">¥150.00元</del><strong>&yen;100.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=106"><img class="load_img" src="assets/images/index/w3.jpg" lazyload="assets/images/index/w3.jpg" width="180" height="180" alt="显瘦小红裙" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=106">显瘦小红裙</a></div>
					<div class="p-price"><del title="市场价">¥160.00元</del><strong>&yen;70.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=103"><img class="load_img" src="assets/images/index/w4.jpg" lazyload="assets/images/index/w4.jpg" width="180" height="180" alt="精美风衣" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=103">精美风衣</a></div>
					<div class="p-price"><del title="市场价">¥180.00元</del><strong>&yen;150.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=107"><img class="load_img" src="assets/images/index/w5.jpg" lazyload="assets/images/index/w5.jpg" width="180" height="180" alt="性感小礼服" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=107">性感小礼服</a></div>
					<div class="p-price"><del title="市场价">¥280.00元</del><strong>&yen;160.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=108"><img class="load_img" src="assets/images/index/w7.jpg" lazyload="assets/images/index/w7.jpg" width="180" height="180" alt="舒适T恤" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=108">舒适T恤</a></div>
					<div class="p-price"><del title="市场价">¥260.00元</del><strong>&yen;150.00元</strong></div>
				</li>
			</ul>
		</div><!--modpic end-->			
	</div><!--module end-->
	<!-- 男装 -->
	<div class="subject subimg-04">
		
	</div><!--subject end-->
	<div class="module mb-10 clearfix">
		<div class="f_l focusbrand">
			<div class="focuspic mb-10">
				<img class="load_img" src="assets/images/index/m0.jpg" lazyload="assets/images/index/m0.jpg" width="397" height="500" alt="" />
				<div class="clear mb-10"></div>
			</div><!--focuspic end-->
		</div><!--focusbrand end-->
		<div class="f_l modpic underwear-modpic bigTarget">
			<ul>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=109"><img class="load_img" src="assets/images/index/m1.jpg" lazyload="assets/images/index/m1.jpg" width="180" height="180" alt="T恤" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=109">T恤</a></div>
					<div class="p-price"><del title="市场价">¥80.00元</del><strong title="麦路客价">&yen;50.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=110"><img class="load_img" src="assets/images/index/m2jpg" lazyload="assets/images/index/m2.jpg" width="180" height="180" alt="西服" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=110">西服</a></div>
					<div class="p-price"><del title="市场价">¥180.00元</del><strong>&yen;150.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=111"><img class="load_img" src="assets/images/index/m3.jpg" lazyload="assets/images/index/m3.jpg" width="180" height="180" alt="西服" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=111">西服</a></div>
					<div class="p-price"><del title="市场价">¥280.00元</del><strong>&yen;150.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=112"><img class="load_img" src="assets/images/index/m4.jpg" lazyload="assets/images/index/m4.jpg" width="180" height="180" alt="西服" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=112">西服</a></div>
					<div class="p-price"><del title="市场价">¥340.00元</del><strong>&yen;230.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=113"><img class="load_img" src="assets/images/index/m5.jpg" lazyload="assets/images/index/m5.jpg" width="180" height="180" alt="西服" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=113">西服</a></div>
					<div class="p-price"><del title="市场价">¥330.00元</del><strong>&yen;220.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=105"><img class="load_img" src="assets/images/index/m6.jpg" lazyload="assets/images/index/m6.jpg" width="180" height="180" alt="美腿配丝袜" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=105">西服</a></div>
					<div class="p-price"><del title="市场价">¥300元</del><strong>&yen;245.00元</strong></div>
				</li>
			</ul>
		</div><!--modpic end-->			
	</div><!--underwear end-->
     <!-- 箱包 -->
	<div class="subject subimg-05">
		<!-- <h2>鞋包配饰</h2> -->
		
	</div><!--subject end-->
	<div class="module mb-10 clearfix">
		<div class="f_l focusbrand">
			<div class="focuspic mb-10">
				<img class="load_img" src="assets/images/index/p0.jpg" lazyload="assets/images/index/p0.jpg" width="397" height="500" alt="" />
				<div class="clear mb-10"></div>
			</div><!--focuspic end-->
		</div><!--focusbrand end-->
		<div class="f_l modpic shoe-modpic bigTarget">
			<ul>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=115"><img class="load_img" src="assets/images/index/p1.jpg" lazyload="assets/images/index/p1.jpg" width="180" height="180" alt="组合旅行包" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=115">组合旅行包</a></div>
					<div class="p-price"><del title="市场价">¥580.00元</del><strong title="麦路客价">&yen;350.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=116"><img class="load_img" src="assets/images/index/p2.jpg" lazyload="assets/images/index/p2.jpg" width="180" height="180" alt="时尚女包" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=116">时尚女包</a></div>
					<div class="p-price"><del title="市场价">¥200.00元</del><strong>&yen;150.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=117"><img class="load_img" src="assets/images/index/p3.jpg" lazyload="assets/images/index/p3.jpg" width="180" height="180" alt="组合女包" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=117">组合女包</a></div>
					<div class="p-price"><del title="市场价">¥460.00元</del><strong>&yen;345.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=118"><img class="load_img" src="assets/images/index/p4.jpg" lazyload="assets/images/index/p4.jpg" width="180" height="180" alt="时尚女包" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=118">时尚女包</a></div>
					<div class="p-price"><del title="市场价">¥180.00元</del><strong>&yen;50.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=119"><img class="load_img" src="assets/images/index/p5.jpg" lazyload="assets/images/index/p5.jpg" width="180" height="180" alt="行李箱" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=119">行李箱</a></div>
					<div class="p-price"><del title="市场价">¥230.00元</del><strong>&yen;170.00元</strong></div>
				</li>
				<li class="picHover" pid="41815">
					<a href="index.php/user/productdetails?id=120"><img class="load_img" src="assets/images/index/p6.jpg" lazyload="assets/images/index/p6.jpg" width="180" height="180" alt="时尚女包" /></a>
					<div class="p-name"><a rel="nofollow external" href="index.php/user/productdetails?id=120">时尚女包</a></div>
					<div class="p-price"><del title="市场价">¥300.00元</del><strong>&yen;150.00元</strong></div>
				</li>
			</ul>
		</div><!--modpic end-->			
	</div><!--module end-->
	
	<div class="clear mb-10"></div>
	
	
	
	<div class="clear mb-10"></div>
	
	<div style="display:none;" class="ico" id="imgICO"></div>
	<div style="position:absolute;display:none;" id="detail"></div>
</div><!--content end-->

<div class="footer container">
	<div class="service">
		<div class="cat_bg"></div>
		<div class="help_list clearfix">
			<dl>
				<dt>新手指南</dt>
				<dd><a href="index.php/user/help" target="_blank"><span>购物流程</span></a></dd>
				<dd><a href="index.php/user/common" target="_blank"><span>常见问题</span></a></dd>
			</dl>
			<dl>
				<dt>订单问题</dt>
				<dd><a href="index.php/user/orderstatus" target="_blank">订单状态</a></dd>
				
				<dd><a href="index.php/user/notorder" target="_blank">未达订单</a></dd> 
			</dl>
			<dl>
				<dt>如何付款/退款</dt>
				<dd><a href="index.php/user/payment" target="_blank">支付方式</a></dd>
				
				<dd><a href="index.php/user/payissue" target="_blank">支付问题</a></dd>
				<dd><a href="index.php/user/refund" target="_blank">办理退款</a></dd>
				<dd><a href="index.php/user/invoiceSystem" target="_blank">发票制度</a></dd>        
			</dl>
			<dl>
				<dt>配送和收费</dt>
				<dd><a href="index.php/user/timerange" target="_blank">配送时间</a></dd> 
				<dd><a href="index.php/user/deliverytime" target="_blank">送达时间</a></dd> 
				<dd><a href="index.php/user/inspectionsign" target="_blank">验货与签收</a></dd> 
				<dd><a href="index.php/user/express" target="_blank">快递配送和收费</a></dd> 
				<dd><a href="index.php/user/ems" target="_blank">EMS配送和收费</a></dd>      
			</dl>
			<dl>
				<dt>售后服务</dt>
				<dd><a href="index.php/user/policy" target="_blank">退换货政策</a></dd>
				<dd><a href="index.php/user/applygoods" target="_blank">如何办理退换货</a></dd>     
			</dl>
		</div>
	</div><!--service end-->
	<div class="copyright">
		<!-- <a href="help/about.html" target="_blank">关于麦路客</a><span>|</span><a href="help/contact.html" target="_blank">联系麦路客</a><span>|</span><a href="help/job.html" target="_blank">加入麦路客</a><span>|</span><a href="sort.html" target="_blank">网站地图</a><span>|</span><a href="help/complainting.html" target="_blank">投诉与建议</a><span>|</span><a href="help/links.html" target="_blank">友情链接</a><br /> -->
		Copyright&nbsp;&nbsp;©&nbsp;&nbsp;2009-2011&nbsp;&nbsp;<a title="麦路客商城" href="http://www.mailuke.com/">www.mailuke.com</a>&nbsp;&nbsp;麦路客商城版权所有<span>|</span><a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备10031526号</a><br />
		<a href="#" target="_blank"><img src="assets/images/beian.gif" width="128" height="47" alt="经营性网站备案中心" /></a><a href="#" target="_blank"><img src="assets/images/trustA.gif" width="119" height="47" alt="A级-信用企业" /></a><a href="#" target="_blank"><img src="assets/images/alipay.gif" width="123" height="40" alt="支付宝-特约商家" /></a>
	</div><!--copyright end-->
</div><!--footer end-->

<!-- plugin -->
<script type="text/javascript" src="assets/js/lib.js"></script>
<!-- index -->
<script type="text/javascript" src="assets/js/index.js"></script>
<!-- online -->
<script type="text/javascript" src="assets/js/online.js"></script> 
</body>
</html></>