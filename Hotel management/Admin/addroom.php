<?php
session_start();
include 'dblink.php';

$r=$_POST['room'];
$f=$_POST['bed'];

if($r!="" && $f!=""){
	$q = " select * from room where room_type = '$r' && bedding_type = '$f' ";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1){
		echo "<script>alert('this room already loaded.')</script>";
	}
	else{
		$qy= " insert into room(room_type, bedding_type) value ('$r', '$f') ";
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