<?php

session_start();
header('location:login.html');

$con = mysqli_connect('localhost','root');
if($con)
{
	echo " connection successful";
}
else
{
	echo " no connection";
}

mysqli_select_db($con, 'sachin');
$name = $_POST['username'];
$mai = $_POST['Email'];
$pass = $_POST['password'];


if ($name == "" || $pass == "") {
	header('location:signup.html');
}

$q = " select * from reviewrs where name = '$name'  && password = '$pass' && email = '$mai'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo " duplicate data";
}
else
{
	$qy= " insert into reviewrs(name,  password, email) value ('$name',  '$pass', '$mai') ";
	mysqli_query($con, $qy);
	
}

?>