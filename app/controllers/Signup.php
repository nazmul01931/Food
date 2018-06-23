<?php 
	/**
	* Blog page 
	*/
	class Signup extends DController
	{
		
		public function __construct()
		{
		parent::__construct(); 
		$data=array();
		 
		}
		public function index(){
			$this->user();
		}
		
		public function user(){
			$gender=1;//Default gender mel
			$data=array(); 
			$table			= 'tbl_user_sr';
			$usermodel 	    = $this->load->model("UserModel");
			$defultmodel    = $this->load->model("DefaultModel"); 
			if($_SERVER['REQUEST_METHOD']=='POST'){ 

				$permit    = array('jpg', 'jpeg', 'png', 'gif');
				$file_name = $_FILES['image']['name'];
				$file_size = $_FILES['image']['size'];
				$file_temp = $_FILES['image']['tmp_name']; 
				$div = explode('.', $file_name);
				$file_ext = strtolower(end($div));
				$unique_nam =substr(md5(time()),0,10).".".$file_ext;
				$final_img = "uploads/".$unique_nam;
				echo $unique_nam." file Extension || ";
				if(empty($file_name)){  
					$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Select any Image.</span>";
				}elseif($file_size>10000){ 
					$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Image size should be less than 1 MB.</span>"; 
				} elseif(in_array($file_ext, $permit)=== false){
					$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Upload only ".implode(',', $permit)."  Image.</span>";
				}else{
					$final_img = "uploads/".$unique_nam;
				}

				if(empty($_POST['name'])){  
					$data['nameerr']="<span style='color:red;float:right;font-weight:bold;'>Name field is required.</span>";
				}else{ 
					$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
					$data['name']=$name=$this->test_input($name); 
				} //Name Field data receive exit
 
				if(isset($_POST['username']) && !empty($_POST['username'])){   
						$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
						$data['username']=$username=$this->test_input($username); 
				}else{
					$data['usernameerr']="<span style='color:red;float:right;font-weight:bold;'>User field is required.</span>";
				}//UserName Field data receive exit

				if(isset($_POST['email']) && !empty($_POST['email'])){  
						$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
						$data['email']=$email=$this->test_input($email); 
				}else{
					$data['emailerr']="<span style='color:red;float:right;font-weight:bold;'>Email field is required.</span>";
				}//Email Field data receive exit

				if(isset($_POST['number']) && !empty($_POST['number'])){ 
					$data['number']=$number = $_POST['number']; 
				}else{
					$data['numbererr']="<span style='color:red;float:right;font-weight:bold;'>Number field is required.</span>";
				}//Number Field data receive exit

				if(isset($_POST['gender']) && !empty($_POST['gender'])){ 
					$data['gender']=$gender = $_POST['gender']; 
				}else{
					$data['gendererr']="<span style='color:red;float:right;font-weight:bold;'>Gender field is required.</span>";
				}//gender Field data receive exit
				
				if(isset($_POST['pass']) && !empty($_POST['pass'])){  
					$pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
					$data['pass']= $pass = $this->test_input($pass);
					$pass = md5($pass);
				}else{
					$data['passerr']="<span style='color:red;float:right;font-weight:bold;'>Password field is required.</span>";
				}//Password Field data receive exit

				if(isset($_POST['repass']) && !empty($_POST['repass'])){  
						$repass = filter_var($_POST['repass'], FILTER_SANITIZE_STRING);
					 	$repass=$this->test_input(md5($repass));
				}else{
					$data['repasserr']="<span style='color:red;float:right;font-weight:bold;'>Re-Password field is required.</span>";
				}//Re-Password Field data receive exit

				if(!empty($name) && !empty($email) && !empty($number) && !empty($pass) && !empty($repass) ){ 
					if($pass == $repass){ 
						$result = $defultmodel->user_check($email);
						 if(!empty($result)){
						 	$data['success']="<span style='color:red; font-weight:bold;'>Email alrady exists.</span>";
						 }else{  
							$result = $usermodel->user_signup($table,$name,$username,$email,$number,$gender,$pass,$unique_nam);
							if ($result==1) {
								move_uploaded_file($file_temp, $final_img);
								$data['success']="<span style='color:green; font-weight:bold;'>Resigtration complete successfylly.</span>";
							} else {
								$data['success']="<span style='color:red; font-weight:bold;'>Resigtration complete Not-successfylly.</span>";
							} 
						 }
					}else{
						$data['repasserr']="<span style='color:red;float:right;font-weight:bold;'>Password Not match.</span>";
					}
				}
				 
		 
			}//Server Request Condition Exit

		
		 
		$data['con_info']= $defultmodel->footer_con_info();
		$data['con_pag'] = $defultmodel; 
		$data['default_obj'] = $defultmodel; 
		$data['sec_bg']  = $defultmodel;
		$data['tag']	 = $defultmodel->footer_page_tag_query();
		$data['socal']   = $defultmodel->socila(); 
		$data['user']    = $defultmodel->sr_select();
		$data['add']     = $defultmodel->add_select();
		$this->load->view('header',$data); 
		$this->load->view('breadcrumb_sec',$data); 
		$this->load->view('signup',$data);  
		$this->load->view('sidebar',$data);
		$this->load->view('sec_con_row_clo'); 
		$this->load->view('footer',$data);  
	}

	public function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	

	}//Main Class Exit
?>