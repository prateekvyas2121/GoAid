<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php 
	if(!empty($_POST)){
		//print_r($_POST);die;
			if(!empty($_POST['cat_name'])){
						$cat_name = addslashes($_POST['cat_name']);
						$cat_id = $_POST['cat_id'];
						
						
						$quy = mysqli_query($con,"Update tbl_main_category set cat_name= '$cat_name', status = '0', modify = now() where id = '$cat_id'");
						header('location:category_manager.php?msg=Updated Successfully');
					
			}else{
				header('location:class_manager.php?msg=Error');
			}
		}
?>

<?php
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$que = mysqli_query($con,"select * from tbl_main_category where id = $id");
	$row = mysqli_fetch_assoc($que);
	//print_r($row);die;
}
?>   	
<?php include('sidebar.php');?>
<div class="grid-form1">
			<?php if(!empty($msg)){?>
				<h4 class="alert alert-info"> <?php echo $msg;?> </h4>
			<?php }?>
  	       <h3>Category Manager</h3>
  	        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
									<div class="col-sm-8">
										<input name="cat_name" type="text" id="focusedinput" class="form-control1" value="<?php echo $row['cat_name'];?>"/>
									</div>
								</div>
								
									
								<input type="hidden" name="cat_id" value="<?php echo $row['id'];?>" />
								
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