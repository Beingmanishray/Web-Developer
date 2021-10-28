<?php

session_start();
header('location:postjob.html');

include 'dblink.php';


if($_GET['submit'])
{
	$i = $_SESSION['id'];
	$_SESSION['id'] = $i;
	$cate = $_GET['category'];
	$title = $_GET['title'];
	$exp = $_GET['experience'];
	$qual = $_GET['qualification'];
	$skill = $_GET['skills'];
	$sal = $_GET['salary'];
	$loc = $_GET['location'];

	if($cate!="" && $title!="" && $exp!="" && $qual!="" && $skill!="" && $sal!="" && $loc!="")
	{
		$query = "insert into jobdetails(category,title,experience,qualification,skills,salary,location,c_id
	) values ('$cate','$title','$exp','$qual','$skill','$sal','$loc','$i')";
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
