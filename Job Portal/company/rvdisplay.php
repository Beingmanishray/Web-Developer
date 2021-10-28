<?php

include 'dblink.php';

$query = "select * from resumedetails";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resume details</title>
	<style type="text/css">
        body
		{
			margin: 0;
			padding: 0;
			background-color: #fff0f5;
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
			font-size: 16px;
		}
		td a:hover
		{
			color:red;
			
		}
		
	</style>
</head>
<body>
	<h1> <marquee> WELCOME TO ONLINE JOB PORTAL.</marquee></h1>
	<h2>VIEW RESUME DETAILS HERE</h2>
	
	<table border="1">
		<tr>
			<th>JOB ID</th>
			<th>CANDIDATE NAME</th>
			<th>EMAIL</th>
			<th>CONTACT NUMBER</th>
			<th>LOCATION</th>
			<th>VIEW RESUME</th>
			
			<th colspan="2">OPERATIONS</th>
		</tr>
</body>
</html>
<?php

if($total !=0) {
	while($result = mysqli_fetch_assoc($data)) {
		$rr = $result['resume'];
		echo "<tr>
				<td>".$result['Job_id']."</td>
				<td>".$result['candidate_name']."</td>
				<td>".$result['email']."</td>
				<td>".$result['number']."</td>
				<td>".$result['location']."</td>

				<td>" . "<a href='/new/company/pdf/$rr' download>" .  $result['resume']. "</a>". "</td>				
				<td><button><a href='selection/index.php?ji=$result[id] & e=$result[email] '>Select</a></button></td>
				<td><button><a href='reject.php?ji=$result[id]' onclick ='return checkdelete()' >Reject</a></button></td>
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
		return confirm('Are you sure you want to Reject this Resume??');
	}
</script>