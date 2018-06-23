<section class="section bg_section"> 
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
				<h1>Category </h1> 
			</div>
		</div>

		<div class="row">
			<?php
		$i=1;
		$cat_count=NULL;
		foreach ($cate as $value) { //Main Category Query 

			if ($i>=5) { $i=1;}
			$v=$value['cat_id'];
			$img=$value['cat_img'];

			// Total Sub category Count start
			$result=$con_pag->subcategory_select($v);
			foreach ($result as $value) {
				$id=$value['cat_id'];
				$cat_count +=$con_pag->subcategory_count($id);
			}
			// Total Sub category Count Exit
			 
			if($i<=2){

				if ($v%2==0) {?>
					 <div class="col-md-6">
					 	<div class="category_item"> 
						 	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_image"> 
									<img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>" alt="images" >
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_description"> 
									<h4><?php echo $value['cat_name']; ?></h4>
									<span>Product Item: <?php echo $cat_count; ?> </span> 
									<?php 
									$result=$con_pag->subcategory_select($v);//Sub Category Query
										foreach ($result as $value) {
											$id=$value['cat_id'];
											$cat_item = $con_pag->subcategory_count($id); 
										?>  
									<p><span><i class="fa fa-check"></i></span> 
										<a href="<?php echo BASED_URL;?>/Product/search/<?php echo $value['cat_id']; ?>">
										<?php echo $value['cat_name'];  ?> 
										<span>(<?php echo $cat_item; ?>)</span>
										</a>
									</p>
									<?php } ?>
								</div>
							</div> 
						</div> 
					</div> 
				<?php }else{?>
					 <div class="col-md-6">
					 	<div class="category_item"> 
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_description"> 
									<h4> <?php echo $value['cat_name']; ?> </h4>
									<span>Product Item: <?php echo $cat_count; ?> </span> 
									<?php 
									$result=$con_pag->subcategory_select($v);
										foreach ($result as $value) {
											$id=$value['cat_id'];
											$cat_item = $con_pag->subcategory_count($id);
										?>  
									<p><span><i class="fa fa-check"></i></span> 
										<a href="<?php echo BASED_URL;?>/Product/search/<?php echo $value['cat_id']; ?>">
										<?php echo $value['cat_name']; ?> 
										<span>(<?php echo $cat_item; ?>)</span>
									</a>
									</p>
									<?php } ?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_image"> 
									<img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>" alt="images" >
								</div>
							</div>
						</div> 
					</div> 
				<?php }
				

			}else{
				if ($v%2==0) {?>
					 <div class="col-md-6">
						<div class="category_item">  
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_description"> 
									<h4> <?php echo $value['cat_name']; ?> </h4>
									<span>Product Item: <?php echo $cat_count; ?> </span> 
									<?php 
									$result=$con_pag->subcategory_select($v);
										foreach ($result as $value) {
											$id=$value['cat_id'];
											$cat_item = $con_pag->subcategory_count($id);
										?>  
									<p><span><i class="fa fa-check"></i></span> 
										<a href="<?php echo BASED_URL;?>/Product/search/<?php echo $value['cat_id']; ?>">
										<?php echo $value['cat_name']; ?> <span>(<?php echo $cat_item; ?>)</span>
									</a>
									</p>
									<?php } ?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_image"> 
									<img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>" alt="images" >
								</div>
							</div>
						</div> 
					</div> 
				<?php }else{?>
					 <div class="col-md-6">
					 	<div class="category_item"> 
						 	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_image"> 
									<img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $img; ?>" alt="images" >
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="category_item_description"> 
									<h4> <?php echo $value['cat_name']; ?> </h4>
									<span>Product Item: <?php echo $cat_count; ?> </span> 
									<?php 
									$result=$con_pag->subcategory_select($v);
										foreach ($result as $value) {
											$id=$value['cat_id'];
											$cat_item = $con_pag->subcategory_count($id);
										?>  
									<p><span><i class="fa fa-check"></i></span> 
										<a href="<?php echo BASED_URL;?>/Product/search/<?php echo $value['cat_id']; ?>">
										<?php echo $value['cat_name']; ?> <span>(<?php echo $cat_item; ?>)</span>
									</a>
									</p>
									<?php } ?>
								</div>
							</div>
						
						</div> 
					</div> 
				<?php }
			}

	?>

			 
			 
		<?php $i++;$cat_count=NULL;} 
	?>
		</div>
	</div>
</section>