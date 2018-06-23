
 <section class="section "> 
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">  
				<div class="about_us"> 
					<?php 
						$comments;
						$postid=5;
						$level=NULL;
						$data = $default_obj->comment_query_list($postid);
 						
 						$count=count($data);

 						foreach ($data as  $value) {

 							$level=$value['com_level'];
 							$first_com_id=$value['com_id'];

 							if($level==1){$level=0;}

 						?>  
						<div class="comment_box" style="width:100%;float: left;border: 1px solid red;margin-left:<?php echo $level ?>;">
							<p><?php echo $value['com_desc']; ?></p>
						</div>
					<?php 
						
							$data2 	= $default_obj->comment_query_chield($postid,$first_com_id);
 							$count2	= count($data2);
 							 
 							if ($count2>1) {
 								foreach ($data2 as  $value) {
 									$level=$value['com_level'];

 									if($level==2){
 										$margin="margin-left:50px;";
 									}elseif($level==3){
 										$margin="margin-left:100px;";
 									}

 									echo "<div style='".$margin." '>".$value['com_desc']."</div>";
 								}
 							} else {
 								# code...
 							}
 							


						}//First foreach exit
					?>
					 
				</div>
			</div> 
		</div>
	</div>
</section>