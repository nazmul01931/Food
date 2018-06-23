
<h2>Social Link Add</h2> 
<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
<div class="success_msg"><?php if(isset($success)){echo $success;} ?></div> 

<div class="body_content"> 
	<?php  
	if(isset($social_single)){
		foreach ($social_single as $value) {
			$id 		= $value['social_id'];
			$link_nam 	= $value['scl_name'];
			$link_class = $value['class'];
			$link_url 	= $value['link'];   
		}   
 ?>
	<form class="form-horizontal" action="<?php echo BASED_URL; ?>/Admin/Update_Social_Link" method="POST"> 
		<div class="control-group">
	    <label class="control-label"  >Link Name:</label>
	    <div class="controls">
	      <input type="text"   name="link_nam"  value="<?php if(isset($link_nam)){echo $link_nam;}?>"placeholder="Pag Discription">
	      <input type="hidden" name="link_id" value="<?php echo $id; ?>">
	      <?php if(isset($link_namerr)){echo $link_namerr;}?>
	    </div>
	  </div>

	  <div class="control-group">
	    <label class="control-label" >Font woesm Class :</label> 
	    <div class="controls">
	      <input type="text" id="text" name="link_class" value="<?php if(isset($link_class)){echo $link_class;}?>" placeholder="Page Name..."><span style="padding-left: 15px;">(fa-facebook)</span>
	      <?php if(isset($link_classerr)){echo $link_classerr;}?>
	    </div>
	  </div>  

		<div class="control-group">
		    <label class="control-label" for="inputPassword">Link Url:</label>
		    <div class="controls"> 
		        <input type="text" id="text" name="link_url" value="<?php if(isset($link_url)){echo $link_url;}?>" placeholder="Page Name..."> 
	      		<?php if(isset($link_urlerr)){echo $link_urlerr;}?>
		    </div>
	  	</div> 
	  	 
		<div class="control-group">
		    <div class="controls"> 
		      <button type="submit" class="btn">Update Social Link 1</button>
		    </div>
		 </div>
	</form>
 <?php } ?>
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="col-xs-2" >Social Name</th>
                  <th class="col-xs-2" >Class</th>
                  <th class="col-xs-2" >Social Url</th> 
                  <th class="col-xs-2" >Action</th> 
                </tr>
              </thead>
              <tfoot> 
                <tr>
                  <th class="col-xs-2" >Social Name</th>
                  <th class="col-xs-2" >Class</th>
                  <th class="col-xs-2" >Social Url</th> 
                  <th class="col-xs-2" >Action</th> 
                </tr>
              </tfoot>
              <tbody>

                <?php 
                  foreach ($social_link as $value) {?>    
                <tr>
                  <td class="col-xs-1"><a href="<?php echo $value['social_id']; ?>"><?php echo $value['scl_name']; ?></a></td>
                  <td class="col-xs-2"><?php echo $value['class']; ?></td>
                  <td class="col-xs-1"><?php echo $value['link']; ?></td>  
                  <td class="col-xs-1"> 
                  	<a href="<?php echo BASED_URL; ?>/Admin/Update_Social_Link/<?php echo $value['social_id']; ?>">Edit</a> || 
                    <a href="<?php echo BASED_URL; ?>/Admin/Delete_Social_Link/<?php echo $value['social_id']; ?>" onclick="return confirm('Are You Sure?')">Delete</a>
                  </td>  
                </tr>
                  <?php } ?>
              </tbody>
            </table>	 
</div> 
				  
			