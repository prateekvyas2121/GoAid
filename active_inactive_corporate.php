<?php include('../config/config.php');
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$status = $_GET['status'];
	if($status==1){
		$status=0;		
	}else{
		$status=1;
	}
	mysqli_query($con,"Update tbl_goaid_corporate set status = '$status', modify = now() where id = '$id'");	
	header('location:corporate_packages.php?msg=Change Successfully');
}
?>