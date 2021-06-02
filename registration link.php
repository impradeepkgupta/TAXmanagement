<?php

session_start();
header('location:after regis.php');

$con=mysqli_connect('localhost','root');
if($con){
	echo"Connection Successful";
}else{
	echo"NO connection";
}

mysqli_select_db($con,'project');

$first=$_POST['first'];
$middle=$_POST['middle'];
$last=$_POST['last'];
$email=$_POST['email'];
$pan=$_POST['pan'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$password=$_POST['password'];

$q=" select * from people where first_name='$first' && middle_name='$middle' && last_name='$last' && email='$email'  && contact='$contact' && address='$address' && pan='$pan'";
$p="select * from user_login where user_id='$pan' && password='$password'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
	echo"duplicate data";
}else{
	$qy="insert into people(first_name,middle_name,last_name,email,contact,address,pan) values ('$first','$middle','$last','$email','$contact','$address','$pan')";
	$py="insert into user_login(user_id,password) values ('$pan','$password')";
	mysqli_query($con,$qy);
	mysqli_query($con,$py);
}



?>