<?php
session_start();

include 'dblink.php';
$id = $_SESSION['id'];
$query = "select * from jobdetails where c_id='$id' ";
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
		}
		tr td a:hover
		{
			color: red;
			background-color: yellow;
			display: block;
		}
		
	</style>
</head>
<body>
	<h1> <marquee> WELCOME  TO  ONLINE  JOB  PORTAL. </marquee></h1>
	<h2>YOUR JOB DETAILS HERE</h2>
	
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
				<td>".$result['category']."</td>
				<td>".$result['title']."</td>
				<td>".$result['experience']."</td>
				<td>".$result['qualification']."</td>
				<td>".$result['skills']."</td>
				<td>".$result['salary']."</td>
				<td>".$result['location']."</td>
				<td><a href='cupdat.php?ji=$result[id] & c=$result[category] & t=$result[title] & e=$result[experience] & q=$result[qualification] & s=$result[skills] & sa=$result[salary] & l=$result[location] '><img src='image/edit.jpg'></a></td>
				<td><a href='cdelete.php?ji=$result[id]' onclick ='return checkdelete()' ><img src='image/delete.png'></a></td>
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