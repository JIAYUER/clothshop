<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo site_url();?>">
<title>买箱包,时尚箱包网,皮具箱包,箱包品牌,休闲箱包</title>
<meta name="description" content="箱包搭配网上购物麦路客分为女包有单肩包,斜挎包,手提包,钱包,手包,胸包,手提/斜肩两用包,男包有公文包,斜肩包,钱包,手包,手提/斜肩两用包,电脑包有双肩电脑包,手提电脑包,相机包,旅行包有拉杆箱,旅行包,双肩包,书包." />
<meta name="keywords" content="网上购物,买箱包,皮具箱包,时尚箱包网,箱包品牌,休闲箱包,女包,单肩包,斜挎包,手提包,钱包,手包,胸包,男包,公文包,斜肩包,电脑包,双肩电脑包,手提电脑包,相机包,旅行包,拉杆箱,旅行包,双肩包,书包" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
<link href="assets/css/base.css" rel="stylesheet" type="text/css" />
<link href="assets/css/category.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="assets/js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="assets/js/public.js"></script>
</head>
<body>
<h1 class="descriptionhide">网上购物,买箱包,皮具箱包,时尚箱包网,箱包品牌,休闲箱包,女包,单肩包,斜挎包,手提包,钱包,手包,胸包,男包,公文包,斜肩包,电脑包,双肩电脑包,手提电脑包,相机包,旅行包,拉杆箱,旅行包,双肩包,书包</h1>
<div class="side_con">
	<div class="l_m">
		<div class="f_l l_m_l">
			您好，欢迎来麦路客商城！
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
				<li><a href="index.php/user/myOrder" class="yellow">我的订单</a></li>
				<!-- <li class="my-mesaer">
					<a href="my-mesaer.html">我的麦路客<span class="arrow"></span></a>
					<ul id="my-list">
						<li><a href="my-order.html">我的订单</a></li>
						<li><a href="my-faq.html">我的问答</a></li>
						<li><a href="my-favorites.html">我的收藏</a></li>
						<li><a href="my-points.html">我的积分</a></li>
					</ul>
				</li> -->
			</ul>
		</div><!--l_m_r end-->
	</div><!--l_m end-->
</div><!--side_con end-->
<div class="header container">
	<div class="l_s">
		<a class="f_l logo" href="index.php/user/index"><img src="assets/images/logo.gif" alt="麦路客商城" width="152" height="71" /></a>
		
		<ul class="f_r l_s_r">
			<li class="icon_01"><a title="货到付款" href="index.php/user/payment">货到付款</a></li><li class="icon_02"><a title="支付宝支付" href="index.php/user/payment">支付宝支付</a></li><li class="icon_03"><a title="7天退换" href="index.php/user/policy">7天退换</a></li><li class="icon_04"><a title="提供发票" href="index.php/user/invoiceSystem">提供发票</a></li>
		</ul><!--l_s_r end-->
	</div><!--l_s end-->
	<div class="site-nav">
		<div class="floor_nav">
			<ul class="floors">
				<li id="floor_0"><a class="track" title="首页" href="index.php/user/index">首页</a></li>
				<!-- <li id="floor_1"><a class="track" title="飞机模型" href="index.php/user/airplane">飞机模型</a></li> -->
				<li id="floor_2"><a class="track" title="女装" href="index.php/user/women?id1=5">女装</a></li>
				<li id="floor_3"><a class="track" title="男装" href="index.php/user/man?id1=8">男装</a></li>
				<li id="floor_4"><a class="track" title="鞋子" href="index.php/user/shoes?id1=10">鞋子</a></li>
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
	<div class="breadcrumbs"><a href="index.php/user/index">首页</a><span>></span>箱包</div><!--breadcrumbs end-->
	<div class="area_l con_l">
		<div class="product-sort">
			<h2>商品分类</h2>
			<div class="sort-con">
				<div class="sort-list">
					<h3><span class="f_l icon05"></span><a href="index.php/user/bags" class="f_l">箱包</a></h3>
					<dl>
						<dd>
							<a href="index.php/user/bags?id=30"><span>·</span>拉杆箱 </a>
							<a href="index.php/user/bags?id=31"><span>·</span>布箱 </a>
						</dd>
					</dl>
				</div>
				<div class="sort-list"><h3><span class="f_l icon01"></span><a href="index.php/user/women" class="f_l">女装</a></h3></div>
				<div class="sort-list"><h3><span class="f_l icon02"></span><a href="index.php/user/man" class="f_l">男装</a></h3></div>
				<div class="sort-list"><h3><span class="f_l icon04"></span><a href="index.php/user/shoes" class="f_l">鞋子</a></h3></div>
			</div><!--sort-con end-->
			<div class="sort-btn"></div>
		</div><!--product-sort end-->
		
		<div class="blank10"></div>
		
	</div><!--left end-->
	
	<div class="area_r con_r">
		
		<div class="filter-last"><div></div></div>
		
		<div class="blank10"></div>
		
		<div class="category">
			<div class="StyleListProduct">
				<ul class="clearfix">
					
					<?php
        		 	 foreach ($rs as $value) {
        			?>
        			<li style="height:350px;">
						<a class="p_photo" title="<?php echo $value->gname;?>" href="index.php/user/productdetails?id=<?php echo $value->gid;?>"><img alt="<?php echo $value->gname;?>" src="<?php echo $value->gimgsrc;?>" width="150" height="205" class="load_img pic" /></a>							
						<div class="p_name" style="height:48px;"><a href="index.php/user/productdetails"><?php echo $value->gname;?></a></div>
						<div class="p_price"><strong title="美萨尔价"><?php echo $value->gprice;?>元</strong></div>
						<div class="p_safe"><span class="blue">满意度：5.0分</span><span class="icon zengpin" title="赠品"></span></div>
						
					</li>
					<?php
						}
        			?>	
    		</ul>
			</div><!--StyleListProduct end-->
			
			<div class="pop_arrow" id="pop_ico" style="display:none"></div>
			<div id="pop_detail" style="position:absolute"></div>
				
			
		</div><!--category end-->
	</div><!--right end-->
	
	<div class="clear mb-10"></div>
	
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