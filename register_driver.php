<?php include('header.php');?>
<?php include('sidebar.php');?>					



<?php $msg = '';
	  if(!empty($_GET['msg'])){
		  $msg = $_GET['msg'];
	  }?>


<?php 
	$TotalRes = mysqli_num_rows(mysqli_query($con,"select * from reg"));
	$rec_per_page = 6;
	$pages = ceil($TotalRes/$rec_per_page);
	$startIndex = 0;
	$no = 1;
	if(!empty($_GET['pageno'])){
		$startIndex = ($_GET['pageno']*$rec_per_page)-$rec_per_page;	
		$no = (($_GET['pageno']-1)*$rec_per_page)+1;
	}
?>   
<?php if(!empty($_GET['msg'])){?>
				<h4 class="alert_success"> <?php echo $_GET['msg'];?> </h4>
		<?php }?>	





			
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Register Driver</li>
        </ol>
		
<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Register Driver</h2>
							<form name="f1" method="post">
		  <input id="table" style="width:300px; border-radius:12px; height:40px; border-color:black;" placeholder="Search Driver Mobile" type="text" name="searchmob"/>
		  <input style="width:100px; border-radius:12px; height:40px;" id="table" type="submit" name="btnSubmit" />
								<table id="table">
									<thead>
									  <tr> 
											<th>Sno.</th> 
											<th>Name</th> 
											<th>Contact Number</th> 
											<th>Office E-mail id</th>
											<th>City</th> 
											<th>Ride</th> 
											<th>Wallet</th> 
											<th>Actions</th>
											<th>Update Details</th>
											<th>Update Password</th>
											<th>Delete</th>
										
									  </tr>
									</thead>
									<tbody>
									<?php 
									$re_per_page="10";
							//		echo "Hello!"; 
							//	$que = mysqli_query($con,"select * from reg ORDER BY id DESC limit $startIndex,$re_per_page"); 
							//	$sql="select * from reg";
						if(isset($_REQUEST['btnSubmit']))
						{
					$mob = $_POST['searchmob'];
			$sql="select * from reg where mobile='$mob' ORDER BY id DESC limit $startIndex,$re_per_page";
				$tbl=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($tbl))
						{
								?>
											<tr> 
								<td><?php echo $no;?></td>  
								<td><?php echo $row['name'];?></td> 
					<td><?php echo $mobile1 = $row['mobile'];?></td>
					<td><?php echo $row['email'];?></td> 
							<td><?php echo $row['add_city'];?></td> 
						
							<td> 		<?php
							        $query = "SELECT * FROM driver_ride where mobile='$mobile1'";
                                    $query_run = mysqli_query($con,$query);
                                    
                                    $qty= 0;
                                    while ($num = mysqli_fetch_assoc($query_run)) {
                                        $qty++;
                                    }
                                  
                                    //echo $qty;

                       ?>
                       <a href="view_driver_ride_detail.php?mobile=<?php echo $row['mobile'];?>"> 
														<?php echo $qty;?>
													</a>
                       </td> 
								<td><?php echo $row['wallet'];?></td> 
								<td><a href="view_driver_detail.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row['mobile'];?>"> 
														View Details
													</a>
												</td> 
												<td><a href="update_driver_detail.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row['mobile'];?>"> 
														Edit Details
													</a></td>
													<td><a href="update_driver_pass.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row['mobile'];?>"> 
														Edit Password
													</a>
												    
												</td> 
											</tr> 
									<?php $no++; }?>
										 <tr>
											
											<td colspan="5">
											
												<div class="grid_3 grid_5 agileits">
													<div class="col-md-6">
														<nav>
															<ul class="pagination pagination-lg">
																<?php for($i=1;$i<=$pages;$i++){?>
																		<li><a href="register_driver.php?pageno=<?php echo $i;?>"><?php echo $i; ?></a></li>
																<?php } ?>
															</ul>
														</nav>
													</div>
												</div>
											</td>
										 </tr>
										 <tr>
										     <td> <a href="register_driver.php"> back </td>
										     </tr>
						<?php
						}
						else
						{
						    ?>
						   
									<?php 
									$re_per_page="10";
							//		echo "Hello!"; 
							//	$que = mysqli_query($con,"select * from reg ORDER BY id DESC limit $startIndex,$re_per_page"); 
					
			$sql="select * from reg ORDER BY id DESC limit $startIndex,$re_per_page";
				$tbl=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($tbl))
						{
								?>
											<tr> 
								<td><?php echo $no;?></td>  
								<td><?php echo $row['name'];?></td> 
					<td><?php echo $mobile1 = $row['mobile'];?></td>
					<td><?php echo $row['email'];?></td> 
							<td><?php echo $row['add_city'];?></td> 
						
							<td> 		<?php
							        $query = "SELECT * FROM driver_ride where mobile='$mobile1'";
                                    $query_run = mysqli_query($con,$query);
                                    
                                    $qty= 0;
                                    while ($num = mysqli_fetch_assoc($query_run)) {
                                        $qty++;
                                    }
                                  
                                    //echo $qty;

                       ?>
                       <a href="view_driver_ride_detail.php?mobile=<?php echo $row['mobile'];?>"> 
														<?php echo $qty;?>
													</a>
                       </td> 
								<td><?php echo $row['wallet'];?></td> 
								<td><a href="view_driver_detail.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row['mobile'];?>"> 
														View Details
													</a>
												</td> 
												<td><a href="update_driver_detail.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row['mobile'];?>"> 
														Edit Details
													</a></td>
												<td><a href="update_driver_pass.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row['mobile'];?>"> 
														Edit Password
													</a>
												</td> 
												</td>
												<td><a href="delete_register_driver.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row['mobile'];?>"> 
														Delete
													</a>
												</td> 
											</tr> 
									<?php $no++; }?>
										 <tr>
											
											<td colspan="5">
											
												<div class="grid_3 grid_5 agileits">
													<div class="col-md-6">
														<nav>
															<ul class="pagination pagination-lg">
																<?php for($i=1;$i<=$pages;$i++){?>
																		<li><a href="register_driver.php?pageno=<?php echo $i;?>"><?php echo $i; ?></a></li>
																<?php } ?>
															</ul>
														</nav>
													</div>
												</div>
											</td></tr>
					
									</tbody>
						    
						    
						    
					<?php   
						}
						?>
								
								
								</table>
							</form>
					</div>
				</div>
			
			
			</div>
			
			
			
			

<?php include('footer.php');?>						