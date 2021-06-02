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

$id=$_POST['id'];
$first=$_POST['first'];
$middle=$_POST['middle'];
$last=$_POST['last'];
$email=$_POST['email'];
$pan=$_POST['pan'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$password=$_POST['password'];

$q=" select * from employee where id='$id' && first_name='$first' && middle_name='$middle' && last_name='$last' && email='$email' && pan='$pan' && contact='$contact' && address='$address'";
$p="select * from login where user_id='$id' && password='$password'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
	echo"duplicate data";
}else{
	$qy="insert into employee(id,first_name,middle_name,last_name,email,pan,contact,address) values ('$id','$first','$middle','$last','$email','$pan','$contact','$address')";
	$py="insert into login(user_id,password) values ('$id','$password')";
	mysqli_query($con,$qy);
	mysqli_query($con,$py);
}


?>