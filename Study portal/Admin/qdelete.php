<?php
session_start();
include 'dblink.php';
$id = $_GET['ui'];
$query = "delete from admin_upload where id='$id' ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script> alert('Question Deleted Sucessfully')</script>";
}
else
{
	echo "<script> alert('Question Not Deleted')</script>";
}

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">
