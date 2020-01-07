<?php include('config/config.php');?>
<?php /* code for need an ambulance */?>
<?php $msg = "";
	if(!empty($_POST)){
		//print_r($_POST);die;
		if(!empty($_POST['pickup_location'])){
			if(!empty($_POST['drop_location'])){
				if(!empty($_POST['patient_name'])){
					if(!empty($_POST['mobile'])){
						$pickup_location = addslashes($_POST['pickup_location']);
						$drop_location = addslashes($_POST['drop_location']);
						$patient_name = addslashes($_POST['patient_name']);
						$mobile = addslashes($_POST['mobile']);
						$time = date("h:i:sa");
						
						$otp=rand(1000,9999);
            		    $mesage=urlencode("Dear Customer,\n".$otp. " is your one time password (OTP) for validating your mobile number. Please enter the OTP to proceed.\nThank You\nTeam GoAid");
            		    
            		    file_get_contents("http://88.99.240.160/http-api.php?username=jaipurdials&password=123456&senderid=JPRDIL&route=1&number=$mobile&&message=$mesage");
						
						
						$que = mysqli_query($con,"insert into tbl_need_ambulance set pickup_location = '$pickup_location', drop_location = '$drop_location', mobile = '$mobile', patient_name = '$patient_name', otp = '$otp', status = '0', modify = now(),time='$time'");
						$msg="Thanks for connecting with us !! We Have Sent OTP On Your Mobile Number Please Enter It Below and Confirm Your Booking. Thanks Team GoAid.";
						header('location:index.php?msg='.$msg);
					}else{
						$msg = "Please Fill the Mobile";
					}
				}else{
					$msg = "Please Fill the Patient Name";
				}
			}else{
				$msg = "Please Fill the Drop Location";
			}
		}else{
			$msg = "Please Fill the Pickup Location";
		}
		header('location:index.php?msg='.$msg);
	}
?>