<?php 
	/**
	* Blog page 
	*/
	class Blog extends DController
	{
		
		public function __construct()
		{
		parent::__construct(); 
		
		}
		public function index(){
			$this->blog_post();
		}
		public function blog_post(){
			$data				= array();
		$table		  		= "tbl_post";
		$blog		  		= "tbl_post";
		$cat 		  		= "cat=2";
		$postmodel 	  		= $this->load->model("PostModel"); 
		$data['model_obj']  = $postmodel;
		$data['data'] 		= $postmodel->allpost($table,$cat);

		$data['blog'] 		= $postmodel->blog_post_list($blog);

		$defultmodel 	  	= $this->load->model("DefaultModel");
		$data['sec_bg'] 	= $defultmodel;
		$data['default_obj']= $defultmodel;
		$data['socal']		= $defultmodel->socila(); 
		$data['user'] 		= $defultmodel->sr_select();
		$data['add']  		= $defultmodel->add_select();
		$data['con_info']	= $defultmodel->footer_con_info();
		$data['con_pag']	= $defultmodel; 
		$data['tag']		= $defultmodel->footer_page_tag_query();
		$this->load->view('header',$data);
		$this->load->view('breadcrumb_sec',$data);

		$this->load->view('blog',$data); 
		$this->load->view('sidebar',$data);
		$this->load->view('sec_con_row_clo');
		$this->load->view('security_section',$data);
		$this->load->view('footer',$data);
		}

		public function catById(){
		$data 		= array();
		$table		= 'tbl_category';
		$id 		= 1;
		$catmod 	= $this->load->model('CatModel');
		$data['cat']= $catmod->categorybyid($table,$id);
		$this->load->view('catbyid',$data);
		}

		public function post(){ 
		$table 		 = "tbl_post";
		$cat 		 = "cat=2";
		$catmod 	 = $this->load->model("PostModel");
		$data['post']=$catmod->allpost($table,$cat);
		$this->load->view('post',$data);
		} 

	}
?>