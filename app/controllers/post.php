<?php 
/**
* Test Class
*/
class Post extends DController{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function post(){
		$table 		 = "tbl_post";
		$cat 		 = "cat=2";
		$catmod 	 = $this->load->model("PostModel");
		$data['post']=$catmod->allpost($table,$cat);
		$this->load->view('post',$data);
	}

	public function Details($id){ 
		
		$data 		   		= array(); 
		$ptable 	   		= "tbl_post";
		$cat 		  		= "cat=2";
		$ctable 	   		= "tbl_category"; 
		$posmod 	   		= $this->load->model("PostModel");
		$data['posid'] 		= $posmod->getpostbyid($ptable,$ctable,$id);    

		$cattabl	  		= 'tbl_category';
		$catmod  	  		= $this->load->model('CatModel');
		$data['cate'] 	   	= $catmod->catlist($cattabl);
		$data['model_obj'] 	= $catmod; 

		$defaultmodel 	  		= $this->load->model("DefaultModel"); 
		$usermodel 	  		= $this->load->model("UserModel"); 
		$data['socal']		= $defaultmodel->socila(); 
		$data['user'] 		= $defaultmodel->sr_select();
		$data['add']  		= $defaultmodel->add_select();
		$data['con_info']	= $defaultmodel->footer_con_info(); 
		 
		$data['default_obj']= $defaultmodel;  
		$data['usermodel']= $usermodel;  
		$data['con_pag']	= $defaultmodel; 
		
		$data['tag']		= $defaultmodel->footer_page_tag_query(); 
		$this->load->view('header',$data); 
		$this->load->view('single',$data); 
		$this->load->view('sidebar',$data); 
		$this->load->view('section_close'); 
		$this->load->view('footer',$data);
	}

	public function comments(){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$Name 		= $_POST['Name'];
			$post_id 	= $_POST['post_id'];
			$Email 		= $_POST['Email'];
			$Message 	= $_POST['Message'];
			$paren_id 	= $_POST['paren_id'];
			$date 		= date('mm "/" dd');
		 
		$posmod 	  		= $this->load->model("DefaultModel");  
		$complete 			= $posmod->comment_insert($Name,$post_id,$Email,$Message,$date,$paren_id);
		header('Location: '.BASED_URL.'/Post/Details/'.$post_id);
		}
		 
		 
	}
		 
}

 ?>