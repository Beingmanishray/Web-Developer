<?php

include 'dblink.php';


$id = $_GET['ji'];
$query = "delete from employee where id='$id' ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script> alert('Employee Deleted')</script>";
}
else
{
	echo "<script> alert('Employee Not Deleted')</script>";
}

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">