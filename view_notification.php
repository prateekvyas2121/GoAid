<?php include('../config/config.php');?>
<?php
$sql="UPDATE tbl_need_ambulance SET status='1' WHERE status='0'";
$result=mysqli_query($con, $sql);

$sql="select * from tbl_need_ambulance ORDER BY id DESC limit 5";
$result=mysqli_query($con,$sql);
$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response; 
	?>
	<div>Name : <?php echo $row["patient_name"]."<br>"; ?></div>
	<div>Mobile : <?php echo $row["mobile"]."<br><br><br>"; ?></div>
	<?php
}
if(!empty($response)) {
	print $response;
}


?>