<?php include("header.php") ?>
    <?php include("sidebar.php") ?>
  <?php  include_once('config.php'); ?>



  <div id="page-wrapper">
    <div class="row">
      <h1 class="page-header"> Add New </h1>
    </div>
    <div class="row">
    
    <div class="content_innner">
    
      <form method="post" action="" enctype="multipart/form-data">
      
      <div class="row">
        <div class="form-group col-lg-12">
        <label>Main Title*: </label>        
        <input type="text" name="title" class="form-control" placeholder="Enter Title">	
      </div>
      </div>
      

      
      <div class="form-group col-lg-3">
        <label>Image</label>
	<input type="file" name="photo" class="form-control" ></div></div>
      
     
	<div class="form-group col-lg-12">
        <label> About Description *:</label>
        <script src="ckeditor/ckeditor.js"></script>
		<textarea class="ckeditor form-control" name="des"></textarea>
      </div>
      
       <div class="col-lg-12">
        <button class="btn btn-success" name="add_category" onclick="return check_validation()"> Submit</button>
         <a href="view_first_add.php" class="btn btn-primary">Back</a>
      </div> </div>

      <!-- data insert -->

      <?php
	include('config.php');
	if (isset($_POST['add_category']))
	 {
		extract($_POST);

			$file_type=$_FILES['photo']['type'];
	 		if ($file_type=="image/jpg" || $file_type=="image/jpeg" || $file_type=="image/png" || $file_type=="image/gif" || $file_type=="image/pdf" ) 
	 		{
	 		$file=$_FILES['photo']['name'];
	 		$temp_file=$_FILES['photo']['tmp_name'];
	 		$path='../images/first_add-images/'.$file;


	 		if (move_uploaded_file($temp_file, $path))
	 		 {
		$duplicate=mysqli_query($con,"select id from first_add where main_title= '$title' and image='$file'  ");
		$count=mysqli_num_rows($duplicate);
		if ($count>0)
		 {
			echo "<script>alert('Sorry, You enter duplicate data')</script>";
		}
		else
		{
			$query="insert into first_add(main_title, image, description) values ('$title', '$file', '$des')"; 
			if (mysqli_query($con,$query))
			 {
			 ?>
			 	<script>
               window.location='view_first_add.php';
				</script>

				<?php
			}
			else
			{
				echo "not inserted";
			}
		
		}

	}
	}
}
?>
      </form>
      </div>
      
      
      
    </div>
  </div>
  <?php include("footer.php") ?>