<?php

session_start();

include 'dblink.php';


mysqli_select_db($con, 'accounts');
$name = $_POST['username'];
$pass = $_POST['password'];

if ($name == "" || $pass == "") {
	
	header('location:login.html');
} else {


	$q = " select * from details where username = '$name' && password = '$pass' ";

	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		$_SESSION['username'] = $name;
		header('location:uhome.php');
	}
	else
	{
		header('location:login.html');
	}
}

?>