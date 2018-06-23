<section class="section post_section post_section_produc"> 
	<div class="col-lg-9 col-md-9 col-sm-9 col-xm-12"> 
		<div class="row">
			<?php if(isset($search)) {?>
			<h4>Search Keyword: <?php if(isset($search_query)){echo $search_query;} ?> </h4> 
				<?php 
					if(isset($search) && !empty($search)){
						foreach ($search as  $value) {?> 
					<div class="col-lg-4 col-md-4 col-sm-6 col-xm-12">
						<div class="row">	
							<div class="post_item">
								<div class="post_item_image"> 
									<a href="single.html"><img style="height: 250px;" class="img-responsive" src="<?php echo BASED_URL;?>/uploads/<?php echo $value['img']; ?>" alt="images" ></a> 
								</div>
								<div class="post_item_description">  
									<h4><a href="<?php echo BASED_URL; ?>/Post/Details/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></h4>  
								</div> 
							</div>
						</div>
					</div>
				<?php }
				}else{echo " 
					<div class='no_result_show'>
						<h1>No Result Found......!</h1>
					</div>
				";}
			?>
				
			 
		<!-- show more html start --> 
	 
		</div>
	<?php }else{echo "not found";} ?>
	</div>
		 
	 <!-- _______________________________Sidebar column Start _________________________________ -->
	<div class="col-lg-3 col-md-3 col-sm-3 col-xm-12">
		<div class="sidebar_wrap product_page_sidebar">

			<div class="sidebar_content">
				<div class="search_rapper">
					<div class="sidebar_content">
						<form method="POST" action="<?php echo BASED_URL;?>/Product/search">
							<input id="search" autocapitalize="none" autocomplete="off"   autofocus="" name="search_query" tabindex="0" spellcheck="false" placeholder="Search" aria-label="Search"     style="outline: medium none currentcolor;" class="ytd-searchbox" type="text" value="<?php if(isset($search_query)){echo $search_query;} ?>" >
		 
							<button id="search-icon-legacy" class="sidebar_search_button" aria-label="Search"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
			 
			<div class="sidebar_content">
				<form action="" method="POST" class="filter_submit">
					<table class="sidebar_select_search_table">
						<tr> 	
							<td class="">
								<label class="training_reg_name_fild_col9">Select a Category </label>
								<select name="f_dist" class="selection_form" >
									<option>-- Select One --</option>
									<option value="Bagerhat">	Amazing CHICKEN SANDWICH</option>
									<option value="Chuadanga">	Amazing Burger Recipes</option>
									<option value="Jessore">	Best Dairy Foods</option>
									<option value="Jhenaidah">	Different Types of Pizza</option>
									<option value="Khulna">		Amazing Noodles</option>
									<option value="Kushtia">	Fresh Healthy Vegetables</option> 
								</select>
							</td>
						</tr>
						<tr> 	
							<td class="">
								<label class="training_reg_name_fild_col9">District </label>
								<select name="f_dist" id="slct1" class="selection_form" onchange="populate(this.id,'slct2')" required="1">
									<option>-- Select One --</option>
									<option value="Bagerhat">	Bagerhat</option>
									<option value="Chuadanga">	Chuadanga</option>
									<option value="Jessore">	Jessore</option>
									<option value="Jhenaidah">	Jhenaidah</option>
									<option value="Khulna">		Khulna</option>
									<option value="Kushtia">	Kushtia</option>
									<option value="Magura">		Magura</option>
									<option value="Meherpur">	Meherpur</option>
									<option value="Narail">		Narail</option>
									<option value="Satkhira">	Satkhira</option>
									<option value="Barguna">	Barguna</option>
									<option value="Barisal">	Barisal</option>
									<option value="Bhola">		Bhola</option>
									<option value="Jhalokati">	Jhalokati</option>
									<option value="Patuakhali">	Patuakhali</option>
									<option value="Pirojpur">	Pirojpur</option>
									<option value="Faridpur">	Faridpur</option>
									<option value="Gopalganj">	Gopalganj</option>
									<option value="Madaripur">	Madaripur</option>
									<option value="Rajbari">	Rajbari</option>
									<option value="Shariatpur">	Shariatpur</option>
									<option value="Cox'S Bazar">Cox'S Bazar</option> 
								</select>
							</td>
						</tr>
						<tr>
							<td  class="">
								<label class="training_reg_name_fild_col9">Upazila</label>
								<select name="f_upaz" id="slct2" style="visibility:unvisible;"class="selection_form" onchange="popular(this.id,'slct3')"  required="1">
									<option>-- Select One --</option>
								</select>
							</td>
						</tr>

						<tr>
							<td class="">
								<label class="training_reg_name_fild_col9">Union/Word</label>
								<select name="f_union" class="selection_form" id="slct3"  required="1"><option>-- Select One --</option></select> 
							</td>
						</tr>
						 
						
						<tr><td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							<label class="radio">$50-$250</label>
						</td></tr>	

						<tr><td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							<label class="radio">$251-$500</label>
						</td></tr>

						<tr><td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							<label class="radio">$501-$750</label>
						</td></tr>

						<tr><td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							<label class="radio">$751-$1000</label> 
						</td></tr>
						<tr><td><input class="filter_btn" type="submit" name="" value="Filter"></td></tr>
					</table>
				</form> 
			</div> 

			<div class="sidebar_content">
				<div class="sidebar_heading"> <h4>Follow Us</h4> </div>  
				<div class="post_comment"> 
					<span><a href="#"><i class="fa fa-twitter"> tweet</i> </a> </span>
					<span><a href="#"><i class="fa fa-google-plus"> google</i></a></span>
					<span><a href="#"><i class="fa fa-facebook"> facebook</i></a> </span>  
				</div>  
			</div>

		</div>
	</div>  
</section>