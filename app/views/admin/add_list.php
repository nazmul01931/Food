        <h2>Addvarites List</h2> 
				<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
        <div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>
				<div class="body_content"> 
           <div class="card-body">
          <div class="table-responsive">
            <?php 
                  if (isset($add)) {
                    ?>
                  
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="col-xs-1" >Name</th>
                  <th class="col-xs-1" >Link</th>
                  <th class="col-xs-2" >Description</th>
                  <th class="col-xs-1" >Position</th>
                  <th class="col-xs-2" >Image</th> 
                  <th class="col-xs-1" >Date From</th> 
                  <th class="col-xs-1" >Date To</th> 
                  <th class="col-xs-1" >Action</th> 
                </tr>
              </thead>
              <tfoot>
                
                <tr>
                  <th class="col-xs-1" >Name</th>
                  <th class="col-xs-1" >Link</th>
                  <th class="col-xs-2" >Description</th>
                  <th class="col-xs-1" >Position</th>
                  <th class="col-xs-2" >Image</th> 
                  <th class="col-xs-1" >Date From</th> 
                  <th class="col-xs-1" >Date To</th> 
                  <th class="col-xs-1" >Action</th> 
                    
                </tr>
              </tfoot>
              <tbody>

                <?php 
                  foreach ($add as $value) {?>    
                <tr>
                  <td class="col-xs-1"><a href="<?php echo $value['add_id']; ?>"><?php echo $value['add_name']; ?></a></td>
                  <td class="col-xs-1"><?php echo $value['add_link']; ?></td>
                  <td class="col-xs-2"><?php echo $admin_model->Text_Short($value['add_desc']); ?></td>
                  <td class="col-xs-1"><?php echo $value['add_position']; ?></td> 
                  <td class="col-xs-1"><img style="height:100px;width:150px;" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['add_img']; ?>"></td>
                  <td class="col-xs-1"><?php echo $value['date_from']; ?></td> 
                  <td class="col-xs-1"><?php echo $value['date_to']; ?></td> 
                  <td class="col-xs-1">
                    <a href="<?php echo BASED_URL; ?>/Admin/Add_Update/<?php echo $value['add_id']; ?>">Edit</a> || 
                    <a href="<?php echo BASED_URL; ?>/Admin/Add_Delete/<?php echo $value['add_id']; ?>" onclick="return confirm('Are You Sure?')">Delete</a>
                  </td>  
                </tr>
                  <?php } ?>
              </tbody>
            </table>
            <?php }else{echo "<h2>No Result Found</h2>";} ?>
          </div>
        </div> 
				</div> 