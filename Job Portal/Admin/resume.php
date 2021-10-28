<?php
session_start();

include 'dblink.php';
$query = "select * from resumedetails ";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>job details</title>
	<style type="text/css">
        body
		{
			margin: 0;
			padding: 0;
			background-color: #ffebcd;
			background-size: cover;
			font-family: sans-serif;
		}

		h1
		{
		     margin: 0; 
             color: white;
             background-color:cadetblue;
		}
		h2
		{
		     margin: 0;
             color: white;
             background-color: black;
             text-align: center;
             opacity: .7;
		}
		tr
		{
			color: black;
		}
		th
		{
			color: white;
			background-color: darkgray;
		}
		tr td a
		{
			font-size: 18px;
			color: white;
			background-color: red;
		}
		button
		{
			background-color: green;
			height: 35px;
			width: 100%;
		}
		tr td a:hover
		{
			color: red;
			background-color: white;
			display: block;
		}
		
	</style>
</head>
<body>
	<h1> <marquee> WELCOME  TO  ONLINE JOB PORTAL.  </marquee></h1>
	<h2>USER RESUME DETAILS HERE</h2>
	
	<table border="1">
		<tr>
			<th> ID</th>
			<th> User ID</th>
			<th>Job ID</th>
			<th>CANDIDATE NAME</th>
			<th>EMAIL</th>
			<th>NUMBER</th>
			<th>LOCATION</th>
			<th>RESUME</th>
			<th>OPERATIONS</th>
		</tr>
	

</body>
</html>


<?php
if($total !=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		$rr = $result['resume'];
		echo "<tr>
			    <td>".$result['id']."</td>
			    <td>".$result['u_id']."</td>
				<td>".$result['Job_id']."</td>
				<td>".$result['candidate_name']."</td>
				<td>".$result['email']."</td>
				<td>".$result['number']."</td>
				<td>".$result['location']."</td>

				<td>" . "<a href='/new/company/pdf/$rr' download>" .  $result['resume']. "</a>". "</td>
				<td><button><a href='rdelete.php?ji=$result[id]' onclick ='return checkdelete()' >Cancel</a></button></td>
		</tr>";
	}
}
else
{
	echo "No Record Found";
}


?>
</table>
<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to Delete this data??');
	}
</script>