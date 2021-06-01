<?php

session_start();
header('location:after query.php');

$con=mysqli_connect('localhost','root');
if($con){
	echo"Connection Successful";
}else{
	echo"NO connection";
}

mysqli_select_db($con,'project');

$name=$_POST['name'];
$query=$_POST['query'];

$q=" select * from queries where name='$name' && query='$query'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
	echo"duplicate data";
}else{
	$qy="insert into queries(name,query) values ('$name','$query')";
	mysqli_query($con,$qy);
}



?>