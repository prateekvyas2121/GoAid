<?php include("header.php") ?>
    <?php include("sidebar.php") ?>
  <div id="page-wrapper">
    <div class="row">
      <h1 class="page-header"> Update Driver Details</h1>
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
        <label for="usr"> Name *: </label>
        <input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>"></div>
        </div>
        <div class="row">
       <div class="form-group col-lg-6">
        <label for="usr"> Email*: </label>
        <input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>"></div>
        </div>
       <div class="row">
       <div class="form-group col-lg-6">
        <label for="usr"> Mobile*: </label>
        <input type="text" name="mobile" class="form-control" value="<?php echo $data['mobile']; ?>"></div>
        </div>
        <div class="row">
       <div class="form-group col-lg-6">
        <label for="usr"> DOB*: </label>
        <input type="text" name="dob" class="form-control" value="<?php echo $data['dob']; ?>"></div>
        </div>
        
        <div class="row">
       <div class="form-group col-lg-6">
        <label for="usr"> Insurance*: </label>
        <input type="text" name="insurance" class="form-control" value="<?php echo $data['insurance']; ?>"></div>
        </div>
        <div class="row">
       <div class="form-group col-lg-6">
        <label for="usr"> Driver Licence*: </label>
        <input type="text" name="licence" class="form-control" value="<?php echo $data['driver_licence']; ?>"></div>
        </div>
        <div class="row">
       <div class="form-group col-lg-6">
        <label for="usr"> Vehicle Model*: </label>
        <input type="text" name="model" class="form-control" value="<?php echo $data['vehicle_model']; ?>"></div>
        </div>
        
       <div class="row">
       <div class="form-group col-lg-6">
									<label for="focusedinput" class="col-sm-2 control-label">Select Vehical Type<br>(Ctrl+Select)</label>
									<div class="col-sm-8">
										<select name="vehicle_type[]" class"form-control" multiple="multiple">
										    <?php
										    $select= mysqli_query($con,"select * from vehicle_type where status='1'");?>
										    <option>Select Multiple Vehical Type </option>
										    <?php
										    while($gets=$select->fetch_assoc())
										    {
										    
										    ?>
										    <option value="<?php echo $gets['id']; ?> "><?php echo $gets['veh_name']; ?></option>
										    
										    
										    <?php  } ?>
										    
										</select>
									</div>
								</div></div>


        <button class="btn btn-success" name="terms" type="submit"> Update </button>
        <a href="register_driver.php" class="btn btn-primary">Back</a>
      </div>
      


      <?php
          if (isset($_POST['terms']))
           {
            
            include('config/config.php');
            $rowid=$_REQUEST['id'];
           $name=$_POST['name'];
           $email= $_POST['email'];
           $mobile= $_POST['mobile'];
           $dob= $_POST['dob'];
           $licence= $_POST['licence'];
           $model= $_POST['model'];
           $insurance = $_POST['insurance'];
           $type=$_POST['vehicle_type'];
    //print_r($type); die;
    $vehicle= implode(",", $type);
    
             $query="update reg set name='$name', email='$email', mobile='$mobile', dob='$dob', driver_licence='$licence', vehicle_model='$model', insurance='$insurance', vehical_type='$vehicle'  where id=$rowid";
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