<?php 
	/**
	* Admin page 
	*/
	class Admin extends DController
	{
		
	public function __construct(){
		parent::__construct();  
		Session::checksession(); 
	}

	public function Index(){ 
		$this->home(); 
	}

	public function home(){ 
		$admin_model = $this->load->model("Admin_Model");
		$data['admin_model']=$admin_model;
		$data['id'] = Session::get('userid');
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/home'); 
		$this->load->view('admin/admin_footer'); 
	}
	//--------------------- Page Related Query Start-------------------------------
	public function Create_Page(){ 
		$data=array();
		$table = "tbl_page";
		$query=$pag_name=$pag_des=$pag_slug=$pag_sec=$menu=$pag_content=" ";
		$admin_model = $this->load->model("Admin_Model");
		$data['admin_model']=$admin_model;
		if($_SERVER['REQUEST_METHOD']=='POST'){  
				if(empty($_POST['pag_name'])){  
					$data['pag_nameerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_name = filter_var($_POST['pag_name'], FILTER_SANITIZE_STRING);
					$data['pag_name']=$pag_name=$this->test_input($pag_name); 
				}  
 				
 				if(empty($_POST['pag_des'])){  
					$data['pag_deserr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_des = filter_var($_POST['pag_des'], FILTER_SANITIZE_STRING);
					$data['pag_des']=$pag_des=$this->test_input($pag_des); 
				}  
				 
				if(empty($_POST['pag_slug'])){  
					$data['pag_slugerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_slug = filter_var($_POST['pag_slug'], FILTER_SANITIZE_STRING);
					$data['pag_slug']=$pag_slug=$this->test_input($pag_slug); 
				}  

				if(empty($_POST['pag_sec'])){  
					$data['pag_secerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_sec = filter_var($_POST['pag_sec'], FILTER_SANITIZE_STRING);
					$data['pag_sec']=$pag_sec=$this->test_input($pag_sec); 
				}  

				if(empty($_POST['pag_content'])){  
					$data['pag_contenterr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_content = filter_var($_POST['pag_content'], FILTER_SANITIZE_STRING);
					$data['pag_content']=$pag_content=$this->test_input($pag_content); 
				} 
					
					if(empty($_POST['pag_menu'])){  
					$data['pag_menuerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$menu = filter_var($_POST['pag_menu'], FILTER_SANITIZE_STRING);
					$data['pag_menu']=$pag_menu=$this->test_input($menu); 
				}

				$condition = "pag_name='".$pag_name."'";
				 
				$result = $admin_model->existsting_Check($pag_name,$condition,$table);

				if(!empty($result)){
				 	$data['success']="<span style='color:red; font-weight:bold;'>Page alrady exists.</span>";
				}else{
					if(!empty($pag_name) && !empty($pag_des) && !empty($pag_slug) && !empty($pag_sec) && !empty($menu) ){  

						$result = $admin_model->Create_new_page($pag_name, $pag_des, $pag_slug, $pag_sec, $menu,         $pag_content); 
						if ($result==1) { 
							$data['success']="<span style='color:green; font-weight:bold;'>New Page Create successfylly.</span>";
						} else {
							$data['success']="<span style='color:red; font-weight:bold;'>New Page Create Not-successfylly.</span>";
						}  
					}
				}
				 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/create_page', $data); 
			$this->load->view('admin/admin_footer'); 	 
		}else{ 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/create_page'); 
			$this->load->view('admin/admin_footer'); 
		}
	} 
	public function All_Page($success=NULL){
		$data=array(); 
		$data['success']=$success;
		$admin_model 		= $this->load->model("Admin_Model");
		$data['page'] 		= $admin_model->Show_All_Page();
		$data['admin_model']=$admin_model;
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/page_list',$data); 
		$this->load->view('admin/admin_footer'); 
	}
	public function Page_Delete($id=NULL){
		$table="tbl_page";
		$condition = "pag_id=".$id;
		$data=array(); 
		$admin_model 		= $this->load->model("Admin_Model"); 
		$result 	= $admin_model->Default_Delete($condition,$table);
		$data['admin_model']=$admin_model;
		if(!empty($result)){
			$data['success']="<span style='color:Green; font-weight:bold;'>Page Delete Successfull.</span>"; 
		}else{
			$data['success']="<span style='color:red; font-weight:bold;'>Page not Delete.</span>"; 
		}
		$data['page'] 		= $admin_model->Show_All_Page();
		$data['admin_model']=$admin_model;
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/page_list',$data); 
		$this->load->view('admin/admin_footer');
	} 
	public function Page_Update($id=NULL){

		$table="tbl_page";
		$condition = "pag_id= ".$id;
		$data=array(); 
		$admin_model 		= $this->load->model("Admin_Model"); 
		$data['page_data'] 		= $admin_model->Default_Select($condition,$table);
		$data['admin_model']=$admin_model;
		if($_SERVER['REQUEST_METHOD']=='POST'){  
				if(empty($_POST['pag_name'])){  
					$data['pag_nameerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_name = filter_var($_POST['pag_name'], FILTER_SANITIZE_STRING);
					$data['pag_name']=$pag_name=$this->test_input($pag_name); 
				}  
 				
 				if(empty($_POST['pag_des'])){  
					$data['pag_deserr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_des = filter_var($_POST['pag_des'], FILTER_SANITIZE_STRING);
					$data['pag_des']=$pag_des=$this->test_input($pag_des); 
				}  
				 
				if(empty($_POST['pag_slug'])){  
					$data['pag_slugerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_slug = filter_var($_POST['pag_slug'], FILTER_SANITIZE_STRING);
					$data['pag_slug']=$pag_slug=$this->test_input($pag_slug); 
				}  

				if(empty($_POST['pag_sec'])){  
					$data['pag_secerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_sec = filter_var($_POST['pag_sec'], FILTER_SANITIZE_STRING);
					$data['pag_sec']=$pag_sec=$this->test_input($pag_sec); 
				}  

				if(empty($_POST['pag_content'])){  
					$data['pag_contenterr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$pag_content = filter_var($_POST['pag_content'], FILTER_SANITIZE_STRING);
					$data['pag_content']=$pag_content=$this->test_input($pag_content); 
				} 
					
					if(empty($_POST['pag_menu'])){  
					$data['pag_menuerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$menu = filter_var($_POST['pag_menu'], FILTER_SANITIZE_STRING);
					$data['pag_menu']=$pag_menu=$this->test_input($menu); 
				}
				if(empty($_POST['pag_id'])){  
					$data['pag_iderr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$id = filter_var($_POST['pag_id'], FILTER_SANITIZE_STRING);
					$data['pag_id']=$pag_id=$this->test_input($id); 
				}
				$id = $_POST['pag_id'];
				$condition = "pag_id= ".$id;
				 
				// $result = $admin_model->existsting_Check($pag_name);

				// if($result>1){
				//  	$data['success']="<span style='color:red; font-weight:bold;'>Page alrady exists.</span>";
				// }else{
					if(!empty($pag_name) && !empty($pag_des) && !empty($pag_slug) && !empty($pag_sec) && !empty($menu) ){   
						$result = $admin_model->Page_Update($pag_name, $pag_des, $pag_slug, $pag_sec, $menu,         $pag_content,$condition); 
						if ($result==1) { 
							$data['success']="<span style='color:green; font-weight:bold;'> Page Update successfylly.</span>";
						} else {
							$data['success']="<span style='color:red; font-weight:bold;'> Page Update Not-successfylly.</span>";
						}  
					}
				//}
				 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/edit_page', $data); 
			$this->load->view('admin/admin_footer'); 	 
		}else{
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/edit_page', $data); 
			$this->load->view('admin/admin_footer'); 

		}
		 
	}

	//--------------------- Page Related Query Exit-------------------------------
 
	//--------------------- Post Related Query Start-------------------------------
	public function Create_Post(){  
		$userid = Session::get('userid');  
		$data=array();
		$table = "tbl_post";
			$post_name=$post_des=$post_price=$post_tag=$post_cat=$post_type=$date=$img=" ";
			$admin_model = $this->load->model("Admin_Model");
			$data['admin_model']=$admin_model;
			if($_SERVER['REQUEST_METHOD']=='POST'){
				  
					if(empty($_POST['post_name'])){  
						$data['post_nameerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
					}else{ 
						$post_name = filter_var($_POST['post_name'], FILTER_SANITIZE_STRING);
						$data['post_name']=$post_name=$this->test_input($post_name); 
					}  
	 				
	 				if(empty($_POST['post_des'])){  
						$data['post_deserr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
					}else{ 
						$post_des = filter_var($_POST['post_des'], FILTER_SANITIZE_STRING);
						$data['post_des']=$post_des=$this->test_input($post_des); 
					}  
					 
					if(empty($_POST['post_price'])){  
						$data['post_priceerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
					}else{ 
						$post_price = filter_var($_POST['post_price'], FILTER_SANITIZE_STRING);
						$data['post_price']=$post_price=$this->test_input($post_price); 
					}  

					if(empty($_POST['post_tag'])){  
						$data['post_tagerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
					}else{ 
						$post_tag = filter_var($_POST['post_tag'], FILTER_SANITIZE_STRING);
						$data['post_tag']=$post_tag=$this->test_input($post_tag); 
					}  

					if(empty($_POST['post_cat'])){  
						$data['post_caterr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
					}else{ 
						$post_cat = filter_var($_POST['post_cat'], FILTER_SANITIZE_STRING);
						$data['post_cat']=$post_cat=$this->test_input($post_cat); 
					} 
 					
 					if(empty($_POST['post_type'])){  
						$data['post_typeerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
					}else{ 
						$post_type = filter_var($_POST['post_type'], FILTER_SANITIZE_STRING);
						$data['post_type']=$post_type=$this->test_input($post_type); 
					}
					$date = date('Y-m-d');
					$condition = "name='".$post_name."'";
					 
					//Image Processing start
				    $permit     = array('jpg', 'jpeg', 'png', 'gif');
					$file_name  = $_FILES['image']['name'];
					$file_size  = $_FILES['image']['size'];
					$file_temp  = $_FILES['image']['tmp_name']; 
					$div 		= explode('.', $file_name);
					$file_ext 	= strtolower(end($div));
					$unique_nam = substr(md5(time()),0,10).".".$file_ext;
					$final_img  = "uploads/".$unique_nam;
					$data['images']= $unique_nam;
					$img 		= $unique_nam;
					if(empty($file_name)){  
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Select any Image.</span>";
					}elseif($file_size>1000000){ 
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Image size should be less than 1 MB.</span>"; 
					} elseif(in_array($file_ext, $permit)=== false){
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Upload only ".implode(',', $permit)."  Image.</span>";
					}else{
						$final_img = "uploads/".$unique_nam;
					} 
				  //Image Processing exit 

					if(!empty($post_name) && !empty($post_des) && !empty($post_price) && !empty($post_tag) && !empty($post_cat) ){  

						$result = $admin_model->Create_new_Post($post_name,$post_des,$post_cat,$userid,$date,$post_price,$post_tag,$img,$post_type);
						 
						if (!empty($result)) { 
							move_uploaded_file($file_temp, $final_img);
							$data="<span style='color:green;float:right;font-weight:bold;'>Post Create Successfylly</span>"; 
						} else {
							$data="<span style='color:red;float:right;font-weight:bold;'>Post Create Not-successfylly</span>";
						}  
					}

				 
					 
				header('Location:'.BASED_URL.'/Admin/All_Post?id='.$data); 	 
			}else{ 
				$this->load->view('admin/admin_header',$data); 
				$this->load->view('admin/create_post',$data); 
				$this->load->view('admin/admin_footer'); 
			}
	}
	public function All_Post($success=NULL){
		$data=array();  
		$table="tbl_post";
		$data['success']=$success;
		$admin_model 		= $this->load->model("Admin_Model");
		$data['posts'] 		= $admin_model->Default_All_Select($table);
		$data['admin_model']=$admin_model;
		if(isset($_GET['id'])){
			$data['success']=$_GET['id']; 
		}
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/post_list',$data); 
		$this->load->view('admin/admin_footer');
	}
	public function posts_Delete($id=NULL){
			$table="tbl_post";
			$condition = "id=".$id;
			$data=array(); 
			$admin_model 		= $this->load->model("Admin_Model");
			$admin_model->Post_Image_Unlink($condition,$table); 
			$result 	= $admin_model->Default_Delete($condition,$table);
			if(!empty($result)){
				$data['success']="<span style='color:Green; font-weight:bold;'>Post Delete Successfull.</span>"; 
			}else{
				$data['success']="<span style='color:red; font-weight:bold;'>Post not Delete.</span>"; 
			}
			$data['posts'] 		= $admin_model->Default_All_Select($table);
			$data['admin_model']=$admin_model;
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/post_list',$data); 
			$this->load->view('admin/admin_footer');
	}
	public function posts_Update($id=NULL){
		$userid = Session::get('userid');  
		$data=array();
		$condition = "id= ".$id;
		$table = "tbl_post";
		$post_name=$post_des=$post_price=$post_tag=$post_cat=$post_type=$date=$img=" ";
		$admin_model = $this->load->model("Admin_Model");
		$data['post_data'] 		= $admin_model->Default_Select($condition,$table);
		$data['admin_model']=$admin_model;
		if($_SERVER['REQUEST_METHOD']=='POST'){
			  
				if(empty($_POST['post_name'])){  
					$data['post_nameerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$post_name = filter_var($_POST['post_name'], FILTER_SANITIZE_STRING);
					$data['post_name']=$post_name=$this->test_input($post_name); 
				}  
 				
 				if(empty($_POST['post_des'])){  
					$data['post_deserr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$post_des = filter_var($_POST['post_des'], FILTER_SANITIZE_STRING);
					$data['post_des']=$post_des=$this->test_input($post_des); 
				}  
				 
				if(empty($_POST['post_price'])){  
					$data['post_priceerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$post_price = filter_var($_POST['post_price'], FILTER_SANITIZE_STRING);
					$data['post_price']=$post_price=$this->test_input($post_price); 
				}  

				if(empty($_POST['post_tag'])){  
					$data['post_tagerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$post_tag = filter_var($_POST['post_tag'], FILTER_SANITIZE_STRING);
					$data['post_tag']=$post_tag=$this->test_input($post_tag); 
				}  

				if(empty($_POST['post_cat'])){  
					$data['post_caterr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$post_cat = filter_var($_POST['post_cat'], FILTER_SANITIZE_STRING);
					$data['post_cat']=$post_cat=$this->test_input($post_cat); 
				} 
					
				if(empty($_POST['post_type'])){  
					$data['post_typeerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$post_type = filter_var($_POST['post_type'], FILTER_SANITIZE_STRING);
					$data['post_type']=$post_type=$this->test_input($post_type); 
				}

				if(empty($_POST['id'])){  
					$data['iderr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
					$data['id']=$id=$this->test_input($id); 
				}

				$date 	= '2018-05-04';
				$condition = "name='".$post_name."'";
				 

				// if(!empty($exists)){ 
				//  	$data['success']="<span style='color:red; font-weight:bold;'>Page alrady exists.</span>";
				 	 
				// }else{
					//Image Processing start
				    $permit     = array('jpg', 'jpeg', 'png', 'gif');
					$file_name  = $_FILES['image']['name'];
					$file_size  = $_FILES['image']['size'];
					$file_temp  = $_FILES['image']['tmp_name']; 
					$div 		= explode('.', $file_name);
					$file_ext 	= strtolower(end($div));
					$unique_nam = substr(md5(time()),0,10).".".$file_ext;
					$final_img  = "uploads/".$unique_nam;
					$data['images']= $unique_nam;
					$img 		= $unique_nam;
					if(empty($file_name)){  
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Select any Image.</span>";
					}elseif($file_size>1000000){ 
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Image size should be less than 1 MB.</span>"; 
					} elseif(in_array($file_ext, $permit)=== false){
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Upload only ".implode(',', $permit)."  Image.</span>";
					}else{
						$final_img = "uploads/".$unique_nam;
					} 
				  //Image Processing exit 

					if(!empty($post_name) && !empty($post_des) && !empty($post_price) && !empty($post_tag) && !empty($post_cat) ){  
						$condition="id=".$id;

						$result = $admin_model->Post_Update($post_name,$post_des,$post_cat,$userid,$date,$post_price,$post_tag,$img,$post_type,$condition); 
						if (!empty($result)) { 
							move_uploaded_file($file_temp, $final_img);
							$data['success']="<span style='color:green; font-weight:bold;'>Post Update successfylly.</span>"; 
						} else {
							$data['success']="<span style='color:red; font-weight:bold;'>Post Update Not-successfylly.</span>";
						}  
					}

				// }
				 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/edit_post', $data); 
			$this->load->view('admin/admin_footer'); 	 
		}else{ 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/edit_post',$data); 
			$this->load->view('admin/admin_footer'); 
		}
	}
	//--------------------- Post Related Query Exit-------------------------------

	//--------------------- User Profile Related Query Start-------------------------------
	public function User_Create(){
		$data=array();
		$table = "tbl_user_sr"; 
		$admin_model = $this->load->model("Admin_Model");
		$defultmodel = $this->load->model("DefaultModel");
		$usermodel 	 = $this->load->model("UserModel");
		$data['admin_model']=$admin_model;
		if($_SERVER['REQUEST_METHOD']=='POST'){ 

				if(empty($_POST['name'])){  
					$data['nameerr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$name = $data['name'] = $_POST['name']; 
				}  

				if(empty($_POST['username'])){  
					$data['usernameerr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$username = $data['username'] = $_POST['username']; 
				}

				if(empty($_POST['email'])){  
					$data['emailerr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$email = $data['email'] = $_POST['email']; 
				}

				if(empty($_POST['number'])){  
					$data['numbererr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$number = $data['number'] = $_POST['number']; 
				}

				if(empty($_POST['gender'])){  
					$data['gendererr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$gender = $data['gender'] = $_POST['gender']; 
				}
				if(empty($_POST['pass'])){  
					$data['passerr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$pass = $data['pass'] = $_POST['pass']; 
				}

				if(empty($_POST['repass'])){  
					$data['repasserr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$repass = $data['repass'] = $_POST['repass']; 
				}
				$unique_nam=NULL;
				if(!empty($name) && !empty($email) && !empty($number) && !empty($pass) && !empty($repass) ){ 
					if($pass == $repass){ 
						$pass = md5($pass);
						$result = $defultmodel->user_check($email);
						 if(!empty($result)){
						 	$data['success']="<span style='color:red; font-weight:bold;'>Email alrady exists.</span>";
						 }else{  
							$result = $usermodel->user_signup($table,$name,$username,$email,$number,$gender,$pass,$unique_nam);
							if ($result==1) { 
								$data['success']="<span style='color:green; font-weight:bold;'>Resigtration complete successfylly.</span>";
							} else {
								$data['success']="<span style='color:red; font-weight:bold;'>Resigtration complete Not-successfylly.</span>";
							} 
						 }
					}else{
						$data['repasserr']="<span style='color:red;float:right;font-weight:bold;'>Password Not match.</span>";
					}
				} 
 				 
 
				 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/create_user', $data); 
			$this->load->view('admin/admin_footer'); 	 
		}else{ 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/create_user',$data); 
			$this->load->view('admin/admin_footer'); 
		}
	}

	public function User_List(){
		$data=array(); 
		$table="tbl_user_sr"; 
		$condition = "user_active=1 ";
		$admin_model 		= $this->load->model("Admin_Model");
		$data['user'] 		= $admin_model->Default_Select($condition,$table);
		$data['admin_model']=$admin_model;
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/user_list',$data); 
		$this->load->view('admin/admin_footer');
	}
	public function User_Update($id=NULL){
		$data=array(); 
		$table="tbl_user_sr"; 
		$condition = "id= ".$id;
		$admin_model 		= $this->load->model("Admin_Model");
		$data['user'] 		= $admin_model->Default_Select($condition,$table);
		$data['admin_model']=$admin_model;
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$id 	 = $_POST['id'];
			$approve = $_POST['approve'];
			$condition2 = "id= ".$id;
			$result  = $admin_model->User_Profile_Update($condition2,$table,$approve);
			if(!empty($result)){
				$data['success']="<span style='color:Green; font-weight:bold;'>Profile Update Successfull.</span>"; 
			}else{
				$data['success']="<span style='color:red; font-weight:bold;'>Profile Update not Successfull.</span>"; 
			} 
			header('Location:'.BASED_URL.'/Admin/User_List');
		}else{
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/user_edit',$data); 
			$this->load->view('admin/admin_footer');
		} 
	}
	public function User_Delete($id=NULL){
		$table="tbl_user_sr";
		$condition = "id=".$id;
		$data=array(); 
		$admin_model = $this->load->model("Admin_Model"); 
		$admin_model->User_Image_Unlink($condition,$table); 
		$result 	 = $admin_model->Default_Delete($condition,$table);
		if(!empty($result)){
			$data['success']="<span style='color:Green; font-weight:bold;'>Profile Delete Successfull.</span>"; 
		}else{
			$data['success']="<span style='color:red; font-weight:bold;'>Profile not Delete.</span>"; 
		}
		$data['posts'] 		= $admin_model->Default_All_Select($table);
		$data['admin_model']=$admin_model;
		header('Location:'.BASED_URL.'/Admin/User_List');
	}
	public function Application(){
		$data=array(); 
		$table="tbl_user_sr"; 
		$condition = "user_active=2"; 
		$admin_model 		= $this->load->model("Admin_Model");
		$data['user'] 		= $admin_model->Default_Select($condition,$table);
		$data['exists'] 	= $admin_model->existsting_Check_query($condition,$table);
		$data['admin_model']=$admin_model;
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/application',$data); 
		$this->load->view('admin/admin_footer');
	}
	//--------------------- User Profile Related Query Exit-------------------------------
	//--------------------- Category Related Query Start-------------------------------
	public function Create_Category(){
		$data=array(); 
		$admin_model = $this->load->model("Admin_Model"); 
		$data['admin_model']=$admin_model;
		if($_SERVER['REQUEST_METHOD']=='POST'){ 

				if(empty($_POST['cat_name'])){  
					$data['cat_nameerr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$cat_name = $data['cat_name'] = $_POST['cat_name']; 
				}  

				if(empty($_POST['catpag_des'])){  
					$data['catpag_deserr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$catpag_des = $data['catpag_des'] = $_POST['catpag_des']; 
				}

				if(empty($_POST['cat_type'])){  
					$data['cat_typeerr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$cat_type = $data['cat_type'] = $_POST['cat_type']; 
				}

				if(empty($_POST['sub_cat'])){  
					$data['sub_caterr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$sub_cat = $data['sub_cat'] = $_POST['sub_cat']; 
				}

				$pag_name=NULL;
				$condition="cat_name= '$cat_name'";
				$table="tbl_category";
				$cat_img=NULL;
				 
				if(!empty($cat_name) && !empty($catpag_des) && !empty($cat_type) && !empty($sub_cat) ){  
					$result = $admin_model->existsting_Check($pag_name,$condition,$table);
					 if(!empty($result)){
					 	$data['success']="<span style='color:red; font-weight:bold;'>Email alrady exists.</span>";
					 }else{  
						$result = $admin_model->Create_new_Category($table,$cat_name,$catpag_des,$cat_type,$sub_cat,$cat_img);
						if ($result==1) { 
							$data['success']="<span style='color:green; font-weight:bold;'>Category Create  successfylly.</span>";
						} else {
							$data['success']="<span style='color:red; font-weight:bold;'>Category Create Not-successfylly.</span>";
						} 
					}
					 
				} 
 				 
 
				 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/create_category', $data); 
			$this->load->view('admin/admin_footer'); 	 
		}else{ 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/create_category',$data); 
			$this->load->view('admin/admin_footer'); 
		}
	}
	public function Category_List(){
		$data=array();
		$table = "tbl_category"; 
		$admin_model = $this->load->model("Admin_Model"); 
		$data['admin_model']=$admin_model;
		$data['category'] 		= $admin_model->Default_All_Select($table);
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/cat_list', $data); 
		$this->load->view('admin/admin_footer');
	}
	public function Category_Update($id=NULL){
		$data=array();
		$table = "tbl_category";
		$condition = "cat_id= ".$id; 
		$admin_model = $this->load->model("Admin_Model"); 
		$data['admin_model']=$admin_model;
		$data['category'] 		= $admin_model->Default_Select($condition,$table);
		if($_SERVER['REQUEST_METHOD']=='POST'){ 

				if(empty($_POST['cat_name'])){  
					$data['cat_nameerr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$cat_name = $data['cat_name'] = $_POST['cat_name']; 
				}  

				if(empty($_POST['catpag_des'])){  
					$data['catpag_deserr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$catpag_des = $data['catpag_des'] = $_POST['catpag_des']; 
				}

				if(empty($_POST['cat_type'])){  
					$data['cat_typeerr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$cat_type = $data['cat_type'] = $_POST['cat_type']; 
				}

				if(empty($_POST['sub_cat'])){  
					$data['sub_caterr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$sub_cat = $data['sub_cat'] = $_POST['sub_cat']; 
				}
				if(empty($_POST['cat_id'])){  
					$data['cat_iderr']="<span style='color:red;padding-left:5px;font-size:14px; font-weight:bold;'>*</span>";
				}else{ 
					$cat_id = $data['cat_id'] = $_POST['cat_id']; 
				}

				$pag_name=NULL; 
				$table="tbl_category";
				$cat_img='NULL';
				 
				if(!empty($cat_name) && !empty($catpag_des) && !empty($cat_type) && !empty($sub_cat) ){  
				 
					   
						$result = $admin_model->Update_new_Category($cat_id,$table,$cat_name,$catpag_des,$cat_type,$sub_cat,$cat_img);
						if ($result==1) { 
							$data['success']="<span style='color:green; font-weight:bold;'>Category Update successfylly.</span>";
						} else {
							$data['success']="<span style='color:red; font-weight:bold;'>Category Update  Not-successfylly.</span>";
						} 
					 
					 
				} 
 				 
 
				 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/edit_category', $data); 
			$this->load->view('admin/admin_footer'); 	 
		}else{
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/edit_category', $data); 
			$this->load->view('admin/admin_footer');
		}
	}
	public function Category_Delete($id=NULL){
		$table="tbl_category";
		$condition = "cat_id=".$id;
		$data=array(); 
		$admin_model = $this->load->model("Admin_Model"); 
		$admin_model->Cat_Image_Unlink($condition,$table); 
		$result 	 = $admin_model->Default_Delete($condition,$table);
		if(!empty($result)){
			$data['success']="<span style='color:Green; font-weight:bold;'>Category Delete Successfull.</span>"; 
		}else{
			$data['success']="<span style='color:red; font-weight:bold;'>Category not Delete.</span>"; 
		} 
		header('Location:'.BASED_URL.'/Admin/Category_List/"success"');
	}

	//--------------------- Category Related Query Exit-------------------------------
	//--------------------- Addvaretis Related Query Start-------------------------------
	public function Create_Add(){  
		$data=array(); 
		$admin_model = $this->load->model("Admin_Model");
		$data['admin_model']=$admin_model;
		if($_SERVER['REQUEST_METHOD']=='POST'){
			  
				if(empty($_POST['add_name'])){  
					$data['add_nameerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_name = filter_var($_POST['add_name'], FILTER_SANITIZE_STRING);
					$data['add_name']=$add_name=$this->test_input($add_name); 
				}  
 				
 				if(empty($_POST['add_link'])){  
					$data['add_linkerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_link = filter_var($_POST['add_link'], FILTER_SANITIZE_STRING);
					$data['add_link']=$add_link=$this->test_input($add_link); 
				}  
				 
				if(empty($_POST['add_desc'])){  
					$data['add_descerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_desc = filter_var($_POST['add_desc'], FILTER_SANITIZE_STRING);
					$data['add_desc']=$add_desc=$this->test_input($add_desc); 
				}  

				if(empty($_POST['add_pos'])){  
					$data['add_poserr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_pos = filter_var($_POST['add_pos'], FILTER_SANITIZE_STRING);
					$data['add_pos']=$add_pos=$this->test_input($add_pos); 
				} 

				if(empty($_POST['add_to'])){  
					$data['add_toerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_to = filter_var($_POST['add_to'], FILTER_SANITIZE_STRING);
					$data['add_to']=$add_to=$this->test_input($add_to); 
				}  

				 
				$date_from 	= date('Y-m-d'); 
				 
					//Image Processing start
				    $permit     = array('jpg', 'jpeg', 'png', 'gif');
					$file_name  = $_FILES['image']['name'];
					$file_size  = $_FILES['image']['size'];
					$file_temp  = $_FILES['image']['tmp_name']; 
					$div 		= explode('.', $file_name);
					$file_ext 	= strtolower(end($div));
					$unique_nam = substr(md5(time()),0,10).".".$file_ext;
					$img 		= $unique_nam;
					$final_img  = "uploads/".$unique_nam;
					$data['images']= $unique_nam;
					
					if(empty($file_name)){  
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Select any Image.</span>";
					}elseif($file_size>1000000){ 
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Image size should be less than 1 MB.</span>"; 
					} elseif(in_array($file_ext, $permit)=== false){
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Upload only ".implode(',', $permit)."  Image.</span>";
					}else{
						$final_img = "uploads/".$unique_nam;
					} 
				  //Image Processing exit 

					if(!empty($add_name) && !empty($add_link) && !empty($add_desc) && !empty($add_pos) ){  
						$result = $admin_model->Create_new_Add($add_name,$add_link,$add_desc,$add_pos,$add_to,$date_from,$unique_nam);
						 
						if (!empty($result)) { 
							move_uploaded_file($file_temp, $final_img);
							$data ="<span style='color:green; font-weight:bold;'>New Add Create successfylly.</span>"; 
						} else {
							$data ="<span style='color:red; font-weight:bold;'>New Add Create Not-successfylly.</span>";
						}  
					} 
				 
			header('Location:'.BASED_URL.'/Admin/add_List?id='.$data); 	 
		}else{ 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/create_add',$data); 
			$this->load->view('admin/admin_footer'); 
		}
	}
	public function Add_List(){
		$data=array();
		if(isset($_GET['id'])){
			$string=$_GET['id'];
			if($string=='Success') {
				$data['success']="<span style='color:Green; font-weight:bold;'>Add Update Successfull.</span>";
			}else{
				$data['success']="<span style='color:red; font-weight:bold;'>Add not Updated.</span>";
			}
		} 
		$table = "tbl_add"; 
		$admin_model = $this->load->model("Admin_Model"); 
		$data['admin_model']=$admin_model;
		$data['add'] 		= $admin_model->Default_All_Select($table);
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/add_list', $data); 
		$this->load->view('admin/admin_footer');
	}
	public function Add_Update($id=NULL){
		$data=array(); 
		$table = "tbl_add";
		$condition = "add_id= ".$id; 
		$admin_model = $this->load->model("Admin_Model"); 
		$data['admin_model']=$admin_model;
		$data['add'] 	= $admin_model->Default_Select($condition,$table);


		if($_SERVER['REQUEST_METHOD']=='POST'){
			  
				if(empty($_POST['add_name'])){  
					$data['add_nameerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_name = filter_var($_POST['add_name'], FILTER_SANITIZE_STRING);
					$data['add_name']=$add_name=$this->test_input($add_name); 
				}  
 				
 				if(empty($_POST['add_link'])){  
					$data['add_linkerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_link = filter_var($_POST['add_link'], FILTER_SANITIZE_STRING);
					$data['add_link']=$add_link=$this->test_input($add_link); 
				}  
				 
				if(empty($_POST['add_desc'])){  
					$data['add_descerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_desc = filter_var($_POST['add_desc'], FILTER_SANITIZE_STRING);
					$data['add_desc']=$add_desc=$this->test_input($add_desc); 
				}  

				if(empty($_POST['add_pos'])){  
					$data['add_poserr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_pos = filter_var($_POST['add_pos'], FILTER_SANITIZE_STRING);
					$data['add_pos']=$add_pos=$this->test_input($add_pos); 
				} 

				if(empty($_POST['add_to'])){  
					$data['add_toerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_to = filter_var($_POST['add_to'], FILTER_SANITIZE_STRING);
					$data['add_to']=$add_to=$this->test_input($add_to); 
				}  
				if(empty($_POST['date_from'])){  
					$data['date_fromerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$date_from = filter_var($_POST['date_from'], FILTER_SANITIZE_STRING);
					$data['date_from']=$date_from=$this->test_input($date_from); 
				} 

				if(empty($_POST['add_id'])){  
					$data['add_iderr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$add_id = filter_var($_POST['add_id'], FILTER_SANITIZE_STRING);
					$data['add_id']=$add_id=$this->test_input($add_id); 
				}

				  
				  
				 
					//Image Processing start
				    $permit     = array('jpg', 'jpeg', 'png', 'gif');
					$file_name  = $_FILES['image']['name'];
					$file_size  = $_FILES['image']['size'];
					$file_temp  = $_FILES['image']['tmp_name']; 
					$div 		= explode('.', $file_name);
					$file_ext 	= strtolower(end($div));
					$unique_nam = substr(md5(time()),0,10).".".$file_ext;
					$final_img  = "uploads/".$unique_nam;
					$data['images']= $unique_nam;
					$img 		= $unique_nam;
					if(empty($file_name)){  
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Select any Image.</span>";
					}elseif($file_size>1000000){ 
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Image size should be less than 1 MB.</span>"; 
					} elseif(in_array($file_ext, $permit)=== false){
						$data['file_nameerr']="<span style='color:red;float:right;font-weight:bold;'>Upload only ".implode(',', $permit)."  Image.</span>";
					}else{
						$final_img = "uploads/".$unique_nam;
					} 
				  //Image Processing exit 

					if(!empty($add_name) && !empty($add_link) && !empty($add_desc) && !empty($add_pos) ){  
						$result = $admin_model->Update_Add($add_id,$add_name,$add_link,$add_desc,$add_pos,$add_to,$date_from,$img);
						 
						if (!empty($result)) {
							unlink($img); 
							move_uploaded_file($file_temp, $final_img);
							$data ="Success"; 
						} else {
							$data ="Faild";
						}  
					} 
				 
			//header('Location:'.BASED_URL.'/Admin/add_List?id='.$data); 	 
		}else{ 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/edit_add',$data); 
			$this->load->view('admin/admin_footer'); 
		}
	}
	public function Add_Delete($id=NULL){
		$table="tbl_add";
		$condition = "add_id=".$id;
		$data=array(); 
		$admin_model = $this->load->model("Admin_Model"); 
		$admin_model->Add_Image_Unlink($condition,$table);
		$result 	 = $admin_model->Default_Delete($condition,$table);
		if(!empty($result)){
			$data="<span style='color:Green; font-weight:bold;'>Add Delete Successfull.</span>"; 
		}else{
			$data="<span style='color:red; font-weight:bold;'>Add not Deleted.</span>"; 
		} 
		header('Location:'.BASED_URL.'/Admin/add_List?id='.$data);
	}
	//--------------------- Addvaretis Related Query Exit-------------------------------
	//--------------------- Social Link Related Query Start-------------------------------
	public function Update_Social_Link($id=NULL){ 
		$data = array(); 
		$table = "tbl_social"; 
		$condition = "type=1";
		$admin_model = $this->load->model("Admin_Model");  
		$data['social_link'] = $admin_model->Default_Select($condition,$table);
		$data['admin_model'] = $admin_model;
		if(isset($id)){ 
			$condition = "social_id=$id";
			$data['social_single'] = $admin_model->Default_Select($condition,$table);
		}
		if($_SERVER['REQUEST_METHOD']=='POST'){
			  
				if(empty($_POST['link_nam'])){  
					$data['link_namerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$link_nam = filter_var($_POST['link_nam'], FILTER_SANITIZE_STRING);
					$data['link_nam']=$link_nam=$this->test_input($link_nam); 
				}  
 				
 				if(empty($_POST['link_class'])){  
					$data['link_classerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$link_class = filter_var($_POST['link_class'], FILTER_SANITIZE_STRING);
					$data['link_class']=$link_class=$this->test_input($link_class); 
				}  
				 
				if(empty($_POST['link_url'])){  
					$data['link_urlerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$link_url = filter_var($_POST['link_url'], FILTER_SANITIZE_STRING);
					$data['link_url']=$link_url=$this->test_input($link_url); 
				}   

				if(empty($_POST['link_id'])){  
					$data['link_iderr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$link_id = filter_var($_POST['link_id'], FILTER_SANITIZE_STRING);
					$data['link_id']=$link_id=$this->test_input($link_id); 
				}
				 
				if(!empty($link_nam) && !empty($link_class) && !empty($link_url)){  
					$result = $admin_model->Create_new_social_link($link_id,$link_nam,$link_class, $link_url);
					 
					if (!empty($result)) {  
						$data['success'] ="<span style='color:green; font-weight:bold;'>Social Link Create successfylly.</span>"; 
					} else {
						$data['success'] ="<span style='color:red; font-weight:bold;'>Social Link Create Not-successfylly.</span>";
					}  
				} 
				 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/create_socila',$data); 
			$this->load->view('admin/admin_footer');  	 
		}else{ 
			$this->load->view('admin/admin_header',$data); 
			$this->load->view('admin/create_socila',$data); 
			$this->load->view('admin/admin_footer'); 
		}
	}

	 

	public function Delete_Social_Link($id=NULL){
		$table = "tbl_social"; 
		$condition="social_id=$id";
		$data=array(); 
		$admin_model = $this->load->model("Admin_Model");  
		$result 	 = $admin_model->Default_Delete($condition,$table);
		if(!empty($result)){
			$data="<span style='color:Green; font-weight:bold;'>Social Link Delete Successfull.</span>";
			$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/create_socila',$data); 
		$this->load->view('admin/admin_footer'); 
		}else{
			$data="<span style='color:red; font-weight:bold;'>Social Link not Deleted.</span>"; 
		} 
		
	}
	//--------------------- Social Link Related Query Exit-------------------------------
	//--------------------- Contact Information Related Query Start-------------------------------
	public function Contact_Info($id=NULL){
		$data=array(); 
		$table = "tbl_social"; 
		$condition="social_id=$id";
		$admin_model = $this->load->model("Admin_Model");  
		$data['social_link']=$admin_model->Default_All_Select($table); 
		$data['admin_model']=$admin_model;
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/create_socila',$data); 
		$this->load->view('admin/admin_footer');
	}
	//--------------------- Contact Information Related Query Exit-------------------------------
	//--------------------- Page Settings Related Query Exit-------------------------------
	public function Settings(){
		$data=array();  
		$admin_model = $this->load->model("Admin_Model");   
		$data['admin_model']=$admin_model;
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/setting',$data); 
		$this->load->view('admin/admin_footer');
	}
	public function G_Map(){
		$data=array();   
		$admin_model = $this->load->model("Admin_Model");  
		if($_SERVER['REQUEST_METHOD']=='POST'){
			  
				if(empty($_POST['map_name'])){  
					$data['map_nameerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
				}else{ 
					$map_name = filter_var($_POST['map_name'], FILTER_SANITIZE_STRING);
					$data['map_name']=$map_name=$this->test_input($map_name); 
				}  
				 $sec_name="Gmap Link";
				 $sec_img=NULL;
				 $sec_con="3";
				 $sec_note="Gmap";

				if(!empty($map_name)){   
					$result = $admin_model->G_Map_update($sec_name,$sec_img,$sec_con, $sec_note,$map_name);
					 
					if (!empty($result)) {  
						$data['success'] ="<span style='color:green; font-weight:bold;'>Map Update successfylly.</span>"; 
					} else {
						$data['success'] ="<span style='color:red; font-weight:bold;'>Map update Not-successfylly.</span>";
					}  
				}
			}
		$data['admin_model']=$admin_model;
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/setting',$data); 
		$this->load->view('admin/admin_footer');
	}
	public function Contact_Information(){
		$data=array();   
		$admin_model = $this->load->model("Admin_Model");  
		if($_SERVER['REQUEST_METHOD']=='POST'){ 
			if(empty($_POST['scl_name'])){  
				$data['scl_nameerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
			}else{ 
				$scl_name = filter_var($_POST['scl_name'], FILTER_SANITIZE_STRING);
				$data['scl_name']=$scl_name=$this->test_input($scl_name); 
			}  

			if(empty($_POST['class'])){  
				$data['classerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
			}else{ 
				$class = filter_var($_POST['class'], FILTER_SANITIZE_STRING);
				$data['class']=$class=$this->test_input($class); 
			}

			if(empty($_POST['link'])){  
				$data['linkerr']="<span style='color:red;padding-left:5px;font-size:14px;font-weight:bold;'>*</span>";
			}else{ 
				$link = filter_var($_POST['link'], FILTER_SANITIZE_STRING);
				$data['link']=$link=$this->test_input($link); 
			} 
			$type=2;

			if(!empty($scl_name) || !empty($class)|| !empty($link)){   
				$result = $admin_model->contact_info_update($scl_name,$class,$link,$type); 
				if (!empty($result)) {  
					$data['iformation'] ="<span style='color:green; font-weight:bold;'>Information update successfylly.</span>"; 
				} else {
					$data['iformation'] ="<span style='color:red; font-weight:bold;'>Information update Not-successfylly.</span>";
				}  
			}
		}
		$data['admin_model']=$admin_model;
		$this->load->view('admin/admin_header',$data); 
		$this->load->view('admin/setting',$data); 
		$this->load->view('admin/admin_footer');
	}
	//--------------------- Page Settings Related Query Exit-------------------------------

	public function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
		 

	}
?>