<?php
session_start();
include 'dblink.php';
$id = $_GET['rid'];
$query = "delete from review where id='$id' ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script> alert('Message Deleted Sucessfully')</script>";
}
else
{
	echo "<script> alert('Message Not Deleted')</script>";
}

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">
