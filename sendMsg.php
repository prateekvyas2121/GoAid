<?php include('../config/config.php');



$msg=$_REQUEST['msg'];
//$encodeMsg=urlencode($msg."\nThank You\nTeam GoAid");
$encodeMsg=str_replace('%u', '',$smsClass->utf8_to_unicode($msg));
if(isset($_REQUEST['mobile']))
    {
        $mobile=$_REQUEST['mobile'];
        echo $encodeMsg."<br>";
        sendMess($mobile,rawurldecode($encodeMsg));
        
    }
else if(isset($_REQUEST['number']))
    {
        $number=$_REQUEST['number']; 
         $sql_partner="SELECT * FROM tbl_Contact_Partner ORDER BY id desc LIMIT $number";
    	$fire_partner=mysqli_query($con,$sql_partner);
    	$res_partner=mysqli_num_rows($fire_partner);
    	echo "Total Selected Partner : "."\t".$res_partner."<br>";
    	while($res_partner){
        	$fetch_partner = mysqli_fetch_array($fire_partner);
        	$contact= $fetch_partner['contact']; 
        	sendMess($contact,$encodeMsg);
    	}
    }
else if(isset($_REQUEST['Vnumber']))
    {
        
        $sql_partner="SELECT * FROM tbl_Contact_Partner ORDER BY id desc";
    	$fire_partner=mysqli_query($con,$sql_partner);
    	$res_partner=mysqli_num_rows($fire_partner);
    	
        echo "MSG  ".$encodeMsg."<br>";
    	echo "Total Partner : "."\t".$res_partner."<br>";
    	while($res_partner){
        	$fetch_partner = mysqli_fetch_array($fire_partner);
        	$contact= $fetch_partner['contact']; 
        	echo $contact."<br>";
        	
    	}
    }
else
    {
        $response['errorCode']=0;
    	$response['msg']='Please use predefine format!!!'; 
    }

function sendMess($mobile,$msg)
    {
        echo "<br>"."Mobile ".$mobile."<br>";
        
         $api = "http://kutility.in/app/smsapi/index.php?key=55DADA98116D38&routeid=415&type=text&contacts=$mobile&senderid=GOAIDD&msg=$msg";
       
        echo file_get_contents($api);
    }
?>