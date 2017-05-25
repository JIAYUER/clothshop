 <?php defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
			// $this->load->library('session');
		}
		
		
		public function index(){
			$this->load->view('index.php');     //主页
		}
		
		public function women(){
			  if(isset($_GET['id'])){
		    	$classify=$this->input->get('id');
			$rs=$this->user_model->get_classify($classify);
			$arr["rs"]=$rs;
			$this->load->view('women.php',$arr);
		    }else if(isset($_GET['id1'])){
		    	$classify1=$this->input->get('id1');
			$rs=$this->user_model->get_classify1($classify1);
			$arr["rs"]=$rs;
			$this->load->view('women.php',$arr);
		    }else{
		    	
		    	$classify=15;
			$rs=$this->user_model->get_classify($classify);
			$arr["rs"]=$rs;
			$this->load->view('women.php',$arr);
		   //女装
		}
		}
		
		public function man(){
			  if(isset($_GET['id'])){
		    	$classify=$this->input->get('id');
			$rs=$this->user_model->get_classify($classify);
			$arr["rs"]=$rs;
			$this->load->view('man.php',$arr);
		    }else if(isset($_GET['id1'])){
		    	$classify1=$this->input->get('id1');
			$rs=$this->user_model->get_classify1($classify1);
			$arr["rs"]=$rs;
			$this->load->view('man.php',$arr);
		    }else{
		    	
		    	$classify=22;
			$rs=$this->user_model->get_classify($classify);
			$arr["rs"]=$rs;
			$this->load->view('man.php',$arr);
		     //男装
		}
		}
		public function shoes(){
			if(isset($_GET['id'])){
		    	$classify=$this->input->get('id');
			$rs=$this->user_model->get_classify($classify);
			$arr["rs"]=$rs;
			$this->load->view('shoes.php',$arr);
		    }else if(isset($_GET['id1'])){
		    	$classify1=$this->input->get('id1');
			$rs=$this->user_model->get_classify1($classify1);
			$arr["rs"]=$rs;
			$this->load->view('shoes.php',$arr);
		    }else{
		    	
		    	$classify=29;
			$rs=$this->user_model->get_classify($classify);
			$arr["rs"]=$rs;
			$this->load->view('shoes.php',$arr);
		
		    }    //鞋子
		}
		
		public function bags(){
			if(isset($_GET['id'])){                  //获取t恤、衬衫
		    	$classify=$this->input->get('id');
			$rs=$this->user_model->get_classify($classify);
			$arr["rs"]=$rs;
			$this->load->view('bags.php',$arr);
		    }else if(isset($_GET['id1'])){         //获取女装、男装
		    	$classify1=$this->input->get('id1');
			$rs=$this->user_model->get_classify1($classify1);
			$arr["rs"]=$rs;
			$this->load->view('bags.php',$arr);
		    }else{
		    	
		    	$classify=30;                   
			$rs=$this->user_model->get_classify($classify);
			$arr["rs"]=$rs;
			$this->load->view('bags.php',$arr);
		
		    }     //箱包
		}
		
		public function cart(){
			$uname=$this->session->userdata('uname');
			$ccount=1;
			$csize='XL';
			$id=$this->input->get('id');
			$rs=$this->user_model->get_goods($id);
			 foreach ($rs as $key ) {
			 	
			 	$cimg=$key->gimgsrc;
				$cname=$key->gname;
				$cprice=$key->gprice;
				$csumprice=$key->gprice;
		   }
			$rs1=$this->user_model->pd($cname);//判断数据库中是否存在重复数据
			if($rs1){
				$rs=$this->user_model->get_cart($cimg);
				$arr["rs"]=$rs;
				$this->load->view('cart.php',$arr);     //购物车
			}else{
				$this->user_model->c_insert($uname,$cimg,$cname,$cprice,$csumprice,$ccount,$csize);
				$rs=$this->user_model->get_cart($cimg);
				$arr["rs"]=$rs;
				$this->load->view('cart.php',$arr);     //购物车
			}
		 }
		public function cart_delete()               //商品详情页面
		{
			$cimg=$this->input->get('cimg');
			$rs=$this->user_model->get_cartdelete($cimg);
			
			echo"<script>alert('成功删除商品，欢迎继续购物！')</script>";
			header("Refresh:0;url=index");
		}
		public function order_delete()               //商品详情页面
		{
			
			$oid=$this->input->get('oid');
			$this->user_model->get_orderdelete($oid);
			echo"<script>alert('成功删除商品，欢迎继续购物！')</script>";
			header("Refresh:0;url=index");
		}
		
		public function cart_order()               
		{
			//$uname=$this->session->userdata('uname');
			// var_dump($uname);
			// die();
			$oimg=$this->input->get('cimg');
			$oname=$this->input->get('cname');
			$osize=$this->input->get('csize');
			$oprice=$this->input->get('cprice');
			$ocount=$this->input->get('ccount');
			$osumprice=$this->input->get('csumprice');
			$odate=$this->input->get('cdate');
			$uname=$this->input->get('cuser');
			$opay='在线支付';
			
			$rs=$this->user_model->get_cartorder($uname,$oimg,$oname,$osize,$oprice,$ocount,$osumprice,$odate,$opay);
			echo"<script>alert('商品结算成功，继续逛逛吧！')</script>";
			header("Refresh:0;url=index");
			
			
			
// 			
			// // $csumprice=$this->input->get('csumprice');
// 			
			// $rs=$this->user_model->get_cartorder($oimg);
// 			
			// foreach ($rs as $key ) {
			 	// $oid=$key->gid;
				// $oname=$key->gname;
				// $osumprice=$key->gprice;
				// $ocount=$key->gcount;
		   // }
			// $rs1=$this->user_model->pdo($oname);//判断订单数据库中是否存在重复数据
			// if($rs1){
				// $rs=$this->user_model->get_order($oname);
				// $arr["rs"]=$rs;
				// $this->load->view('myOrder.php',$arr);     //购物车
			// }else{
				// $this->user_model->c_insertorder($oid,$uname,$oname,$odate,$opay,$ocount,$osumprice);
				// $rs=$this->user_model->get_order($oname);
				// $arr["rs"]=$rs;
				// $this->load->view('myOrder.php',$arr);  
			// }
		}

		public function myOrder(){
			$uname=$this->session->userdata('uname');
			
			$rs=$this->user_model->get_order($uname);
			$arr["rs"]=$rs;
			$this->load->view('myOrder.php',$arr);      //我的订单
		}
		
	    public function productdetails()               //商品详情页面
		{
			$id=$this->input->get('id');
			$rs=$this->user_model->get_goods($id);
			
			$arr["rs"]=$rs;
			$this->load->view('product-details.php',$arr);
		}
		
	    public function web_delete(){
	    	$name=$this->input->get('name');
			$rs=$this->user_model->get_webdelete($name);
			$this->load->view('cart.php');     //管理员
		}
	
		public function sort(){
			$this->load->view('sort.php');      //所有分类
		}
		
		public function login(){
			$this->load->view('login.php');      //登录
		}
		public function do_login(){           
			$name=$this->input->post('uname');
			$pass=$this->input->post('pwd');
			$rs=$this->user_model->get_select($name,$pass);
				 if($rs){
				 	$arr=array(	
				 	      'uid'=>$rs->uid,			     
					      'uname'=>$rs->uname,
					      'pwd'=>$rs->pwd,
					      'login_in'=>TRUE
					
					);
					$this->session->set_userdata($arr);
					echo"<script>alert('登录成功')</script>";
					header("Refresh:0;url=index");
				 }else{
						echo"<script>alert('对不起，用户不存在!');history.back();</script>";
					
				 }			
			}
		 
		    public function logout()               //用户注销
		{ 
			$this->load->view('logout.php');
		}
		public function register(){
			$this->load->view('register.php');      //注册
		}         
		 public function do_reg(){
			$name=$this->input->post('uname');
			$pass=$this->input->post('pwd');
			$mail= $this->input->post('mailbox');
			$rs=$this->user_model->checkname($name);
			if($rs){
				echo"<script>alert('对不起，该用户已注册!');history.back();</script>";
			}else{
				$rs=$this->user_model->set_insert($name,$pass,$mail);
				if($rs){
					// echo "<script>setTimeout('location.href='login'',3000)</script>";
					echo"<script>alert('注册已成功，将为你跳转到登录页面')</script>";
					header("Refresh:0;url=login");
				}	
			  }			
			}				
		
		
		
		
		//帮助中心中功能
		
	
		public function payment(){
			$this->load->view('help/payment.php');     //货到付款   支付宝支付
		}
		
		public function policy(){
			$this->load->view('help/policy.php');     //7天退换
		}
		
		public function invoiceSystem(){
			$this->load->view('help/invoiceSystem.php');     //提供发票
		}
		
		public function accountbalance(){
			$this->load->view('account-balance.php');     
		}
		
		public function applygoods(){
			$this->load->view('help/applygoods.php');     
		}
		
		
		
		public function common(){
			$this->load->view('help/common.php');     
		}
		
		public function deliverytime(){
			$this->load->view('help/deliverytime.php');     
		}
