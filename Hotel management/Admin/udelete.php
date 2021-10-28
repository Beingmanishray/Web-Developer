<?php

include 'dblink.php';


$id = $_GET['ji'];
$query = "delete from user where id='$id' ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script> alert('User Deleted')</script>";
}
else
{
	echo "<script> alert('User Not Deleted')</script>";
}

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">