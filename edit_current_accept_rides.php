<?php include("header.php") ?>
    <?php include("sidebar.php") ?>
  <div id="page-wrapper">
    <div class="row">
      <h1 class="page-header"> Update Driver Number</h1>
    </div>
    <div class="row">
    
    
    
    <div class="content_innner">
    
    
      
    <form action="" method="post" enctype="multipart/form-data">
    <?php
    include('config.php');
    $row=$_REQUEST['id'];
     $data=mysqli_fetch_array(mysqli_query($con, "select * from temp_user_ride where id='$row'")); ?>

     
       <div class="row">
       <div class="form-group col-lg-6">
        <label for="usr"> Update Driver Mobile Number *: </label>
        <input type="text" name="driverMobile1" class="form-control" value="<?php echo $data['driverMobile1']; ?>"></div>
        </div>

       

        <button class="btn btn-success" name="terms" type="submit"> Update </button>
        <a href="current_accepted_rides.php" class="btn btn-primary">Back</a>
      </div>
      


      <?php
          if (isset($_POST['terms']))
           {
            
            include('config/config.php');
            $rowid=$_REQUEST['id'];
           $driver_mobile=$_REQUEST['driverMobile1'];
             $query="update temp_user_ride set driverMobile1='$driver_mobile' where id=$rowid";
              if (mysqli_query($con,$query))
                 {      
                    ?>
                  <script>
                         window.location='current_accepted_rides.php';
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