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
						$tips_tricks_id = addslashes($_POST['tips_tricks_id']);
						
						$img = $_POST['img'];
						
						if(!empty($_FILES['img']['name'])){
							//print_r($_FILES);die;
							if(!empty($_FILES['img'])){
								if($_FILES['img']['error']==0){
									
									$img = time().$_FILES['img']['name'];					
									$img_tmp_name = $_FILES['img']['tmp_name'];
									$path = "tips_tricks_img/".$img;
									unlink('tips_tricks_img/'.$_POST['img']);
						
									move_uploaded_file($img_tmp_name,$path);
									
									
									$quy = mysqli_query($con,"Update tbl_tips_and_tricks set sub_cat_id = '$sub_cat_id', main_cat_id = '$main_cat_id',  name = '$name',  content = '$content',  images = '$img', date = '$date', status = '0', modify = now() where id = '$tips_tricks_id'");
									
									header('location:tips_tricks_manager.php?msg=Insert Successfully');
								}
							}		
						  }else{
						      $quy = mysqli_query($con,"Update tbl_tips_and_tricks set sub_cat_id = '$sub_cat_id', main_cat_id = '$main_cat_id',  name = '$name',  content = '$content', date = '$date', status = '0', modify = now() where id = '$tips_tricks_id'");
									
							  header('location:tips_tricks_manager.php?msg=Insert Successfully');
						      
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
<?php
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$que = mysqli_query($con,"select 
									ri.id,
									ri.main_cat_id,
									ri.sub_cat_id,
									ri.name,
									ri.content,
									ri.images,
									ri.status,
									ri.date,
							 tbl_main_category.cat_name as cat_name,
							 tbl_sub_category.sub_cat_name as sub_cat_name
							 from tbl_tips_and_tricks as ri LEFT JOIN tbl_main_category ON ri.main_cat_id = tbl_main_category.id
							 LEFT JOIN tbl_sub_category ON ri.sub_cat_id = tbl_sub_category.id
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
  	       <h3>Add Sub Category</h3>
  	        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" enctype="multipart/form-data" >
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input name="name" type="text" id="focusedinput" class="form-control1" placeholder="Enter Name" value="<?php echo $row['name'];?>" />
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Main Category Name</label>
									<div class="col-sm-8">
										<select name="main_cat_id" id="focusedinput" class="form-control1" >
										<option value="<?php echo $row['main_cat_id'];?>"><?php echo $row['cat_name'];?></option>
											
											
											<?php $que1 = mysqli_query($con,"select * from tbl_main_category"); ?>
											<?php while($row1=mysqli_fetch_assoc($que1)){?>
									
												<option value="<?php echo $row1['id'];?>"  onclick="show_sub_cat(this.value);"><?php echo $row1['cat_name'];?></option>
											<?php }?>
											
										</select>
									</div>
								</div>
								<div class="form-group" id="txtHint">
									<label for="focusedinput" class="col-sm-2 control-label">Sub Category Name</label>
									<div class="col-sm-8">
										<select name="sub_cat_id" id="focusedinput" class="form-control1" >
											<option value="<?php echo $row['sub_cat_id'];?>"><?php echo $row['sub_cat_name'];?></option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Content</label>
									<div class="col-sm-8">
										<textarea name="content" id="txtarea1" cols="50" rows="4" class="form-control1"><?php echo $row['content'];?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Images</label>
									<div class="col-sm-8">
									    <input name="img" type="hidden" value="<?php echo $row['images'];?>" />
										<input name="img" type="file" id="focusedinput" class="form-control1" />
										
										<img style="height:20%; width:20%;" src="tips_tricks_img/<?php echo $row['images'];?>" alt="" /> 
										
										
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Date</label>
									<div class="col-sm-8">
										<input name="date" type="text" id="focusedinput" class="form-control1" placeholder="Date" value="<?php echo $row['date'];?>" />
									</div>
								</div>
								
																
								</br>
								<input type="hidden" name="tips_tricks_id" value="<?php echo $row['id'];?>" />
												
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