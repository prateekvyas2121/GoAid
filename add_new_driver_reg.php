<?php include('header.php');?>


<?php include('sidebar.php');?>
<div class="grid-form1">
			
  	       <h3> New Driver Registration</h3>
  	        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post" >
							<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Driver Name</label>
									<div class="col-sm-8">
										<input name="name" type="text" id="focusedinput" class="form-control1" placeholder="Driver Name"/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input name="email" type="text" id="focusedinput" class="form-control1" placeholder="xyz@abc.com"/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">DOB</label>
									<div class="col-sm-8">
										<input name="dob" type="date" id="focusedinput" class="form-control1" placeholder="DOB"/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Mobile</label>
									<div class="col-sm-8">
										<input name="mobile" type="text" id="focusedinput" class="form-control1" placeholder="1234567890"/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input name="password" type="password" id="focusedinput" class="form-control1" placeholder="Password"/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Driver Licence</label>
									<div class="col-sm-8">
										<input name="driver_licence" type="text" id="focusedinput" class="form-control1" placeholder="driver_licence"/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Insurance</label>
									<div class="col-sm-8">
										<input name="insurance" type="text" id="focusedinput" class="form-control1" placeholder="Insurance"/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Vehical Model</label>
									<div class="col-sm-8">
										<input name="vehical_model" type="text" id="focusedinput" class="form-control1" placeholder="Vehical Model"/>
									</div>
								</div>
								
								
								<div class="form-group">
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
								</div>
								
								
								
								
								
								
								
								</br>
								
												
								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<input class="btn-primary btn" type="submit" value="Submit" name="add">
										</div>
									</div>
								</div>
							</form>
						</div>
			</div>
</div>
<?php 
if(isset($_POST['add'])){
    $date=date('d-m-Y');
    $name=$_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $dob= $_POST['dob'];
    $mobile= $_POST['mobile'];
    $driver_licence= $_POST['driver_licence'];
    $vehical_model= $_POST['vehical_model'];
    $insurance= $_POST['insurance'];
    $type=$_POST['vehicle_type'];
    //print_r($type); die;
    $vehicle= implode(",", $type);
  
    
    $insert= mysqli_query($con,"insert into reg (name, email, dob, mobile, password, date, insurance, vehicle_model, vehical_type, driver_licence)values ('$name', '$email', '$dob', '$mobile', '$password', '$date', '$insurance', '$vehical_model', '$vehicle', '$driver_licence')"); 
    if($insert){
        echo "<script>alert('Registration Successfully!!!')</script>";
    }else{
         echo "<script>alert('Not Registered !!!')</script>";
    }
}
?>


<?php include('footer.php');?>			 