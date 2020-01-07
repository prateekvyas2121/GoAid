<?php 
error_reporting(0);
ob_start();
session_start();
date_default_timezone_set('Asia/kolkata');
$localhost="localhost";
$user="root";
$pass="";
$db="goaid";

$con=mysqli_connect($localhost,$user,$pass,$db);
mysqli_set_charset( $con, 'utf8mb4');
?>