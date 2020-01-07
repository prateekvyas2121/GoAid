<?php include('../config/config.php');?>
<!-- for show Sub Category type in add tipes and tricks using by ajax (code start)-->
<?php
if(!empty($_GET['show_sub_cat_id'])){
	$show_sub_cat_id = $_GET['show_sub_cat_id'];?>
	<?php  $que = mysqli_query($con,"select * from tbl_sub_category where main_cat_id = $show_sub_cat_id"); ?>
							
		
		<div class="form-group" id="txtHint">
			<label for="focusedinput" class="col-sm-2 control-label">Sub Category Name</label>
			<div class="col-sm-8">
				<select name="sub_cat_id" id="focusedinput" class="form-control1" >
					<option>Select Sub Category Name</option>
					<?php while($row=mysqli_fetch_assoc($que)){?>
							<option value="<?php echo $row['id'];?>">
							    <?php echo $row['sub_cat_name'];?>
							</option>
					<?php }?>
				</select>
			</div>
		</div>				

<?php }?>	
<!-- for show Sub Category type in add tipes and tricks using by ajax (code end)-->
