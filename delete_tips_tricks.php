<?php include('../config/config.php');
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$images = $_GET['images_name'];
	unlink('tips_tricks_img/'.$images);
	mysqli_query($con,"DELETE FROM tbl_tips_and_tricks WHERE id = '$id'");	
	header('location:tips_tricks_manager.php?msg=Delete Successfully');
}
/*if(!empty($_GET['del'])){
	$id = $_GET['del'];
	$id = explode(',', $id);
	//print_r($id);die;
	for($i=0;$i<count($id);$i++){
		mysqli_query($con,"DELETE FROM tbl_main_category WHERE id = '$id[$i]'");
	}	
	header('location:class_manager.php?msg=Delete Successfully');
}*/
?>