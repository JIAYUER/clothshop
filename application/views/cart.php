<?php
	if($this->session->userdata('login_in') != 'TRUE'){
		redirect('user/login');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录 注册-麦路客商城</title>
<meta name="keywords" content="登录 注册, 麦路客商城 服装,直销,衬衣,衬衫,牛津纺,经纬80公里全棉衬衫,领带,毛背心,卡其裤" />
<meta name="description" content="登录 注册是麦路客商城品牌系列产品之一，麦路客商城是专业生产和销售男装的品牌，包括正装衬衣、休闲衬衣、短袖衬衣、全棉免烫牛津纺衬衫、经纬80公里全棉衬衫、领带、毛背心、卡其裤。" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<base href="<?php echo site_url();?>">
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
<link href="assets/css/base.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/order.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="assets/js/jquery-1.2.6.pack.js"></script>
<script language="javascript" src="assets/js/suning_btn.js"></script>
<script src="assets/js/jquery.min.js"></script>	
</head>
<body>
<div class="o_h container">
	<h1 class="f_l oh_logo"><a href="index.php/user/index"><img src="assets/images/logo.gif" alt="麦路客商城" /></a></h1><!--oh_logo end-->
	<div class="f_r oh_mian">
		<div class="oh_dh">
			<div class="f_r l_bg"></div>
			您好，欢迎来麦路客商城！
			<span id="user"><?php echo $this->session->userdata('uname')?></span><span>已登录|</span><a href="index.php/user/index">麦路客首页</a></div>
		
		
		</div><!--oh_dh end-->
		
		<div class="blank20"></div>
		
		<div class="flow_step">
			<ul>
				<li class="step_06"></li>
				<li class="step_04">3.成功提交订单</li>
				<li class="step_05"></li>
				<li class="step_04">2.填写核对订单信息</li>
				<li class="step_03"></li>
				<li class="step_02">1.我的购物车</li>
				<li class="step_01"></li>
			</ul>
		</div><!--flow_step end-->
	</div><!--oh_mian end-->
	
	<div class="clear"></div>
	
</div><!--o_h end-->
	
<div class="cat_content container">
	<div class="blank10"></div>
	<div class="cat_title">
		<h2 class="f_l"><img src="assets/images/cat.gif" title="购物车" /></h2>
		<div class="f_r"><strong class="red">温馨提示</strong>：涉及到花费积分购买只能单笔进行。</div>
	</div><!--cat_title end-->
	<div class="cat_list">
		<table cellpadding="0" cellspacing="0" border="0">
			<thead>
				<tr>
					<th width="10px">&nbsp;</th>
					<th colspan="2">商品名称</th>
					<th>尺码</th>
					<!-- <th>花费积分</th>
					<th>赠送积分</th> -->
					<th>单价</th>
					<th>数量</th>
					<th colspan="2">小计</th>
					<th>操作</th>
					<th width="10px">&nbsp;</th>
				</tr>
			</thead>
				
			<tbody>
				<?php	
			foreach ($rs as $value) {
		?>	
				<tr>
				
					<td style="border:none;">&nbsp;</td>
					<td colspan="2"><a href="#"><img id="cimg" src="<?php echo $value->cimg;?>" class="p_img" width="54" height="54"/></a><a id="cname" href="#"><?php echo $value->cname;?></a></td>
					<td id="csize">L</td>
					<!-- <td><span id="expense_points_1">0</span>分</td>
					<td><span id="total_points_1">0</span>分</td> -->
					<td><b>&yen;</b><span id="price_item_1"><?php echo $value->cprice;?></span></td>
					<td>
						<div class="text-number">
						
							<input type="text" name="qty_item_1" value="0" id="qty_item_1" onkeyup="setAmount.modify('#qty_item_1')" class="text"  autoComplete='off' />
							
						</div>
					</td>
					<td colspan="2"><span id="total_item_1"></span></td>
					<td><a href="index.php/user/cart_delete?cimg=<?php echo $value->cimg;?>" class="red">删除</a></td>
					<td style="border:none;">&nbsp;</td>
							
				

				</tr>
				
				
			</tbody>
		
			<tfoot>
				<tr>
					<td style="border:none;">&nbsp;</td>
					<td colspan="10"> 
						<table cellpadding="0" cellspacing="0" border="0">
							<td>产品数量总计：<span class="red" id="cou"></span></td>
							<!-- <td>赠送积分总计：<span class="red" id="pointsTotal">0</span>分</td>
							<td>花费积分总计：<span class="red" id="totalexpense">0</span>分</td> -->
							<td align="right">产品金额总计（不含运费）：<span class="red"><span id="cashTotal"></span><input type="text" name="cash-total" id="cash-total" value="" style="display:none;" /></span></td>
						</table>
					</td>
					<td style="border:none;">&nbsp;</td>
				</tr>
					<input type="hidden" value="<?php echo date('Y-m-d H:i:s');?>" id="date">
				<?php
			}
		?>	
				<tr>
					<td style="border:none;">&nbsp;</td>
					<td colspan="10" style="border:none;">
						<table cellpadding="0" cellspacing="0" border="0">
							<td width="110px"><a href="index.php/user/index"><img alt="继续购物" src="assets/images/jx_pay.gif" /></a></td>
							
							<td></td>
							<td align="right"><a id="js" href=""><img alt="去结算" src="assets/images/go_pay.gif" /></a></td>
						</table>
					</td>
					<td style="border:none;">&nbsp;</td>
				</tr>
			</tfoot>	
		</table>
	</div><!--cat_list end-->
	<div class="line mb-10"></div>
</div><!--cat_content end-->
	
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

<script type="text/javascript" src="js/calculation.js"></script>
<script type="text/javascript" src="js/online.js"></script>
<script type="text/javascript" charset="utf-8">
        
		$(function(){

		$('#qty_item_1').bind('input propertychange', function() {
			var cPrice = document.getElementById("price_item_1").innerHTML; 
			
		    $('#cashTotal').html($(this).val()*cPrice);
		    $('#total_item_1').html($(this).val()*cPrice);
		    document.getElementById("cou").innerHTML =  $(this).val();
		   
		});
		
	
		  $('#js').click(function(){
		
		 var cImg = document.getElementById("cimg").src;
		 var cName = document.getElementById("cname").innerHTML;
		 var cSize = document.getElementById("csize").innerHTML;
		 var cPrice = document.getElementById("price_item_1").innerHTML;
		 var cCount = document.getElementById("cou").innerHTML;
		 var cSumprice = document.getElementById("cashTotal").innerHTML;
	     var cDate = document.getElementById("date").value;
         var cUser = document.getElementById("user").innerHTML;
        	
        	 $("#js").attr("href","http://localhost/clothshop1/index.php/user/cart_order?cimg="+cImg+"&cname="+cName+"&csize="+cSize+"&cprice="+cPrice+"&ccount="+cCount+"&csumprice="+cSumprice+"&cdate="+cDate+"&cuser="+cUser);
		   });
        
			})
		
        

       

</script>
</body>
</html>