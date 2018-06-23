<?php 
	/**
	* Contact page 
	*/
	class Contact extends DController
	{
		
		public function __construct(){
		parent::__construct(); 
		} 

		public function index(){
			$this->Contact_info();
		}

		public function Contact_info(){
		$data=array();  
		$defaultmodel		= $this->load->model("DefaultModel");  
		$data['default_obj']= $defaultmodel;  
		if($_SERVER["REQUEST_METHOD"] == "POST"){  
				if(empty($_POST['Name'])){  
					$data['Nameerr']="<span style='color:red;float:right;font-weight:bold;'>Name field is required.</span>";
				}else{ 
					$Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
					$data['Name']=$Name=$this->test_input($Name); 
				} //Name Field data receive exit 

				if(isset($_POST['Email']) && !empty($_POST['Email'])){  
						$Email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
						$data['Email']=$Email=$this->test_input($Email); 
				}else{
					$data['Emailerr']="<span style='color:red;float:right;font-weight:bold;'>Email field is required.</span>";
				}//Email Field data receive exit

				if(isset($_POST['number']) && !empty($_POST['number'])){ 
					$data['number']=$number = $_POST['number']; 
				}else{
					$data['numbererr']="<span style='color:red;float:right;font-weight:bold;'>number field is required.</span>";
				}//Number Field data receive exit
				$date	= date('Y/M/D');
				
				if(isset($_POST['Message']) && !empty($_POST['Message'])){  
					$Message = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);
					$data['Message']= $Message = $this->test_input($Message); 
				}else{
					$data['Messageerr']="<span style='color:red;float:right;font-weight:bold;'>Password field is required.</span>";
				}//Password Field data receive exit 

				if(empty($Name)==FALSE && empty($Email)==FALSE	 && empty($Message)==FALSE){  

					$result = $defaultmodel->form_submit_insert($Name,$Email,$number,$Message,$date); 
					if ($result==1) {
						$data['success']="<span style='color:green; font-weight:bold;padding-bottom:30px;float: left;'>Message hasbeen successfylly send.</span>";
					} else {
						$data['success']="<span style='color:red; font-weight:bold; padding-bottom:30px;float: left;'>Message not successfylly send.</span>";
					} 
				}  
			} 
			$data['con_info']	= $defaultmodel->footer_con_info(); 
			$data['con_pag']	= $defaultmodel; 
			$data['tag']		= $defaultmodel->footer_page_tag_query();
			$this->load->view('header',$data);  
			$this->load->view('contact',$data);   
			$this->load->view('footer',$data);
		}

	 

		 

	public function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
		 

	}
?>