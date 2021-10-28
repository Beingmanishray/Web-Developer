<?php
session_start();
include 'dblink.php';
$email=$_SESSION['username'];

$c = $_POST['course'];
$s = $_POST['name'];
$t = $_POST['topic'];
$f = $_FILES['video']['name'];
$tmp_name = $_FILES["video"]["tmp_name"];
$path = "videos/".$f;
move_uploaded_file($tmp_name, $path);

if($c!="" || $s!="" || $t !="" || $f !=""){

	$q = " select * from upload where user_id = '$email' && course = '$c' && subject = '$s' && topic = '$t' && videos = '$f' ";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1){
		echo "<script>alert('this video has already uploaded.')</script>";?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=upload.php"><?php
	}
	else{
		$qy= " insert into upload(user_id, course, subject, topic, videos) value ('$email', '$c', '$s', '$t', '$f') ";
		$res=mysqli_query($con, $qy);
		if ($res) {
			echo "<script>alert('upload successfully.')</script>";
		}
		else{
			echo "<script>alert('didn't uploaded.')</script>";
		}
	}
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=uprofile.php">