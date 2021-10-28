<?php

include 'dblink.php';


$id = $_GET['ji'];
$query = "delete from mobile where id='$id' ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script> alert('Record Deleted')</script>";

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=cdetail.php">
<?php
}
else
{
	echo "<script> alert('Record Not Deleted')</script>";
}



?>
