<?php include('../config/config.php');
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	mysqli_query($con,"DELETE FROM tbl_contact WHERE id = '$id'");	
	header('location:contact_manager.php?msg=Delete Successfully');
}
if(!empty($_GET['del'])){
	$id = $_GET['del'];
	$id = explode(',', $id);
	//print_r($id);die;
	for($i=0;$i<count($id);$i++){
		mysqli_query($con,"DELETE FROM tbl_contact WHERE id = '$id[$i]'");
	}	
	header('location:contact_manager.php?msg=Delete Successfully');
}
?>