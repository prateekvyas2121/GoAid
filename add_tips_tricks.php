<?php include('header.php');?>
<?php //include file for show mateial type by using ajax 
		include('ajax.php');   ?>
<?php 
$msg ='';
	if(!empty($_POST)){
		//echo "<pre>";print_r($_POST);die;
		if(!empty($_POST['name'])){
			//if(!empty($_POST['main_cat_id'])){
				if(!empty($_POST['main_cat_id'])){
					if(!empty($_POST['sub_cat_id'])){
						$sub_cat_id = addslashes($_POST['sub_cat_id']);
						$main_cat_id = addslashes($_POST['main_cat_id']);
						$name = addslashes($_POST['name']);
						$content = addslashes($_POST['content']);
						$date = addslashes($_POST['date']);
						
						$img = implode(',', $_POST['img']);
						
						if(!empty($_FILES)){
							//print_r($_FILES);die;
							if(!empty($_FILES['img'])){
								if($_FILES['img']['error']==0){
									
									$img = time().$_FILES['img']['name'];					
									$img_tmp_name = $_FILES['img']['tmp_name'];
									$path = "tips_tricks_img/".$img;
									move_uploaded_file($img_tmp_name,$path);
									
									
									$quy = mysqli_query($con,"insert into tbl_tips_and_tricks set sub_cat_id = '$sub_cat_id', main_cat_id = '$main_cat_id',  name = '$name',  content = '$content',  images = '$img', date = '$date', status = '0', modify = now()");
									
									header('location:tips_tricks_manager.php?msg=Insert Successfully');
								}
							}		
						  }
					}else{
						$msg = "Fill the Value";
					}
				}else{
					$msg = "Fill the Value";
				}
			/*}else{
				$msg = "Fill the Value";
			}*/
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
							<form class="form-horizontal" method="post" enctype="multipart/form-data" >
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input name="name" type="text" id="focusedinput" class="form-control1" placeholder="Enter Name"/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Main Category Name</label>
									<div class="col-sm-8">
										<select name="main_cat_id" id="focusedinput" class="form-control1" >
											<option>Select Category Name</option>
											
											<?php $que = mysqli_query($con,"select * from tbl_main_category"); ?>
											<?php while($row=mysqli_fetch_assoc($que)){?>
									
												<option value="<?php echo $row['id'];?>"  onclick="show_sub_cat(this.value);"><?php echo $row['cat_name'];?></option>
											<?php }?>
											
										</select>
									</div>
								</div>
								<div class="form-group" id="txtHint">
									<label for="focusedinput" class="col-sm-2 control-label">Sub Category Name</label>
									<div class="col-sm-8">
										<select name="sub_cat_id" id="focusedinput" class="form-control1" >
											<option>Select Sub Category Name</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Content</label>
									<div class="col-sm-8">
										<textarea name="content" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Images</label>
									<div class="col-sm-8">
										<input name="img" type="file" id="focusedinput" class="form-control1" />
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Date</label>
									<div class="col-sm-8">
										<input name="date" type="text" id="focusedinput" class="form-control1" placeholder="Date"/>
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