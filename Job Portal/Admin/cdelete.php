<?php

include 'dblink.php';


$id = $_GET['ji'];
$query = "delete from jobdetails where id='$id' ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script> alert('Record Deleted')</script>";

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=job.php">
<?php
}
else
{
	echo "<script> alert('Record Not Deleted')</script>";
}



?>