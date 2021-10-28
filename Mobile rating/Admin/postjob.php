<?php

session_start();
header('location:postphone.html');

include 'dblink.php';


if($_POST['submit'])
{
	$t = $_POST['title'];
	$y = $_POST['year'];
	$d = $_POST['description'];
	$l = $_POST['link'];
	if($t!="" && $y!="" && $d!="" && $l!="" )
	{
		$query = "insert into mobile(title,released_year,description,trailer) values ('$t','$y','$d','$l')";
		$data = mysqli_query($con, $query);

		if($data)
		{

			echo "<script> alert('data inserted into database')</script>";
		}

	}
	else
	{
		echo "<script> alert('All Fields Are Required')</script>";
	}


}

?>
