<?php
session_start();
include 'dblink.php';
$email=$_SESSION['username'];

$n = $_POST['name'];
$e = $_POST['email'];
$num = $_POST['cont'];
$p = $_POST['pass'];
$photo = $_FILES['photo']['name'];
$tmp_name = $_FILES["photo"]["tmp_name"];
$path = "photos/".$photo;
move_uploaded_file($tmp_name, $path);


	$qu = "UPDATE user set user_name='$n', user_email='$e', user_cont='$num', password='$p', user_photo='$photo' where user_email = '$email' ";
	$data = mysqli_query($con, $qu);
	if($data){
 		echo "<script>alert('profile update successfully.')</script>";
	}else{
		echo "<script>alert('profile not updated.')</script>";
	}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=uhome.php">