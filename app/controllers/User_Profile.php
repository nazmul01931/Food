<?php 
	/**
	* Blog page 
	*/
	class User_Profile extends DController
	{
		
		public function __construct()
		{
		parent::__construct(); 
		
		}

		 public function User($id=NULL){ 
			$data=array(); 
			$cat 		  		= "cat=8";
			$ptable 	  		= "tbl_post";
			$posmod 	  		= $this->load->model("PostModel");
			$data['post'] 		= $posmod->allpost($ptable,$cat);  
			$data['top_post'] 	= $posmod->Top_Slider();  
			$data['PostModel']	= $posmod;
			$cattabl	  		= 'tbl_category';
			$catmod  	  		= $this->load->model('CatModel');
			$data['cate'] 	   	= $catmod->catlist($cattabl);
			$data['model_obj'] 	= $catmod;
			$defaultmodel 	  	= $this->load->model("DefaultModel");  
			$usermodel 	  		= $this->load->model("UserModel");  
			$data['user_info']  = $usermodel->user_profile_search($id);
			$data['con_info']	= $defaultmodel->footer_con_info();  
			$data['socal']		= $defaultmodel->socila(); 
			$data['user'] 		= $defaultmodel->sr_select();
			$data['add']  		= $defaultmodel->add_select();
			$data['default_obj']= $defaultmodel;  
			$data['con_pag']	= $defaultmodel; 
			$data['tag']		= $defaultmodel->footer_page_tag_query(); 
			$this->load->view('header',$data);  
			$this->load->view('profile',$data);   
			$this->load->view('sidebar',$data);
			$this->load->view('footer',$data); 
		 }

	}
?>