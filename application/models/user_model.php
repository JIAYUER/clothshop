<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
			public function get_select($name,$pass){
			$arr=array(
				'uname'=>$name,
				'pwd'=>$pass
			);
			$query=$this->db->get_where('c_user',$arr);
			return $query->row();
		}
         
		 public function m_select($mname,$mpwd){
			$arr=array(
				'mname'=>$mname,
				'mpwd'=>$mpwd
			);
			$query=$this->db->get_where('c_manager',$arr);
			return $query->row();
		}
		 
      public function checkname($name){
			$arr=array(
				'uname'=>$name,
			);
			$query=$this->db->get_where('c_user',$arr);
			return $query->row();	
		}
		public function set_insert($name,$pass,$mail){
			$arr=array(
				'uname'=>$name,
				'pwd'=>$pass,
				'mailbox'=>$mail
			);
			$query=$this->db->insert('c_user',$arr);
			return $query;
			
		}
		
		public function get_classify($classify){
			
			$query=$this->db->query("select * from c_goods where conid=$classify");
			return $query->result(); 
			
		}
		
		public function get_classify1($classify1){
			
			$query=$this->db->query("SELECT * FROM c_goods,c_contact WHERE c_contact.p_id=$classify1 and c_contact.conid=c_goods.conid");
			return $query->result(); 
			
		}
		public function get_cartdelete($cimg){
			$query=$this->db->query("delete from lshopcar where cimg='$cimg'");
			
			
		}
		
		public function get_goods($id){
			
			$query=$this->db->query("select * from c_goods where gid = '$id'");
			return $query->result(); 
		}
		public function get_cartorder($uname,$oimg,$oname,$osize,$oprice,$ocount,$osumprice,$odate,$opay){
			
			$query=$this->db->query("INSERT INTO lorder (oname,odate,opay,ocount,osumprice,uname) VALUES ('$oname','$odate','$opay','$ocount','$osumprice','$uname')");
			$query=$this->db->query("select * from lorder");
			return $query->result(); 
		}
		// public function get_cartorder($oimg){
