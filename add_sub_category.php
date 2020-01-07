<?php include('header.php');?>
<?php 
$msg ='';
	if(!empty($_POST)){
		//echo "<pre>";
		//print_r($_POST);die;
		if(!empty($_POST['main_cat_id'])){
			if(!empty($_POST['sub_cat_name'])){
				$sub_cat_name = addslashes($_POST['sub_cat_name']);
				$main_cat_id = addslashes($_POST['main_cat_id']);
				
				$que = mysqli_query($con,"select * from tbl_sub_category where sub_cat_name = '$sub_cat_name'");
				$row = mysqli_num_rows($que);
				if($row==0){			
					$quy = mysqli_query($con,"insert into tbl_sub_category set sub_cat_name = '$sub_cat_name', main_cat_id = '$main_cat_id', status = '0', modify = now()");
				
					header('location:sub_category_manager.php?msg=Insert Successfully');
				}else{
					$msg = "Duplicate Entry";
				}
			}else{
				$msg = "Fill the Value";
			}
		}else{
			$msg = "Fill the Value";
		}
	}

?>
<?php include('sidebar.php');?>
<div class="grid-form1">
			<?php if(!empty($msg)){?>
				<h4 class="alert alert-info"> <?php echo $msg;?> </h4>
			<?php }?>
  	       <h3>Add Sub Category</h3>
  	        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" >
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Main Category Name</label>
									<div class="col-sm-8">
										<select name="main_cat_id" id="focusedinput" class="form-control1" >
											<option>Select Category Name</option>
											
											<?php $que = mysqli_query($con,"select * from tbl_main_category"); ?>
											<?php while($row=mysqli_fetch_assoc($que)){?>
									
												<option value="<?php echo $row['id'];?>"><?php echo $row['cat_name'];?></option>
											<?php }?>
											
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Sub Category Name</label>
									<div class="col-sm-8">
										<input name="sub_cat_name" type="text" id="focusedinput" class="form-control1" placeholder="Sub Category Name"/>
									</div>
								</div>
								
								
								
								
								
								
								
								</br>
								
												
								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<input class="btn-primary btn" type="submit" value="Submit">
										</div>
									</div>
								</div>
							</form>
						</div>
			</div>
</div>

<?php include('footer.php');?>			 