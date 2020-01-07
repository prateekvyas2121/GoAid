<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php 
	if(!empty($_POST)){
		//print_r($_POST);die;
			if(!empty($_POST['main_cat_id'])){
				if(!empty($_POST['sub_cat_name'])){
						$sub_cat_name = addslashes($_POST['sub_cat_name']);
						$main_cat_id = $_POST['main_cat_id'];
						$sub_cat_id = $_POST['sub_cat_id'];
						
						
						$quy = mysqli_query($con,"Update tbl_sub_category set sub_cat_name= '$sub_cat_name', main_cat_id= '$main_cat_id', status = '0', modify = now() where id = '$sub_cat_id'");
						header('location:sub_category_manager.php?msg=Updated Successfully');
				}else{
					header('location:sub_category_manager.php?msg=Error');
				}
			}else{
				header('location:sub_category_manager.php?msg=Error');
			}
		}
?>

<?php
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$que = mysqli_query($con,"select 
									ri.main_cat_id,
									ri.id,
									ri.sub_cat_name,
									ri.status,
							 tbl_main_category.cat_name as cat_name
							 from tbl_sub_category as ri LEFT JOIN tbl_main_category ON ri.main_cat_id = tbl_main_category.id
							 where ri.id = $id");
	
	$row = mysqli_fetch_assoc($que);
	//print_r($row);die;
}
?>   	
<?php include('sidebar.php');?>
<div class="grid-form1">
			<?php if(!empty($msg)){?>
				<h4 class="alert alert-info"> <?php echo $msg;?> </h4>
			<?php }?>
  	       <h3>Sub Category Manager</h3>
  	        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Main Category Name</label>
									<div class="col-sm-8">
										<select name="main_cat_id" id="focusedinput" class="form-control1" >
											<option value="<?php echo $row['main_cat_id'];?>"><?php echo $row['cat_name'];?></option>
											
											<?php $que_main = mysqli_query($con,"select * from tbl_main_category"); ?>
											<?php while($row_main=mysqli_fetch_assoc($que_main)){?>
									
												<option value="<?php echo $row_main['id'];?>"><?php echo $row_main['cat_name'];?></option>
											<?php }?>
											
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
									<div class="col-sm-8">
										<input name="sub_cat_name" type="text" id="focusedinput" class="form-control1" value="<?php echo $row['sub_cat_name'];?>"/>
									</div>
								</div>
								
									
								<input type="hidden" name="sub_cat_id" value="<?php echo $row['id'];?>" />
								
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