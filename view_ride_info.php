<?php include('header.php');?>
<?php include('sidebar.php');?>


<?php
if(!empty($_GET['id'])){
	$id = $_GET['id'];
		$que = mysqli_query($con,"select * from tbl_ride_info where id = $id"); 
									
}
?> 
			<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Driver Detail Manager</h2>
					  
					  <?php while($row=mysqli_fetch_assoc($que)){//echo "<pre>";print_r($row);die;?>
								<strong>Dirver Name</strong> : 
								<?php 
	$gets1=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM reg where mobile='".$row['dirver_id']."'")); 
	$vehicle_type = $gets1['vehical_type'];
	
	?>
								<strong><?php echo $gets1['name'];?></strong><br /><br /><br />
								<strong> User Name</strong> :
								<?php 
	$gets=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM reg_user where mobile='".$row['user_id']."'")) 
	?>
								<?php echo $gets['name'];?><br /><br /><br />
								
								<strong> Ride Time</strong> : 
								<?php echo $row['ride_time'];?><br /><br /><br />
								<strong> Pickup Location</strong> : 
								<?php echo $row['pickup_location'];?><br /><br /><br />
								<strong> Drop Location</strong> : 
								<?php echo $row['drop_location'];?><br /><br /><br />
								<strong> Fair</strong> : 
								<?php echo $row['fair'];?><br /><br /><br />
								<strong> Fair Mode</strong> : 
								<?php echo $row['fair_mode'];?><br /><br /><br />
								<strong> KM</strong> : 
								<?php echo $row['km'];?><br /><br /><br />
								<strong> Total Time</strong> : 
								<?php echo $row['total_time'];?><br /><br /><br />
								<strong> Date</strong> : 
								<?php echo $row['date'];?><br /><br /><br />
								<strong> Unique Ride Number</strong> : 
								<?php echo $row['unique_ride_number'];?><br /><br /><br />
								<strong> DL Com</strong> : 
								<?php echo $row['dl_com'];?><br /><br /><br />
								<strong> CM Com</strong> : 
								<?php echo $row['cm_com'];?><br /><br /><br />
								<?php 
	$get_vehicle=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM vehicle_type where veh_type='".$vehicle_type."'")); ?>
								<strong> Vehicle Type</strong> : 
								<?php echo $get_vehicle['veh_name'];?><br /><br /><br />	
								
					   <?php }?> 
					   
					   <?php if(!empty($_GET['mobile'])){
								$mobile = $_GET['mobile'];
								$que = mysqli_query($con,"select * from doc where mobile = $mobile");
							}?>
						<?php while($row=mysqli_fetch_assoc($que)){//echo "<pre>";print_r($row);die;?>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['vt'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['pc'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['ec'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['fc'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['rc'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['rc1'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['ins'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['dl'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['dl1'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['pv'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['ad'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['ac'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['insurance_no'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['insurance_type'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['insurance_photo'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['v1'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['v2'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['v3'];?>" alt="" /> </br>
								<img style="height:100%; width:50%;" src="<?php echo $url;?>/<?php echo $row['v4'];?>" alt="" /> 
								
								
					   <?php }?> 
					  
					   
					</div>
				</div>
			
			
			</div>
			

<?php include('footer.php');?>