<!-- 
	Gallaey Controller start Here
 -->
 <?php  
	class Gallery extends DController{
		function __construct(){
			parent::__construct();  
		}

		public function Gallery(){ 
			$data=array(); 
			$posmod= $this->load->model('DefaultModel');
			$data['default_obj']=  $posmod; 
			$data['con_info']	= $posmod->footer_con_info();
			$data['tag']		= $posmod->footer_page_tag_query();
			$this->load->view('header',$data);
			$this->load->view('Gallery',$data);
			$this->load->view('footer',$data);
		}
	}
?>