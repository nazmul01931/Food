<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="sidebar_wrap"> 
			

			<div class="sidebar_content">
				<div class="search_rapper">
					<div class="sidebar_content">
						<form method="POST" action="<?php echo BASED_URL;?>/Product/search">
							<input id="search" autocapitalize="none" autocomplete="off"   autofocus="" name="search_query" tabindex="0" spellcheck="false" placeholder="Search" aria-label="Search"     style="outline: medium none currentcolor;" class="ytd-searchbox" type="text" >
		 
							<button id="search-icon-legacy" class="sidebar_search_button" aria-label="Search"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div> 

			<div class="sidebar_content">
				<div class="sidebar_heading"> <h4>Apply for a new shop</h4> </div>  
				<div class="post_comment"> 
					<a href="<?php echo BASED_URL; ?>/Signup">Sign Up</a> 
				</div>  
			</div>
			<?php if (!empty($socal)) {?> 
			<div class="sidebar_content">
				<div class="sidebar_heading"> <h4>Follow us</h4> </div>  
				<div class="post_comment"> 
					<?php 
						foreach ($socal as $value) {
							$class = $value['class'];
					 ?>
						 <span><a href="<?php echo $value['link'] ?>"><i class="fa <?php echo $class; ?>"> <?php echo $value['scl_name'] ?> </i> </a> </span>
					<?php } ?>  
				</div>  
			</div>
			<?php } ?>

			<?php if (!empty($user)) {?> 
			<div class="sidebar_content">
				<div class="sidebar_heading"> <h4>Top Sales Person of our site</h4> </div>  
				<table>
					<?php 
						foreach ($user as $value) { 
							$social1 = $value['social1'];
							$social2 = $value['social2'];
							$social3 = $value['social3'];
							$social4 = $value['social4']; 
					 ?>
					<tr>
						<td><a href="<?php echo BASED_URL; ?>/User_Profile/User/<?php if(isset($value['id'])){ echo $value['id'];} ?>"><img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $value['img']; ?>" alt="images" ></a></td>
						<td>
							<h5><a href="<?php echo BASED_URL; ?>/User_Profile/User/<?php echo $value['id']; ?>"><?php echo  $value['name'];?></a></h5>
							<p>Sale: <span>435 </span></p>
							<span class="product_reating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i> 
							</span>
							<p>
								<?php 
								if(!empty($social1)) {
									echo '<a href="'.$social1.'"><i class="fa fa-facebook"></i></a>';
								}
								if(!empty($social2)) {
									echo '<a href="'.$social2.'"><i class="fa fa-skype"></i></a>';
								}
								if(!empty($social4)) {
									echo '<a href="'.$social4.'"><i class="fa fa-google-plus"></i></a>';
								}
								if(!empty($social3)) {
									echo '<a href="'.$social3.'"><i class="fa fa-twitter"></i></a>';
								}


								?> 
								 
							</p>
						</td>
					</tr>
					 <?php } ?>
					 
				</table>
			</div>
			<?php } ?>

			<?php if (!empty($cate)) {?> 
			 <div class="sidebar_content">
				<div class="sidebar_heading"> <h4>Category</h4> </div> 
				<div class="panel-group" role="tablist">
				    <div class="panel panel-default"> 
				    	<?php  
				    		$cat_count =Null;
				    		foreach ($cate as  $value) {
				    		$cat_id	 = $value['cat_id'];  
				    	?>

				      <div class="panel-heading" role="tab" id="collapseListGroupHeading<?php echo $value['cat_id']; ?>">
				        <h4 class="panel-title">
				          <a target="_blank" class="collapsed" role="button" data-toggle="collapse" href="#collapseListGroup<?php echo $value['cat_id']; ?>" aria-expanded="false" aria-controls="collapseListGroup1">
				            <h6 style="font-weight: bold;"><?php echo $value['cat_name']; ?> </h6>
				          </a>
				        </h4>
				      </div>
				      <div id="collapseListGroup<?php echo $value['cat_id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading<?php echo $value['cat_id']; ?>" aria-expanded="false" style="height: 0px;">
				        <ul class="list-group">
				           <?php 
				           		$result=$con_pag->subcategory_select($cat_id);
								foreach ($result as $row) {
										$id=$row['cat_id'];
										$cat_count +=$con_pag->subcategory_count($id);
								?>
									 <li class="list-group-item">
									 	<a style="padding-left: 0px;" href="<?php echo BASED_URL;?>/Product/search/<?php echo $row['cat_id']; ?>">
									 	<?php echo $row['cat_name'];   ?> </a><span>(<?= $cat_count?>)</span>
									 </li>
									<?php  
								$cat_count =Null;}
				           ?>
				         
				           
				        </ul>
				         
				      </div> 
				      <?php  }  ?>

				    </div>
				  </div>
			</div>
			<?php } ?>
			<?php if (!empty($add)) {?> 
			<div class="sidebar_content">
				<?php
					foreach ($add as $value) {
					$position=$value['add_position'];  
					$add_img=$value['add_img'];  
					if($position=='sidebar_bottom') {	
				?>

				<a href="<?php echo $value['add_link']; ?>"><img class="img-responsive" src="<?php echo BASED_URL; ?>/uploads/<?php echo $value['add_img']; ?>" alt="images"></a>
				<?php } } ?>
			</div>
			<?php } ?>
		</div>
	</div>