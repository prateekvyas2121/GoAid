
<?php include('header.php');?>
<?php include('sidebar.php');?>		
<?php
echo "bhole";

$query = "SELECT * FROM driver_ride where mobile='9024067948'";
$query_run = mysqli_query($con,$query);
echo "BABA";
echo $qty= 0;
while ($num = mysqli_fetch_assoc($query_run)) {
    $qty++;
}
echo "bhole";
echo $qty;

                       ?>