<?php
session_start();
include 'dblink.php';
$query = "select * from companydetails ";
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
	<h1> <marquee>	WELCOME TO ONLINE JOB PORTAL</marquee></h1>
	<h2>COMPANY LOGIN DETAILS HERE</h2>
	
	<table border="1">
		<tr>
			<th>USER ID</th>
			<th>Company Name</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Password</th>
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
				<td>".$result['cname']."</td>
				<td>".$result['username']."</td>
				<td>".$result['email']."</td>
				<td>".$result['password']."</td>
				<td><button><a href='cdelete.php?ji=$result[id]' onclick ='return checkdelete()' >Delete</a></button></td>
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