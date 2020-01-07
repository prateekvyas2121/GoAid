<?php include('../config/config.php');

        
        $sql_user="SELECT * FROM reg_user where welcome='0' ORDER BY id asc";
    	$fire_user=mysqli_query($con,$sql_user);
    	$res_user=mysqli_num_rows($fire_user);
    	echo "Total Selected User : "."\t".$res_user."<br>";
    	$i=1;
    	if(isset($_REQUEST['mobile']))
    	{
    	    $contact=$_REQUEST['mobile'];
    	    $name=$_REQUEST['name'];
    	    
    	    sendMsg($contact,$name);
    	}
    	else{
    	    while($fetch_user=mysqli_fetch_array($fire_user)){
        	$contact= $fetch_user['mobile']; 
        	$name = $fetch_user['name'];
        	sendMsg($contact,$name);
            
        	$sql_wel="UPDATE `reg_user` SET `welcome`='1' WHERE mobile='$contact'";
        	mysqli_query($con,$sql_wel);
    	}
    	    
    	}
    	function sendMsg($contact,$name)
    	{
    	  echo "<br>".$i.". Mobile ".$contact."<br>";
        	$i++;
        	$WelcomeMsg=urlencode("Good Morning ".$name.",\nBe-Happy,Be-Healthy\nMorning me Hot(Gunguna) water pine ke fayde\nhttp://www.goaid.in/modal.php?id=54");

            $api = "http://kutility.in/app/smsapi/index.php?key=55DADA98116D38&routeid=415&type=text&contacts=$contact&senderid=GOAIDD&msg=$WelcomeMsg";
           echo file_get_contents($api);  
    	}
    	
    
    

?>