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
	
	#page li{
		float:right;
		padding-right:20px;
		
	}
	.img{
		width:65px;
		height:65px;
	}
	#table{
		margin-top: 100px;
		margin-bottom: 20px;
		margin-left: 350px;
	}
	#some_name{
		margin: 20px;
	}
	.btn-reg{
		width: 50px;
		margin-top: 20px;
		margin-left: 105px;
		
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
            <!-- <div class="search">
                <a>小明已登陆 </a>&nbsp|&nbsp
	            <a>退出</a>
            </div> -->
         
        </div>
	</div>
    <div id="body">
	   <div id="navbar" class="menu"> 
			<ul> 
				 
				 <li>商品信息</li> 
				 <li>订单信息</li> 
				 <li>购物车</li> 
				
				 <li>管理员信息</li> 
				 <li>用户信息</li> 
				 
			</ul> 
		</div>
		<div class="wrapper">
		
		<div id="table" >
		     <form action="<?php echo site_url("user/m_login")?>" method="post" accept-charset="utf-8">		 
			         用户名：<input type="text" name="mname" placeholder="请输入管理员姓名" id="some_name"/><br/>
                           密    码：&nbsp;&nbsp;<input type="password" name="mpwd" value="" id="some_name"/><br/>
                             <button class="btn-reg">登 录</button>  
		     </form>
				 
		    </table>
		    
		</div>
	
		
		
		 
		 
    </div>
</div>
</body>
</html>