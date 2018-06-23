<?php 
/**
* Admin Model Model
*/
class Admin_Model extends DModel{
	
	public function __construct(){parent::__construct();}
	//--------------------- Page MOdel Query Start-------------------------------	
	public function Create_new_page($pag_name, $pag_des, $pag_slug, $pag_sec, $menu,$pag_content ){ 
		$query = "INSERT INTO tbl_page (pag_name,pag_desc,pag_con,pag_slag,pag_section,pag_content,pag_menu) VALUES (?,?,?,?,?,?,?)";
		return $this->admin_db->Create_new_page_Query($query,$pag_name, $pag_des, $pag_slug, $pag_sec, $menu,$pag_content);
	} 
	public function Show_All_Page(){
		$query = "SELECT * FROM tbl_page";
		return $this->admin_db->Default_List_Show_Query($query);
	}
	public function Page_Update($pag_name, $pag_des, $pag_slug, $pag_sec, $menu,$pag_content,$condition){
		$query = "UPDATE tbl_page SET pag_name='$pag_name', pag_desc='$pag_des', pag_con=NULL, pag_slag='$pag_slug', pag_section='$pag_sec', pag_content='$pag_content', pag_menu='$menu'  WHERE $condition";
		return $this->admin_db->Default_Update_Query($query);
	}
	//--------------------- Page MOdel Query Exit-------------------------------

	//--------------------- Post Related Query Start-------------------------------
	public function Create_new_Post($post_name,$post_des,$post_cat,$userid,$date,$post_price,$post_tag,$img,$post_type){
		$query = "INSERT INTO tbl_post (`name`, `postdesc`, `cat`,`posted`, `postdate`, `price`, `tag`, `img`, `post_type`) 
		VALUES (?,?,?,?,?,?,?,?,?)"; 
		return $this->admin_db->Create_new_post_Query($query,$post_name,$post_des,$post_cat,$userid,$date,$post_price,$post_tag,$img,$post_type);
	} 
	public function Post_Update($post_name,$post_des,$post_cat,$userid,$date,$post_price,$post_tag,$img,$post_type,$condition){
		$query = "UPDATE tbl_post SET name='$post_name', postdesc='$post_des', cat=$post_cat, posted='$userid', postdate='$date', price='$post_price', tag='$post_tag' , img='$img' , post_type='$post_type'  WHERE $condition";
		return $this->admin_db->Default_Update_Query($query);
	}
	//--------------------- Post Related Query Exit-------------------------------

	//--------------------- Default MOdel Start-------------------------------
	public function existsting_Check($pag_name,$condition,$table){
		$query="SELECT * FROM  $table WHERE $condition";
		return $this->admin_db->Default_existsting_Check($query);
	}
	public function existsting_Check_query($condition,$table){
		$query="SELECT * FROM  $table WHERE $condition";
		return $this->admin_db->Default_existsting_Check($query);
	}
	public function Text_Short($text){ 
		return $this->admin_db->String_length($text);
	}
	public function Default_Delete($condition,$table){
		return $this->admin_db->Default_Delete_Query($condition,$table);
	}
	public function Default_Select($condition,$table){
		$sql = "SELECT * FROM  $table  WHERE  ".$condition; 
		return $this->admin_db->Default_Select_Query($sql);
	}
	public function Default_All_Select($table){
		$sql = "SELECT * FROM  $table"; 
		return $this->admin_db->Default_Select_Query($sql);
	}

	public function category($id=NULL){
		$sql = "SELECT * FROM   tbl_category WHERE cat_id=".$id;  
		$data= $this->admin_db->Default_Select_Query($sql);
		foreach ($data as $value) {
			return $value['cat_name'];
		}
	}
	public function Users($id=NULL){
		$sql = "SELECT * FROM   tbl_user_sr WHERE id=".$id;  
		$data= $this->admin_db->Default_Select_Query($sql);
		foreach ($data as $value) {
			return $value['name'];
		}
	}

	public function Post_Type($id=NULL){  
		if($id==2){
		 	$type="Product";
		}elseif($id==3){
		 	$type="Blog";
		}
		return $type;
	}
	public function Gender_Type($id=NULL){  
		if($id==1){
		 	$gender="Male";
		}elseif($id==2){
		 	$gender="Female";
		}
		return $gender;
	}
	public function Check_Role($id=NULL){  
		if($id==1){
		 	$user="Admin";
		}elseif($id==2){
		 	$user="Bloger";
		}elseif($id==3){
		 	$user="User";
		}else{$user=NULL;}
		return $user;
	}
	public function Check_Active($id=NULL){  
		if($id==1){
		 	$gender="Active";
		}elseif($id==2){
		 	$gender="Unactive";
		}
		return $gender;
	}
	public function Category_Type($id=NULL){  
		if($id==1){
		 	$cat="Primary Category";
		}elseif($id==2){
		 	$cat="Sub Category";
		}
		return $cat;
	} 
	public function Add_Image_Unlink($condition,$table){
		$sql = "SELECT * FROM $table WHERE $condition"; 
		$data= $this->admin_db->Default_Select_Query($sql);  
		foreach ($data as $value) {
			$img ="uploads/".$value['add_img'];
			unlink($img);  
		}
	}
	public function Post_Image_Unlink($condition,$table){
		$sql = "SELECT * FROM $table WHERE $condition"; 
		$data= $this->admin_db->Default_Select_Query($sql);  
		foreach ($data as $value) {
			$img ="uploads/".$value['img'];
			unlink($img);  
		}
	}

