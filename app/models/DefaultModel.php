<?php 
/**
* DefaultModel Model 
*/
class DefaultModel extends DModel{
	
	public function __construct(){parent::__construct();}

	public function socila(){
		return $this->db->social_link();
	} 

	public function sr_select(){
		return $this->db->user_select();
	} 

	public function add_select(){
		return $this->db->select_add();
	}
	
	public function section_bg($con){
		$sql="SELECT * FROM tbl_sec_setting WHERE sec_con=$con";
		return $this->db->section_backround($sql);
	}

	public function footer_con_info(){
		$sql = "SELECT * FROM tbl_contactinfo";
		return $this->db->default_select_query($sql);
	}

	public function footer_page_query($pag_id){
		$sql = "SELECT * FROM tbl_page WHERE pag_con=$pag_id";
		return $this->db->default_select_query($sql);
	}

	public function footer_page_tag_query(){
		$sql = "SELECT * FROM tbl_post";
		return $this->db->default_select_query($sql);
	}

	public function footer_menu($pag_id){
		$sql = "SELECT * FROM tbl_page WHERE pag_menu=$pag_id";
		return $this->db->default_select_query($sql);
	}

	public function subcategory_select($cat_id){
		 
		$sql = "select * from tbl_category where cat_sub = $cat_id"; 
		return $this->db->sub_cat_select($sql);
	}
	public function subcategory_count($cat_id){
		$sql = "select * from tbl_post where cat= $cat_id"; 
		return $this->db->sub_cat_count($sql);
	}
	
	public function term_condition_section(){
		$sql = "select * from tbl_category where cat_sub = $cat_id"; 
		return $this->db->sub_cat_select($sql);
	}

	public function about_us_page(){
		$sql="SELECT * FROM tbl_page WHERE pag_con=2";
		return $this->db->default_select_query($sql);
	}

	public function about_us_post_query(){
		$sql="SELECT * FROM tbl_post WHERE post_type=3";
		return $this->db->default_select_query($sql);
	}

	public function contact_page_query(){
		$sql="SELECT * FROM tbl_page WHERE pag_con=4"; 
		return $this->db->default_select_query($sql);
	}


	public function comment_query_list($postid){
		$sql="SELECT * FROM tbl_comments WHERE 	com_blog_id = $postid AND com_parent = 0";
		return $this->db->default_select_query($sql);
	}

	public function comment_query_chield($postid,$first_com_id){
		$sql="SELECT * FROM tbl_comments WHERE 	com_blog_id=$postid AND com_parent=$first_com_id";
		return $this->db->default_select_query($sql);
	}

	public function form_submit_insert($Name,$Email,$number,$Message,$date){
		return $this->db->form_insert($Name,$Email,$number,$Message,$date);
	}

	public function main_menu(){
		$sql = "SELECT * FROM tbl_page WHERE pag_menu=2 ORDER BY `pag_id` ASC";
		return $this->db->default_select_query($sql);
	}

