 
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

  	 
  	<!-- Page level plugin CSS-->
  	<link href="<?php echo BASED_URL;?>/dashboard/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  	<!-- Custom styles for this template-->
  	<link href="<?php echo BASED_URL;?>/dashboard/css/sb-admin.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo BASED_URL;?>/dashboard/font/css/font-awesome.css" />
	<link rel="stylesheet" href="<?php echo BASED_URL;?>/dashboard/font/css/font-awesome.min.css" />
	
 
    <!--<![endif]-->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
</head>
<body>
<section>
	<?php 
		$id 		= Session::get('userid');
		$table 		= "tbl_user_sr"; 
		$condition 	= "user_active=2";  
		$data		= $admin_model->existsting_Check_query($condition,$table);
		$usertbl 	= "tbl_user_sr";
		$condition  = "id=".$id;
		$user_date  = $admin_model->Default_Select($condition,$usertbl);
		foreach ($user_date as  $value) {
			$name = $value['name'];
			$img = $value['img'];
		}
	?>
</section>
<section>
	<div class="col-md-12 col-lg-12">
		<div class="row">
			<div class="desh_bord_top_menu">
				<div class="col-md-4">
					<a href="index.html">Logo</a>
				</div> 
				<div class="col-md-8">
					<div class="top_menu">
						<ul>
							<li><a href="<?php echo BASED_URL; ?>/login/logout">Logout </a></li>
							<li>|</li>
							<li>
								<?php if(!empty($img)){  ?>
									<img src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>">
								<?php } else{?>
									<img src="<?php echo BASED_URL; ?>/uploads/profile_img.jpg">
								<?php } ?>
								<span><?php echo $name; ?></span> 
							</li> 
						</ul>
					</div>
				</div> 
			</div> 
		</div>
	</div>
</section> 
<section>
	<div class="col-md-12 col-lg-12">
		<div class="row">
			<div class="desh_bord_top_menu desh_bord_top_menu_"> 
			 	<ul class="short_link"> 
			 		<li><i class="fa fa-wordpress"></i> <a href=""> Theme</a></li>
			 		<li><i class="fa fa-user"></i> <a href="<?php echo BASED_URL; ?>/Admin/Application">Application <span style="color: red;"><?php if(isset($data)){echo $data;} ?></span></a></li>
			 		<li><i class="fa fa-barcode"></i> <a href="">Change Password</a></li>
			 		<li><i class="fa fa-envelope"></i> <a href="">Inbox</a></li>
			 		<li><i class="fa fa-plus"></i> <a href="<?php echo BASED_URL; ?>/Admin/User_Create">Add User</a></li>
			 		<li><i class="fa fa-list-ul"></i> <a href="<?php echo BASED_URL; ?>/Admin/User_List">User List</a></li>
			 		<li><i class="fa fa-globe"></i> <a href="<?php echo BASED_URL; ?>">Visit Website</a></li>
			 	</ul>
				 
			</div> 
		</div>
	</div>
</section> 
<section>
	<div class="col-md-2 col-lg-2">
		<div class="row">	
			<div class="bdfood_admin_menu">
			<!-- ================== Manu html Start ======================= -->
				<div class="menu"> 
					<nav id="nav" role="navigation">
						<div class="menu-wrap">
							<div class="block">  
								<div class="action-menu">	
									<div id="cssmenu">
<ul>
   <li class="active"><a class="home" href='index.html'><i class="fa fa-home"></i> <span> Dashboard</span></a>
   <li><a class="home" href='<?php echo BASED_URL; ?>/Admin/User_List'><i class="fa fa-group"></i> <span> Profile</span></a>
	   
   </li>
   <li class="has-sub"><a class="product" href='#'><i class="fa fa-file-code-o"></i> <span> Page</span></a>
	  <ul class="sub-ul">
		 <li><a href="<?php echo BASED_URL; ?>/Admin/Create_Page">New Page</a></li> 
		 <li><a href="<?php echo BASED_URL; ?>/Admin/All_Page">All Page</a></li>  
	  </ul>
   </li>
   <li class="has-sub"><a class="product" href="#"><i class="fa fa-th-large"></i> <span>Post</span></a>
	  <ul class="sub-ul">
		 <li><a href="<?php echo BASED_URL; ?>/Admin/Create_Post">New Post</a></li> 
		 <li><a href="<?php echo BASED_URL; ?>/Admin/All_Post">All Post</a></li> 
		 
	  </ul>
   </li>
   <li class="has-sub"><a class="product" href="#"><i class="fa fa-th-large"></i> <span>Blog</span></a>
	  <ul class="sub-ul">
		 <li><a href="accessories.html">New Blog</a></li> 
		 <li><a href="bags-wallets.html">All Blog</a></li> 
		 
	  </ul>
   </li>
   	<li class="has-sub"><a class="product" href="#"><i class="fa fa-th-large"></i> <span>Category</span></a>
	  <ul class="sub-ul">
		 <li><a href="<?php echo BASED_URL; ?>/Admin/Create_Category">New Category</a></li> 
		 <li><a href="<?php echo BASED_URL; ?>/Admin/Category_List">All Category</a></li> 
		 
	  </ul>
   </li>

   <li class="has-sub"><a class="product" href="#"><i class="fa fa-th-large"></i> <span>User</span></a>
	  <ul class="sub-ul">
		 <li><a href="accessories.html">New User</a></li> 
		 <li><a href="bags-wallets.html">User List</a></li> 
		 
	  </ul>
   </li>
   <li class="has-sub"><a class="product" href="#"><i class="fa fa-th-large"></i> <span>Contact Info</span></a>
	  <ul class="sub-ul">
		 <li><a href="accessories.html">New Info</a></li> 
		 <li><a href="bags-wallets.html">User List</a></li>  
	  </ul>
   </li>

   <li class="has-sub"><a class="product" href="#"><i class="fa fa-th-large"></i> <span>Section Background</span></a>
	  <ul class="sub-ul">
		 <li><a href="accessories.html">New Section</a></li> 
		 <li><a href="bags-wallets.html">User List</a></li>  
	  </ul>
   </li>
   
   <li class="last"><a class="contact-menu" href="<?php echo BASED_URL; ?>/Admin/Contact_Info">Contact Info</a></li> 
   <li class="last"><a class="contact-menu" href="<?php echo BASED_URL; ?>/Admin/Update_Social_Link"> <span>Social Link</span></a></li>
   <li class="last"><a class="contact-menu" href="<?php echo BASED_URL; ?>/Admin/Settings"><i class="fa fa-cogs"></i> <span> Settings</span></a></li>

	 

    <li class="has-sub"><a class="product" href="#"><i class="fa fa-photo"></i> <span>Add</span></a>
    
	  <ul class="sub-ul">
		 <li><a href="<?php echo BASED_URL; ?>/Admin/Create_Add">New Add</a></li> 
		 <li><a href="<?php echo BASED_URL; ?>/Admin/Add_List">Add List</a></li>  
	  </ul>
   </li>
   <li class="has-sub"><a class="product" href="#"><i class="fa fa-photo"></i> <span>Add</span></a>
	  <ul class="sub-ul">
		 <li><a href="accessories.html">New Add</a></li> 
		 <li><a href="bags-wallets.html">Add List</a></li>  
	  </ul>
   </li> 
</ul>
									</div>  
								</div>
								 
							</div>
						</div>
					</nav>
					
				</div>	
				<!-- ================== Manu html Exit ======================= -->
			</div> 
		</div> 
	</div>
	<div class="col-md-10 col-lg-10">
		<div class="row">
			<div class="body_wrap">