<!DOCTYPE html>
<html lang="en">
	<head>
		<title>New Shop</title>
			<link href="<?php echo BASED_URL; ?>/css/bootstrap.css" rel="stylesheet">
			<link href="<?php echo BASED_URL; ?>/css/menu.css" rel="stylesheet">
			<link href="<?php echo BASED_URL; ?>/css/superfish.css" rel="stylesheet">
			<link href="<?php echo BASED_URL; ?>/css/meanmenu.css" rel="stylesheet">
			<link href="<?php echo BASED_URL; ?>/css/style.css" rel="stylesheet">
			<link href="<?php echo BASED_URL; ?>/css/color.css" rel="stylesheet">
			
		<!-- font awesome this template -->
			<link href="<?php echo BASED_URL; ?>/fonts/css/font-awesome.css" rel="stylesheet">
			<link href="<?php echo BASED_URL; ?>/fonts/css/font-awesome.min.css" rel="stylesheet">
			
	</head>
	<body>
		<div class="navigation">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo">
							<a href="<?php echo BASED_URL; ?>">LOGO</a>
						</div>
					</div>
					<div class="col-sm-8">
						<nav id="#cssmenu">
							<ul class="sf-menu ">
								<?php 
									$data=$default_obj->main_menu(); 
									foreach ($data as $value) {?>
									<li class="deeper current active"><a href="<?php echo BASED_URL; ?>/<?php echo $value['pag_slag']; ?>"><?php echo $value['pag_name']; ?></a></li> 
								<?php		 
									}
								?>
								
							</ul>
						</nav>
					</div>
				</div>	
			</div>
		</div>