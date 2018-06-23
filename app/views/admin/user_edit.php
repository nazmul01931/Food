<?php 
	if(isset($user)){
		foreach ($user as $value) {
			$id 			= $value['id'];
			$name 			= $value['name'];
			$username 		= $value['username'];
			$email 			= $value['email']; 
			$number 		= $value['number'];
			$user_gender 	= $value['user_gender'];
			$pass 			= $value['pass'];
			$img			= $value['img']; 
			$user_active	= $value['user_active']; 
			$role			= $value['role']; 
			$uer_desc		= $value['uer_desc']; 
			$user_address	= $value['user_address']; 
			$social1		= $value['social1']; 
			$social2		= $value['social2'];  
		} 

	}
 ?>
				<h2>Create a New Post</h2> 
				<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
				<div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>
				
				<div class="body_content">
					<table class="table  ">
				       
				      <tbody>
				      	<tr> 
				          <td class="col-xs-2">Image</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7">
				          	<img style="height: 100px;width: 100px;" src="<?php echo BASED_URL; ?>/uploads/<?php if(isset($img)){echo $img;} ?>">
				          </td>
				        </tr>
				        <tr> 
				          <td class="col-xs-2">Name</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($name)){echo $name;} ?></td> 
				        </tr>
				        <tr> 
				          <td class="col-xs-2">User Name</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($username)){echo $username;}?></td> 
				        </tr>
				        <tr> 
				          <td class="col-xs-2">Email</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($email)){echo $email;} ?></td>
				        </tr>
				        <tr> 
				          <td class="col-xs-2">Nuumber</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($number)){echo $number;} ?></td>
				        </tr>
				        <tr> 
				          <td class="col-xs-2">Gender</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($user_gender)){echo $admin_model->Gender_Type($user_gender);} ?></td>
				        </tr>
				         
				        
				        <tr> 
				          <td class="col-xs-2">Active</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($user_active)){echo $admin_model->Check_Active($user_active);} ?></td>
				        </tr>
				        <tr> 
				          <td class="col-xs-2">Role</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($role)){echo  $admin_model->Check_Role($role);} ?></td>
				        </tr>
				        <tr> 
				          <td class="col-xs-2">Description</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"> <?php if(isset($uer_desc)){echo $uer_desc;} ?></td>
				        </tr>
				        <tr> 
				          <td class="col-xs-2">Address</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($user_address)){echo $user_address;} ?></td>
				        </tr>
				        <tr> 
				          <td class="col-xs-2">Facebook profile</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($social1)){echo $social1;} ?></td>
				        </tr>
				        <tr> 
				          <td class="col-xs-2">Google Profile</td>
				          <td class="col-xs-1">:</td>
				          <td class="col-xs-7"><?php if(isset($social2)){echo $social2;} ?></td>
				        </tr>
				      </tbody>
				    </table>
					<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Admin/User_Update" method="POST" enctype="multipart/form-data">
					  <div class="control-group">
					    <label class="control-label" for="">Post Name:</label> 
					    <div class="controls">
					    	<input type="hidden" name="id" value="<?php if(isset($id)){echo $id;} ?>">
					    	<input type="radio" name="approve" value="1" <?php if(isset($user_active)){if($user_active==1){echo 'checked="checked"';}}?>> Approve
					    	<input type="radio" name="approve" value="2" <?php if(isset($user_active)){if($user_active==2){echo 'checked="checked"';}}?>> Reject
					    </div>
					  </div> 
						<div class="control-group">
						    <div class="controls"> 
						      <button type="submit" class="btn">Submit</button>
						    </div>
						 </div>
					</form>
				</div> 
				  
			