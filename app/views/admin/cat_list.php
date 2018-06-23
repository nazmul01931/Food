        <h2>All Category List</h2> 
		<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
        
        <div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>
				<div class="body_content"> 
           <div class="card-body">
          <div class="table-responsive">
            <?php 
                  if (isset($category)) {
                    ?>
                  
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="col-xs-2" >Name</th>
                  <th class="col-xs-2" >Title</th>
                  <th class="col-xs-1" >Category Type</th>
                  <th class="col-xs-1" >Sub Category of</th>
                  <th class="col-xs-1" >Image</th>  
                  <th class="col-xs-1" >Action</th>   
                </tr>
              </thead>
              <tfoot>
                
                <tr>
                  <th class="col-xs-2" >Name</th>
                  <th class="col-xs-2" >Title</th>
                  <th class="col-xs-1" >Category Type</th>
                  <th class="col-xs-1" >Sub Category of</th>
                  <th class="col-xs-1" >Image</th>  
                  <th class="col-xs-1" >Action</th>  
                </tr>
              </tfoot>
              <tbody>

               
                <?php 
                  if(isset($category)){
                    foreach ($category as $value) {?>
                     
                <tr>
                  <td class="col-xs-2"><a href="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></a></td>
                  <td class="col-xs-2"><?php echo $admin_model->Text_Short($value['cat_title']); ?></td>
                  <td class="col-xs-1"><?php echo $admin_model->Category_Type($value['cat_type']); ?></td>
                  <td class="col-xs-1"><?php echo $value['cat_sub']; ?></td> 
                  <td class="col-xs-1">
                    <?php  if($value['cat_img'] !=NULL){?>
                        <img style="height:100px;width:150px;" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['cat_img']; ?>">
                    <?php }else{echo "NULL";}
                    ?>
                  
                  </td>
                  <td class="col-xs-1">
                    <a href="<?php echo BASED_URL; ?>/Admin/Category_Update/<?php echo $value['cat_id']; ?>">Edit</a> || 
                    <a href="<?php echo BASED_URL; ?>/Admin/category_Delete/<?php echo $value['cat_id']; ?>" onclick="return confirm('Are You Sure?')">Delete</a>
                  </td>  
                </tr>
                  <?php }} ?>
              </tbody>
            </table>
            <?php }else{echo "<h2>No Result Found</h2>";} ?>
          </div>
        </div> 
				</div> 