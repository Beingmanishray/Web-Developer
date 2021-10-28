<?php
session_start();
include 'dblink.php';
$email=$_SESSION['username'];
    
    $sub=$_POST['sub'];
    $msg=$_POST['msg'];
    $st ="Not seen";
    if(isset($_POST['submit'])){
    
        $rev="insert into review(user_name,subject,message,status) value('$email','$sub','$msg','$st')";
        $rrev=mysqli_query($con,$rev);
        if($rrev){
            echo "<script>alert('Message send sucessfully')</script>";
        }else{
            echo "<script>alert('error! Message can not send')</script>";
        }
    }
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=uhome.php">