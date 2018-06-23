
				<h2>Create a New Page</h2> 
				<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
				<div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>
				
				<div class="body_content">
					<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Admin/User_Create" method="POST" enctype="multipart/form-data"> 

							<div class="control-group">
							    <label class="control-label" for="inputEmail">Name:</label>
							    <div class="controls">
							      <input type="text" name="name" placeholder="Name" value="<?php if(isset($name)){echo $name;}?>">
							     	 <?php if(isset($nameerr)){echo $nameerr;}?>
							    </div>
							</div>

							<div class="control-group">
							    <label class="control-label" for="inputEmail">User-Name:</label>
							    <div class="controls">
							      <input type="text" name="username" placeholder="User Name" value="<?php if(isset($username)){echo $username;}?>">
							      <?php if(isset($usernameerr)){echo $usernameerr;}?>
							    </div>
							</div>

							<div class="control-group">
							    <label class="control-label" for="inputPassword">Email:</label>
							    <div class="controls">
							      <input type="email" name="email" placeholder="Email" value="<?php if(isset($email)){echo $email;}?>">
							      <?php if(isset($emailerr)){echo $emailerr;}?>
							    </div>
							</div>

							<div class="control-group">
							    <label class="control-label" for="inputPassword">Contact No:</label>
							    <div class="controls">
							      <input type="number" name="number" placeholder="Contact Number" value="<?php if(isset($number)){echo $number;}?>">
							      <?php if(isset($numbererr)){echo $numbererr;}?>
							    </div>
							</div>

							<div class="control-group">
							    <label class="control-label" for="inputPassword">Gender:</label>
							    <div class="controls">
							      <input type="radio" value="1" name="gender" <?php if(isset($gender)){if($gender==1){echo 'checked="checked"'; }}?>> Male
							      <input type="radio" value="2" name="gender" <?php if(isset($gender)){if($gender==2){echo 'checked="checked"'; }}?>> Femel
							      <?php if(isset($gendererr)){echo $gendererr;}?>
							    </div>
							</div>

							<div class="control-group">
							    <label class="control-label" for="inputPassword">Password:</label>
							    <div class="controls">
							      <input type="password" name="pass" placeholder="Password" value="<?php if(isset($pass)){echo $pass;}?>">
							      <?php if(isset($passerr)){echo $passerr;}?>
							    </div>
							</div>

							<div class="control-group">
							    <label class="control-label" for="inputPassword">Re-Password:</label>
							    <div class="controls">
							      <input type="password" name="repass" placeholder="Password" value="<?php if(isset($pass)){echo $pass;}?>">
							      <?php if(isset($repasserr)){echo $repasserr;}?>
							    </div>
							</div> 

							<div class="control-group">
							    <div class="controls">
							       <label class="control-label" for="inputPassword"></label>
							      <button type="submit" class="btn">Sign Up</button>
							      <button type="reset" class="btn">Reset</button>
							    </div>
							</div>

					</form>
				</div> 
				  
			