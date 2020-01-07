<?php include('config/config.php');?>
<?php /* code for need an ambulance */?>
<?php $msg = "";
	if(!empty($_POST)){
		//print_r($_POST);die;
		if(!empty($_POST['name'])){
			if(!empty($_POST['city'])){
				if(!empty($_POST['ambulance'])){
					if(!empty($_POST['vehicel'])){
						if(!empty($_POST['phone'])){
							$name = addslashes($_POST['name']);
							$city = addslashes($_POST['city']);
							$ambulance = addslashes($_POST['ambulance']);
							$phone = addslashes($_POST['phone']);
							$vehicel = addslashes($_POST['vehicel']);
							$time = date("h:i:sa");
							$que = mysqli_query($con,"insert into tbl_partner_enquiry set name = '$name', city = '$city', phone = '$phone', vehicel = '$vehicel', ambulance = '$ambulance', status = '0', modify = now(),time='$time'");
						$msg="Thanks for connecting with us";
						header('location:partner_goaid.php?msg='.$msg);
						}else{
							$msg = "Please Fill the Phone";
						}
					}else{
						$msg = "Please Fill the Vehicel";
					}
				}else{
					$msg = "Please Fill the Ambulance";
				}
			}else{
				$msg = "Please Fill the City";
			}
		}else{
			$msg = "Please Fill the Name";
		}
		header('location:partner_goaid.php?msg='.$msg);
	}
?>