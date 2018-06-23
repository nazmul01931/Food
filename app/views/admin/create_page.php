
				<h2>Create a New Page</h2> 
				<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
				<div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>
				
				<div class="body_content">
					<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Admin/Create_Page" method="POST">
					  <div class="control-group">
					    <label class="control-label" for="inputEmail">Page Name:</label> 
					    <div class="controls">
					      <input type="text" id="inputEmail" name="pag_name" value="<?php if(isset($pag_name)){echo $pag_name;}?>" placeholder="Page Name...">
					      <?php if(isset($pag_nameerr)){echo $pag_nameerr;}?>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="inputPassword">Page Description:</label>
					    <div class="controls">
					      <input type="text" id="inputPassword" name="pag_des"  value="<?php if(isset($pag_des)){echo $pag_des;}?>"placeholder="Pag Discription">
					      <?php if(isset($pag_deserr)){echo $pag_deserr;}?>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label" for="inputPassword">Page Slug:</label>
					    <div class="controls">
					      <input type="text" id="inputPassword" name="pag_slug" value="<?php if(isset($pag_slug)){echo $pag_slug;}?>" placeholder="Pag Slug">
					      <?php if(isset($pag_slugerr)){echo $pag_slugerr;}?>
					    </div>
					  </div>
						<div class="control-group">
						    <label class="control-label" for="inputPassword">Page Section Name:</label>
						    <div class="controls">
						      <input type="text" name="pag_sec" value="<?php if(isset($pag_sec)){echo $pag_sec;}?>" placeholder="Pag Note">
						      <?php if(isset($pag_secerr)){echo $pag_secerr;}?>
						    </div>
					  	</div>
					  	

					  	<div class="control-group">
						    <label class="control-label" for="inputPassword">Page Content:</label>
						    <div class="controls">
						      <textarea rows="4" cols="50" value="<?php if(isset($pag_content)){echo $pag_content;}?>" name="pag_content" placeholder="<?php if(isset($pag_content)){echo $pag_content;}?>"> </textarea>
						      <?php if(isset($pag_contenterr)){echo $pag_contenterr;}?>
						    </div>
					  	</div>
					  	<div class="control-group">
						    <label class="control-label" for="inputPassword">Add Menu Item:</label>
						    <div class="controls"> 
						       <input type="radio" name="pag_menu" value="2" 
						       <?php if(isset($pag_menu)){if($pag_menu==2){echo 'checked="checked"'; }}?>> yes
						       <input type="radio" name="pag_menu" value="1" 
						       <?php if(isset($pag_menu)){if($pag_menu==1){echo 'checked="checked"';}}?>>No
						    </div>
					  	</div>
						<div class="control-group">
						    <div class="controls"> 
						      <button type="submit" class="btn">Create Page</button>
						    </div>
						 </div>
					</form>
				</div> 
				  
			