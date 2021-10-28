<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con)
{
	echo" connection successful";
}
else
{
	echo" no connection";
}

mysqli_select_db($con, 'sachin');
$name = $_POST['username'];
$pass = $_POST['password'];

if ($name == "" || $pass == "") {
	
	header('location:login.html');
} else {


	$q = " select * from reviewrs where name = '$name' && password = '$pass' ";
	$result = mysqli_query($con, $q);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$usr = $row["name"];
	$uid = $row["ID"];
	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		$_SESSION['username'] = $usr;
		$_SESSION['uid'] = $uid;	
		header('location:new.php');
	}
	else
	{
		header('location:login.html');
	}
}

?>