<?php
session_start();
$email=$_SESSION['username'];
include 'dblink.php';

$name=$_POST['name'];
$eml=$_POST['email'];
$cont=$_POST['cont'];
$pass=$_POST['pass'];
$photo=$_FILES['photo']['name'];
$tmp_name=$_FILES["photo"]["tmp_name"];
$path="image/".$photo;
move_uploaded_file($tmp_name, $path);

$qu = "UPDATE admin set admin_name='$name', admin_email='$eml', admin_cont='$cont', password='$pass', admin_photo='$photo'  ";
    $data = mysqli_query($con, $qu);        
    if($data){
        echo "<script>alert('Profile updated successfully')</script>";
    }else{
        echo "<script>alert('Profile not updated')</script>";
    }
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin.php">