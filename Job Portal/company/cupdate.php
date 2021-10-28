<?php
		session_start();
		$id = $_SESSION['jid'];	

		include 'dblink.php';
		
		$c = $_POST['category'];
		$t = $_POST['title'];
		$e = $_POST['experience'];
		$q= $_POST['qualification'];
		$s = $_POST['skills'];
		$sa = $_POST['salary'];
		$l = $_POST['location'];

		if($c!="" && $t!="" && $e!="" && $q!="" && $s!="" && $sa!="" && $l!="")
		{
			$qu = "UPDATE jobdetails set category='$c', title='$t', experience='$e', qualification='$q', skills='$s', salary='$sa' , location='$l' where id = '$id' ";
			$data = mysqli_query($con, $qu);
			header("Location: cdisplay.php");
		 	if($data)
		 	{
		 		echo "<script>alert('Job updated successfully')</script>";
		 	}
		 	else
		 	{
		 		echo "<script>alert('Job not updated')</script>";
		 	}
		}
		else
		{
			echo "<script>alert('All fields are required')</script>";
		}
?>