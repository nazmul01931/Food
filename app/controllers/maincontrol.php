<?php 
	/**
	* Index Controller
	*/
	class maincontrol extends DController	{
		 
		function __construct(){parent::__construct();}

		public function Index(){
			$this->home();
		}

		public function home(){ 

			$data 		  		= array(); 
			$ptable 	  		= "tbl_post";
			$cat 		  		= "cat=8";
			$posmod 	  		= $this->load->model("PostModel");
			$data['post'] 		= $posmod->allpost($ptable);  
			$data['top_post'] 	= $posmod->Top_Slider();  
			$data['PostModel']	= $posmod;
			$cattabl	  		= 'tbl_category';
			$catmod  	  		= $this->load->model('CatModel');
			$data['cate'] 	   	= $catmod->catlist($cattabl);
			$data['model_obj'] 	= $catmod;
 
			$defaultmodel 	  		= $this->load->model("DefaultModel");
			$data['sec_bg'] 	= $defaultmodel;
			$data['default_obj']= $defaultmodel;
			$data['socal']		= $defaultmodel->socila(); 
			$data['user'] 		= $defaultmodel->sr_select();
			$data['add']  		= $defaultmodel->add_select();
			$data['con_info']	= $defaultmodel->footer_con_info();
			$data['con_pag']	= $defaultmodel; 
			$data['tag']		= $defaultmodel->footer_page_tag_query();
			$this->load->view('header',$data);
			$this->load->view('home',$data);
			$this->load->view('sidebar',$data);
			$this->load->view('section_close');
			$this->load->view('category_section',$data);
			$this->load->view('security_section',$data); 
			$this->load->view('footer',$data);
			$defaultmodel->page_create();
		} 

		

	}
 ?>