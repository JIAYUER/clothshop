<?php
	if($this->session->userdata('login_in') != 'TRUE'){
		redirect('user/login');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo site_url();?>">
<title>时尚银丝连裤袜-麦路客商城</title>
<meta name="description" content="麦路客商城-专业的网上购物服装商城，主要在线销售男装、女装、童装、鞋、配饰、短袖、T恤、情侣装、背心、内衣、毛衣、衬衫、针织衫、羊毛衫、卫衣、外套、羽绒服、休闲裤、牛仔裤、袜子等让您随时享受舒心惬意的网购之旅，同时为您提供最新的时尚潮流资讯，为每一位用户提供最新时尚潮流的折扣商品，天天低价、支持货到付款、7天无理由退换货。" />
<meta name="keywords" content="童装、婴儿装、T恤、背心、长袖T恤、短袖T恤、亲子T恤针织衫、长袖针织衫、针织外套、针织背心、外套、裤子、休闲裤、牛仔裤、运动裤裙子、内衣裤、棉袜、麦路客商城" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
<link href="assets/css/base.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/detail.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="assets/js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="assets/js/public.js"></script>
<script type="text/javascript" src="assets/js/jquery.pager.js"></script>
<body>
<h1 class="descriptionhide">网上购物,男装,男装品牌,时尚男装,休闲男装,运动男装,商务男装,男装搭配,劲霸男装,T恤,背心,长袖,衬衫,棉毛衫,针织衫,毛衣,马甲,大衣,羽绒服,牛仔裤,休闲裤,短裤,运动裤,裤子,袜子,短袜,长袜</h1>
<div class="side_con">
	<div class="l_m">
		<div class="f_l l_m_l">
			您好，欢迎来麦路客商城！<?php echo $this->session->userdata('uname')?>已登录
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
									<dd><span><a href="index.php/user/bags?id=30">拉杆箱</a></span><span><a href="index.php/user/bagsa?id=31">布箱</a></span></dd>
								</dl>
							</li>
					</div><!--sort end-->
				</div><!--meun_sort end-->	
			</div><!--sub_floor_5 end-->
		</div><!--sub_floor_menus end-->
	</div><!--site-nav end-->
</div><!--header end-->
	
<div class="content container">
	
	<div class="line-border mb-10"></div>
	<?php	
			foreach ($rs as $value) {
		?>
	<div class="area_l g_z preview">	
	  <div id="vertical" class="bigImg f_r">
			<img src="<?php echo $value->gimgsrc;?>" width="400" height="460" title="<?php echo $value->gname;?>" id="midimg">
			<div style="display:none;" id="winSelector"></div>
		</div><!--bigImg end-->
	</div><!--preview end-->
	<div class="area_r g_f" id="application">
	<form action="" method="get">
		<p class="con-title"  style="font-size:30px; font-weight:bold; margin-left: 110px;margin-bottom: 50px;margin-top: 80px;"><?php echo $value->gname;?></p>
		<ul class="goods_main" style="margin-left: 120px;margin-bottom: 50px;">
			<li class="pingpai" style="font-size:20px;">商品品牌：凡客<span>商品编号：GM0188</span></li>
			<li class="price" style="font-size:20px;">麦路客价：<span class="number red"><?php echo $value->gprice;?></span>市场价：<em class="yuanjia">￥180</em></li>
		</ul><!--goods_main end-->
		<div class="items">
					<div style="display=block;width: 100px; height: 50px;margin-left: 230px;text-align: center;line-height:50px;background: #EFA100;"><a href="index.php/user/cart?id=<?php echo $value->gid;?> " style="">加入购物车</a></div>
					
				</div>
 <?php
			}
		?>	
	
				
	
	</form>
	</div><!--right end-->
		
			
			<div class="blank10"></div>
			
			
		</div><!--right end-->
		
	</div><!--del_tab end-->
	
	<div id="bigView" style="display:none;"><img src="" /></div><!--bigView end-->
	
	<div class="blank10"></div>
	
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
<script type="text/javascript" src="assets/js/thickbox.js"></script>
<script type="text/javascript" src="assets/js/lib.js"></script>
<script type="text/javascript" src="assets/js/detail.js"></script>
<!-- online -->
<script type="text/javascript" src="assets/js/online.js"></script>
</body>
</html>