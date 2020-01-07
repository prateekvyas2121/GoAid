<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php $url="https://www.goaid.in/admin/tips_tricks_img";?>

<?php
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$que = mysqli_query($con,"select 
									ri.id,
									ri.name,
									ri.content,
									ri.images,
									ri.date,
									ri.status,
							 tbl_main_category.cat_name as cat_name,
							 tbl_sub_category.sub_cat_name as sub_cat_name
							 from tbl_tips_and_tricks as ri LEFT JOIN tbl_main_category ON ri.main_cat_id = tbl_main_category.id
							 LEFT JOIN tbl_sub_category ON ri.sub_cat_id = tbl_sub_category.id
							 where ri.id=$id");
}
?> 
			<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Tips and Tricks Manager</h2>
					  
					  <?php while($row=mysqli_fetch_assoc($que)){//echo "<pre>";print_r($row);die;?>
								<strong> Name</strong> : 
								<strong><?php echo $row['name'];?></strong><br /><br /><br />
								<strong> Category Name</strong> : 
								<?php echo $row['cat_name'];?><br /><br /><br />
								<strong> Sub Category Name</strong> : 
								<?php echo $row['sub_cat_name'];?><br /><br /><br />
								<strong> Content</strong> : 
								<?php echo $row['content'];?><br /><br /><br />
								<strong> Date</strong> : 
								<?php echo $row['date'];?><br /><br /><br />
								
								<?php $imgs = explode(',',$row['images']);
										for($i=0;$i<count($imgs);$i++){?>
    										<img src="<?php echo $url;?>/<?php echo $imgs[$i];?>" width="100%" height="100%" />
								<?php }?>
							
								
								
								</br>
									
								
					   <?php }?> 
					   
					   
					  
					   
					</div>
				</div>
			
			
			</div>
			

<?php include('footer.php');?>