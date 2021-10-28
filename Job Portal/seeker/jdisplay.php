<?php
session_start();
$i = $_SESSION['id'];
$_SESSION['id'] = $i;
include 'dblink.php';

$query = "select * from jobdetails";
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
			background-color: red;
			color: white;
		}
		button
		{
			width: 100%;
			background-color: gray;
		}
		td a:hover
		{
			color:red;
			background-color: white;
		}
		
	</style>
</head>
<body>
	<h1> <marquee> CHANCE  FOR  EVERYONE. </marquee></h1>
	<h2>VIEW JOB & APPLY HERE</h2>
	
	<table border="1">
		<tr>
			<th>JOB ID</th>
			<th>CATEGORY</th>
			<th>TITLE</th>
			<th>EXPERIENCE</th>
			<th>QUALIFICATION</th>
			<th>SKILLS</th>
			<th>SALARY</th>
			<th>LOCATION</th>
			<th>OPERATIONS</th>
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
				<td>".$result['category']."</td>
				<td>".$result['title']."</td>
				<td>".$result['experience']."</td>
				<td>".$result['qualification']."</td>
				<td>".$result['skills']."</td>
				<td>".$result['salary']."</td>
				<td>".$result['location']."</td>
				<td><button><a href='japply.html?ji=$result[id] '>APPLY </a></button></td>
				
		</tr>";
	}
}
else
{
	echo "No Record Found";
}


?>
</table>
