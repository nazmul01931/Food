<?php 
/**
* Data base Class
*/
	class Database extends PDO
	{
		public $output="";
		public function __construct($dsn, $user, $pass){parent::__construct($dsn, $user, $pass);}

		public function select($sql, $data=array(), $fetchstyle = PDO::FETCH_ASSOC ){ 
			$stmt  	= $this->prepare($sql);  
			foreach ($data as $key => $value) {
				$stmt->bindparam($key, $value);
			} 
			return $stmt->execute();
			return $stmt->fetchAll($fetchstyle); 
		}

		public function catselect($table, $id){  
			$sql 	= "SELECT * FROM $table WHERE id=:id";
			$stmt	= $this->prepare($sql);
			$stmt->bindparam(':id',$id);
			$stmt->execute();
			return $stmt->fetchAll(); 
		}

		public function insert($table, $data){
			$keys 	= implode(",", array_keys($data));
			$values = ":".implode(", :", array_keys($data)); 
			$sql 	= "INSERT INTO $table($keys) VALUES($values)";
			$stmt 	= $this->prepare($sql); 
			foreach ($data as $keys => $values) {
					$stmt->bindparam(":$keys", $values);
				} 
			return $stmt->execute(); 
		}

		public function update($table, $data, $cond){
			$updatekey 		= NULL;
			foreach ($data as $keys => $values) {
				$updatekey .= "$keys=:$keys,";
				}
			$updatekey 		= rtrim($updatekey, ',');
			$sql 			= "UPDATE $table SET $updatekey WHERE $cond";
			$stmt 	 		= $this->prepare($sql); 
			foreach ($data as $keys => $values) {
				$stmt->bindparam(":$keys", $values);
				}
			return $stmt->execute(); 
		}

		public function delete($table,  $cond, $limit){
			$sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
			return $this->exec($sql);
		}

		public function postselect($table){
			$sql= "SELECT * FROM $table"; 
			$stmt=$this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function user_select(){
			$sql="SELECT * FROM tbl_user_sr LIMIT 3";
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function social_link(){
			$sql="SELECT * FROM tbl_social";
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function select_add(){
			$sql="SELECT * FROM tbl_add";
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}


		public function blogpost_select($sql){
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		
		public function section_backround($sql){
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function default_select_query($sql){
			$stmt = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		public function sub_cat_select($sql){ 
			$stmt  = $this->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		public function sub_cat_count($sql){ 
			$stmt  = $this->prepare($sql);
			$stmt->execute();
			return $stmt->rowCount();
		}

		public function form_insert($Name,$Email,$number,$Message,$date){   
			$sql = "INSERT INTO `tbl_message` ( `msg_name`, `msg_email`, `msg_number`, `msg_mssage`, `msg_date`) VALUES (?,?,?,?,?)"; 
			$stmt 	= $this->prepare($sql);
			return $stmt->execute(array($Name,$Email,$number,$Message,$date)); 
		}

	public function load_dynamic_page(){
		$sql = "SELECT * FROM tbl_page WHERE pag_type=1";
		$stmt  = $this->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
 
	public function user_insert($table,$name,$username,$email,$number,$gender,$pass,$unique_nam){   

		$sql="INSERT INTO $table ( `name`, `username`, `email`, `number`, `user_gender`, `pass`, `img`, `user_active`, `bann_img`, `role`, `uer_desc`, `user_address`, `social1`, `social2`, `social3`, `social4`) 
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; 
		
		$stmt = $this->prepare($sql);  
		return $stmt->execute(array($name,$username,$email,$number,$gender,$pass, $unique_nam, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)); 
	}

	public function getData( $limit = 10, $page = 1 ) { 
	    $this->_limit   = $limit;
	    $this->_page    = $page;
	 
	    if ( $this->_limit == 'all' ) {
	        $query      = $this->_query;
	    } else {
	        $query      = $this->_query . " LIMIT " . ( ( $this->_page - 1 ) * $this->_limit ) . ", $this->_limit";
	    }
	    $rs             = $this->_conn->query( $query ); 
	    while ( $row = $rs->fetch_assoc() ) {
	        $results[]  = $row;
	    } 
	    $result         = new stdClass();
	    $result->page   = $this->_page;
	    $result->limit  = $this->_limit;
	    $result->total  = $this->_total;
	    $result->data   = $results; 
	    return $result;
	}


 public function _post_comment_insert($Name,$post_id,$Email,$Message,$date,$paren_id){
 	$query = "INSERT INTO `tbl_comment` (`parent_comment_id`, `comment_sender_name`, `com_email`, `comment`, `post_id`, `date`) VALUES ( ?,?,?,?,?,?);";
 	$stmt  = $this->prepare($query);
	return $stmt->execute(array($paren_id,$Name,$Email,$Message,$post_id,$date)); 
 }

 public function validation_check($email){ 
 	$query = "SELECT id FROM tbl_user_sr WHERE email=?";
 	$stmt  = $this->prepare($query);
	$stmt->execute(array($email)); 
	return $stmt->rowCount();
 }

 	public function search_result($query){ 
 		$stmt  = $this->prepare($query);
		$stmt->execute(); 
		return $stmt->fetchAll();
 	}

 	public function __post_comment_query($sql){
 		$stmt  = $this->prepare($sql);
		$stmt->execute(); 
		return $stmt->rowCount();
 	}
 	public function default_row_count_query($sql){
 		$stmt  = $this->prepare($sql);
		$stmt->execute(); 
		return $stmt->rowCount();
 	}

 	//ADMIN PANEL DATABASE QUERY START HERE
 	public function User_exists_count_row($sql,$email,$Password){//User Exists Check 
 		$stmt  = $this->prepare($sql);
		$stmt->execute(array($email,$Password)); 
		return $stmt->rowCount();
 	}

 	public function select_users_data($sql,$email,$Password){
 		$stmt  = $this->prepare($sql);
		$stmt->execute(array($email,$Password)); 
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
 	}
  

}
?>