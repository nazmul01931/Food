<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
   
    <title>Action HTML</title>

    <!--[if (gt IE 8) | (IEMobile)]><!--> 
    <link rel="stylesheet" href="<?php echo BASED_URL;?>/dashboard/css/csmenu.css">
    <link rel="stylesheet" href="<?php echo BASED_URL;?>/dashboard/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo BASED_URL;?>/dashboard/css/bootstrap-select.css"> 
	<link rel="stylesheet" href="<?php echo BASED_URL;?>/dashboard/css/style.css"> 

  	 
 
	
 
    <!--<![endif]-->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
</head>
<body class="body"> 
<section>
	<div class="col-md-12 col-lg-12">

		<div class="row">
			<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
				<div class="row">
					<div class="login_wrap">
						<div class="login_div">
						<div class="imag_login"><img src="<?php echo BASED_URL;?>/dashboard/images/default.png">
							<?php if(isset($xxx)){echo $xxx;} ?>
						</div>
							<form class="form-inline" method="POST" action="<?php echo BASED_URL;?>/Login/Authenticate">
							  	<input type="email" name="email" class="input-small" placeholder="Email">
							  	<input type="password" name="password" class="input-small" placeholder="Password"> 
							  	<button type="submit" class="btn sign_in_btn">Sign in</button>
							</form>
							<p><a href="">Forget Password</a> <a href="<?php echo BASED_URL;?>/Signup">SignUp</a></p>
						</div>				
					</div>
				</div>
			</div> 
		</div>
	</div>
</section> 
 
 
<section>
	<footer>
	<p>Copyright 2014 : Action Design By :	 <a href="http://hezy.org/superduper/">Hezy Theme</a> And Developed By : <a href="http://www.themeskanon.com">Themeskanon</a></p>
	</footer>
</section>				
	 

 


<script src="<?php echo BASED_URL;?>/dashboard/js/jquery.js"></script>
<script src="<?php echo BASED_URL;?>/dashboard/js/script.js"></script>
<script src="<?php echo BASED_URL;?>/dashboard/js/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo BASED_URL;?>/dashboard/js/bootstrap/bootstrap-select.js"></script>
<script src="<?php echo BASED_URL;?>/dashboard/js/responsive-menu/modernizr.js"></script>
<script src="<?php echo BASED_URL;?>/dashboard/js/responsive-menu/main.js"></script>
<script src="<?php echo BASED_URL;?>/dashboard/js/wow.min.js"></script>
<script src="<?php echo BASED_URL;?>/dashboard/js/custom.js"></script>
<script src="<?php echo BASED_URL;?>/dashboard/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
 
</body>
</html>