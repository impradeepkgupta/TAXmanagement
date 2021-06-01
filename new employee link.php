<?php

session_start();
header('location:after regis1.php');

$con=mysqli_connect('localhost','root');
if($con){
	echo"Connection Successful";
}else{
	echo"NO connection";
}

mysqli_select_db($con,'project');

$an=$_POST['an'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$time=$_POST['time'];

$q=" select * from new_employee where name='$name' && address='$address' && email='$email' && contact='$contact' && dob='$dob' && an='$an'";
$p=" select * from interview where venue='$venue' && date='$date' && time='$time' && an='$an'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
	echo"duplicate data";
}else{
	$qy="insert into new_employee(name,address,email,contact,dob,an) values ('$name','$address','$email','$contact','$dob','$an')";
	$py="insert into interview(venue,date,time,an) values ('$venue','$date','$time','$an')";
	mysqli_query($con,$qy);
	mysqli_query($con,$py);
}


?>