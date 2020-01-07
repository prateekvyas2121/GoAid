<?php include("header.php") ?>
    <?php include("sidebar.php") ?>
  <div id="page-wrapper">
    <div class="row">
      <h1 class="page-header"> Banner</h1>
    </div>
    <div class="row">
    
    
    
    <div class="content_innner">
    
    
      
    <form action="" method="post" enctype="multipart/form-data">
    <?php
    include('config.php');
    $row=$_REQUEST['id'];
     $data=mysqli_fetch_array(mysqli_query($con, "select id from banner where banner.id='$row'")); ?>

     
       <div class="row">
       <div class="form-group col-lg-6">
        <label for="usr"> Banner Image *: </label>
        <input type="file" name="photo" class="form-control" value="<?php echo $data['banner_img']; ?>"></div>
        </div>

       

        <button class="btn btn-success" name="terms" type="submit"> Update </button>
        <a href="view_banner.php" class="btn btn-primary">Back</a>
      </div>
      


      <?php
          if (isset($_POST['terms']))
           {
            extract($_POST);
            include('config/config.php');
            $rowid=$_REQUEST['id'];
            $fname=$_FILES['photo']['name'];
            $temp_name=$_FILES['photo']['tmp_name'];
            $path="images/banner/".$fname;

            move_uploaded_file($temp_name, $path);
             $query="update banner set banner_img='$fname'  where id=$rowid";
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
                    echo "<script> alert('Sorry, Data not Updated')</script>";
                  }
                }
            ?>

       </form>
      
      </div>
     
    </div>
  </div>
  <?php include("footer.php") ?>