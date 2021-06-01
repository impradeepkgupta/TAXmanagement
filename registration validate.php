<?php

session_start();

$con=mysqli_connect('localhost','root');
if($con){
	echo"Connection Successful";
}else{
	echo"NO connection";
}

mysqli_select_db($con,'project');

$pan=$_POST['pan'];
$password=$_POST['password'];

$p="select * from user_login where user_id='$pan' && password='$password'";

$result=mysqli_query($con,$p);

$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['pan']=$pan;
	header('location:user front.php');
}else{
	header('location:user front.php');
}



?>