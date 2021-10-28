<?php
session_start();
include 'dblink.php';
$email=$_SESSION['username'];

$en = $_POST['name'];
$ee = $_POST['email'];
$ep = $_POST['phone'];
$epo = $_POST['post'];
$ea = $_POST['address'];
$ed = $_POST['date'];
$es = $_POST['salary'];
$eph = $_FILES['photo']['name'];
$tmp_name = $_FILES["photo"]["tmp_name"];
$path = "photos/".$ep;
move_uploaded_file($tmp_name, $path);

if($en!="" || $ee!="" || $ep !="" || $epo !="" || $ea!="" || $ed!="" || $es !="" || $eph !=""){

	$q = " select * from employee where e_name = '$en' && e_email = '$ee' && e_phone = '$ep' && e_post = '$epo' && e_address = '$ea' && e_jdate = '$ed' && e_salary = '$es' && e_photo = '$eph' ";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1){
		echo "<script>alert('this employee is allready working here.')</script>";
	}
	else{
		$qy= " insert into employee(e_name, e_email, e_phone, e_post, e_address, e_jdate, e_salary, e_photo) value ('$en', '$ee', '$ep', '$epo', '$ea', '$ed', '$es', '$eph') ";
		$res=mysqli_query($con, $qy);
		if ($res) {
			echo "<script>alert('register successfully.')</script>";
		}
		else{
			echo "<script>alert('didn't register.')</script>";
		}
	}
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">