<?php 
	/**
	* Blog page 
	*/
	class About extends DController
	{
		
		public function __construct()
		{
		parent::__construct(); 
		$data=array();
		$table		  		= "tbl_post";
		$blog		  		= "tbl_blog";
		$cat 		  		= "cat=2"; 
		$posmod 	  		= $this->load->model("DefaultModel");     
		$data['con_info']	= $posmod->footer_con_info();
		$data['default_obj']= $posmod;  
		$data['con_pag']	= $posmod; 
		$data['tag']		= $posmod->footer_page_tag_query();
		$this->load->view('header',$data); 

		$this->load->view('about',$data);   
		$this->load->view('comment',$data);   
		$this->load->view('footer',$data);
		}

		 

	}
?>