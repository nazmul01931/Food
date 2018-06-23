
<section class="section post_section"> 
			<h1>Related post</h1> 
			<?php 
				foreach ($posid as $value) { 
					$cat 	= $value['cat']; 
				}

				$data = $model_obj->related_post($cat);

				foreach ($data as  $value) {?>
					 
				 
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="row">
					<div class="post_item">
						<div class="post_item_image"> 
							<a href="<?php echo BASED_URL; ?>/Post/Details/ <?php echo $value['id']; ?>"><img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $value['img']; ?>"></a>
						</div>
						<div class="post_item_description"> 
							<h4><a href="<?php echo BASED_URL; ?>/Post/Details/ <?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4> 
							<h5>Price: <span>$<?php echo $value['price']; ?></span></h5> 
						</div> 
					</div>
				</div>
			</div>
			 <?php } ?> 
		 
</section> 

 

	</div>
</div>