// 		
		// public function accountbalance(){
			// $this->load->view('account-balance.php');     
		// }
// 		
		public function ems(){
			$this->load->view('help/ems.php');     
		}
		
		public function express(){
			$this->load->view('help/express.php');     
		}
		
		public function help(){
			$this->load->view('help/help.php');     
		}
        
		public function inspectionsign(){
			$this->load->view('help/inspectionsign.php');     
		}
		
		public function notorder(){
			$this->load->view('help/notorder.php');     
		}
		
		public function orderstatus(){
			$this->load->view('help/orderstatus.php');     
		}
		
		public function payissue(){
			$this->load->view('help/payissue.php');     
		}

        public function refund(){
			$this->load->view('help/refund.php');     
		}
		
		public function timerange(){
			$this->load->view('help/timerange.php');     
		}
		
		
		

		
		public function managerlogin(){
			$this->load->view('managerlogin.php');     //管理员登录
		}
	    
	    public function m_login(){           
			$mname=$this->input->post('mname');
			$mpwd=$this->input->post('mpwd');
			$rs=$this->user_model->m_select($mname,$mpwd);
				 if($rs){
				 	$arr=array(	
				 	      'mid'=>$rs->mid,			     
					      'mname'=>$rs->mname,
					      'mpwd'=>$rs->mpwd,
					      'login_in'=>TRUE
					
					);
					$this->session->set_userdata($arr);
					echo"<script>alert('登录成功')</script>";
					header("Refresh:0;url=h_manager");
				 }else{
						echo"<script>alert('对不起，用户不存在!');history.back();</script>";
					
				 }			
			}
		
		public function mlogout(){
			$this->load->view('mlogout.php');     //管理员退出
		}
	    
		public function manager(){
			$this->load->view('manager.php');     //管理员
		}
		
		
		
		public function goods()
		{
			
			$page_num = '5';//每页的数据
			$data=$this->user_model->page('c_goods',$page_num,$this->uri->segment(3));
			$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
			$data['query']=$data[0]; //把查询结果放到$data['query']中
			$this->load->library('pagination');
			$config['base_url'] = $this->config->item('base_url').'/index.php/user/goods/';
			$config['total_rows'] = $total_nums;//总共多少条数据
			$config['per_page'] = $page_num;//每页显示几条数据
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$config['first_link'] = '首页';
			$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
			$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
			$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
			$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
			$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
			$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
			$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
			$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
			$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
			$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
			$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
			$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
			$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
			$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$this->load->view('goods.php',$data);
			
	}
		public function add()    //添加商品
		{
			$newgid=$this->input->get('newgid');
			$newgname=$this->input->get('newgname');
			$newgimgsrc=$this->input->get('newgimgsrc');
			$newgprice=$this->input->get('newgprice');
			
			$newgcount=$this->input->get('newgcount');
			
			
			
			$rs=$this->user_model->get_gid($newgid);
			if($rs){
				echo"<script>alert('编号已存在，请更改编号!');</script>";
				header("Refresh:0;url=goods");
			}else{
			$rs=$this->user_model->get_add($newgid,$newgname,$newgimgsrc,$newgprice,$newgcount);
			if($rs){
				
				$page_num = '5';//每页的数据
				$data=$this->user_model->page('c_goods',$page_num,$this->uri->segment(3));
				$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
				$data['query']=$data[0]; //把查询结果放到$data['query']中
				$this->load->library('pagination');
				$config['base_url'] = $this->config->item('base_url').'/index.php/user/goods/';
				$config['total_rows'] = $total_nums;//总共多少条数据
				$config['per_page'] = $page_num;//每页显示几条数据
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$config['first_link'] = '首页';
				$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
				$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
				$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
				$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
				$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
				$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
				$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
				$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
				$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
				$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
				$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
				$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
				$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
				$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
				$config['num_tag_close'] = '</li>';
				$this->pagination->initialize($config);
				$this->load->view('goods.php',$data);
				echo"<script>alert('添加成功!');</script>";
			}
			// $grivise=$this->input->get('id');
			// $rs=$this->user_model->get_grivise($grivise);
		}
		}

		public function delete()
		{
			$delete=$this->input->get('id');
			
			
			$rs=$this->user_model->get_delete($delete);
			if($rs){
				
				$page_num = '5';//每页的数据
				$data=$this->user_model->page('c_goods',$page_num,$this->uri->segment(3));
				$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
				$data['query']=$data[0]; //把查询结果放到$data['query']中
				$this->load->library('pagination');
				$config['base_url'] = $this->config->item('base_url').'/index.php/user/goods/';
				$config['total_rows'] = $total_nums;//总共多少条数据
				$config['per_page'] = $page_num;//每页显示几条数据
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$config['first_link'] = '首页';
				$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
				$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
				$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
				$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
				$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
				$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
				$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
				$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
				$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
				$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
				$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
				$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
				$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
				$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
				$config['num_tag_close'] = '</li>';
				$this->pagination->initialize($config);
				$this->load->view('goods.php',$data);
				echo"<script>alert('删除成功!');</script>";
			}
			// var_dump($rs);
			// die;
			
			
		}
		public function grevise()    //修改商品信息
		{
			$newgid=$this->input->get('newgid');
			$newgname=$this->input->get('newgname');
			$newgprice=$this->input->get('newgprice');
			$newgcount=$this->input->get('newgcount');
			$rs=$this->user_model->get_grevise($newgid,$newgname,$newgprice,$newgcount);
			if($rs){
				
				$page_num = '5';//每页的数据
				$data=$this->user_model->page('c_goods',$page_num,$this->uri->segment(3));
				$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
				$data['query']=$data[0]; //把查询结果放到$data['query']中
				$this->load->library('pagination');
				$config['base_url'] = $this->config->item('base_url').'/index.php/user/goods/';
				$config['total_rows'] = $total_nums;//总共多少条数据
				$config['per_page'] = $page_num;//每页显示几条数据
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$config['first_link'] = '首页';
				$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
				$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
				$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
				$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
				$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
				$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
				$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
				$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
				$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
				$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
				$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
				$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
				$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
				$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
				$config['num_tag_close'] = '</li>';
				$this->pagination->initialize($config);
				$this->load->view('goods.php',$data);
				echo"<script>alert('修改成功!');</script>";
			}
			// $grivise=$this->input->get('id');
			// $rs=$this->user_model->get_grivise($grivise);
		}
		public function order()
		{
			
			
			$rs=$this->user_model->get_lorder();//联合查询
			if($rs){
			$page_num = '5';//每页的数据
			$data=$this->user_model->page('lorder',$page_num,$this->uri->segment(3));
			$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
			$data['query']=$data[0]; //把查询结果放到$data['query']中
			$this->load->library('pagination');
			$config['base_url'] = $this->config->item('base_url').'/index.php/user/order/';
			$config['total_rows'] = $total_nums;//总共多少条数据
			$config['per_page'] = $page_num;//每页显示几条数据
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$config['first_link'] = '首页';
			$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
			$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
			$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
			$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
			$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
			$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
			$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
			$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
			$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
			$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
			$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
			$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
			$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
			$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$this->load->view('order.php',$data);
			}
			
			
	}
		public function shopcar(){
			$rs=$this->user_model->get_lshopcar();//联合查询
			if($rs){
			$page_num = '5';//每页的数据
			$data=$this->user_model->page('lshopcar',$page_num,$this->uri->segment(3));
			$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
			$data['query']=$data[0]; //把查询结果放到$data['query']中
			$this->load->library('pagination');
			$config['base_url'] = $this->config->item('base_url').'/index.php/user/shopcar/';
			$config['total_rows'] = $total_nums;//总共多少条数据
			$config['per_page'] = $page_num;//每页显示几条数据
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$config['first_link'] = '首页';
			$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
			$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
			$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
			$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
			$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
			$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
			$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
			$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
			$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
			$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
			$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
			$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
			$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
			$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$this->load->view('shopcar.php',$data);
			}
		}
		
		public function h_manager()
		{
			
			$page_num = '5';//每页的数据
			$data=$this->user_model->page('c_manager',$page_num,$this->uri->segment(3));
			$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
			$data['query']=$data[0]; //把查询结果放到$data['query']中
			$this->load->library('pagination');
			$config['base_url'] = $this->config->item('base_url').'/index.php/user/h_manager/';
			$config['total_rows'] = $total_nums;//总共多少条数据
			$config['per_page'] = $page_num;//每页显示几条数据
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$config['first_link'] = '首页';
			$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
			$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
			$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
			$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
			$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
			$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
			$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
			$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
			$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
			$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
			$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
			$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
			$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
			$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$this->load->view('h_manager.php',$data);
			
		}
		public function madd()    //添加管理员信息
		{
			$mname=$_POST['mname'];
		    $mpwd=$_POST['mpwd'];   
			$rs=$this->user_model->get_tf($mname); 
			if($rs){
				echo"<script>alert('该昵称已存在，请更改昵称!');</script>";
				header("Refresh:0;url=manager");
			}else{
				
			
			$rs=$this->user_model->get_madd($mname,$mpwd);
			if($rs){
				$page_num = '5';//每页的数据
			$data=$this->user_model->page('c_manager',$page_num,$this->uri->segment(3));
			$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
			$data['query']=$data[0]; //把查询结果放到$data['query']中
			$this->load->library('pagination');
			$config['base_url'] = $this->config->item('base_url').'/index.php/user/h_manager/';
			$config['total_rows'] = $total_nums;//总共多少条数据
			$config['per_page'] = $page_num;//每页显示几条数据
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$config['first_link'] = '首页';
			$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
			$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
			$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
			$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
			$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
			$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
			$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
			$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
			$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
			$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
			$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
			$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
			$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
			$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$this->load->view('h_manager.php',$data);
			echo"<script>alert('添加成功!');</script>";
			}
			
			}
			
		}
		
		public function mdelete()    //删除管理员信息
		{
			$mname=$_POST['mname'];
		    $mpwd=$_POST['mpwd']; 
			$rs=$this->user_model->get_tf($mname); 
			if($rs){
				$rs=$this->user_model->get_mdelete($mname,$mpwd);
				if($rs){
				$page_num = '5';//每页的数据
				$data=$this->user_model->page('c_manager',$page_num,$this->uri->segment(3));
				$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
				$data['query']=$data[0]; //把查询结果放到$data['query']中
				$this->load->library('pagination');
				$config['base_url'] = $this->config->item('base_url').'/index.php/user/h_manager/';
				$config['total_rows'] = $total_nums;//总共多少条数据
				$config['per_page'] = $page_num;//每页显示几条数据
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$config['first_link'] = '首页';
				$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
				$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
				$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
				$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
				$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
				$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
				$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
				$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
				$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
				$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
				$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
				$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
				$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
				$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
				$config['num_tag_close'] = '</li>';
				$this->pagination->initialize($config);
				$this->load->view('h_manager.php',$data);
				echo"<script>alert('删除成功!');</script>";
			}
		}else{
			echo"<script>alert('该管理员不存在，请检查输入是否正确!');</script>";
				header("Refresh:0;url=manager");
		}
			
			 
			// var_dump($rs);
			// die;
			
		}
		
		public function mrevise()    //修改管理员信息
		{
			$mname=$_POST['mname'];
		    $mpwd=$_POST['mpwd'];   
			$rs=$this->user_model->get_tf($mname);
			if($rs){
				$rs=$this->user_model->get_mrevise($mname,$mpwd);
				if($rs){
				$page_num = '5';//每页的数据
			$data=$this->user_model->page('c_manager',$page_num,$this->uri->segment(3));
			$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
			$data['query']=$data[0]; //把查询结果放到$data['query']中
			$this->load->library('pagination');
			$config['base_url'] = $this->config->item('base_url').'/index.php/user/h_manager/';
			$config['total_rows'] = $total_nums;//总共多少条数据
			$config['per_page'] = $page_num;//每页显示几条数据
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$config['first_link'] = '首页';
			$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
			$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
			$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
			$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
			$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
			$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
			$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
			$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
			$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
			$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
			$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
			$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
			$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
			$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$this->load->view('h_manager.php',$data);
			echo"<script>alert('修改成功!');</script>";
			}
				
			}else{
				
				echo"<script>alert('未找到该管理员!');</script>";
				header("Refresh:0;url=manager");
				
			}
			 
			// var_dump($rs);
			// die;
			
		}
		public function people()
		{
			
			$page_num = '5';//每页的数据
			$data=$this->user_model->page('c_user',$page_num,$this->uri->segment(3));
			$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
			$data['query']=$data[0]; //把查询结果放到$data['query']中
			$this->load->library('pagination');
			$config['base_url'] = $this->config->item('base_url').'/index.php/user/people/';
			$config['total_rows'] = $total_nums;//总共多少条数据
			$config['per_page'] = $page_num;//每页显示几条数据
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$config['first_link'] = '首页';
			$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
			$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
			$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
			$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
			$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
			$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
			$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
			$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
			$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
			$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
			$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
			$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
			$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
			$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$this->load->view('people.php',$data);
			
	}
