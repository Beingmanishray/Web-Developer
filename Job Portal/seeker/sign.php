<?php

session_start();
header('location:login.html');

include 'dblink.php';


mysqli_select_db($con, 'accounts');
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

if ($name == "" || $email == "" || $pass == "") {
	header('location:signup.html');
}

$q = " select * from details where username = '$name' && email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1)
{
	echo " duplicate data";
}
else
{
	$qy= " insert into details(username, email, password) value ('$name', '$email', '$pass') ";
	mysqli_query($con, $qy);
}

?>