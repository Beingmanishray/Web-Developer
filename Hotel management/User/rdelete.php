<?php

include 'dblink.php';


$id = $_GET['ji'];
$query = "delete from reservation where booking_id='$id' ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script> alert('reservation cancel successfully')</script>";
}
else
{
	echo "<script> alert('reservation Not cancel')</script>";
}

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=uhome.php">