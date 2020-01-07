<?php include('header.php');?>
<?php include('sidebar.php');?>					



<?php $msg = '';
	  if(!empty($_GET['msg'])){
		  $msg = $_GET['msg'];
	  }?>


<?php 
	$TotalRes = mysqli_num_rows(mysqli_query($con,"select * from reg_user"));
	$rec_per_page = 10;
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
			<li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Reg User</li>
        </ol>
		
<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Register User</h2>
							<form name="f1" method="post">
				<input id="table" style="width:300px; border-radius:12px; height:40px; border-color:black;" type="text" name="searchmob"/>
		  <input style="width:100px; border-radius:12px; height:40px;" id="table" type="submit" name="btnSubmit" />
								<table id="table">
									<thead>
									  <tr> 
											<th>Sno.</th> 
											<th>Name</th> 
											<th>Contact Number</th> 
											<th>Office E-mail id</th> 
											<th>Actions</th> 
											<th>Update Password</th> 
									  </tr>
									</thead>
									<tbody>
									<?php
									if(isset($_REQUEST['btnSubmit']))
									{
									$mob = $_POST['searchmob'];
									$que = mysqli_query($con,"select * from reg_user where mobile='$mob' ORDER BY id DESC limit $startIndex,$rec_per_page"); ?>
									<?php while($row=mysqli_fetch_assoc($que)){//print_r($row);die;?>
											<tr> 
												<td><?php echo $no;?></td>  
												<td><?php echo $row['name'];?></td> 
												<td><?php echo $row['mobile'];?></td> 
												<td><?php echo $row['email'];?></td> 
												<td>
													<a href="view_reg_user_detail.php?id=<?php echo $row['id'];?>"> 
														View Details
													</a>
												</td> 
												<td>
													<a href="update_user_password.php?id=<?php echo $row['id'];?>"> 
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
																		<li><a href="reg_user.php?pageno=<?php echo $i;?>"><?php echo $i; ?></a></li>
																<?php }?>
															</ul>
														</nav>
													</div>
												</div>
											</td>
										 </tr>	
									  <tr>
									      <td> <a href="reg_user.php"> Back </a> </td>
									      </tr>
									</tbody>
									<?php
									}
									else
									{
									    ?>
									  
									  <tbody>
									<?php
									
								
									$que = mysqli_query($con,"select * from reg_user ORDER BY id DESC limit $startIndex,$rec_per_page"); ?>
									<?php while($row=mysqli_fetch_assoc($que)){//print_r($row);die;?>
											<tr> 
												<td><?php echo $no;?></td>  
												<td><?php echo $row['name'];?></td> 
												<td><?php echo $row['mobile'];?></td> 
												<td><?php echo $row['email'];?></td> 
												<td>
													<a href="view_reg_user_detail.php?id=<?php echo $row['id'];?>"> 
														View Details
													</a>
												</td> 
												<td>
													<a href="update_user_password.php?id=<?php echo $row['id'];?>"> 
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
																		<li><a href="reg_user.php?pageno=<?php echo $i;?>"><?php echo $i; ?></a></li>
																<?php }?>
															</ul>
														</nav>
													</div>
												</div>
											</td>
										 </tr>	
									  
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