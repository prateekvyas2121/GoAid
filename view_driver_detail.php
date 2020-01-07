<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php $url="https://www.goaid.in/goaid_apps/images";?>

<?php
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$que = mysqli_query($con,"select * from reg where id = $id");
}
?> 
			<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Driver Detail Manager</h2>
					  
					  <?php while($row=mysqli_fetch_assoc($que)){//echo "<pre>";print_r($row);die;?>
					  <table id="table">
					  <thead>
									  <tr> 
											
											<th>Name</th>
											<th>DOB </th>
											<th>Email</th> 
											<th>Contact Number</th> 
										
											
										
									  </tr></thead>							  <tbody>
									    <td><?php echo $row['name'];?></td>
									    <td><?php echo $row['dob'];?></td> 
									    <td><?php echo $row['email'];?></td> 
				                    	<td><?php echo $mobile1 = $row['mobile'];?></td>
					
									</tbody> 
									  <tr><thead>
									      	<th>Driver Licence</th>
									        <th>Insurance</th> 
											<th>Vehicle Model</th> 
											<th>Wallet</th> 
											
									  </tr>
									  
									</thead>
									<tbody>
									    <td><?php echo $row['driver_licence'];?></td>
									    <td><?php echo $row['insurance'];?></td> 
									    <td><?php echo $row['vehicle_model'];?></td> 
				                    	<td><?php echo $mobile1 = $row['wallet'];?></td>
					
									</tbody> 
										
									</table></br>
							<img style="height:250px; width:240px;" src="<?php echo $url;?>/<?php echo $row['photo'];?>" alt="" /> 
								</br>
									
					   <?php }?> 
					   </br>
					   <form method="post"></br>
					       <input type="submit" value="View Documents" name="documents">
					       </form>
					   
					  <?php 
					  if(isset($_REQUEST['documents']))
					  {
								$mobile = $_GET['mobile'];
								$que = mysqli_query($con,"select * from doc where mobile = $mobile");
					         	$row=mysqli_fetch_assoc($que);
						?>
						<div class="pre-scrollable">
						    <table border="1" >
						    <tr class="pre-scrollable">
						        <td>VT</td>
						        <td>PC</td>
						        <td>EC</td>
						        <td>FC</td>
						        <td>RC</td>
						        <td>RC1</td>
						        <td>INS</td>
						        <td>DL</td>
						        <td>DL1</td>
						        <td>PV</td>
						        <td>AD</td>
						        <td>AC</td>
						        <td>Insurance No</td>
						        <td>Insurance Type</td>
						        <td>Insurance Photo</td>
						        <td>V1</td>
						        <td>V2</td>
						        <td>V3</td>
						        <td>V4</td>
						        </tr>
						        
						       <tr> 
						       <td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['vt'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['pc'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['ec'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['fc'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['rc'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['rc1'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['ins'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['dl'];?>" alt="" /> </td>
							<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['dl1'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['pv'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['ad'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['ac'];?>" alt="" /> </td>
							<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['insurance_no'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['insurance_type'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['insurance_photo'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['v1'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['v2'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['v3'];?>" alt="" /> </td>
								<td>
								<img style="height:115px; width:110px;" src="<?php echo $url;?>/<?php echo $row['v4'];?>" alt="" />  </td>
									</tr>
                	<?php
					  }
					  ?>
					  
					  
					  <?php
    include('config.php');
    $row=$_REQUEST['id'];
    $row1 =$_REQUEST['mobile'];
    
     $data=mysqli_fetch_array(mysqli_query($con, "select * from doc where id='$row' AND mobile='$row1'")); 
     ?>
					  <tr>
   <td><a href="update_documnet.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row1;?>"> 
														Edit Document
													</a>
												</td> 
					      </tr>
					  
					  
					</table>
						</div>
					</div>
				</div>
			
			
			</div>
			

<?php include('footer.php');?>