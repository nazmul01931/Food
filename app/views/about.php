
 <section class="section "> 
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">  
				<div class="about_us"> 

					<?php  
						$data=$default_obj-> about_us_page(); 
						foreach ($data as $value) {?>  
					<h1><?php echo $value['pag_section']; ?></h1>

					<p><?php echo $value['pag_desc']; ?></p>
					<?php } 
						$data=$default_obj->about_us_post_query();

						foreach ($data as $value) {?> 
							<div class="about_notice">
								<div class="col-lg-7 col-md-7 col-sm-7 col-xm-12"> 
									<span><?php echo $value['name']; ?></span>
								</div>	
								<div class="col-lg-5 col-md-5 col-sm-5 col-xm-12">
									<img class="img-responsive" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['img']; ?>" alt="image">
								</div>	
							</div> 
					<p><?php echo $value['postdesc']; ?></p>
					<?php } ?>
				</div>
			</div> 
		</div>
	</div>
</section>