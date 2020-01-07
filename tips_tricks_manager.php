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
		header("location:delete_class.php?del=$delete");
		
	}
?>
<?php 
	$TotalRes = mysqli_num_rows(mysqli_query($con,"select * from tbl_tips_and_tricks"));
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
			<li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Tips And Tricks Manager</li>
        </ol>
		
<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Tips And Tricks Manager</h2>
							<form name="f1" method="post">
								<table id="table">
									<thead>
									  <tr> 
											<th>Sno.</th> 
											<th>Name</th> 
											<th>Category Name</th> 
											<th>Sub Category Name</th> 
											<th>Actions</th> 
									  </tr>
									</thead>
									<tbody>
<?php $que = mysqli_query($con,"select 
									ri.id,
									ri.name,
									ri.content,
									ri.images,
									ri.status,
							 tbl_main_category.cat_name as cat_name,
							 tbl_sub_category.sub_cat_name as sub_cat_name
							 from tbl_tips_and_tricks as ri LEFT JOIN tbl_main_category ON ri.main_cat_id = tbl_main_category.id
							 LEFT JOIN tbl_sub_category ON ri.sub_cat_id = tbl_sub_category.id
							ORDER BY ri.id DESC limit $startIndex,$rec_per_page"); ?>
									<?php while($row=mysqli_fetch_assoc($que)){//print_r($row);die;?>
											<tr> 
												<td><?php echo $no;?></td>  
												<td><?php echo $row['name'];?></td> 
												<td><?php echo $row['cat_name'];?></td> 
												<td><?php echo $row['sub_cat_name'];?></td> 
												<td>
													<a class='fa fa-eye' href="view_tips_tricks.php?id=<?php echo $row['id'];?>"></a>
													<a class='fa fa-edit' href="edit_tips_tricks.php?id=<?php echo $row['id'];?>"></a>
													<a class='fa fa-trash-o' href="delete_tips_tricks.php?id=<?php echo $row['id'];?>&images_name=<?php echo $row['images'];?>" onclick="return confirm('Are You Sure');"></a>
												</td> 
											</tr> 
									<?php $no++; }?>
										 <tr>
											
											
											<td colspan="3">
											
												<div class="grid_3 grid_5 agileits">
													<div class="col-md-6">
														<nav>
															<ul class="pagination pagination-lg">
																<?php for($i=1;$i<=$pages;$i++){?>
																		<li><a href="tips_tricks_manager.php?pageno=<?php echo $i;?>"><?php echo $i; ?></a></li>
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