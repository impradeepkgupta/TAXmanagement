<?php

session_start();

$con=mysqli_connect('localhost','root');
if($con){
	echo"Connection Successful";
}else{
	echo"NO connection";
}

mysqli_select_db($con,'project');

$id=$_POST['id'];
$password=$_POST['password'];

$p="select * from login where user_id='$id' && password='$password'";

$result=mysqli_query($con,$p);

$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['id']=$id;
	header('location:employee front.php');
}else{
	header('location:employee login.php');
}


?>