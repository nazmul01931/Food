 <section class="">
	<div class="slider_section ">
		<div id="myCarousel7" class="carousel slide"> 
		  	<div class="carousel-inner">
		    	 <?php 
				    		$i=1;
				    		$x=1;
				    		$num = count($top_post); 
							foreach ($top_post as $value) { 
								if($i==1){?>
									<div class="<?php if($x==1){echo 'active';} ?>  item">
								<?php }
						?> 
					    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					    	 	<div class="row">
									<div class="slider_item">
										<div class="carousel_slider_item"> 
											<a href="#"><img class="img-responsive" src="images/topslider/main5.png" alt="images" ></a> 
										</div>
										<div class="carousel_slider_item_text">  
											<h4><a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4> 
										</div> 
									</div>
								</div>
							</div>
							<?php if($i==2){
								echo "</div>";
								$i=0;
								$x=0;
							} ?>
						 
				    	<?php $i++; }?>	 

		 	</div>
		  
		  <a class="carousel-control left cur_left" href="#myCarousel7" data-slide="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
		  <a class="carousel-control right cur_left" href="#myCarousel7" data-slide="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
		</div>
	</div>
</section> 
 


<section class="section post_section">
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">  
		<section>
		<div class="row"> 
		 
			<div id="myCarousel3" class="carousel slide"> 
			  	<div class="carousel-inner">
			  		<?php $x=3;?>
				    
				    	<?php 
				    		$i=0;
				    		$k=1;
							 $data_result = $default_obj->select_post_bycategory(1);
						    	$count = count($data_result); 
						  		foreach ($data_result as  $value) { $i++;$k++; 
						 ?>
					<?php if($x%3==0){?><div class="<?php if($k==1){echo 'active';} ?> item">	<?php }$x++; ?> 
				    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					    	 	<div class="row">
									<div class="post_item">
										<div class="post_item_image"> 
											<a href="#">
												<img style="height: 250px !important;width: 100%;" class="img-responsive" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['img']; ?>" alt="images" >
											</a> 
										</div>
										<div class="post_item_description">  
											<h4><a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4> 
										</div> 
									</div>
								</div>
							</div>
						<?php 
							if($i==3){ $k=0;?>
							</div>
						 
						<?php 
						}
						}

						?> 
						 
				    </div>  
			  	</div> <!--Innner class-->
			  	<a class="carousel-control left" href="#myCarousel3" data-slide="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
			  	<a class="carousel-control right" href="#myCarousel3" data-slide="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>  
		</div> 
		</section>
		<section>
		<div class="row">  
			<div id="myCarousel71" class="carousel slide"> 
			  	<div class="carousel-inner">
			  		<?php $x=3;?>
				    
				    	<?php 
				    		$i=0;
				    		$k=1;
							 $data_result = $default_obj->select_post_bycategory(2);
						    	$count = count($data_result); 
						  		foreach ($data_result as  $value) { $i++;$k++; 
						 ?>
					<?php if($x%3==0){?><div class="<?php if($k==1){echo 'active';} ?> item">	<?php }$x++; ?> 
				    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					    	 	<div class="row">
									<div class="post_item">
										<div class="post_item_image"> 
											<a href="#">
												<img style="height: 250px !important;width: 100%;" class="img-responsive" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['img']; ?>" alt="images" >
											</a> 
										</div>
										<div class="post_item_description">  
											<h4><a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4> 
										</div> 
									</div>
								</div>
							</div>
						<?php 
							if($i==3){ $k=0;?>
							</div>
						 
						<?php 
						}
						}

						?> 
						 
				    </div>  
			  	</div> <!--Innner class-->
			  	<a class="carousel-control left" href="#myCarousel71" data-slide="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
			  	<a class="carousel-control right" href="#myCarousel71" data-slide="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>  
		</div> 
		</section>
		<section>
		<div class="row">  
			<div id="myCarousel4" class="carousel slide"> 
			  	<div class="carousel-inner">
			  		<?php $x=3;?>
				    
				    	<?php 
				    		$i=0;
				    		$k=1;
							 $data_result = $default_obj->select_post_bycategory(3);
						    	$count = count($data_result); 
						  		foreach ($data_result as  $value) { $i++;$k++;
						    	 
						 ?>
					<?php if($x%3==0){?><div class="<?php if($k==1){echo 'active';} ?> item">	<?php }$x++; ?> 
				    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					    	 	<div class="row">
									<div class="post_item">
										<div class="post_item_image"> 
											<a href="#">
												<img style="height: 250px !important" class="img-responsive" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['img']; ?>" alt="images" >
											</a> 
										</div>
										<div class="post_item_description">  
											<h4><a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4> 
										</div> 
									</div>
								</div>
							</div>
						<?php 
							if($i==3){ $k=0;?>
							</div>
						 
						<?php 
						}
						} 
						?>  
				    </div>  
			  	</div> <!--Innner class-->
			  	<a class="carousel-control left" href="#myCarousel4" data-slide="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
			  	<a class="carousel-control right" href="#myCarousel4" data-slide="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>

			</section>
			<section> 
			<div class="row">  
				<div id="myCarousel5" class="carousel slide"> 
				  	<div class="carousel-inner">
				  		<?php $x=3;?>
					    
					    	<?php 
					    		$i=0;
					    		$k=1;
								 $data_result = $default_obj->select_post_bycategory(4);
							    	$count = count($data_result); 
							  		foreach ($data_result as  $value) { $i++;$k++;
							    	 
							 ?>
						<?php if($x%3==0){?><div class="<?php if($k==1){echo 'active';} ?> item">	<?php }$x++; ?> 
					    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					    	 	<div class="row">
									<div class="post_item">
										<div class="post_item_image"> 
											<a href="#">
												<img style="height: 250px !important" class="img-responsive" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['img']; ?>" alt="images" >
											</a> 
										</div>
										<div class="post_item_description">  
											<h4><a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4> 
										</div> 
									</div>
								</div>
							</div>
							<?php 
								if($i==3){ $k=0;?>
								</div>
							 
							<?php 
							}
							} 
							?>  
					    </div>  
				  	</div> <!--Innner class-->
			  	<a class="carousel-control left" href="#myCarousel5" data-slide="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
			  	<a class="carousel-control right" href="#myCarousel5" data-slide="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>
		</section>
		<section>
			
			<div class="row">  
				<div id="myCarousel6" class="carousel slide"> 
				  	<div class="carousel-inner">
				  		<?php $x=3;?>
					    
					    	<?php 
					    		$i=0;
					    		$k=1;
								 $data_result = $default_obj->select_post_bycategory(1);
							    	$count = count($data_result); 
							  		foreach ($data_result as  $value) { $i++;$k++;
							    	 
							 ?>
						<?php if($x%3==0){?><div class="<?php if($k==1){echo 'active';} ?> item">	<?php }$x++; ?> 
					    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					    	 	<div class="row">
									<div class="post_item">
										<div class="post_item_image"> 
											<a href="#">
												<img style="height: 250px !important" class="img-responsive" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['img']; ?>" alt="images" >
											</a> 
										</div>
										<div class="post_item_description">  
											<h4><a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4> 
										</div> 
									</div>
								</div>
							</div>
							<?php 
								if($i==3){ $k=0;?>
								</div>
							 
							<?php 
							}
							} 
							?>  
					    </div>  
				  	</div> <!--Innner class-->
			  	<a class="carousel-control left" href="#myCarousel6" data-slide="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
			  	<a class="carousel-control right" href="#myCarousel6" data-slide="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
			</div>   
			</section>
			 
				
 
		</div>  
		</div>  
		</div>  
	</div>
	 <!-- _______________________________Sidebar column Start _________________________________ -->
	 
	 