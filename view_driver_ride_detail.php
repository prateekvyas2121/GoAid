

<?php include('header.php');?>
<?php include('sidebar.php');?>					



<?php 
	  if(!empty($_GET['mobile'])){
		  $id = $_GET['mobile'];
		  echo $id;
	  }
	  ?>


<?php 
	$TotalRes = mysqli_num_rows(mysqli_query($con,"select * from driver_ride"));
	$rec_per_page = 6;
	$pages = ceil($TotalRes/$rec_per_page);
	$startIndex = 0;
	$no = 1;
	if(!empty($_GET['pageno'])){
		$startIndex = ($_GET['pageno']*$rec_per_page)-$rec_per_page;	
		$no = (($_GET['pageno']-1)*$rec_per_page)+1;
	}
?> 		
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Driver Ride Detail</li>
        </ol>
		
<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Driver Ride Detail</h2>
							<form name="f1" method="post">
								<table id="table">
									<thead>
									  <tr> 
											<th>Sno.</th> 
											<th>User Name</th> 
											<th>User Mobile</th> 
											<th>Fair Amt</th>
											<th>Pay Mode</th> 
									  </tr>
									</thead>
									<tbody>
									<?php $que = mysqli_query($con,"select * from driver_ride where mobile = $id  limit $startIndex,$rec_per_page"); ?>
									<?php while($row=mysqli_fetch_assoc($que)){//print_r($row);die;?>
											<tr> 
												<td><?php echo $no;?></td>  
												<td><?php echo $row['name'];?></td> 
												<td><?php echo $row['user_mobile'];?></td> 
												<td><?php echo $row['fare'];?></td> 
												<td><?php echo $row['payMode'];?>
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
																		<li><a href="view_driver_ride_detail.php?pageno=<?php echo $i;?>&mobile=<?php echo $id;?>"><?php echo  $i; ?></a></li>
																<?php }?>
															</ul>
														</nav>
													</div>
												</div>
												 </tr>	
								<strong>Total Cash Payment Ride</strong> : 
								<strong><?php $query = "SELECT * FROM driver_ride where payMode='CASH' and mobile = $id";
                                    $query_run = mysqli_query($con,$query);
                                    
                                    $qty= 0;
                                    while ($num = mysqli_fetch_assoc($query_run)) {
                                        $qty++;
                                    }
                                  
                                    echo $qty; 
							 ?></strong><br /><br /><br />
							 
								<strong> Total Online Payment Ride</strong> : 
								<strong><?php $query = "SELECT * FROM driver_ride where payMode!='CASH' and mobile = $id";
                                    $query_run = mysqli_query($con,$query);
                                    
                                    $qty= 0;
                                    while ($num = mysqli_fetch_assoc($query_run)) {
                                        $qty++;
                                    }
                                  
                                    echo $qty; 
							 ?></strong><br /><br /><br />
							 <!--<strong>Total  Payment </strong> :-->
								<?php // $query =mysqli_num_rows(mysqli_query($con,"SELECT SUM(fare) from driver_ride where mobile=$id"));
							//	echo $query;
								?>
											</td>
										
									  
									</tbody>
								</table>
							</form>
					</div>
				</div>
			
			
			</div>
			
<?php include('footer.php');?>						