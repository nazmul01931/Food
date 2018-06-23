<?php 
	/**
	* Product page 
	*/
	class Product extends DController
	{
		
		public function __construct()
		{
		parent::__construct(); 

		// $data 		  		= array(); 
		// $ptable 	  		= "tbl_post";
		// $cat 		  		= "cat=2";
		// $posmod 	  		= $this->load->model("PostModel");
		// $data['post'] 		= $posmod->allpost($ptable,$cat);  

		// $cattabl	  		= 'tbl_category';
		// $catmod  	  		= $this->load->model('CatModel');
		// $data['cate'] 	   	= $catmod->catlist($cattabl);
		// $data['model_obj'] 	= $catmod;

		// $posmod 	  		= $this->load->model("DefaultModel");
		// $data['sec_bg'] 	= $posmod;
		// $data['default_obj']= $posmod;
		// $data['socal']		= $posmod->socila(); 
		// $data['user'] 		= $posmod->sr_select();
		// $data['add']  		= $posmod->add_select();
		// $data['con_info']	= $posmod->footer_con_info();
		// $data['con_pag']	= $posmod; 
		// $data['tag']		= $posmod->footer_page_tag_query();
		// $this->load->view('header',$data);
		// $this->load->view('product',$data);
		// $this->load->view('sidebar',$data);
		// $this->load->view('section_close');
		// $this->load->view('category_section',$data);
		// $this->load->view('security_section',$data); 
		// $this->load->view('footer',$data);
		}

		public function search($keyword=Null){

			$data 		  		= array(); 
			$search_query = NULL;
			

			if($_SERVER['REQUEST_METHOD']=='POST'){ 
				if(empty($_POST['search_query'])){  
					$data['search_queryerr']="<span style='color:red;float:right;font-weight:bold;'>Write something for a result.</span>";
				}else{ 
					$search_query = filter_var($_POST['search_query'], FILTER_SANITIZE_STRING);
					$data['search_query']=$search_query=$this->test_input($search_query); 
				}
			}
 
			$ptable 	  		= "tbl_post";
			$cat 		  		= "cat=2";
			$posmod 	  		= $this->load->model("PostModel");
			$data['post'] 		= $posmod->allpost($ptable,$cat);  
			$data['search'] 	= $posmod->search_result__($search_query);  
			if(isset($keyword)){
				$data['search'] 	= $posmod->category_search_result($keyword);
				
			}
			$cattabl	  		= 'tbl_category';
			$catmod  	  		= $this->load->model('CatModel');
			$data['cate'] 	   	= $catmod->catlist($cattabl);
			$data['model_obj'] 	= $catmod;

			$posmod 	  		= $this->load->model("DefaultModel");
			$data['sec_bg'] 	= $posmod;
			$data['default_obj']= $posmod;
			$data['socal']		= $posmod->socila(); 
			$data['user'] 		= $posmod->sr_select();
			$data['add']  		= $posmod->add_select();
			$data['con_info']	= $posmod->footer_con_info();
			$data['con_pag']	= $posmod; 
			$data['tag']		= $posmod->footer_page_tag_query();
			$this->load->view('header',$data);
			$this->load->view('product',$data);   
			$this->load->view('footer',$data);
		}

		public function category__($keyword=Null){
			$data 		  		= array(); 
			$search_query = NULL;
			if(isset($keyword)){
				$search_query=$keyword;
			}

			 
 
			$ptable 	  		= "tbl_post";
			$cat 		  		= "cat=2";
			$posmod 	  		= $this->load->model("PostModel");
			$data['post'] 		= $posmod->allpost($ptable,$cat);  
			$data['search'] 	= $posmod->search_result__bycat($search_query);  

			$cattabl	  		= 'tbl_category';
			$catmod  	  		= $this->load->model('CatModel');
			$data['cate'] 	   	= $catmod->catlist($cattabl);
			$data['model_obj'] 	= $catmod;

			$posmod 	  		= $this->load->model("DefaultModel");
			$data['sec_bg'] 	= $posmod;
			$data['default_obj']= $posmod;
			$data['socal']		= $posmod->socila(); 
			$data['user'] 		= $posmod->sr_select();
			$data['add']  		= $posmod->add_select();
			$data['con_info']	= $posmod->footer_con_info();
			$data['con_pag']	= $posmod; 
			$data['tag']		= $posmod->footer_page_tag_query();
			$this->load->view('header',$data);
			$this->load->view('product',$data);   
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