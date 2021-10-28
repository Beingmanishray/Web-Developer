<?php
session_start();
include 'dblink.php';
$id = $_GET['ui'];
$query = "delete from user where user_id='$id' ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script> alert('User Deleted Sucessfully')</script>";
}
else
{
	echo "<script> alert('User Not Deleted')</script>";
}

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">
