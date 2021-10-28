<?php
session_start();
include 'dblink.php';
$id = $_GET['ui'];
$query = "delete from upload where id='$id' ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script> alert('Data Deleted')</script>";
}
else
{
	echo "<script> alert('Data Not Deleted')</script>";
}

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">
