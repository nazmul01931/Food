        <h2>Create a New Page</h2> 
				<p>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</p>
        <div class="success_msg"><?php if(isset($success)){echo $success;} ?></div>
				<div class="body_content"> 
           <div class="card-body">
          <div class="table-responsive">
            <?php 
                  if (isset($page)) {
                    ?>
                  
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="col-xs-1" >Name</th>
                  <th class="col-xs-2" >Description</th>
                  <th class="col-xs-1" >Slug</th>
                  <th class="col-xs-2" >Section Name</th>
                  <th class="col-xs-2" >Content</th> 
                  <th class="col-xs-1" >Action</th> 
                </tr>
              </thead>
              <tfoot>
                
                <tr>
                  <th class="col-xs-1" >Name</th>
                  <th class="col-xs-2" >Description</th>
                  <th class="col-xs-1" >Slug</th>
                  <th class="col-xs-2" >Section Name</th>
                  <th class="col-xs-2" >Content</th> 
                  <th class="col-xs-1" >Action</th> 
                    
                </tr>
              </tfoot>
              <tbody>

                <?php 
                  foreach ($page as $value) {?>    
                <tr>
                  <td class="col-xs-1"><a href="<?php echo $value['id']; ?>"><?php echo $value['pag_name']; ?></a></td>
                  <td class="col-xs-2"><?php echo $admin_model->Text_Short($value['pag_desc']); ?></td>
                  <td class="col-xs-1"><?php echo $value['pag_slag']; ?></td>
                  <td class="col-xs-2"><?php echo $value['pag_section']; ?></td>
                  <td class="col-xs-2"><?php echo $admin_model->Text_Short($value['pag_content']); ?></td> 
                  <td class="col-xs-1">
                    <a href="<?php echo BASED_URL; ?>/Admin/Page_Update/<?php echo $value['pag_id']; ?>">Edit</a> || 
                    <a href="<?php echo BASED_URL; ?>/Admin/Page_Delete/<?php echo $value['pag_id']; ?>" onclick="return confirm('Are You Sure?')">Delete</a>
                  </td>  
                </tr>
                  <?php } ?>
              </tbody>
            </table>
            <?php }else{echo "<h2>No Result Found</h2>";} ?>
          </div>
        </div> 
				</div> 