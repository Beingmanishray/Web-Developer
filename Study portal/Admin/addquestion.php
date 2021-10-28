<?php
session_start();
include 'dblink.php';
$email=$_SESSION['username'];

$course=$_POST['course'];
$sem=$_POST['Semester'];
$year=$_POST['year'];
$ques = $_FILES['pdf']['name'];
$tmp_name = $_FILES["pdf"]["tmp_name"];
$path="question/".$ques;
move_uploaded_file($tmp_name, $path);

if($course!="" && $year!="" && $ques!=""){
	$q = " select * from admin_upload where course = '$course' && semester = '$sem' &&  year='$year' && question = '$ques' ";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1){
		echo "<script>alert('you are already loaded.')</script>";
	}
	else{
		$qy= " insert into admin_upload(user_id, course, semester, year, question) value ('$email', '$course', '$sem', '$year', '$ques') ";
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