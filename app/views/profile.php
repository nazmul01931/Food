<?php 
	foreach ($user_info as $value) {
		$id 		= $value['id'];
		$Name 		= $value['name'];
		$email 		= $value['email'];
		$number		= $value['number'];
		$img   		= $value['img'];
		$address   	= $value['user_address'];
		$social1   	= $value['social1'];
		$social2   	= $value['social2'];
		$social3   	= $value['social3']; 
		$bann_img   = $value['bann_img']; 
	}
	$table = "tbl_post";
	$count_post = $default_obj->default_count_query($id, $table);//Total post item query

 ?>

<section class=" bg_section">   
	<div class="col-lg-9 col-md-9 col-sm-9 col-xm-12"> 
		<div class="row">
			<div class="container">
				<div class="profile_banner_wrap" style="
				background: url('<?php if(empty($bann_img)==true){
					 echo BASED_URL."/uploads/5.jpg";
				}else{echo BASED_URL."/uploads/$bann_img";} ?>') no-repeat 0px 0px; background-size: cover; ">
					<div class="profile_bicture">
						<div class="profileimage"><img src="
							<?php if(empty($img)==true){
								  echo BASED_URL."/uploads/profile_img.jpg";
							}else{
								 echo BASED_URL."/uploads/".$img;
							} ?> 
							" alt=""><a href="<?php echo BASED_URL;?>/User_Profile/<?php if(isset($id )){echo $id ;}?>"><i class="fa fa-edit"></i></a></div>
						<div class="profile_content"> 
						<h4><?php echo $Name; ?></h4>
						</div>
						
					</div>
					<a href="<?php echo BASED_URL;?>/User_Profile/<?php if(isset($id )){echo $id ;}?>"><i class="fa fa-edit"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container"> 
				<div class="user_profile_info"> 
					<div class="col-lg-8 col-md-8 col-sm-8">
						<table class="profile_table">  
							<div class="profile_image">
							 
								<div class="content_div">  
									<span></span>
								</div>
							</div>
							<tr> 
								<td><p>Name:</p></td>
								<td><span><?php echo $Name; ?></span></td>
							</tr>
							<tr> 
								<td><p>Email:</p></td>
								<td><span><?php echo $email; ?></span></td>
							</tr>
							<tr> 
								<td><p>Contact No:</p></td>
								<td><span>+<?php echo $number; ?></span></td>
							</tr>
							<tr> 
								<td><p>Address:</p></td>
								<td><span><?php echo $address; ?></span></td>
							</tr>
							<tr> 
								<td><p>Rating:</p></td>
								<td><span class="product_reating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
										</span></td> 
							</tr> 
							<tr> 
								<td><p>Total Sale:</p></td>
								<td><span>1245+</span></td>
							</tr>
							<tr> 
								<td><p>Total Product:</p></td>
								<td><span><?php echo $count_post; ?>+</span></td>
							</tr>
						</table>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<table class="profile_table">  
							 
							<!-- <tr> 
								<td><p><i class="fa fa-facebook">  </i> Facebook Follwers:</p></td>
								<td><span> 2K</span></td>
							</tr> -->
							 <div class="sidebar_content">
								<div class="sidebar_heading"> <p>Followwer's</p> </div>  
								<div class="post_comment"> 
								 	<span><a href="www.facebook.com"><i class="fa fa-facebook"> facebook </i> 1K</a> </span><a href="#">Facebook Page</a><br><br>
								 	<span><a href="www.google.com"><i class="fa fa-google-plus"> google </i> 2K </a> </span><br><br>
								 	<span><a href="www.twitter.com"><i class="fa fa-twitter"> twitter </i> 12</a> </span><br><br>
									  
								</div>  
							</div>
							  
							 
						</table>
					</div>
				</div>
					 
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="row">
						<div class="profile_category_list_wrap"> 
							<div class="profile_cat_img">
								<img src="<?php echo BASED_URL;?>/uploads/5.png" alt="iamge">
							</div>
							<div class="profile_cat_content">
								<h4><a href="">Chiken Sandwich</a></h4>
								<p>34+</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="row">
					<div class="profile_category_list_wrap"> 
						<div class="profile_cat_img">
							<img src="<?php echo BASED_URL;?>/uploads/2.png" alt="iamge">
						</div>
						<div class="profile_cat_content">
							<h4><a href="">Chiken Sandwich</a></h4>
							<p>346+</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="row">
					<div class="profile_category_list_wrap"> 
						<div class="profile_cat_img">
							<img src="<?php echo BASED_URL;?>/uploads/3.png" alt="iamge">
						</div>
						<div class="profile_cat_content">
							<h4><a href="">Chiken Sandwich</a></h4>
							<p>87+</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="row">
					<div class="profile_category_list_wrap"> 
						<div class="profile_cat_img">
							<img src="<?php echo BASED_URL;?>/uploads/4.png" alt="iamge">
						</div>
						<div class="profile_cat_content">
							<h4><a href="">Chiken Sandwich</a></h4>
							<p>345+</p>
						</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="row">
					<div class="profile_category_list_wrap"> 
						<div class="profile_cat_img">
							<img src="<?php echo BASED_URL;?>/uploads/1.png" alt="iamge">
						</div>
						<div class="profile_cat_content">
							<h4><a href="">Chiken Sandwich</a></h4>
							<p>231+</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="row">
					<div class="profile_category_list_wrap"> 
						<div class="profile_cat_img">
							<img src="<?php echo BASED_URL;?>/uploads/5.png" alt="iamge">
						</div>
						<div class="profile_cat_content">
							<h4><a href="">Chiken Sandwich</a></h4>
							<p>90+</p>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
			 
			  
		 