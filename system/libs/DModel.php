<?php 
	/**
	* Main Model
	*/
	class DModel
	{
		protected $db=array();
		protected $admin_db=array();
		
		public function __construct()
		{
			$dsn = 'mysql:dbname=db_bdfood; host=localhost';
			$user = 'root';
			$pass = '';
			$this->db=new Database($dsn, $user, $pass);
			$this->admin_db=new Admin_Database($dsn, $user, $pass);
		}
	}
 ?>