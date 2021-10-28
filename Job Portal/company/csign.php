<?php

session_start();
include 'dblink.php';

mysqli_select_db($con, 'accounts');
$cname = $_POST['cname'];
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = " select * from companydetails where cname = '$cname' && username = '$name' && email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1)
{
	echo " <script>alert('Account already created')</script>";
}
else
{
	$qy= " insert into companydetails(cname, username, email, password) value ('$cname', '$name', '$email', '$pass') ";
	mysqli_query($con, $qy);
	echo " <script>alert('Account sucessfully created')</script>";
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=clogin.html">