<!DOCTYPE html>
<html>
<head>
	<title>resume</title>
	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			background-image: url(../image/bcd.jpg);
		}
		h1
		{
			margin: 0; 
            color: white;
            background-color: rgb(2, 49, 15);
		}
		.q
		{
			margin: 0;
			width: 450px;
			height: 500px;
			background: #000;
			color: #fff;
			left:30%;
			position: absolute;
			font-size: 28px;
			text-align: center;
			opacity: .8;
			border-color: green;
			border-style: solid;
			animation: mk 2s infinite alternate;
			border-style: solid;
			border-color: green;
		}
		@keyframes mk{
			from{border-radius: 2%;}
			to{border-radius: 10%;}
		}
		h4
		{
			margin: 5px;
		}
		.q input
		{
			height: 30px;
			width: 65%;
			font-size: 20px;
			color: red;
			text-align: center;
		}
		.q button
		{
			width: 30%;
			background-color: gray;
			height: 40px;
		}
		.q input[type=submit]
		{
			width: 100px;
			background-color: green;
			color: white;
		}
		input[type=submit]:hover
		{
			background-color: red;
			font-size: 22px;
		}
		#text
		{
			color:red;
			font-size:16px;
		}
	</style>
</head>
<body>
	<h1> <marquee><u> WELCOME TO ONLINE JOB PORTAL. </u></marquee></h1>
	<div class="q">
	<h4> His/Her email address for sending message. </h4>
	<form action ="mail.php" method="POST">
		<input type="email" name="email" value="<?php echo $_GET['e'];?>" required></p>
		<h4> Type message in bellow box for seeker. </h4>
		<textarea name="message" id="text" cols="30" rows="10" required></textarea></p>
		<button><input type="submit" name="" value="Send"></button>		
	</form>
	</div>
</body>
</html>