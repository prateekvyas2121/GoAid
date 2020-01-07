<?php include("header.php") ?>
    <?php include("sidebar.php") ?>
  <div id="page-wrapper">
    <div class="row">
      <h1 class="page-header"> Update Password</h1>
    </div>
    <div class="row">
    
    
    
    <div class="content_innner">
    
    
      
    <form action="" method="post" enctype="multipart/form-data">
    <?php
    include('config.php');
    $row=$_REQUEST['id'];
     $data=mysqli_fetch_array(mysqli_query($con, "select * from reg where id='$row'")); ?>

     
       <div class="row">
       <div class="form-group col-lg-6">
        <label for="usr"> Update Password *: </label>
        <input type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>"></div>
        </div>

       

        <button class="btn btn-success" name="terms" type="submit"> Update </button>
        <a href="register_driver.php" class="btn btn-primary">Back</a>
      </div>
      


      <?php
          if (isset($_POST['terms']))
           {
            
            include('config/config.php');
            $rowid=$_REQUEST['id'];
           $pass=$_REQUEST['password'];
             $query="update reg set password='$pass' where id=$rowid";
              if (mysqli_query($con,$query))
                 {      
                    ?>
                  <script>
                         window.location='register_driver.php';
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