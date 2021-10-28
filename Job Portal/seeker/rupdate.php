<?php
		session_start();
		$id = $_SESSION['jid'];	

		include 'dblink.php';
		
		$n = $_POST['name'];
		$e = $_POST['email'];
		$num = $_POST['number'];
		$l = $_POST['location'];
		$r = $_POST['resume'];

		if($n!="" && $e!="" && $num!="" && $l!="" && $r!="" )
		{
			$qu = "UPDATE resumedetails set candidate_name='$n', email='$e', number='$num', location='$l', resume='$r' where id = '$id' ";
			$data = mysqli_query($con, $qu);
			
		 	if($data)
		 	{
		 		echo "<script>alert('Resume update successfully.')</script>";
		 	}
		 	else
		 	{
		 		echo "<script>alert('Resume not updated.')</script>";
		 	}
		}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/seeker/rdisplay.php">