public function uadd()    //添加商品
		{
			$newuid=$this->input->get('newuid');
			
			$newuname=$this->input->get('newuname');
			$newpwd=$this->input->get('newpwd');
			$newmailbox=$this->input->get('newmailbox');
			$rs=$this->user_model->get_uid($newuid);
			if($rs){
				echo"<script>alert('编号已存在，请更改编号!');</script>";
				header("Refresh:0;url=people");
			}else{
				$rs=$this->user_model->get_uadd($newuid,$newuname,$newpwd,$newmailbox);
			if($rs){
				
				$page_num = '5';//每页的数据
				$data=$this->user_model->page('c_user',$page_num,$this->uri->segment(3));
				$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
				$data['query']=$data[0]; //把查询结果放到$data['query']中
				$this->load->library('pagination');
				$config['base_url'] = $this->config->item('base_url').'/index.php/user/people/';
				$config['total_rows'] = $total_nums;//总共多少条数据
				$config['per_page'] = $page_num;//每页显示几条数据
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$config['first_link'] = '首页';
				$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
				$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
				$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
				$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
				$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
				$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
				$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
				$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
				$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
				$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
				$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
				$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
				$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
				$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
				$config['num_tag_close'] = '</li>';
				$this->pagination->initialize($config);
				$this->load->view('people.php',$data);
				echo"<script>alert('添加成功!');</script>";
			}
			}
			
			// $grivise=$this->input->get('id');
			// $rs=$this->user_model->get_grivise($grivise);
		}
		
		public function udelete()
		{
			$delete=$this->input->get('id');
			$rs=$this->user_model->get_udelete($delete);
			if($rs){
				
				$page_num = '5';//每页的数据
				$data=$this->user_model->page('c_user',$page_num,$this->uri->segment(3));
				$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
				$data['query']=$data[0]; //把查询结果放到$data['query']中
				$this->load->library('pagination');
				$config['base_url'] = $this->config->item('base_url').'/index.php/user/people/';
				$config['total_rows'] = $total_nums;//总共多少条数据
				$config['per_page'] = $page_num;//每页显示几条数据
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$config['first_link'] = '首页';
				$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
				$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
				$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
				$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
				$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
				$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
				$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
				$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
				$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
				$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
				$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
				$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
				$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
				$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
				$config['num_tag_close'] = '</li>';
				$this->pagination->initialize($config);
				$this->load->view('people.php',$data);
				echo"<script>alert('删除成功!');</script>";
			}
			// var_dump($rs);
			// die;
			
			
		}
