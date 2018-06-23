 <?php  
						class Test extends DController	{
							function __construct(){
								parent::__construct();  
							}

							public function Test(){ 
								$data=array(); 
								$posmod= $this->load->model('DefaultModel');
								$data['default_obj']=  $posmod; 
								$data['con_info']	= $posmod->footer_con_info();
								$data['tag']		= $posmod->footer_page_tag_query();
								$this->load->view('header',$data);
								$this->load->view('Test',$data);
								$this->load->view('footer',$data);
							}
						}
				?>