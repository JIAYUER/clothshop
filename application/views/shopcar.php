<?php
	if($this->session->userdata('login_in') != 'TRUE'){
		redirect('user/managerlogin');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo site_url();?>">
<title>麦路客商城后台管理</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<!-- <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" /> -->
<link rel="stylesheet" href="assets/css/header.css">
<!-- <script type="text/javascript" src="assets/js/jquery-1.2.6.pack.js"></script> -->
<style type="text/css">
	
	#pagelist{
		margin-left:30px;
	}
	#pagelist ul li { 
		float:left;
		border:1px solid #e0691a; 
		height:20px; 
		font-weight:bold; 
		line-height:20px; 
		margin:0px 10px; 
		list-style:none;
		}
    #pagelist ul li a,
    .current { 
    	background:#FFB27A; 
    	display:block; 
    	padding:0px 6px; 
    	font-weight:bold;
    	}
	#table{
		margin-top: 20px;
		margin-bottom: 20px;
	}
	#table td:nth-child(1){
		width:80px;
		
	}
	
	#table td:nth-child(3){
		width:400px;
		
	}
	#table td:nth-child(4){
		width:70px;
		
	}#table td:nth-child(5){
		width:70px;
		
	}
	#table td:nth-child(6){
		width:70px;
		
	}
	#table td:nth-child(7){
		width:70px;
		
	}
	#table td:nth-child(8){
		width:90px;
		
	}
	#navbar li .bb{
		color:#fff;
	}
	
	#navbar li .bb{
		color:#fff;
	}
	.cimg{
		width:65px;
		height:65px;
	}
</style>
</head>
<body>
	<div class="header">
		<div class="wrapper">
            <a href="index.php/user/index" id="logo">
                <img src="assets/images/logo.gif" alt=""/>
            </a>
            <div id="nav">
	            Welcome to the backstage management
            </div>
            <div class="search">
                <a><?php echo $this->session->userdata('mname')?>已登录 </a>&nbsp|&nbsp
	            <a href='index.php/user/mlogout?name=$mname'>退出</a>
            </div>
         
        </div>
	</div>
    <div id="body">
	   <div id="navbar" class="menu"> 
			<ul> 
				 
				 <li><a href="index.php/user/goods">商品信息</a></li> 
				 <li><a href="index.php/user/order">订单信息</a></li> 
				 <li><a href="index.php/user/shopcar" class="bb">购物车</a></li> 
			
				 <li><a href="index.php/user/h_manager">管理员信息</a></li> 
				 <li><a href="index.php/user/people">用户信息</a></li> 
				 
			</ul> 
		</div>
		<div class="wrapper">
		
		<div id="table" >
		    <table border="1" cellpadding="50" cellspacing="5" style="height:300px;">	
		    	 <th colspan="8">购物车信息</th>
				 <tr><td align="center">商品序号</td><td align="center">商品样图</td><td align="center">商品名称</td><td align="center">商品规格</td><td align="center">商品单价</td><td align="center">订单数量</td><td align="center">总价格</td><td align="center">购买人</td></tr>
				 
				 <?php
			
				         foreach ($query as $value) {
				 ?>
				            <tr><td align="center"><?php echo $value->cid;?></td><td><img class="cimg" src="<?php echo $value->cimg;?>" alt=""/></td><td align="center"><?php echo $value->cname;?></td><td align="center"><?php echo $value->csize;?></td><td align="center"><?php echo $value->cprice;?></td>
				 	<td align="center"><?php echo $value->ccount;?></td><td align="center"><?php echo $value->csumprice;?></td><td align="center"><?php echo $value->uname;?></td></tr>
				            
				 <?php
					     }
					
				 ?>
		</table>
	
    </div>
    <div id="pagelist">
			  <ul>
			  	<?php echo $this->pagination->create_links();?>
			</ul>
		</div>
</div>
</body>
</html>