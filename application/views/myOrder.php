<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo site_url();?>">
<title>麦路客商城-中国专业的网上销售女装、男装、童装、鞋子、配饰购物商城</title>
<meta name="description" content="麦路客商城-专业的网上购物服装商城，主要在线销售男装、女装、童装、鞋、配饰、短袖、T恤、背心、内衣、毛衣、衬衫、针织衫、羊毛衫、卫衣、外套、羽绒服、休闲裤、牛仔裤、袜子等让您随时享受舒心惬意的网购之旅，同时为您提供最新的时尚潮流资讯，为每一位用户提供最新时尚潮流的折扣商品，天天低价、支持货到付款、7天无理由退换货。" />
<meta name="keywords" content="麦路客商城,男装,女装,童装,鞋,家居,配饰,衬衫,衬衣,长袖衬衫,短袖衬衫,全棉,纯棉,百分百棉,100%棉,全棉衬衫,纯棉衬衫,全棉衬衣,纯棉衬衣,免烫,免熨,免烫衬衫,免熨衬衫,免烫衬衣,领尖扣,直领,T恤,,棉线衫,卫衣,外套,西服,休闲西服,毛衣,背心,毛背心,裤子,长裤,休闲裤,牛仔裤,短裤,鞋,凉鞋,皮鞋,板鞋,商务皮鞋,休闲皮鞋,内衣,内裤,秋衣,秋裤,三角裤,平角裤,领带,袜子,棉袜,拖鞋,打折" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
<link href="assets/css/base.css" rel="stylesheet" type="text/css" />
<link href="assets/css/personal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="assets/js/public.js"></script>

<script type="text/javascript" src="assets/js/user.js"></script>
</head>
<body>
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
				<li><a href="index.php/user/index">帮助中心</a></li>
				<li><a href="index.php/user/myOrder" class="yellow">我的订单</a></li>
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
	<div class="breadcrumbs">
		<a href="index.html">首页</a><span>></span><a href="#">我的麦路客</a><span>></span>我的订单
	</div><!--breadcrumbs end-->
	<!-- <div class="f_l personal_l">
		<h2><a href="my-mesaer.html" title="我的麦路客">我的麦路客</a></h2>
		<div class="personal_l_m" id="personal_list">
			<dl>
				<dt class="current"><div><b class="f_l"></b>帐户管理</div></dt>
				<dd>
					<a href="my-order.html" class="current">我的订单</a>
					<!-- <a href="my-points.html">我的积分</a> 
					<a href="account-balance.html">账户余额</a>
					<a href="my-favorites.html">我的收藏夹</a>
					<a href="e-coupons.html">电子优惠券</a>
				</dd>
			</dl>
			<!-- <dl>
				<dt class="current"><div><b class="f_l"></b>个人信息管理</div></dt>
				<dd>
					<a href="edit-info.html">编辑个人信息</a>
					<a href="change-password.html">修改密码</a>
					<a href="modify-information.html">修改送货信息</a>
				</dd>
			</dl> 
			<dl>
				<!-- <dt class="current"><div><b class="f_l"></b>推荐用户奖励积分</div></dt> 
				<dd>
					<!-- <a href="invite-friends.html">邀请好友</a> 
				</dd>
			</dl>
			<dl>
				<dt class="current"><!-- <div><b class="f_l"></b>商品评论与问答</div> </dt>
				<dd>
					<a href="my-comments.html">我的评论</a>
					<a href="my-faq.html">我的问答</a>
				</dd>
			</dl>
		</div><!--personal_l_m end
		<div class="personal_l_b"></div>
	</div> --><!--personal_l end-->
	<div class="f_r personal_r">
		<div class="personal_r_t"></div>
		<div class="personal_r_m" >
			<!-- <div class="personal_r_m_t coll_t">
				<h2>我的订单</h2>
			</div>--><!--personal_r_m_t end-->
			<div class="personal_r_m_m ">
				<div class="blank10"></div> 
				<!-- <div class="coll yellow">
					<dl> 
						<dt>我的订单筛选处理：</dt> 
						<dd><a href="#" class="blue">待付款订单<span class="yellow">(0)</span></a></dd> 
						<dd><a href="#" class="blue">待确认收货订单<span class="yellow">(0)</span></a></dd> 
					</dl>
				</div --><!--coll end-->
				
				<div class="blank20"></div>
				
				<div class="coll_m">
					<div class="coll_m_t"><h3>全部订单</h3></div>
					<table width="100%">
						<thead>
							<tr>
								<th>订单编号</th><th>订单名</th><th>下单时间</th><th>支付方式</th><th>金额</th><th>订单状态</th><th>操作</th>
							</tr>
						</thead>
						<tbody>
							<?php	
								foreach ($rs as $value) {
							?>	
							<tr>
								<td><a href="#" class="blue"><?php echo $value->oid;?></a></td>
								<td><?php echo $value->oname;?></td>
								<td><span><?php echo $value->odate;?></span></td>
								<td><?php echo $value->opay;?></td>
								<td><span class="red">￥<?php echo $value->osumprice;?>元</span></td>
								<td>已付款</td>
								<td><a id="oiddel" class="blue" style="cursor: pointer;">[删除]</a></td>
							</tr>
							<?php
								}
							?>	
						
						</tbody>
					</table>
				</div><!--coll_m end-->
			</div><!--comment end-->
		</div><!--personal_r_m end-->
		<div class="personal_r_b"></div>
	</div><!--personal_r end-->
	
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
		<a href="help/about.html" target="_blank">关于麦路客</a><span>|</span><a href="help/contact.html" target="_blank">联系麦路客</a><span>|</span><a href="help/job.html" target="_blank">加入麦路客</a><span>|</span><a href="sort.html" target="_blank">网站地图</a><span>|</span><a href="help/complainting.html" target="_blank">投诉与建议</a><span>|</span><a href="help/links.html" target="_blank">友情链接</a><br />
		Copyright&nbsp;&nbsp;©&nbsp;&nbsp;2009-2011&nbsp;&nbsp;<a title="麦路客商城" href="http://www.mailuke.com/">www.mailuke.com</a>&nbsp;&nbsp;麦路客商城版权所有<span>|</span><a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备10031526号</a><br />
		<a href="#" target="_blank"><img src="images/beian.gif" width="128" height="47" alt="经营性网站备案中心" /></a><a href="#" target="_blank"><img src="images/trustA.gif" width="119" height="47" alt="A级-信用企业" /></a><a href="#" target="_blank"><img src="images/alipay.gif" width="123" height="40" alt="支付宝-特约商家" /></a>
	</div><!--copyright end-->
</div><!--footer end-->

<!-- plugin -->
<script type="text/javascript" src="js/lib.js"></script>
<!-- online -->
<script type="text/javascript" src="js/online.js"></script>	
<script type="text/javascript" charset="utf-8">

$('#oiddel').click(function(){
	var oId=$(this).parent().siblings().children(".blue").text();
	
	$("#oiddel").attr("href","http://localhost/clothshop1/index.php/user/order_delete?oid="+oId);

});
</script>
</body>
</html>