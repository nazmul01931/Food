
 
<?php 
	foreach ($posid as $value) {
		$post_id= $value['id'];
		$name 	= $value['name'];
		$desc 	= $value['postdesc'];
		$cat 	= $value['cat'];
		$img 	= $value['img'];
		$posted = $value['posted'];
		$date 	= $value['postdate'];
		$price 	= $value['price'];
		$pos_t 	= $value['post_type'];
		$tag 	= $value['tag']; 
		$result = $default_obj->comment_query_single_post($post_id);
 								 
			if($result==1){
				$comment = "Single Comment";
			}elseif($result==2){
				$comment = "Two Comment";
			}elseif($result==0){
				$comment = "No Comment";
			}elseif($result>2){
				$comment = $result." Comments";
			}
	}
	$user=$usermodel->post_by_person($posted);
	foreach ($user as $key) {
		$user_id 		= $key['id'];
		$user_name 		= $key['name'];
		$user_email 	= $key['email'];
		$user_number 	= $key['number'];
		$user_address 	= $key['user_address'];
	}
?>
<section class="section bg_section"> 
	<div class="container">
		<div class="row"> 
			<div class="col-lg-9 col-md-9 col-sm-9 col-xm-12">
				<?php if($pos_t==2) {?>
				<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
							<div class="product_details_wrap"> 
								<div class="product_img">
									<img src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>">
								</div>
								<h4><?php echo $name; ?></h4>
							</div>
						</div>
							 
						<div class="col-lg-9 col-md-9 col-sm-9 col-xm-12">
							<div class="product_details_wrap">
								<div class="product_information"> 
									<p><span>Price: $</span> <?php echo $price; ?></p>
									<p><span>Discription:</span></p>
									<div class="paragrap"> 
										 <?php echo $desc; ?> 
									     
									</div>      
									<p><span>Contact Number: </span><?php echo $user_number; ?></p> 
									<p><span>Rating: </span>
										<span class="product_reating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
										</span>
									</p> 
									<div class="post_comment">
									<a href="#"><span><i class="fa fa-comments"></i></span><?php echo $comment; ?> </a> 
									<p><span><i class="fa fa-pencil-square-o"></i></span>By: 
										<a href="<?php echo BASED_URL; ?>/User_Profile/User/<?php echo $user_id; ?>"><?php  echo $user_name; ?></a>
									</p> 
									<span><a href="www.twitter.com"><i class="fa fa-twitter"> Tweet</i> </a> </span>
									<span><a href="www.google.com"><i class="fa fa-google-plus"> Share</i></a></span>
									<span><a href="www.facebook.com"><i class="fa fa-facebook"> Share</i></a> </span> 
								</div>
							</div>
						</div>

					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
						<div class="product_details_wrap product_detail_sidebar">
							<a href=""><i class="fa fa-file-text"></i>Report Here</a>
							<a href=""><i class="fa fa-star"></i> Keep on favourite list</a>
							<a href=""><i class="fa fa-share"></i>Share post</a>
						</div>
						<div class="product_details_wrap">
							<a href="checkout.html"><button type="submit" class="uuot btn add-to-bag-btn"><i class="fa fa-lock"></i> Apply Coupon</button></a>
							<a href="checkout.html"><button type="submit" class="uuot btn add-to-list-btn"><i class="fa fa-heart"></i> Apply Coupon</button></a>
						</div>
					</div>
				</div>
				<?php } else{?>
					<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
						<div class="product_details_wrap">
							<div class="product_img">
									<img src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>">
								</div>
								<h4><?php echo $name; ?></h4>
								<div class="product_information"> 
							 	<?php echo $desc; ?> 
							</div>
							<div class="post_comment">
								<a href="#"><span><i class="fa fa-comments"></i></span><?php echo $comment; ?> </a> 
								<p><span><i class="fa fa-pencil-square-o"></i></span>By: 
									<a href="<?php echo BASED_URL; ?>/User_Profile/User/<?php echo $user_id; ?>"><?php  echo $user_name; ?></a>
								</p> 
								<span><a href="www.twitter.com"><i class="fa fa-twitter"> Tweet</i> </a> </span>
								<span><a href="www.google.com"><i class="fa fa-google-plus"> Share</i></a></span>
								<span><a href="www.facebook.com"><i class="fa fa-facebook"> Share</i></a> </span> 
							</div> 
						</div>
					</div>  
				</div>
				<?php } if($pos_t==2) {?>
					<div class="row"> 
						<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
							<div class="tab_panel_wrap">
						<div class="bs-docs-example">
			            <ul id="myTab" class="nav nav-tabs">
			              <li class=""><a href="#discription" data-toggle="tab">Discription</a></li>
			              <li class="active"><a href="#review" data-toggle="tab">Review</a></li> 
			              <li ><a href="#information" data-toggle="tab">Information</a></li> 
			            </ul>
			            <div id="myTabContent" class="tab-content">
			              	<div class="tab-pane fade" id="discription"> 
			              		<div class="product_details_wrap">
									<div class="product_information"> 
						                <p><span>Price: </span> $ <?php echo $price; ?></p>
										<p><span>Discription:</span></p>
										<div class="paragrap"> 

										 <?php echo $desc; ?>
										</div>         
										<p><span>Quantity:</span> 3</p>     
										<p><span>Contact Number: </span><?php echo $user_number; ?></p>  
									</div>
								</div>
			              	</div>
				            <div class="tab-pane fade active in" id="review">
				                <div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid"> 
										<div class="add-review">
										<h4>Add a review</h4>
										<form action="<?php echo BASED_URL; ?>/Post/comments" method="POST">
											<input type="text" name="Name" placeholder="Name">
											<input type="hidden" name="post_id" value="<?php echo $post_id; ?>" name="">
											<input type="email" name="Email" placeholder="Email"> 
											<input type="hidden" name="paren_id" value="0"> 
											<textarea rows="3" name="Message"  placeholder="Message" ></textarea>
											<input type="submit" value="SEND">
										</form>
									</div>

										<?php  

											$com_data = $default_obj->_comments_query($post_id);  
											echo $com_data;
										?> 


										<div class="clearfix"> </div>
						             </div> 
								 </div>
				              </div>  
			              <div class="tab-pane fade" id="information">
			                <div class="product_details_wrap">
								<div class="product_information"> 
					                <p><span>Name:</span> <?php echo $user_name; ?></p>
									<p><span>Address:</span><?php echo $user_address; ?></p>
									 <p><span>Contact Number: </span><?php echo $user_number; ?></p> 
									<p><span>email:</span> <?php echo $user_email; ?></p> 
								</div>
							</div>
			              </div>
			            </div>
			          </div>
					</div>
						</div>
					</div>
					<?php }else{?>
						<div class="add-review">
							<h4>Add a review</h4>
							<form action="<?php echo BASED_URL; ?>/Post/comments" method="POST">
								<input type="text" name="Name" placeholder="Name">
								<input type="hidden" name="post_id" value="<?php echo $post_id; ?>" name="">
								<input type="email" name="Email" placeholder="Email"> 
								<input type="hidden" name="paren_id" value="0"> 
								<textarea rows="3" name="Message"  placeholder="Message" ></textarea>
								<input type="submit" value="SEND">
							</form>
						</div>

							<?php  

								$com_data = $default_obj->_comments_query($post_id);  
								echo $com_data;
							?> 
					<?php } ?>
			</div>
			 
			<!-- _______________________________Sidebar column Start _________________________________ -->
	 
 
		 
 

 
