<?php include ('config/config.php');?>
<?php $msg = "";
	if(!empty($_POST)){
		//print_r($_POST);die;
		if(!empty($_POST['name'])){
			$name = addslashes($_POST['name']);
			if(!empty($_POST['phone'])){
				if(!empty($_POST['company'])){
					if(!empty($_POST['massage'])){
						$massage = addslashes($_POST['massage']);
						$company = addslashes($_POST['company']);
						$phone = $_POST['phone'];
						
						
						$que = mysqli_query($con,"insert into tbl_contact set name = '$name', company = '$company', phone = '$phone', massage = '$massage', status = '0', modify = now()");
						$msg="Thanks for connecting with us";
						header('location:contact_us.php?msg='.$msg);
						
					}else{
						$msg = "Please Fill the Comment";
					}
				}else{
					$msg = "Please Fill the Company Name";
				}
			}else{
				$msg = "Please Fill the Correct Phone";
			}
		}else{
			$msg = "Please Fill the Correct Name";
		}
		header('location:contact_us.php?msg='.$msg);
	}
?>
			
			