<section class="section bg_section"> 
	<div class="container">
		<div class="row"> 
			<div class="col-lg-9 col-md-9 col-sm-9 col-xm-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12"> 
						<div class="product_details_wrap">
							<h2>Sign Up</h2> 
						</div>
						<div class="product_details_wrap" style="text-align: center;">
							<?php if(isset($success)){echo $success;
								echo "<a href='".BASED_URL."/Login'> Login</a>";
							}?>
						</div>
					</div>  
					
					<div class="product_details_wrap singup_form">
						<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Signup/user" method="POST" enctype="multipart/form-data">

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
							      <input type="radio" value="1" name="gender" > Male
							      <input type="radio" value="2" name="gender" > Femel
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
							    <label class="control-label" for="inputPassword">Upload File:</label>
							    <div class="controls">
							      <input type="file" name="image"> 
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
				</div>
				<div class="row">
					<div class="social_signup">
						<h4>Sign up with</h4>
						<a href="#"><img src="<?php echo BASED_URL;?>/images/facebook.png"></a>
						<a href="#"><img src="<?php echo BASED_URL;?>/images/google_label.png"></a>
					</div>
				</div>
			</div>