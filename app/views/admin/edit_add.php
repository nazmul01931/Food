<?php 
	if(isset($add)){
		foreach ($add as $value) {
			$add_id 	= $value['add_id'];
			$add_name 	= $value['add_name'];
			$add_link 	= $value['add_link'];
			$add_desc 	= $value['add_desc'];
			$add_pos 	= $value['add_position'];  
			$images 	= $value['add_img'];   
			$add_to 	= $value['date_to'];  
			$date_from 	= $value['date_from'];  
			  
		} 

	}
 ?>
<h2>Update Add</h2>  
<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
<div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>

<div class="body_content">
	<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Admin/Add_Update" method="POST" enctype="multipart/form-data">
	  <div class="control-group">
	    <label class="control-label" for="">Add Name:</label> 
	    <div class="controls">
	      <input type="text" id="" name="add_name" value="<?php if(isset($add_name)){echo $add_name;}?>" placeholder="add Name...">
	      <?php if(isset($add_nameerr)){echo $add_nameerr;}?>
	      <input type="hidden" name="add_id" value="<?php echo $add_id; ?>">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="">Permalink:</label>
	    <div class="controls">
	      <input type="text" id="" name="add_link"  value="<?php if(isset($add_link)){echo $add_link;}?>"placeholder="add Discription">
	      <?php if(isset($add_linkerr)){echo $add_linkerr;}?>
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for=""> Description:</label>
	    <div class="controls">
	      <input type="text" id="" name="add_desc" value="<?php if(isset($add_desc)){echo $add_desc;}?>" placeholder="add Price ">
	      <?php if(isset($add_descerr)){echo $add_descerr;}?>
	    </div>
	  </div>
		<div class="control-group">
		    <label class="control-label" for="">Position:</label>
		    <div class="controls">
		      <input type="text" name="add_pos" value="<?php if(isset($add_pos)){echo $add_pos;}?>" placeholder="Pag Tag">
		      <?php if(isset($add_poserr)){echo $add_poserr;}?>
		    </div>
	  	</div>
	  	<div class="control-group">
		    <label class="control-label" for="">Date TO:</label>
		    <div class="controls">
		      <input type="date" name="add_to" value="<?php if(isset($add_to)){echo $add_to;}?>" placeholder="Pag Tag">
		      <?php if(isset($add_toerr)){echo $add_toerr;}?>
		    </div>
	  	</div>
	  	<div class="control-group">
		    <label class="control-label" for="">Date From:</label>
		    <div class="controls">
		      <input type="date" name="date_from" value="<?php if(isset($date_from)){echo $date_from;}?>" placeholder="Pag Tag">
		      <?php if(isset($date_fromerr)){echo $date_fromerr;}?>
		    </div>
	  	</div>

	  	  
	  	<div class="control-group">
		    <label class="control-label" for="">add Tag:</label> 
		      <div class="control-group">
			    <label class="control-label" for="">Upload File:</label>
			    <div class="controls">
			      <input type="file" name="image" value="<?php echo $images;?>"> <?php if(isset($file_nameerr)){echo $file_nameerr;}?>
			    	<?php if(isset($images)){ ?>
			    	<img src="<?php echo BASED_URL;?>/uploads/<?php if(isset($images)){echo $images;}?>" alt="image">
			    	<?php }?>
			    </div>  
		    </div>
	  	</div>
		<div class="control-group">
		    <div class="controls"> 
		      <button type="submit" class="btn">Create add</button>
		    </div>
		 </div>
	</form>
</div> 
				  
			