<?php 
/**
* Login Model
*/
class LoginModel extends DModel{
	
	public function __construct(){parent::__construct();}

	public function User_exists_count($table,$email,$Password){
		$sql = "SELECT * FROM $table WHERE email=? AND pass=?";
		return $this->db->User_exists_count_row($sql,$email,$Password);
	}

	public function Get_login_user_data($table,$email,$password){
		$sql = "SELECT * FROM $table WHERE email=? AND pass=?";
		return $this->db->select_users_data($sql,$email,$password);
	}
}