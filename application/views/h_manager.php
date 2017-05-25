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
<script src="assets/js/jquery.min.js"></script>	
<script src="assets/js/require.js"></script>
<!-- <script type="text/javascript" src="assets/js/jquery-1.2.6.pack.js"></script> -->

<style type="text/css">
	
	#pagelist{
		margin-left:70px;
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
	.img{
		width:65px;
		height:65px;
	}
	
	#navbar li .bb{
		color:#fff;
	}
	#table{
		
		margin-top: 20px;
		margin-bottom: 20px;
	    margin-right: 75px;
        margin-left: 60px;
	}
	#table td:nth-child(1){
		width:300px;
		
	}
	#table td:nth-child(2){
		width:300px;
		
	}
	#madd{
		position:absolute;
		left:70px;
		top:200px;
		height:25px;
		width:100px;
		background:#527f76;
	}
	
	#mdelete{
		position:absolute;
		left:70px;
		top: 325px;
		height:25px;
		width:100px;
		background:#527f76;
	}
	
	#mrevise{
		position:absolute;
		left:70px;
		top: 450px;
		height:25px;
		width:100px;
		background:#527f76;
	}
	
	 #mm1,#mm2,#mm3{
		margin-top:80px;
		margin-left:160px;
		
	} 
	 
	.i1{
		
		margin-left:320px;
		width:50px;
		height:20px;
		
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
				 <li><a href="index.php/user/shopcar">购物车</a></li> 
	 
				 <li><a href="index.php/user/h_manager" class="bb">管理员信息</a></li> 
				 <li><a href="index.php/user/people">用户信息</a></li> 
				 
			</ul> 
		</div>
		<div class="wrapper">
		
		<div id="table" >
		    <table border="1" cellpadding="50" cellspacing="5"  style="width: 877px;height:300px;">	
		    	 <th colspan="2">管理员信息</th>
				 <tr><td align="center">管理员昵称</td><td align="center">密码</td></tr>
				 
				 <?php
			
				         foreach ($query as $value) {
				 ?>
				            <tr><td align="center"><?php echo $value->mname;?></td><td align="center"><?php echo $value->mpwd;?></td></tr>
				 <?php
					     }
					
				 ?>
		    </table>
		    
		</div>
		<button id="madd">增添信息</button>
		<button id="mdelete">删除信息</button>
		<button id="mrevise">修改信息</button>
		<div id="pagelist">
			  <ul>
			  	<?php echo $this->pagination->create_links();?>
			</ul>
			</div>
		
		  <form action="index.php/user/madd" method="post" id="mm1">
		  	
		  </form>
	      <form action="index.php/user/mdelete" method="post" id="mm2">
		  	
		  </form>
		  <form action="index.php/user/mrevise" method="post" id="mm3">
		  	
		  </form>
		  
    </div>
</div>
<script type="text/javascript" charset="utf-8">
	$('#madd').click(function(){
		$("#body #mm1").empty("");
		var foRM = '&nbsp;&nbsp;&nbsp;&nbsp;管理员昵称:&nbsp<input type="text" name="mname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理员密码:&nbsp;<input type="password" name="mpwd" class="p1"><br /><br /><input class="i1" type="submit" name="sub" value="添加">';
	
		$("#body #mm1").append(foRM);
			 
		});
		
	$('#mdelete').click(function(){
		$("#body #mm2").empty("");
		var foRM = '&nbsp;&nbsp;&nbsp;&nbsp;管理员昵称:&nbsp<input type="text" name="mname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理员密码:&nbsp;<input type="password" name="mpwd" class="p1"><br /><br /><input class="i1" type="submit" name="sub" value="删除">';
	
		$("#body #mm2").append(foRM);
			 
		});
		
	$('#mrevise').click(function(){
		$("#body #mm3").empty("");
		var foRM = '&nbsp;&nbsp;&nbsp;&nbsp;管理员昵称:&nbsp<input type="text" name="mname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;修改后的密码:&nbsp;<input type="password" name="mpwd" class="p1"><br /><br /><input class="i1" type="submit" name="sub" value="修改">';
	
		$("#body #mm3").append(foRM);
			 
		});
</script>
</body>
</html>