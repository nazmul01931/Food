<div class="footer footer_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="footer_item">
					<?php 
						$pag_id=2;
						$data = $default_obj->footer_page_query($pag_id);
						foreach ($data as $value) {
							$text = $value['pag_desc'];

							if(strlen($text)>200){
					 			$text = substr($text, 0, 250);
					 		} 
						?>
						 
					<h3><?php echo $value['pag_name']; ?></h3>
					<p><?php echo $text; ?> <a href="<?php echo BASED_URL; ?>/about">More...</a></p> 
					<?php } ?>
				</div> 
			</div> 

			<?php if (isset($default_obj)) { ?> 
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="footer_item">
					<h3>Contact Links</h3> 
					<ul>
						<?php 
							$data=$default_obj->main_menu(); 
							foreach ($data as $value) {?>
							<li><a href="<?php echo BASED_URL; ?>/<?php echo $value['pag_slag']; ?>"><?php echo $value['pag_name']; ?></a></li> 
						<?php		 
							}
						?>
						
					</ul>

				</div>	
			</div>
			<?php } ?>

			<?php  
				if (isset($con_info)) {
				foreach ($con_info as $value) {
					$con_name		= $value['con_name'];
					$con_num		= $value['con_num'];
					$con_email		= $value['con_email'];
					$con_location 	= $value['con_location'];
				} 
			?> 
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="footer_item">
					<h3><?php if(isset($con_name)) {echo $con_name;} ?></h3> 
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Phone Number</h6>
							<p><?php if(isset($con_num)) {echo $con_num; }?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Email Address</h6>
							<p>Email : <?php if(isset($con_email)) {echo $con_email;} ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3-address-grid">
						<div class="w3-address-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3-address-right">
							<h6>Location</h6>
							<p><?php if(isset($con_location)) {echo $con_location;} ?></p>
						</div>
						<div class="clearfix"> </div>
					</div> 
				</div>	
			</div>
			<?php } ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="footer_item tag_clude">
					<h3>Tag Clude</h3>
					<?php 
						$data1=Null; 
						foreach ($tag as $value) {
							$data1 .= $value['tag']; 
						}
						$url=rtrim($data1, ' '); 
						 
						 $num= str_word_count($url);
						 $url=explode(' ', $data1);
						 
						for ($i=0; $i <12; $i++) {   
					 ?> 
					<a href="<?php echo BASED_URL;?>/Product/search/<?php echo $url[$i]; ?>"><?php if(isset($url[$i])){echo $url[$i];} ?></a>
				 	 <?php } ?>
				</div>
			</div>
		</div>
		<div class="row"><div class="copywrite"><p> &copy; Broome St NY 10002 California USA. </p></div></div>	
	</div>
</div>
		
		
		<script src="<?php echo BASED_URL; ?>/js/jquery.js"></script>
		<script src="<?php echo BASED_URL; ?>/js/bootstrap.min.js"></script> 
		<script src="<?php echo BASED_URL; ?>/js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="<?php echo BASED_URL; ?>/js/custom.js" type="text/javascript"></script>
		<script src="<?php echo BASED_URL; ?>/js/superfish.js" type="text/javascript"></script>
		<script src="<?php echo BASED_URL; ?>/js/jquery.meanmenu.js" type="text/javascript"></script>
	</body>
</html>
