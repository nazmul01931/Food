<?php 
/**
* 
*/
class Login extends DController
{
	
	function __construct(){
		parent::__construct(); 
	} 

	public function Index(){ 
		$this-> user();
	}
	public function user($id=NULL){
		$data=array();
		$data['xxx']=$id;
		Session::initial();
		if(Session::get('login')==true){
			header('Location:'.BASED_URL.'/Admin');
		}
		$posmod 	  		= $this->load->model("DefaultModel"); 
		$usermodel 	  		= $this->load->model("UserModel"); 
		$data['default_obj']= $posmod;  
		$this->load->view('admin/login',$data); 
	}

	public function Authenticate(){
		
		$table = 'tbl_user_sr';
		if($_SERVER['REQUEST_METHOD']=='POST'){ 

			$email=$_POST['email'];
			$password=md5($_POST['password']); 
			$LoginModel 	= $this->load->model("LoginModel"); 
			$count 			= $LoginModel->User_exists_count($table,$email,$password);
			 if ($count>0) {
			 	$data = $LoginModel->Get_login_user_data($table,$email,$password);

			 	Session::initial();
			 	Session::set('login', true);
			 	Session::set('email', $data[0]['email']);
			 	Session::set('userid', $data[0]['id']);
			 	header('Location:'.BASED_URL.'/Admin');

			 } else {  
			 $data="<span style='color:red;font-weight:bold; float:left;width:100%;text-align:center;'>Email and Password not match.</span>"; 
			 	$this->user($data);
			 }
			 
		}else{
			header('Location:'.BASED_URL.'/Login');
		}
	}

	public function logout(){
		Session::initial();
		Session::destroy();
		header('Location:'.BASED_URL.'/Login');
	}


	public function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
}