// 			
			// $query=$this->db->query("select * from c_goods where gimgsrc = '$oimg'");
			// return $query->result(); 
		// }
		public function get_orderdelete($oid){
			
			$query=$this->db->query("delete from lorder where oid='$oid'");
			
		}
		public function get_order($uname){
			$query=$this->db->query("select * from lorder where uname = '$uname'");
			return $query->result(); }
		
		public function pd($cname){
			
			$query=$this->db->query("select * from lshopcar where cname = '$cname'");
			return $query->result(); 
		}
		public function pdo($oname){
			
			$query=$this->db->query("select * from lorder where oname = '$oname'");
			return $query->result(); 
		}
		
		public function c_insert($uname,$cimg,$cname,$cprice,$csumprice,$ccount,$csize){
			$arr=array(
			    'uname'=>$uname,
			    'cimg'=>$cimg,
				'cname'=>$cname,
				'cprice'=>$cprice,
				'csumprice'=>$csumprice,
				'ccount'=>$ccount,
				'csize'=>$csize
				
			);
			
		   $query=$this->db->insert('lshopcar',$arr);
		  
			return $query;
		   }
		public function c_insertorder($oid,$uname,$oname,$odate,$opay,$ocount,$osumprice){
			$arr=array(
			    'oid'=>$oid,
			    'uname'=>$uname,
				'oname'=>$oname,
				'odate'=>$odate,
				'opay'=>$opay,
				'ocount'=>$ocount,
				'osumprice'=>$osumprice
				
			);
			
		   $query=$this->db->insert('lorder',$arr);
		  
			return $query;
		   }
	
		public function get_cart($cimg){
			$query=$this->db->query("select * from lshopcar where cimg = '$cimg'");
			return $query->result(); 
		}
		
		
		
		public function get_webshopcar($id){
			
			$query=$this->db->query("select * from lshopcar where gid = '$id'");
			return $query->result(); 
		}
		
	   /*public function c_insert($cname,$cprice){
		   	$arr=array(		   	    
				'cname'=>$cname,
				'cprice'=>$cprice
			);
			$query=$this->db->insert('c_car',$arr);
			$query=$this->db->query("select * from c_car");
			
			return $query;
		}*/
	   public function get_webdelete($name){
			
			$query=$this->db->query("delete from c_car where cname='$name'");
			
			return $query; 
		}
	   
	   
	   
	  
		public function get_manager($manager){
			
			// $query=$this->db->query("select * from carnews where carname like '%$chexi%';");
			$query=$this->db->query("select * from c_manager");
			
			return $query->result(); 
			
		}
		public function get_tf($mname){
			
			// $query=$this->db->query("select * from carnews where carname like '%$chexi%';");
			
			$query=$this->db->query("select mname from c_manager where mname = '$mname'");
			return $query->result(); 
			
		}
		
		public function get_madd($mname,$mpwd){
			
			// $query=$this->db->query("select * from carnews where carname like '%$chexi%';");
			$query=$this->db->query("INSERT INTO c_manager (mname,mpwd) VALUES ('$mname','$mpwd')");
			$query=$this->db->query("select * from c_manager");
			return $query->result(); 
			
		}
		
		public function get_mdelete($mname,$mpwd){
				
			// $query=$this->db->query("select * from carnews where carname like '%$chexi%';");
			$query=$this->db->query("delete from c_manager where mname='$mname' and mpwd='$mpwd'");
			$query=$this->db->query("select * from c_manager");
			return $query->result(); 
			
		}
		
		public function get_mrevise($mname,$mpwd){
			
			// $query=$this->db->query("select * from carnews where carname like '%$chexi%';");
			$query=$this->db->query("UPDATE c_manager SET  mpwd = $mpwd WHERE mname = '$mname'");
			$query=$this->db->query("select * from c_manager");
			return $query->result(); 
			
		}
		public function get_uid($newuid){
			
			// $query=$this->db->query("select * from carnews where carname like '%$chexi%';");
			
			$query=$this->db->query("select uid from c_user where uid = '$newuid'");
			return $query->result(); 
			
		}
		
		public function get_uadd($newuid,$newuname,$newpwd,$newmailbox){
			
			$query=$this->db->query("INSERT INTO c_user (uid,uname,pwd,mailbox) VALUES ('$newuid','$newuname','$newpwd','$newmailbox');");
			$query=$this->db->query("select * from c_user");
			return $query->result(); 
			
		}	
		public function  get_udelete($delete){
			
			// $query=$this->db->query("select * from carnews where carname like '%$chexi%';");
			$query=$this->db->query("delete from c_user where uname='$delete'");
			
			return $query; 
			
		}
		public function get_urevise($newuid,$newuname,$newpwd,$newmailbox){
			
			$query=$this->db->query("UPDATE c_user SET  uname = '$newuname',pwd = '$newpwd',mailbox = '$newmailbox' WHERE uid = $newuid");
			$query=$this->db->query("select * from c_user");
			return $query->result(); 
			
		}
		public function get_gid($newgid){
			
			// $query=$this->db->query("select * from carnews where carname like '%$chexi%';");
			
			$query=$this->db->query("select gid from c_goods where gid = '$newgid'");
			return $query->result(); 
			
		}
		public function get_add($newgid,$newgname,$newgimgsrc,$newgprice,$newgcount){
			
			$query=$this->db->query("INSERT INTO c_goods (gid,gname,gimgsrc,gprice,gcount) VALUES ('$newgid','$newgname','$newgimgsrc','$newgprice','$newgcount');");
			$query=$this->db->query("select * from c_goods");
			return $query->result(); 
			
		}	
		public function get_delete($delete){
			
			// $query=$this->db->query("select * from carnews where carname like '%$chexi%';");
			$query=$this->db->query("delete from c_goods where gname='$delete'");
			
			return $query; 
			
		}
		public function get_grevise($newgid,$newgname,$newgprice,$newgcount){
			
			$query=$this->db->query("UPDATE c_goods SET  gname = '$newgname',gprice = '$newgprice',gcount = $newgcount WHERE gid = $newgid");
			$query=$this->db->query("select * from c_goods");
			return $query->result(); 
			
		}
		public function get_lorder(){
			//$query=$this->db->query("DROP TABLE lorder");
			//$query=$this->db->query("create table lorder select c_order.oid,c_order.oname,c_order.odate,c_order.opay,c_order.ocount,c_order.osumprice,c_user.uname from c_order,c_user where c_order.uid=c_user.uid");
			$query=$this->db->query("select * from lorder");
			return $query->result(); 
			
		}
		
		public function get_lshopcar(){
			//$query=$this->db->query("DROP TABLE lshopcar");
			//$query=$this->db->query("create table lshopcar select c_car.cid,c_car.cimg,c_car.cname,c_car.csize,c_car.cprice,c_car.ccount,c_car.csumprice,c_user.uname from c_car,c_user where c_car.uid=c_user.uid");
			$query=$this->db->query("select * from lshopcar");
			return $query->result(); 
			
		}
		function page($tablename,$per_nums,$start_position){//传入3个参数，表名字，每页的数据量，其实位置
		  $this->db->limit($per_nums,$start_position);
		  $query=$this->db->get($tablename);
		  $data=$query->result();
		  //var_dump($data);
		
		  
		  $data2['total_nums']=$this->db->count_all($tablename);
		  $data2[]=$data; //这里大家可能看的优点不明白，可以分别将$data和$data2打印出来看看是什么结果。
		  //var_dump($data2);
		  //die();
		  return $data2;
		}
		
		
	
	}
?>