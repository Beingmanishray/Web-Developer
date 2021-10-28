<?php

session_start();

include 'dblink.php';

mysqli_select_db($con, 'sachin');
$name = $_POST['username'];
$pass = $_POST['password'];



	$q = " select * from admin where username = '$name' && password = '$pass' ";

	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		$_SESSION['username'] = $name;
		header('location:admin.php');
	}
	else
	{
		header('location:login.html');
	}

?>