	public function page_create(){
		$data= $this->db->load_dynamic_page(); 


		// //////////////////////////////////////
 		 $sfd="=array();";
 		 $datax="data";
 		 $posmod="posmod";
 		 $thiss="this";
		// /////////////////////////////////////
		
		foreach ($data as $value) {
			$pag=$value["pag_name"];
			$fp=fopen('app/controllers/'.$pag.''.'.php','w');
			$fx=fopen('app/views/'.$pag.''.'.php','w');
			fwrite($fp," <?php  
						class ".$pag." extends DController	{
							function __construct(){
								parent::__construct();  
							}

							public function ".$pag."(){ 
								$".$datax.$sfd." 
								$".$posmod."= $".$thiss."->load->model('DefaultModel');
								$".$datax."['default_obj']=  $".$posmod."; 
								$".$datax."['con_info']	= $".$posmod."->footer_con_info();
								$".$datax."['tag']		= $".$posmod."->footer_page_tag_query();
								$".$thiss."->load->view('header',$".$datax.");
								$".$thiss."->load->view('".$pag."',$".$datax.");
								$".$thiss."->load->view('footer',$".$datax.");
							}
						}
				?>"); 
			 
			  fclose($fp);

		}
	}

 

	public function _comments_query($id){
		 $based= BASED_URL; 
		$q = "
			SELECT * FROM tbl_comment 
			WHERE parent_comment_id = '0' AND post_id=$id 
			ORDER BY comment_id DESC
			";
	 	$statement = $this->db->prepare($q);
		$statement->execute();
		$result = $statement->fetchAll();
	 	$this->output = '';
			foreach($result as $row)
			{
				$post_id= $row["post_id"]; 


			 $this->output .= '
			   <div class="comment_palet" style="margin-top:30px;"> 
                <div class="comment">
                  <div class="comment_heading"> <h4>'.$row["comment_sender_name"].'</h4>
                  
                  <p class="time">'.date("d M, h:i A",strtotime($row["date"])).'</p>  
                  </div> 
                  <div class="comment_body"><p>'.$row["comment"].'</p> </div>
                  <div class="comment_heading">
                  	<a href="#collapse'.$row["comment_id"].'" data-toggle="collapse" class="btn pull-right">Replay</a>
                  </div>
                  <div id="collapse'.$row["comment_id"].'" class="panel-collapse collapse"> 
                      <div id="form"> 
                          <form method="post" action="'.$based.'/Post/comments" calss="form-horizontal" style="float:left;width:100%;background:#DADADA;">
                            <div class="form-group">
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Name</label> 
                                <input type="text" name="Name" class="form-control" pleaceholder="Your Name" > 
                                <input type="hidden" name="paren_id" class="form-control" value="'.$row["comment_id"].'"> 
                                <input type="hidden" name="post_id" value="'.$post_id.'" >
 
                              </div> 
                               
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Email</label> 
                                <input type="email" class="form-control" name="Email" pleaceholder="your Email......."> 
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-xs-12">
                                  <label class="label-control">Type Your Comment</label>  
                                <textarea name="Message" class="form-control"></textarea> 
                                <input style="margin-top:5px;" type="submit" value="Submit" class="btn btn-primary">
                              </div>
                            </div>
                          </form>
                      </div>
                    </div>
                </div>   
               </div>   
			   '; 
			 $this->output = $this->_comments_replay_query($id,$row["comment_id"]);
			}
	 	return $this->output;
	}

	public function _comments_replay_query($id,$parent_id = 0,$marginleft = 0){
		 $based= BASED_URL; 
		$q = "
			 SELECT * FROM tbl_comment WHERE post_id= $id AND parent_comment_id = $parent_id
			 "; 
	 	$statement = $this->db->prepare($q);
			 $statement->execute();
	 	 $num = $statement->rowCount(); 
	  $result = $statement->fetchAll();
	 	if($parent_id == 0)
		 {
		  $marginleft = 0;
		 }
		 else
		 {
		  $marginleft = $marginleft + 48;
		 }
		 if($num > 0)
			 {
			  foreach($result as $row)
			  {
			  	$post_id= $row["post_id"]; 
			   $this->output .= '
			   <div class="comment_palet" > 
                <div class="comment"style="margin-left:'.$marginleft.'px; ">

                  <div class="comment_heading"> <h4>'.$row["comment_sender_name"].'</h4> 
                  <p class="time">'.date("d M, h:i A",strtotime($row["date"])).'</p>  
                  </div> 
                  <div class="comment_body"><p>'.$row["comment"].'</p> </div>
                   <div class="comment_heading">
                  	<a href="#collapse'.$row["comment_id"].'" data-toggle="collapse" class="btn pull-right">Replay</a>
                  </div>
                  <div id="collapse'.$row["comment_id"].'" class="panel-collapse collapse"> 
                      <div id="form" action=""> 
                          <form action="'.$based.'/Post/comments" method="post" calss="form-horizontal" style="float:left;width:100%;background:#DADADA;">
                            <div class="form-group">
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Name</label> 
                                <input type="text" name="Name" class="form-control" pleaceholder="Your Name" require> 
                                <input type="hidden" name="paren_id" class="form-control" value="'.$row["comment_id"].'"> 
                                <input type="hidden" name="post_id" value="'.$post_id.'" >
                              </div> 
                              <input type="hidden" value=""> 
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Email</label> 
                                <input type="email" name="Email" class="form-control" pleaceholder="your Email................"> 
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-xs-12">
                                  <label class="label-control">Type Your Comment</label>  
                                <textarea name="Message" class="form-control"></textarea> 
                                <input style="margin-top:5px;" type="submit" value="Submit" class="btn btn-primary">
                              </div>
                            </div>
                          </form>
                      </div>
                    </div>
                </div>   
               </div>    
			   ';
			   $this->output = $this->_comments_replay_query($id, $row["comment_id"], $marginleft);
			  }
			 }
			 return $this->output;
			} 
	

	public function comment_insert($Name,$post_id,$Email,$Message,$date,$paren_id){
		return $this->db->_post_comment_insert($Name,$post_id,$Email,$Message,$date,$paren_id);
	}

	public function user_check($email){
		return $this->db->validation_check($email);
	}

	public function comment_query_single_post($id){
		$sql ="SELECT * FROM tbl_comment WHERE post_id=$id";
		return $this->db->__post_comment_query($sql);
	}
	public function main_category_search($main_cat){
		$sql = "select * from tbl_category where cat_id = $main_cat"; 
		return $this->db->sub_cat_select($sql);
	}

	public function default_count_query($id, $table){
		$sql ="SELECT * FROM $table WHERE posted = $id";
		return $this->db->default_row_count_query($sql);
	}
	 
	public function select_post_bycategory($id){
		$sql = "SELECT * FROM tbl_post LEFT JOIN  tbl_category ON tbl_category.cat_id=tbl_post.cat WHERE  
		tbl_category.cat_sub=$id";
		// $sql = "select * from tbl_post where cat = $id"; 
		return $this->db->search_result($sql);
	} 
	public function Default_All_Select($table){
		$sql = "SELECT * FROM  $table"; 
		return $this->db->Default_Select_Query($sql);
	}
}
 ?> 