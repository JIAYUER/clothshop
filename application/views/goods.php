
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
	
	a{
		color: #000000;
	}
	.grevise{
		cursor: pointer;
	}
	.gimgsrc{
		width:65px;
		height:65px;
	}
	#table{
		margin-top: 30px;
		margin-bottom: 20px;
	}
	#table td:nth-child(2){
		width:505px;
		
	}
	#table td:nth-child(4){
		width:100px;
		
	}#table td:nth-child(5){
		width:100px;
		
	}
	#table td:nth-child(6){
		width:50px;
		
	}
	#table td:nth-child(7){
		width:50px;
		
	}
	/*#select-btn1 li .bb{
		color:#fff;
	}*/
	#add{
		height:30px;
		width:80px;
		float:right;
		margin-right:130px;
	}
	#pagelist{
		margin-left:10px;
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
    	#navbar li .bb{
		color:#fff;
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
				 
				 <li><a href="index.php/user/goods" class="bb">商品信息</a></li> 
				 <li><a href="index.php/user/order">订单信息</a></li> 
				 <li><a href="index.php/user/shopcar">购物车</a></li> 
				 <li><a href="index.php/user/h_manager">管理员信息</a></li> 
				 <li><a href="index.php/user/people">用户信息</a></li> 
				 
			</ul> 
		</div>
		<div class="wrapper">
		
		 <div id="table" >
		    <table border="1" cellspacing="3" cellpadding="10">	
		    	 <th colspan="7">商品信息</th>
				 <tr><td align="center">商品编号</td><td align="center">商品名称</td><td align="center">商品样图</td><td align="center">商品价格</td><td align="center">商品数量</td><td align="center" colspan="2">操作</td></tr>
				  <?php
				          foreach ($query as $value) {
				  ?>
				            <tr><td align="center" class="gid"><?php echo $value->gid;?></td>
				            	<td class="gname"><?php echo $value->gname;?></td>
				            	<td><img class="gimgsrc" src="<?php echo $value->gimgsrc;?>" alt=""/></td>
				           	 <td align="center" class="gprice"><?php echo $value->gprice;?>元</td>
				           	 <td align="center" class="gcount"><?php echo $value->gcount;?></td>
				           	 <td align="center"><a href="index.php/user/delete?id=<?php echo $value->gname;?>">[删除]</a></td>
				           	 <td align="center"><a class="grevise">[修改]</a></td></tr>
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
			<button id="add">添加商品</button>
		
		</div>
		
<script> 
 $('.grevise').click(function(){
	
		var gId=$(this).parent().siblings(".gid").text();
    	var gName=$(this).parent().siblings(".gname").text();
    	var gPrice=$(this).parent().siblings(".gprice").text();
    	var gCount=$(this).parent().siblings(".gcount").text();
	
		var createDiv = document.createElement("div");
		var h3A1 = document.createElement("h2");
		var aText = document.createElement("text");
		var h3A2 = document.createElement("h3");
		var h3A3 = document.createElement("h3");
		var h3A4 = document.createElement("h3");
		
		// var inPut1 = document.createElement("input");
		var inPut2 = document.createElement("input");
		var inPut3 = document.createElement("input");
		var inPut4 = document.createElement("input");
		
		var aa = document.createElement("a");
		var aButton = document.createElement("button");
		
        createDiv.style.background="#ccc";
        // createDiv.style.border="1px solid orange";
        createDiv.style.width="400px";
        createDiv.style.height="495px";
        createDiv.style.position="absolute";
        createDiv.style.right="0px";
        createDiv.style.bottom="0px";
        // createDiv.innerHTML="Testcreateadivelement!";
        $("html").append(createDiv);
        
        h3A1.style.position="absolute";
        h3A1.style.right="150px";
        h3A1.style.top="200px";
        h3A1.innerHTML="商品编号为：";
        $("html").append(h3A1);
        
        aText.style.position="absolute";
        aText.style.right="130px";
        aText.style.top="205px";
        aText.innerHTML=gId;
        aText.id="carid";
        $("html").append(aText);
        
        h3A2.style.position="absolute";
        h3A2.style.right="250px";
        h3A2.style.top="280px";
        h3A2.innerHTML="商品名称 ：";
        $("html").append(h3A2);
        
        h3A3.style.position="absolute";
        h3A3.style.right="250px";
        h3A3.style.top="360px";
        h3A3.innerHTML="商品价格 ：";
        $("html").append(h3A3);
         
        h3A4.style.position="absolute";
        h3A4.style.right="250px";
        h3A4.style.top="440px";
        h3A4.innerHTML="商品数量 ：";
        $("html").append(h3A4);
        
        inPut2.style.position="absolute";
        inPut2.style.right="70px";
        inPut2.style.top="280px";
        inPut2.value=gName;
        // inPut2.innerHTML=carName;
        $("html").append(inPut2);
        
        inPut3.style.position="absolute";
        inPut3.style.right="70px";
        inPut3.style.top="360px";
        inPut3.value=gPrice;
        $("html").append(inPut3);
        
        inPut4.style.position="absolute";
        inPut4.style.right="70px";
        inPut4.style.top="440px";
        inPut4.value=gCount;
        $("html").append(inPut4);
       
       
        aa.style.position="absolute";
        aa.style.right="180px";
        aa.style.top="530px";
        // aa.style.height="30px";
        // aa.style.width="80px";
        aa.id="save";
        aButton.style.height="30px";
        aButton.style.width="80px";
        aButton.innerHTML="保存";
        $("html").append(aa);
        $('#save').append(aButton);
        
        $('#save').click(function(){
        	var newinPut2=inPut2.value;
        	var newinPut3=inPut3.value;
        	var newinPut4=inPut4.value;
        	var gid=aText.innerHTML;
        	// console.log(carid);
        	
        	$("#save").attr("href","http://localhost/clothshop1/index.php/user/grevise?newgname="+newinPut2+"&newgprice="+newinPut3+"&newgcount="+newinPut4+"&newgid="+gid);
		  // });
        });
        
    });
       
       
       
    $('#add').click(function(){
	
	
		var createDiv = document.createElement("div");
		
		var h3A1 = document.createElement("h3");
		var h3A2 = document.createElement("h3");
		var h3A3 = document.createElement("h3");
		var h3A4 = document.createElement("h3");
		var h3A5 = document.createElement("h3");
		
		
		var inPut1 = document.createElement("input");
		var inPut2 = document.createElement("input");
		var inPut3 = document.createElement("input");
		var inPut4 = document.createElement("input");
		var inPut5 = document.createElement("input");
		
		
		var aa = document.createElement("a");
		var aButton = document.createElement("button");
		
        createDiv.style.background="#ccc";
        // createDiv.style.border="1px solid orange";
        createDiv.style.width="400px";
        createDiv.style.height="495px";
        createDiv.style.position="absolute";
        createDiv.style.right="0px";
        createDiv.style.bottom="0px";
        // createDiv.innerHTML="Testcreateadivelement!";
        $("html").append(createDiv);
        
        h3A1.style.position="absolute";
        h3A1.style.right="250px";
        h3A1.style.top="240px";
        h3A1.innerHTML="商品编号 ：";
        $("html").append(h3A1);
        
        h3A2.style.position="absolute";
        h3A2.style.right="250px";
        h3A2.style.top="300px";
        h3A2.innerHTML="商品名称 ：";
        $("html").append(h3A2);
        
        h3A3.style.position="absolute";
        h3A3.style.right="250px";
        h3A3.style.top="360px";
        h3A3.innerHTML="商品样图 ：";
        $("html").append(h3A3);
        
        h3A4.style.position="absolute";
        h3A4.style.right="250px";
        h3A4.style.top="420px";
        h3A4.innerHTML="商品价格 ：";
        $("html").append(h3A4);
         
        h3A5.style.position="absolute";
        h3A5.style.right="250px";
        h3A5.style.top="480px";
        h3A5.innerHTML="商品数量 ：";
        $("html").append(h3A5);
        
        
        
        
        
        inPut1.style.position="absolute";
        inPut1.style.right="70px";
        inPut1.style.top="240px";
        // inPut2.value=carName;
        // inPut2.innerHTML=carName;
        $("html").append(inPut1);
        
        inPut2.style.position="absolute";
        inPut2.style.right="70px";
        inPut2.style.top="300px";
        // inPut2.value=carName;
        // inPut2.innerHTML=carName;
        $("html").append(inPut2);
        
        inPut3.style.position="absolute";
        inPut3.style.right="70px";
        inPut3.style.top="360px";
        // inPut3.value=ncarPrice;
        $("html").append(inPut3);
        
       
        
        inPut4.style.position="absolute";
        inPut4.style.right="70px";
        inPut4.style.top="420px";
        // inPut4.value=carNum;
        $("html").append(inPut4);
        
         inPut5.style.position="absolute";
        inPut5.style.right="70px";
        inPut5.style.top="480px";
        // inPut4.value=carNum;
        $("html").append(inPut5);
        
   
        aa.style.position="absolute";
        aa.style.right="180px";
        aa.style.top="550px";
        // aa.style.height="30px";
        // aa.style.width="80px";
        aa.id="add1";
        aButton.style.height="30px";
        aButton.style.width="80px";
        aButton.innerHTML="添加";
        $("html").append(aa);
        $('#add1').append(aButton);
        
        $('#add1').click(function(){
        	var newinPut1=inPut1.value;
        	var newinPut2=inPut2.value;
        	var newinPut3=inPut3.value;
        	var newinPut4=inPut4.value;
        	var newinPut5=inPut5.value;
        	
        	 
        	
        	 $("#add1").attr("href","http://localhost/clothshop1/index.php/user/add?newgid="+newinPut1+"&newgname="+newinPut2+"&newgimgsrc="+newinPut3+"&newgprice="+newinPut4+"&newgcount="+newinPut5);
		  // });
        });
        
    });
</script>
</body>
</html>