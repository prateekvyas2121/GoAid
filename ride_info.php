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
			<li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Ride Info</li>
        </ol>
		
<div class="agile-grids">
			
				<div class="agile-tables">	
					<div class="w3l-table-info">
					  <h2>Ride Info</h2>
					 
					  <?php
					 
					   if(isset($_POST["btnSubmit"]))
					   {
					       $mobile=$_POST["searchmob"];
					       $sql="select * from tbl_ride_info where user_id='$mobile'";
					       $result=$con->query($sql);
					       $row=$result->fetch_assoc()
					       ?>
					   <table id="table">
							<thead>
						  <tr> 
											<th>Sno.</th> 
											<th>Dirver Name</th> 
											<th>User Name</th> 
											<th>Pickup Location</th> 
											<th>Drop Location</th> 
											<th>Unique Ride Number</th> 
											<th>Actions</th> 
									  </tr>
									</thead>
									<tbody>
									
											<tr> 
												<td><?php echo $no;?></td>  
												 <?php 
	$gets1=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM reg where mobile='".$row['dirver_id']."'")) 
	?>
												<td><?php echo $gets1['name'];?></td> 
	                     <?php 
	$gets=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM reg_user where mobile='".$row['user_id']."'")) 
	?>
												<td><?php echo $gets['name'];?></td> 
												<td><?php echo $row['pickup_location'];?></td> 
												<td><?php echo $row['drop_location'];?></td> 
												<td><?php echo $row['unique_ride_number'];?></td> 
												<td>
													<a href="view_ride_info.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row['mobile'];?>"> 
														View Details
													</a>
												</td> 
											</tr> 
									<?php $no++; ?>
										 <tr>
											
											
											
										 </tr>	
									  
									</tbody>
								</table>
								</br>
								 <a href="ride_info.php" class="btn btn-success"/> BACK
					   </a>
								<?php }else{ ?>
					 
			<form name="searchuser" method="post">
	    <input id="table" style="width:300px; border-radius:12px; height:40px; border-color:black;" type="text" name="searchmob"/>
							    
		  <input style="width:100px; border-radius:12px; height:40px;" id="table" type="submit" name="btnSubmit" />
							    
					<table id="table">
							<thead>
						  <tr> 
											<th>Sno.</th> 
											<th>Dirver Name</th> 
											<th>User Name</th> 
											<th>Pickup Location</th> 
											<th>Drop Location</th> 
											<th>Unique Ride Number</th> 
											<th>Actions</th> 
									  </tr>
									</thead>
									<tbody>
									<?php 
								
$que = mysqli_query($con,"select * from tbl_ride_info order by id  desc"); ?>
									<?php while($row=mysqli_fetch_assoc($que))
									{//print_r($row);die;
									?>
											<tr> 
												<td><?php echo $no;?></td>  
												 <?php 
	$gets1=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM reg where mobile='".$row['dirver_id']."'")) 
	?>
												<td><?php echo $gets1['name'];?></td> 
	                     <?php 
	$gets=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM reg_user where mobile='".$row['user_id']."'")) 
	?>
												<td><?php echo $gets['name'];?></td> 
												<td><?php echo $row['pickup_location'];?></td> 
												<td><?php echo $row['drop_location'];?></td> 
												<td><?php echo $row['unique_ride_number'];?></td> 
												<td>
													<a href="view_ride_info.php?id=<?php echo $row['id'];?>&mobile=<?php echo $row['mobile'];?>"> 
														View Details
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
																		<li><a href="ride_info.php?pageno=<?php echo $i;?>"><?php echo $i; ?></a></li>
																<?php }}?>
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
			
<?php
function lookuppostcode($postcode) {
    $postcode = str_replace("27.80589875364911", "75.0329615548253", $postcode);
    $key = 'AIzaSyAgCrp0QzTvt-7RxiKxEyFg-TJZT8wxZk0';
    $request = 'https://api.getAddress.io/v2/uk/' . $postcode . '?api-key=' . $key;
    $response = file_get_contents($request);
    $response = json_decode($response, true);
    
    $returnData = array();
    
    $returnData['lat'] = $response['Latitude'];
    $returnData['lon'] = $response['Longitude'];
    $returnData['totalAddresses'] = count($response['Addresses']);
    $addressArray = explode(',', $response['Addresses'][0]);
    $returnData['locality'] = $addressArray[4];
    $returnData['city'] = $addressArray[5];
    $returnData['county'] = $addressArray[6];
    $returnData['addresses'] = array();
    foreach ($response['Addresses'] as $address)
    {
        $addressArray = explode(',', $address);
        $fullAddress = '';
        foreach ($addressArray as $item){
            if($item!=' '){
                $fullAddress .= $item . "\n";
            }
        }
        $fullAddress = trim($fullAddress, '\n');
        $returnData['addresses'][] = array(
            'line1' => $addressArray[0],
            'line2' => $addressArray[1],
            'line3' => $addressArray[2],
            'line4' => $addressArray[3],
            'locality' => $addressArray[4],
            'city' => $addressArray[5],
            'county' => $county[6],
            'fullAddress' => $fullAddress,
        );
    }
    return $returnData;
}
//Example usage:
$data = lookuppostcode('nn13er');
echo "<b>Latitude: </b>" . $data['lat'] . "</br>\n";
echo "<b>Longitude: </b>" . $data['lon'] . "</br>\n";
echo "<b>Locality: </b>" . $data['locality'] . "</br>\n";
echo "<b>City: </b>" . $data['city'] . "</br>\n";
echo "<b>County: </b>" . $data['county'] . "</br>\n";
echo "<b>Number of addresses returned: </b>" . $data['totalAddresses'] . "</br>\n";
echo "</br>\n";
echo '<b>Addresses: </b>'."</br>\n";
$i = 1;
foreach($data['addresses'] as $address)
{
    echo "<b>Address No" . $i . "</b>" ."</br>\n";
    echo "Line 1: " . $address['line1'] ."</br>\n";
    echo "Line 2: " . $address['line2'] ."</br>\n";
    echo "Line 3: " . $address['line3'] ."</br>\n";
    echo "Line 4: " . $address['line4'] ."</br>\n";
    echo "Locality: " . $address['locality'] ."</br>\n";
    echo "City: " . $address['city'] ."</br>\n";
    echo "County: " . $address['county'] ."</br>\n";
    echo "Full Address: " . $address['fullAddress'] ."</br>\n";
    $i++;
}
?>			
			
			
		<!DOCTYPE html>


<?php include('footer.php');?>						