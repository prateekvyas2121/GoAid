<?php include('header.php');?>
<?php include('sidebar.php');?>



<?php $msg = '';
	  if(!empty($_GET['msg'])){
		  $msg = $_GET['msg'];
	  }?>

<?php 
	if(!empty($_POST['delete'])){
		//extract($_POST);
		$delete = $_POST['delete'];
		//echo "<pre>";
		//print_r($delete);die;
		$delete = implode(',',$delete);
		header("location:delete_contact.php?del=$delete");
		
	}
?>
<?php 
	$TotalRes = mysqli_num_rows(mysqli_query($con,"select * from tbl_contact"));
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
			<li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Contact Manager</li>
        </ol>

		<div class="agile-tables">	
			<div class="w3l-table-info">
				<h2>Contact Manager</h2>
				<form name="f1" method="post">
					<table id="table">
						<thead>
									  <tr> 
											<th>Sno.</th> 
											<th>Name</th> 
											<th>Mobile Number</th> 
											<th>Company Name</th> 
											<th>Comment</th> 
									  </tr>
									</thead>
						<tbody>
							<?php $que = mysqli_query($con,"select * from tbl_contact order by id desc limit $startIndex,$rec_per_page"); ?>
							<?php while($row=mysqli_fetch_assoc($que)){//print_r($row);die;?>
										<tr class="table-row">
											<td><?php echo $no;?></td>  
											<td class="table-text">
												<h6> <?php echo $row['name'];?></h6>
											</td>
											<td> <?php echo $row['phone'];?></td>
											<td class="march"><?php echo $row['company'];?></td>
											<td style="width:400px;">
													<div style="overflow:auto; height:100px;">
														<?php echo $row['massage'];?>
													</div>
												</td> 
										  

										</tr>
							
							<?php $no++; }?>
										<tr>
												
											<td colspan="4">
												
												<div class="grid_3 grid_5 agileits">
													<div class="col-md-6">
														<nav>
															<ul class="pagination pagination-lg">
																<?php for($i=1;$i<=$pages;$i++){?>
																		<li><a href="contact_manager.php?pageno=<?php echo $i;?>"><?php echo $i; ?></a></li>
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
			   
<?php include('footer.php');?>