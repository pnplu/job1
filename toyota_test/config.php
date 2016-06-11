<?php 

$host="localhost";
$user="root";
$pass="";
$dbname="toyotavode";

$connect = mysqli_connect($host,$user,$pass,$dbname);

if(!$connect){
	echo "Connect to Database Error".mysqli_connect_errno();
}


 ?>