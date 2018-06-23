<?php 
	/**
	* Post Model
	*/
	class PostModel extends DModel
	{ 
		public function __construct(){parent::__construct();}

		public function allpost($table){
			return $this->db->postselect($table);
		}

		public function blog_post_list($blog){
			$sql="SELECT * FROM $blog WHERE post_type=2 || post_type=3";
			return $this->db->blogpost_select($sql);
		}

		public function getpostbyid($ptable,$ctable,$id){
			$sql =" SELECT * FROM $ptable 
				WHERE $ptable.id=$id
			";
			return $this->db->blogpost_select($sql);
		}
		public function postby_person($post_by){
			$sql="SELECT * FROM tbl_user_sr WHERE id=$post_by";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function Top_Slider(){
			$sql = "SELECT * FROM tbl_post WHERE post_type=2 ORDER BY 'id' LIMIT 4 ";
			return $this->db->default_select_query($sql);
		}  

		public function search_result__($data){
			$query = "SELECT * FROM tbl_post WHERE name like '%$data%' OR postdesc like '%$data%'";
			return $this->db->search_result($query);
		}
		public function category_search_result($data){
			$query = "SELECT * FROM tbl_post WHERE cat=$data";
			return $this->db->search_result($query);
		}

		public function search_result__bycat($data){
			$query = "SELECT * FROM tbl_post WHERE cat =$data";
			return $this->db->search_result($query);
		}
	}
 ?>