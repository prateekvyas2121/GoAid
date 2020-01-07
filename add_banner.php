<?php include("header.php") ?>
    <?php include("sidebar.php") ?>
  <?php  // include_once('../config/config.php'); ?>



  <div id="page-wrapper">
    <div class="row">
      <h1 class="page-header"> Add Banner </h1>
    </div>
    <div class="row">
    
    
    
    <div class="content_innner">
    
    
      <form method="post" action="" enctype="multipart/form-data">
      
      

		<div class="form-group col-lg-6">
        <label>Banner Image</label>
		<input type="file" name="photo" class="form-control" ></div>

		

		
       <div class="col-lg-12">
        <button class="btn btn-success" name="add_category" onclick="return check_validation()"> Submit</button>
         <a href="view_banner.php" class="btn btn-primary">Back</a>
      </div> </div>

      <!-- data insert -->

      <?php
	include('config/config.php');
	if (isset($_POST['add_category']))
	 {
		extract($_POST);

			$file_type=$_FILES['photo']['type'];
	 		if ($file_type=="image/jpg" || $file_type=="image/jpeg" || $file_type=="image/png" || $file_type=="image/gif" ) 
	 		{
	 		$file=$_FILES['photo']['name'];
	 		$temp_file=$_FILES['photo']['tmp_name'];
	 		$path='../images/'.$file;


	 		if (move_uploaded_file($temp_file, $path))
	 		 {
		$duplicate=mysqli_query($con,"select id from banner where banner_img='$file' ");
		$count=mysqli_num_rows($duplicate);
		if ($count>0)
		 {
			echo "<script>alert('Sorry, You enter duplicate data')</script>";
		}
		else
		{
			$query="insert into banner(banner_img) values ('$file') ";
			if (mysqli_query($con,$query))
			 {
			 ?>
			 	<script>
               window.location='view_banner.php';
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