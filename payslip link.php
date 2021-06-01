<?php

session_start();
header('location:payment.php');

$con=mysqli_connect('localhost','root');
if($con){
	echo"Connection Successful";
}else{
	echo"NO connection";
}

mysqli_select_db($con,'project');

$pan=$_POST['pan'];
$gti=$_POST['gti'];
$td=$_POST['td'];
$dti=$_POST['dti'];
$ntp=$_POST['ntp'];
$tt=$_POST['tt'];
$tp=$_POST['tp'];
$refund=$_POST['refund'];
$tpy=$_POST['tpy'];

$q=" select * from payslip where pan='$pan' && gross_total_income='$gti' && total_deduction='$td'  && deemed_total_income='$dti' && net_tax_payable='$ntp' && total_tax='$tt' && tax_paid='$tp' && refund='$refund' && tax_payable='$tpy'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
	echo"duplicate data";
}else{
	$qy="insert into payslip(pan,gross_total_income,total_deduction,deemed_total_income,net_tax_payable,total_tax,taxes_paid,refund,tax_payable) values ('$pan','$gti','$td','$dti','$ntp','$tt','$tp','$refund','$tpy')";
	mysqli_query($con,$qy);
}



?>