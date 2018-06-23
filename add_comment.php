<?php 
//add_comment
	$connect = new PDO('mysql:host=localhost; dbname=db_mvc', 'root', '');

	$error = '';
	$comment_name = '';
	$comment_content = '';
	if(empty($_POST['comment_name'])){
		$error .='<p class="text-danger"> Name is required</p>';
	}else{
		$comment_name=$_POST['comment_name'];
	}

	 if(empty($_POST['comment_content'])){
		$error .='<p class="text-danger"> Content is required</p>';
	}else{
		$comment_content=$_POST['comment_content'];
	}



	if($error == ''){
		$query='insert into tbl_comments (com_parent_id,com_comment,	com_date) values(:com_parent_id,:com_comment,	:com_date) ';
		$statement = $connect->prepare($query);
		$statement->execute(
			array( 
				'com_parent_id' =>'1',
				'com_comment' =>$comment_content,
				'com_date' =>$comment_name
			)
		);
		$error='<label class="text-success">Comment Added</label>'
	}

$data = array(
	 'error' =>$error
);
	echo json_encode($data);
 ?>