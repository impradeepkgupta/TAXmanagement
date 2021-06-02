<?php

session_start();
header('location:user front.php');

$con=mysqli_connect('localhost','root');
if($con){
	echo"Connection Successful";
}else{
	echo"NO connection";
}

mysqli_select_db($con,'project');

$date=$_POST['date'];
$akn=$_POST['akn'];
$payamt=$_POST['payamt'];

$q=" select * from payment where date='$date' && acknowledge_number='$akn' && payment_amount='$payamt'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
	echo"duplicate data";
}else{
	$qy="insert into payment(date,acknowledge_number,payment_amount) values ('$date','$akn','$payamt')";
	mysqli_query($con,$qy);
}



?>