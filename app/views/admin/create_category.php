
				<h2>Create a New Category</h2> 
				<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
				<div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>
				
				<div class="body_content">
					<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Admin/Create_Category" method="POST">

					  <div class="control-group">
					    <label class="control-label" for="inputEmail">Category Name:</label> 
					    <div class="controls">
					      <input type="text" id="inputEmail" name="cat_name" value="<?php if(isset($cat_name)){echo $cat_name;}?>" placeholder="Page Name...">
					      <?php if(isset($cat_nameerr)){echo $cat_nameerr;}?>
					    </div>
					  </div> 

					  <div class="control-group">
					    <label class="control-label" for="inputPassword">Category Description:</label>
					    <div class="controls">
					      <input type="text" id="inputPassword" name="catpag_des"  value="<?php if(isset($catpag_des)){echo $catpag_des;}?>"placeholder="Pag Discription">
					      <?php if(isset($catpag_deserr)){echo $catpag_deserr;}?>
					    </div>
					  </div>

						<div class="control-group">
						    <label class="control-label" for="inputPassword">Category Type:</label>
						    <div class="controls"> 
						       <input type="radio" name="cat_type" value="1" 
						       <?php if(isset($cat_type)){if($cat_type==1){echo 'checked="checked"'; }}?>> Main Category
						       <input type="radio" name="cat_type" value="2" 
						       <?php  if(isset($cat_type)){if($cat_type==2){echo 'checked="checked"';}}?>>Sub Category
						    </div>
					  	</div>

					  	<div class="control-group">
						    <label class="control-label" for="">Sub Category:</label>
						    <div class="controls">
						      <select name="sub_cat" >
						      	<option disabled="" selected="">Select One</option> 
						      	<?php if(isset($sub_cat)){ 
						      		$table="tbl_category";
						      		$condition="cat_id=$sub_cat"; 
						      	?>
						      		<option value="<?php echo $sub_cat; ?>" selected="selected"><?php $result= $admin_model->Default_Select($condition,$table); 
						      		foreach ($result as   $value) {echo $value['cat_name'];} ?></option> 
						      	<?php }?>
						      	<?php if (isset($admin_model)) {
						      		$table="tbl_category";
						      		$condition="cat_type=1";
						      		$data = $admin_model->Default_Select($condition,$table); 
						      		foreach ($data as $value) {?>
						      			 <option value="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></option>
						      		<?php }
						      	} ?>
						      	 
						      </select><?php if(isset($post_caterr)){echo $post_caterr;}?>
						    </div>
					  	</div>

					   
					  	 
						<div class="control-group">
						    <div class="controls"> 
						      <button type="submit" class="btn">Create Page</button>
						    </div>
						 </div>
					</form>
				</div> 
				  
			