public function urevise()    //修改商品信息
		{
			$newuid=$this->input->get('newuid');
			$newuname=$this->input->get('newuname');
			$newpwd=$this->input->get('newpwd');
			$newmailbox=$this->input->get('newmailbox');
			
			$rs=$this->user_model->get_urevise($newuid,$newuname,$newpwd,$newmailbox);
			if($rs){
				
				$page_num = '5';//每页的数据
				$data=$this->user_model->page('c_user',$page_num,$this->uri->segment(3));
				$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
				$data['query']=$data[0]; //把查询结果放到$data['query']中
				$this->load->library('pagination');
				$config['base_url'] = $this->config->item('base_url').'/index.php/user/people/';
				$config['total_rows'] = $total_nums;//总共多少条数据
				$config['per_page'] = $page_num;//每页显示几条数据
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$config['first_link'] = '首页';
				$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
				$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
				$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
				$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
				$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
				$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
				$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
				$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
				$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
				$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
				$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
				$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
				$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
				$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
				$config['num_tag_close'] = '</li>';
				$this->pagination->initialize($config);
				$this->load->view('people.php',$data);
				echo"<script>alert('修改成功!');</script>";
			}
			// $grivise=$this->input->get('id');
			// $rs=$this->user_model->get_grivise($grivise);
		}
		
		
		
	}
	
?>
