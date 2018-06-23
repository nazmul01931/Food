
				<h2>Page Setting</h2> 
				<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>

				<div class="body_content"> 
					<h4>Update G-Map Information</h4>
					<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Admin/G_Map" method="POST">
						<?php 
						$condition="sec_con = 3";
						$table="tbl_sec_setting";
							$result = $admin_model->Default_Select($condition,$table);
							foreach ($result as  $value) {
								$link= $value['sec_desc'];
							}
						?>
					  <div class="control-group">
					    <label class="control-label" for="inputEmail">G-Map Location</label>
					    <div class="controls">
					      <input type="url" id="inputEmail" name="map_name" value="<?php if(isset($link)){echo $link;} ?>"><?php if(isset($success)){echo " ".$success;} ?>
					    </div>
					  </div> 

						<div class="control-group">
						    <div class="controls"> 
						      <button type="submit" class="btn">Update G-Map</button>
						    </div>
						 </div>
					</form>
					<h4>Footer Contact Information</h4>
					<div class="success_msg"><?php if(isset($iformation)){echo " ".$iformation;} ?></div>
					
					<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Admin/Contact_Information" method="POST">
						<?php 
						$condition="type = 2";
						$table="tbl_social";
							$result = $admin_model->Default_Select($condition,$table);
							foreach ($result as  $value) {
								$scl_name	= $value['scl_name'];
								$class 		= $value['class'];
								$link		= $value['link'];
							}
						?>
					  <div class="control-group">
					    <label class="control-label" for="inputEmail">Email</label>
					    <div class="controls">
					      <input type="text"  name="scl_name" value="<?php if(isset($scl_name)){echo $scl_name;} ?>"> 
					    </div> 
					  </div> 
					  <div class="control-group">
					    <label class="control-label" for="inputEmail">Number</label> 
					    <div class="controls">
					      <input type="text"  name="class" value="<?php if(isset($class)){echo $class;} ?>"> 
					    </div> 
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="inputEmail">Address</label> 
					    <div class="controls">
					      <input type="text"  name="link" value="<?php if(isset($link)){echo $link;} ?>"> 
					    </div>
					  </div>

						<div class="control-group">
						    <div class="controls"> 
						      <button type="submit" class="btn">Contact Info Update</button>
						    </div>
						 </div>
					</form>
				</div> 
				  
			