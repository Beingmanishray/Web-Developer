<?php
session_start();
include 'dblink.php';
$name = $_POST['username'];
$email = $_POST['email'];
$num = $_POST['number'];
$pass = $_POST['pass'];
$photo = $_FILES['photo']['name'];
$tmp_name = $_FILES["photo"]["tmp_name"];
$path = "photoes/".$photo;
move_uploaded_file($tmp_name, $path);

if ($name == "" || $email == "" || $num =="" || $pass == "" || $photo == "") {
	header('location:signup.php');
} 
else {
	$q = " select * from user where user_name = '$name' && user_email = '$email' && user_cont = '$num' && password = '$pass' && photo = '$photo' ";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1){
		echo "<script>alert('you are already register.')</script>";?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../index.php"><?php
	}
	else{
		$qy= " insert into user(user_name, user_email, user_cont, password, photo) value ('$name', '$email', '$num', '$pass', '$photo') ";
		$res=mysqli_query($con, $qy);
		if ($res) {
			echo "<script>alert('registration successfully.')</script>";
		}
		else{
			echo "<script>alert('not register.')</script>";
		}
	}
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../index.php">