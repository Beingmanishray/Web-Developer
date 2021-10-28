<?php
	session_start();
	$_SESSION['jid'] = $_GET['ji'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update job</title>
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			background-image: url(image/home.jpg);
		}
		.dg {
			width: 450px;
			height: 530px;
			background:#000;
			color: #fff;
			left:30%;
			position: absolute;
			opacity: .9;
			font-size: 28px;
			border-radius: 10%;
			animation: mk 2s infinite alternate;
			border-style: solid;
			border-color: green;
		}
		@keyframes mk{
			from{border-radius: 2%;}
			to{border-radius: 10%;}
		}
		h1  {
		    margin: 0; 
            color: white;
            background-color: rgb(2, 49, 15);
		}
		h2  {
		    margin: 0;
            color: black;
            background-color: yellow;
            text-align: center;
            opacity: .7;
		}
		.jb input  {
			height: 30px;
			width: 400px;
			font-size: 18PX;
            color: red;
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
		}
		.jb button  {
			margin-left: 32%;
			background-color: gray;
			height: 40px;
			width: 140px;
		}
		.jb input[type="submit"] {
			width: 100px;
			color: #fff;
			background-color: red;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1> <marquee> WELCOME TO ONLINE JOB PORTAL. </marquee></h1>
	<h2>UPDATE JOB DETAILS HERE</h2>
	<div class="dg">
	<form action="cupdate.php" method="POST"autocomplete=off>
	<div class="jb">
		<p><input type="text" name="category" value="<?php echo $_GET['c'] ?>" required ></p>
		<p><input type="text" name="title" value="<?php echo $_GET['t'] ?>" required ></p>
		<p><input type="text" name="experience" value="<?php echo $_GET['e'] ?>" required ></p>
		<p><input type="text" name="qualification" value="<?php echo $_GET['q'] ?>" required ></p>
		<p><input type="text" name="skills" value="<?php echo $_GET['s'] ?>" required ></p>
		<p><input type="text" name="salary" value="<?php echo $_GET['sa'] ?>" required ></p>
		<p><input type="text" name="location" value="<?php echo $_GET['l'] ?>" required ></p>
		<button><input type="submit" name="update" value="UPDATE"></button>
	</div>
	</form>
	</div>
</body>
</html>