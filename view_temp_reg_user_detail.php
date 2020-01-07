<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php $url="https://www.goaid.in/apps/images";?>

<?php
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$que = mysqli_query($con,"select * from temp_reg_user where id = $id");
}
?> 
			<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Driver Detail Manager</h2>
					  
					  <?php while($row=mysqli_fetch_assoc($que)){//echo "<pre>";print_r($row);die;?>
								<strong> Name</strong> : 
								<strong><?php echo $row['name'];?></strong><br /><br /><br />
								<strong> Email</strong> : 
								<?php echo $row['email'];?><br /><br /><br />
								<strong> Password</strong> : 
								<?php echo $row['password'];?><br /><br /><br />
								<strong> OTP</strong> : 
								<?php echo $row['otp'];?><br /><br /><br />
								<strong> DOB</strong> : 
								<?php echo $row['dob'];?><br /><br /><br />
								<strong> Mobile</strong> : 
								<?php echo $row['mobile'];?><br /><br /><br />
								
									
								
					   <?php }?> 
					   
					   
					  
					   
					</div>
				</div>
			
			
			</div>
			

<?php include('footer.php');?>