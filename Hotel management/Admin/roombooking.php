<?php
session_start();
include 'dblink.php';
$id=$_GET['rid'];

$c= "Conform";
$qu = "UPDATE reservation set status='$c' where booking_id=$id  ";
    $data = mysqli_query($con, $qu);        
    if($data){
        echo "<script>alert('booking conformed successfully')</script>";
    }else{
        echo "<script>alert('booking not conformed')</script>";
    }
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">