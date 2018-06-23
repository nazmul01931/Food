<?php 

	$data=$default_obj->contact_page_query();

	foreach ($data as $value) {
		$heading = $value['pag_section'];
		$desc    = $value['pag_desc'];
		$content = $value['pag_content'];
	}
?>
 
<section class="section bg_section"> 
	<div class="container">
		<div class="row">
			<h1><?php echo $heading; ?></h1> 
			<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">  
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xm-12"> 
						<div class="about_us contact_us_form"> 
							<p><?php echo $desc; ?></p> 
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xm-12"> 
						<div class="about_us contact_us_form"> 
							<?php if(isset($success)){echo $success;$success=" ";} ?>
							<form action="<?php echo BASED_URL; ?>/Contact/Contact_info" method="POST">
								<input type="text" name="Name" placeholder="Name..."> 
								<input type="email" name="Email" placeholder="Email..."> 
								<input type="text" name="number" placeholder="Number..."> 
								<textarea rows="5" name="Message" placeholder="Message..."  ></textarea>
								<input type="submit" value="SEND">
								<input type="reset" value="RESET">
							</form> 
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
</section>

<section>
	<div class="google-image">
		<?php 
		$table="tbl_sec_setting"; 
		$data=$default_obj->Default_All_Select($table);
		foreach ($data as $value) {
			$link=$value['sec_desc'];
		}
		?>
	<iframe src="<?php echo $link; ?>"  frameborder="0" style="border:0" allowfullscreen></iframe>		 
	</div>
</section>