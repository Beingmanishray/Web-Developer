<?php
session_start();
include 'dblink.php';
$select=$_POST['select'];
$name = $_POST['username'];
$pass = $_POST['password'];
if($select=="user") {
	$q = " select * from user where user_email = '$name' && password = '$pass' ";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1){
		$_SESSION['username'] = $name;
		header('location:uhome.php');
	} else {
		header('location:../index.php');
	}
} else {
	$q = " select * from admin where admin_email = '$name' && password = '$pass' ";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1){
		$_SESSION['username'] = $name;
		header('location:../admin/admin.php');
	}
	else{
		header('location:../index.php');
	}
}
?>
