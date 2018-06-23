<?php 
/**
* Admin Database Class
*/
class Admin_Database extends PDO
{
	public $output="";
	public function __construct($dsn, $user, $pass){parent::__construct($dsn, $user, $pass);}
	//--------------------- Page Related Query Start-------------------------------
	public function Create_new_page_Query($query,$pag_name, $pag_des, $pag_slug, $pag_sec, $menu,$pag_content){ 
		$stmt  = $this->prepare($query);
		return $stmt->execute(array($pag_name, $pag_des,NULL,$pag_slug,$pag_sec,$pag_content, $menu));   
	} 
	//--------------------- Page Related Query Exit-------------------------------	

	//--------------------- Post Related Query Start-------------------------------
	public function Create_new_post_Query($query,$post_name,$post_des,$post_cat,$userid,$date,$post_price,$post_tag,$img,$post_type){  
		 
		$stmt  = $this->prepare($query);
		return $stmt->execute(array($post_name,$post_des,$post_cat,$userid,$date,$post_price,$post_tag,$img,$post_type));
	}
	//--------------------- Post Related Query Exit------------------------------- 

	//--------------------- Default Query Start-------------------------------	 
	public function Default_existsting_Check($query){ 
		 
		$stmt  = $this->prepare($query);
		$stmt->execute(); 
		return $stmt->rowCount();
	}
	public function Default_List_Show_Query($query){
		$stmt  = $this->prepare($query);
		$stmt->execute(); 
		return $stmt->fetchAll();
	}
	public function String_length($text){
		if(strlen($text)>100){
 			$text = substr($text, 0, 100);
 		} 
 		return $text;
	}
	public function Default_Delete_Query($condition,$table){
		$sql = "DELETE FROM $table WHERE $condition";
		return $this->exec($sql);
	}
	public function Default_Select_Query($sql){   
		$stmt=$this->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(); 
	}
	public function Default_Update_Query($query){ 
		$stmt  = $this->prepare($query);
		return $stmt->execute();  
	}
	//--------------------- Default Query Exit-------------------------------	
	//--------------------- User Profile Related Query Start-------------------------------
	 
	//--------------------- User Profile Related Query Exit-------------------------------
	//--------------------- Category Related Query Start-------------------------------
	public function Create_new_Category_query($query,$cat_name,$catpag_des,$cat_type,$sub_cat,$cat_img){ 
		$stmt=$this->prepare($query);
		return $stmt->execute(array($cat_name,$catpag_des,$cat_type,$sub_cat,$cat_img));
	}
	//--------------------- Category Related Query Exit-------------------------------
	//--------------------- Advarities Related Query Start------------------------------- 
	public function Create_new_Add_Query($query,$add_name, $add_link, $add_desc, $add_pos, $img, $date_from, $add_to){
		$stmt  = $this->prepare($query); 
		return $stmt->execute(array($add_name, $add_link, $add_desc, $add_pos, $img, $date_from, $add_to));
	}
	//--------------------- Advarities Related Query Exit-------------------------------
	//--------------------- Social Link Related Query Start-------------------------------
	public function Create_new_social_link_Query($query,$link_nam,$link_class, $link_url){
		$stmt=$this->prepare($query);
		return $stmt->execute(array($link_nam,$link_class, $link_url));
	}
	//--------------------- Social Link Related Query Exit-------------------------------
	//--------------------- Contact Information Related Query Start-------------------------------
	
	//--------------------- Contact Information Related Query Exit-------------------------------
		 
}
?>