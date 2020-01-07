<?php include('header.php');?>
<?php include('sidebar.php');?>					



<?php $msg = '';
	  if(!empty($_GET['msg'])){
		  $msg = $_GET['msg'];
	  }?>


<?php 
	$TotalRes = mysqli_num_rows(mysqli_query($con,"select * from tbl_partner_enquiry"));
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
			<li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Partner With Us Manager</li>
        </ol>
		
<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Partner With Us Manager</h2>
							<form name="f1" method="post">
								<table id="table">
									<thead>
									  <tr> 
											<th>Sno.</th> 
											<th>Name</th> 
											<th>Contact Number</th>
											<th>City</th>  
											<th>Ambulance Type</th> 
											<th>Vehicel Type</th> 
											<th>Date</th>
											<th>Time</th>
											<th>Actions</th> 
									  </tr>
									</thead>
									<tbody>
									<?php $que = mysqli_query($con,"select * from tbl_partner_enquiry ORDER BY id DESC limit $startIndex,$rec_per_page"); ?>
									<?php while($row=mysqli_fetch_assoc($que)){//print_r($row);die;?>
											<tr> 
												<td><?php echo $no;?></td>  
												<td><?php echo $row['name'];?></td> 
												<td><?php echo $row['phone'];?></td> 
												<td><?php echo $row['city'];?></td> 
												<td><?php echo $row['ambulance'];?></td> 
												<td><?php echo $row['vehicel'];?></td> 
												<td><?php echo $row['modify'];?></td>
												<td><?php echo $row['time'];?></td>
												<td>
													<a href="active_inactive_partner.php?id=<?php echo $row['id'];?>&status=<?php echo $row['status'];?>" onclick="return confirm('Are You Sure');"> 
														<?php if($row['status']==0){
																echo "Active";
																}else{ echo "Inactive";}
														?>
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
																		<li><a href="partner_with_us.php?pageno=<?php echo $i;?>"><?php echo $i; ?></a></li>
																<?php }?>
															</ul>
														</nav>
													</div>
												</div>
											</td>
										 </tr>	
									  
									</tbody>
								</table>
							</form>
					</div>
				</div>
			
			
			</div>
			
			
			
			

<?php include('footer.php');?>						