	public function User_Image_Unlink($condition,$table){
		$sql = "SELECT * FROM $table WHERE $condition"; 
		$data= $this->admin_db->Default_Select_Query($sql);  
		foreach ($data as $value) {
			$img ="uploads/".$value['img'];
			unlink($img);  
		}
	}
	public function Cat_Image_Unlink($condition,$table){
		$sql = "SELECT * FROM $table WHERE $condition"; 
		$data= $this->admin_db->Default_Select_Query($sql);  
		foreach ($data as $value) {
			$img ="uploads/".$value['cat_img'];
			if(empty($img)){
				unset($img);
			}else{ 
				unlink($img);  
			}
		}
	}

	//--------------------- Default MOdel Exit-------------------------------
	//--------------------- User Profile Related Query Start-------------------------------
	 public function User_Profile_Update($condition,$table,$approve){
	 	$query = "UPDATE $table SET user_active='$approve'  WHERE $condition";
		return $this->admin_db->Default_Update_Query($query);
	 }
	//--------------------- User Profile Related Query Exit-------------------------------
	//--------------------- Category Related Query Start-------------------------------
	public function Create_new_Category($table,$cat_name,$catpag_des,$cat_type,$sub_cat,$cat_img){
	 	$query = "INSERT INTO $table (`cat_name`, `cat_title`, `cat_type`,`cat_sub`, `cat_img`) 
		VALUES (?,?,?,?,?)"; 
		return $this->admin_db->Create_new_Category_query($query,$cat_name,$catpag_des,$cat_type,$sub_cat,$cat_img);
	}
	public function Update_new_Category($cat_id,$table,$cat_name,$catpag_des,$cat_type,$sub_cat,$cat_img){
	 	$query = "UPDATE $table SET cat_name='$cat_name', cat_title='$catpag_des', cat_type=$cat_type,cat_sub=$sub_cat, cat_img=$cat_img WHERE cat_id=$cat_id ";

		return $this->admin_db->Default_Update_Query($query);
	}
	//--------------------- Category Related Query Exit-------------------------------
	//--------------------- Advarites Related Query Start------------------------------- 
	public function Create_new_Add($add_name,$add_link,$add_desc,$add_pos,$add_to,$date_from,$img){
	 	$query = "INSERT INTO tbl_add (`add_name`, `add_link`, `add_desc`, `add_position`, `add_img`, `date_from`, `date_to`) 
		VALUES (?,?,?,?,?,?,?)";
		return $this->admin_db->Create_new_Add_Query($query,$add_name, $add_link, $add_desc, $add_pos, $img, $date_from, $add_to); 
	}
	public function Update_Add($add_id,$add_name,$add_link,$add_desc,$add_pos,$add_to,$date_from,$img){
	 	$query = "UPDATE tbl_add SET add_name='$add_name', add_link='$add_link', add_desc='$add_desc', add_position='$add_pos', add_img='$img', date_from='$date_from', date_to='$add_to'  

	 	WHERE add_id=$add_id";

		return $this->admin_db->Default_Update_Query($query);
	}
	 //--------------------- Advarites Related Query Exit-------------------------------
	//--------------------- Social Link Related Query Start-------------------------------
	public function Create_new_social_link($link_id,$link_nam,$link_class, $link_url){
		$query="UPDATE tbl_social SET scl_name='$link_nam', class='$link_class', link='$link_url' WHERE social_id=$link_id"; 
		return $this->admin_db->Default_Update_Query($query); 
	}
	//--------------------- Social Link Related Query Exit-------------------------------
	//--------------------- Contact Information Related Query Start-------------------------------
	public function G_Map_update($sec_name,$sec_img,$sec_con, $sec_note,$map_name){ 
		$query="UPDATE tbl_sec_setting SET sec_name='$sec_name', sec_img='$sec_img', sec_con='$sec_con', sec_note='$sec_note', sec_desc='$map_name' WHERE sec_id=3"; 
		return $this->admin_db->Default_Update_Query($query); 
	}
	public function contact_info_update($scl_name,$class,$link,$type){
		$query="UPDATE tbl_social SET scl_name='$scl_name', class=$class, link='$link', type=$type  WHERE social_id=4"; 
		return $this->admin_db->Default_Update_Query($query);
	}
	//--------------------- Contact Information Related Query Exit-------------------------------
}
 ?> 