<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$que = mysqli_query($con,"select * from tbl_contact where id = $id");
}
?> 
			<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Contact Manager</h2>
					  
					  <?php while($row=mysqli_fetch_assoc($que)){//echo "<pre>";print_r($row);die;?>
								Name : 
								<?php echo $row['name'];?><br /><br /><br />
								Phone : 
								<?php echo $row['contact_no'];?><br /><br /><br />
								Email : 
								<?php echo $row['email'];?><br /><br /><br />
								<strong>Massage : </strong>
								<?php echo $row['massage'];?><br /><br /><br />
								
								
					   <?php }?> 
					</div>
				</div>
			
			
			</div>
			

<?php include('footer.php');?>