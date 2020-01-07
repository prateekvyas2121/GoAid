<?php include('header.php');?>
<?php 
$msg ='';
	if(!empty($_POST)){
		//echo "<pre>";
		//print_r($_POST);die;
		if(!empty($_POST['cat_name'])){
				$cat_name = addslashes($_POST['cat_name']);
				
				$que = mysqli_query($con,"select * from tbl_main_category where cat_name = '$cat_name'");
				$row = mysqli_num_rows($que);
				if($row==0){			
					$quy = mysqli_query($con,"insert into tbl_main_category set cat_name = '$cat_name', status = '0', modify = now()");
				
					header('location:category_manager.php?msg=Insert Successfully');
				}else{
					$msg = "Duplicate Entry";
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
  	       <h3>Add Category</h3>
  	        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" >
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
									<div class="col-sm-8">
										<input name="cat_name" type="text" id="focusedinput" class="form-control1" placeholder="Category Name"/>
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