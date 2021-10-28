<?php
session_start();
include 'dblink.php';
$email=$_SESSION['username'];

$course=$_POST['course'];
$sem=$_POST['Semester'];
$sub=$_POST['name'];
$book=$_FILES['book']['name'];
$tmp_name = $_FILES["book"]["tmp_name"];
$path="book/".$book;
move_uploaded_file($tmp_name, $path);

if($course!="" && $sub!="" && $book!=""){
	$q = " select * from admin_upload where course = '$course' && semester = '$sem' && subject = '$sub' && book = '$book' ";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1){
		echo "<script>alert('you are already loaded.')</script>";
	}
	else{
		$qy= " insert into admin_upload(user_id, course, semester, subject, book) value ('$email', '$course', '$sem', '$sub', '$book') ";
		$res=mysqli_query($con, $qy);
		if ($res) {
			echo "<script>alert('loaded successfully.')</script>";
		}
		else{
			echo "<script>alert('not loaded.')</script>";
		}
	}
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">