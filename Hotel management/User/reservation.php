<?php
session_start();
include 'dblink.php';

$title=$_POST['title'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$adhar=$_POST['adhar'];
$phone=$_POST['phone'];
$troom=$_POST['troom'];
$bed=$_POST['bed'];
$nroom=$_POST['nroom'];
$meal=$_POST['meal'];
$cin=$_POST['cin'];
$cout=$_POST['cout'];

$check="SELECT * FROM reservation WHERE email = '$email'";
	$rs = mysqli_query($con,$check);
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);
	if($data[0] > 1) {
	echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
	}else{
		$new ="Not Conform";
		$pay ="Not Paid";
		$newUser="INSERT INTO `reservation`(`title`, `first_name`, `last_name`, `email`, `adhar_no`, `Phone_no`, `room_type`, `bed`, `no_of_room`, `meal_plan`, `check_in`, `check_out`,`status`,`payment`,`nday`) VALUES ('$title','$fname','$lname','$email','$adhar','$phone','$troom','$bed','$nroom','$meal','$cin','$cout','$new','$pay',datediff('$_POST[cout]','$_POST[cin]'))";
		if (mysqli_query($con,$newUser))
		{
			echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";									
		}else{
			echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
		}
	}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=uhome.php">