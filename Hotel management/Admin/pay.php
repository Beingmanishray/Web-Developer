
<?php
session_start();
include 'dblink.php';
$id=$_SESSION['rid'];

if (isset($_POST['pay'])) {

$p= $_POST['paid'];	
$c= "Paid";
$qu = "UPDATE reservation set payment='$c', amount='$p' where booking_id=$id  ";
    $data = mysqli_query($con, $qu);        
    if($data){
        echo "<script>alert('Amount Paid successfully')</script>";
    }else{
        echo "<script>alert('Amount Not Paid')</script>";
    }
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">