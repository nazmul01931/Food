<?php 
	if(isset($post_data)){
		foreach ($post_data as $value) {
			$post_id 	= $value['id'];
			$post_name 	= $value['name'];
			$post_des 	= $value['postdesc'];
			$post_price = $value['price']; 
			$post_tag 	= $value['tag'];
			$post_cat 	= $value['cat'];
			$post_type 	= $value['post_type'];
			$images2	= $value['img']; 
		} 

	}
 ?>
				<h2>Create a New Post</h2> 
				<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
				<div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>
				
				<div class="body_content">
					<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Admin/posts_Update" method="POST" enctype="multipart/form-data">
					  <div class="control-group">
					    <label class="control-label" for="">Post Name:</label> 
					    <div class="controls">
					    	<input type="hidden" name="id" value="<?php if(isset($post_id)){echo $post_id;}?>">
					      <input type="text" id="" name="post_name" value="<?php if(isset($post_name)){echo $post_name;}?>" placeholder="Post Name...">
					      <?php if(isset($post_nameerr)){echo $post_nameerr;}?>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="">Post Description:</label>
					    <div class="controls">
					      <input type="text" id="" name="post_des"  value="<?php if(isset($post_des)){echo $post_des;}?>"placeholder="Post Discription">
					      <?php if(isset($post_deserr)){echo $post_deserr;}?>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for=""> Price:</label>
					    <div class="controls">
					      <input type="number" id="" name="post_price" value="<?php if(isset($post_price)){echo $post_price;}?>" placeholder="Post Price ">
					      <?php if(isset($post_priceerr)){echo $post_priceerr;}?>
					    </div>
					  </div>
						<div class="control-group">
						    <label class="control-label" for="">Post Tag:</label>
						    <div class="controls">
						      <input type="text" name="post_tag" value="<?php if(isset($post_tag)){echo $post_tag;}?>" placeholder="Pag Tag">
						      <?php if(isset($post_tagerr)){echo $post_tagerr;}?>
						    </div>
					  	</div>

					  	<div class="control-group">
						    <label class="control-label" for="">Category:</label>
						    <div class="controls">
						      <select name="post_cat" >
						      	<option disabled="" selected="">Select One</option>
						      	<?php if(isset($post_cat)){ 
						      		$table="tbl_category";
						      		$condition="cat_id=$post_cat"; 
						      	?>
						      		<option value="<?php echo $post_cat; ?>" selected="selected"><?php $result= $admin_model->Default_Select($condition,$table); 
						      		foreach ($result as   $value) {echo $value['cat_name'];} ?></option> 
						      	<?php }?>
						      	
						      	<?php if (isset($admin_model)) {
						      		$table="tbl_category";
						      		$condition="cat_type=2";
						      		$data = $admin_model->Default_Select($condition,$table); 
						      		foreach ($data as $value) {?>
						      			 <option value="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></option>
						      		<?php }
						      	} ?>
						      	 
						      </select><?php if(isset($post_caterr)){echo $post_caterr;}?>
						    </div>
					  	</div>
					  	

					  	<div class="control-group">
						    <label class="control-label" for="">Post Type:</label>
						    <div class="controls"> 
						       <input type="radio" name="post_type" value="3" 
						       <?php if(isset($post_type)){if($post_type==3){echo 'checked="checked"'; }}?>> Blog
						       <input type="radio" name="post_type" value="2" 
						       <?php if(isset($post_type)){if($post_type==2){echo 'checked="checked"';}}?>>Product
						       <?php if(isset($post_typeerr)){echo $post_typeerr;}?>
						    </div>
					  	</div>
					  	<div class="control-group"> 
						    
						      <div class="control-group">
							    <label class="control-label" for="">Upload File:</label>
							    <div class="controls">
							      <input type="file" name="image"> <?php if(isset($file_nameerr)){echo $file_nameerr;}?>
							    	<?php if(isset($images)){ ?>
							    	<img src="<?php echo BASED_URL;?>/uploads/<?php if(isset($images)){echo $images;}?>" alt="image">
							    	<?php }?>
							    </div> 
							 
						    </div>
					  	</div>
						<div class="control-group">
						    <div class="controls"> 
						      <button type="submit" class="btn">Create Post</button>
						    </div>
						 </div>
					</form>
				</div> 
				  
			