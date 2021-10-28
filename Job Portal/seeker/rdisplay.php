<?php
session_start();
include 'dblink.php';
$id = $_SESSION['id'];
$query = "select * from resumedetails where u_id='$id' ";
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
		td a
		{
			color: rgb(0, 255, 64);
		}
		td a:hover
		{
			color: red;
			background-color: yellow;
			display: block;			
		}
		
	</style>
</head>
<body>
	<h1> <marquee> WELCOME  TO  ONLINE  JOB  PORTAL. </marquee></h1>
	<h2>VIEW RESUME DETAILS HERE</h2>
	
	<table border="1">
		<tr>
			<th>RESUME ID</th>
			<th>JOB ID</th>
			<th>CANDIDATE NAME</th>
			<th>EMAIL</th>
			<th>CONTACT NUMBER</th>
			<th>LOCATION</th>
			<th>RESUME</th>
			
			<th colspan="2">OPERATIONS</th>
		</tr>
	

</body>
</html>


<?php
if($total !=0)
{
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			    <td>".$result['id']."</td>
			    <td>".$result['Job_id']."</td>
				<td>".$result['candidate_name']."</td>
				<td>".$result['email']."</td>
				<td>".$result['number']."</td>
				<td>".$result['location']."</td>
				<td>".$result['resume']."</td>
				
				<td><a href='rupdat.php?ji=$result[id] & c=$result[candidate_name] & e=$result[email] & n=$result[number] & l=$result[location] & r=$result[resume] '><img src='image/edit.jpg'></a></td>
				<td><a href='rdelete.php?ji=$result[id]' onclick ='return checkdelete()' ><img src='image/delete.png'></a></td>
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