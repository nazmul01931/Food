<?php 
/**
* DefaultModel Model 
*/
class UserModel extends DModel{
	
	public function __construct(){parent::__construct();}

	public function post_by_person($user_id=NULL){ 
		$query="SELECT * FROM tbl_user_sr WHERE id=$user_id ";
		return $this->db->default_select_query($query);
	}

	public function post_by_form($table,$Name,$Email,$Message,$number){  
		return $this->db->form_insert($table,$Name,$Email,$Message,$number);
	}

	public function user_signup($table,$name,$username,$email,$number,$gender,$pass,$unique_nam){
		return $this->db->user_insert($table,$name,$username,$email,$number,$gender,$pass,$unique_nam);
	}
	public function user_profile_search($id){
		$query="SELECT * FROM tbl_user_sr WHERE id=$id ";
		return $this->db->default_select_query($query);
	}

 	
}
 ?> 