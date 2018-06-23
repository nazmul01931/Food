        <h2>All Post List</h2> 
		<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
        
        <div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>
				<div class="body_content"> 
           <div class="card-body">
          <div class="table-responsive">
            <?php 
                  if (isset($posts)) {
                    ?>
                  
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="col-xs-2" >Name</th>
                  <th class="col-xs-2" >Description</th>
                  <th class="col-xs-1" >Category</th>
                  <th class="col-xs-1" >Post By</th>
                  <th class="col-xs-1" >Date</th> 
                  <th class="col-xs-1" >Image</th> 
                  <th class="col-xs-1" >Post Type</th> 
                  <th class="col-xs-1" >Action</th>   
                </tr>
              </thead>
              <tfoot>
                
                <tr>
                  <th class="col-xs-2" >Name</th>
                  <th class="col-xs-2" >Description</th>
                  <th class="col-xs-1" >Category</th>
                  <th class="col-xs-1" >Post By</th>
                  <th class="col-xs-1" >Date</th> 
                  <th class="col-xs-1" >Image</th> 
                  <th class="col-xs-1" >Post Type</th> 
                  <th class="col-xs-1" >Action</th>
                    
                </tr>
              </tfoot>
              <tbody>

                <?php 
                foreach ($posts as $value) {?>    
                <tr>
                  <td class="col-xs-2"><a href="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></td>
                  <td class="col-xs-2"><?php echo $admin_model->Text_Short($value['postdesc']); ?></td>
                  <td class="col-xs-1"><?php echo $admin_model->category($value['cat']); ?></td>
                  <td class="col-xs-1"><?php echo $admin_model->Users($value['posted']); ?></td>
                  <td class="col-xs-1"><?php echo $value['postdate']; ?></td>   
                  <td class="col-xs-1"><img style="height:100px;width:150px;" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['img']; ?>"></td> 
                  <td class="col-xs-1"><?php echo $admin_model->Post_Type($value['post_type']); ?></td> 
                  <td class="col-xs-1">
                    <a href="<?php echo BASED_URL; ?>/Admin/posts_Update/<?php echo $value['id']; ?>">Edit</a> || 
                    <a href="<?php echo BASED_URL; ?>/Admin/posts_Delete/<?php echo $value['id']; ?>" onclick="return confirm('Are You Sure?')">Delete</a>
                  </td>  
                </tr>
                  <?php } ?>
              </tbody>
            </table>
            <?php }else{echo "<h2>No Result Found</h2>";} ?>
          </div>
        </div> 
				</div> 