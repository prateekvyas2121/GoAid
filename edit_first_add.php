<?php include("header.php") ?>
    <?php include("sidebar.php") ?>
  <?php  include_once('config.php'); ?>



  <div id="page-wrapper">
    <div class="row">
      <h1 class="page-header"> Update New </h1>
    </div>
    <div class="row">
    
    <?php
    $ro = $_REQUEST['id'];
    if(isset($_REQUEST['update_category']))
    {
    $title=$_POST['titlee']; 
    
    $fname=$_FILES['image']['name'];
    $temp_name=$_FILES['image']['tmp_name'];
    $path="../images/first_add-images/".$fname;
    move_uploaded_file($temp_name,$path);
    
    $dese=$_POST['dese'];
    
    
    $sqlu = "update first_add set main_title='$title', image='$fname', description='$dese' where id='$ro'";
    
    mysqli_query($con,$sqlu);
    /*if(mysqli_query($con,$sqlu))
    {
        ?>
       <script>
                         window.location='view_first_add.php';
                  </script>
        <?php
    }*/
    }
    ?>
    
    
    <div class="content_innner">
    
    <?php
    $ro = $_REQUEST['id'];
    $sql="select * from first_add where id='$ro'";
    $tbl=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($tbl);
    
    ?>
      <form method="post" action="" enctype="multipart/form-data">
      
      <div class="row">
        <div class="form-group col-lg-12">
        <label>Main Title*: </label>        
        <input type="text" name="titlee" value="<?php echo $row['main_title']; ?>" class="form-control" placeholder="Enter Title">	
      </div>
      </div>
      
      <div class="form-group col-lg-3">
        <label>Image</label>
	<input type="file" name="image" class="form-control" ></div></div>
    <img src="../images/first_add-images/<?php echo $row['image'];?>" style="width: 100px; height:70px;" />
     
	<div class="form-group col-lg-12">
        <label> About Description *:</label>
        <script src="ckeditor/ckeditor.js"></script>
		<textarea class="ckeditor form-control" name="dese"><?php echo $row['description']; ?></textarea>
      </div>
      
       <div class="col-lg-12">
        <button class="btn btn-success" name="update_category"> Update</button>
         <a href="view_first_add.php" class="btn btn-primary">Back</a>
      </div> </div>

      <!-- data insert -->

     
      </form>
     
      </div>
     
    </div>
  </div>
  <?php include("footer.php") ?>