<?php
session_start();
include 'dblink.php';

$id = $_SESSION['id'];
$_SESSION['id'] = $id;
$i = $_POST['jid'];
$n = $_POST['name'];
$e = $_POST['email'];
$num = $_POST['number'];
$l = $_POST['location'];
$r = $_FILES['resume']['name'];
$tmp_name=$_FILES["resume"]["tmp_name"];
$path="../company/pdf/".$r;
move_uploaded_file($tmp_name, $path);
$query = "insert into resumedetails(Job_id,candidate_name, email, number, location, resume,u_id) value ('$i','$n','$e','$num','$l','$r','$id') ";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script>alert('Job applyed successfully.')</script>";
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=rdisplay.php">
