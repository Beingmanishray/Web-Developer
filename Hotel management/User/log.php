<?php
session_start();
include 'dblink.php';
mysqli_select_db($con, 'hotel');
$name = $_POST['username'];
$pass = $_POST['password'];
if ($name == "" || $pass == "") {
	header('location:login.php');
} else {
	$q = " select * from user where user_email = '$name' && password = '$pass' ";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1){
		$_SESSION['username'] = $name;
		header('location:uhome.php');
	} else {
		header('location:login.php');
	}
}
?>
