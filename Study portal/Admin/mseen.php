<?php
session_start();
include 'dblink.php';
$id=$_GET['rid'];

$c= "Seen";
$qu = "UPDATE review set status='$c' where id=$id  ";
$data = mysqli_query($con, $qu);
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">