<?php
	session_start();
	include 'dblink.php';
	$query = "select * from admin ";
	$data = mysqli_query($con, $query);
	$total = mysqli_num_rows($data);
	$result= mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}
		.pf {
			margin: 0;
			width: 450px;
			height: 450px;
			background:#000;
			color: #fff;
			left:27%;
			position: absolute;
			font-size: 28px;
			border-color: green;
			border-style: solid;
			animation: mk 1s infinite alternate;
		}
		@keyframes mk{
			from{border-radius: 2%;}
			to{border-radius: 20%;}
		}
		.fp input {
			margin-top: 5px;
			height: 30px;
			width: 400px;
			font-size: 20PX;
            color: red;
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;          
		}
		h1  {
            margin: 0;
            padding: 0;
            color: white;
            background-color: gray;
            margin-top:0px;
        }
        h2  {
            margin: 0;
            background-color: black;
            color: white;
            text-align: center;
            padding-right: 45%;
        }
        h2 img  {
        	padding-right: 60%;
        }
        .fp input[type="submit"]  {
			width: 200px;
			height: 40px;
			color: white;
			background-color: red;
		}
		button	{
			height: 50px;
			background-color: gray;
			margin-left: 100px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<h1> <marquee><u>WELCOME  TO HOTEL SARKAR. </u></marquee></h1>
	<h2> <a href="admin.php"><img src="image/home.png"></a>Update Profile Here</h2>
	<div class="pf">
		<form action="" method="POST" autocomplete="off">
			<div class="fp">
				<input style="margin-top: 60px" type="text" name="name" value="<?php echo ($result['username']);?>" required></p>
				<input type="text" name="email" value="<?php echo ($result['email']);?>" required></p>
				<input type="password" name="password" value="<?php echo ($result['password']);?>" required></p>
				<button class="sb"><input type="submit" name="update" value="update"></button></p>
			</div>
		</form>
	</div>
</body>
</html>

<?php
if(isset($_POST['update']))
{
	$n = $_POST['name'];
	$e = $_POST['email'];
	$p= $_POST['password'];

	if($n!="" && $e!="" && $p!=""){
		$qu = "UPDATE admin set admin_name='$n', admin_email='$e', password='$p' ";
		$data = mysqli_query($con, $qu);
		header("Location: admin.php");
		if($data) 	{
			echo "<script>alert('Profile updated successfully')</script>";
		}
		else{
			echo "<script>alert('Profile not updated')</script>";
		}
	}
	else{
		echo "<script>alert('All fields are required')</script>";
	}
}
?>