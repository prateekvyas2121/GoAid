<?php include('config/config.php');?>
<?php /* code for need an ambulance */?>
<?php $msg = "";
	if(!empty($_POST)){
		//print_r($_POST);die;
		if(!empty($_POST['name'])){
			if(!empty($_POST['company_name'])){
				if(!empty($_POST['email'])){
					if(!empty($_POST['phone'])){
						$name = addslashes($_POST['name']);
						$company_name = addslashes($_POST['company_name']);
						$email = addslashes($_POST['email']);
						$phone = addslashes($_POST['phone']);
						$time = date("h:i:sa");
						$que = mysqli_query($con,"insert into tbl_goaid_corporate set name = '$name', company_name = '$company_name', phone = '$phone', email = '$email', status = '0', modify = now(),time='$time'");
						
						$msg="Thanks for connecting with us";
						header('location:goAid_Corporate.php?msg='.$msg);
					}else{
						$msg = "Please Fill the Phone";
					}
				}else{
					$msg = "Please Fill the Email";
				}
			}else{
				$msg = "Please Fill the Company Name";
			}
		}else{
			$msg = "Please Fill the Name";
		}
		header('location:goAid_Corporate.php?msg='.$msg);
	}
?>