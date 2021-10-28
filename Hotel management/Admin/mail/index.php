<!DOCTYPE html>
<html>
<head>
	<title>forgate password</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background-image: url(../image/bcd.jpg);
		}
		h1{
			margin: 0; 
            color: white;
            background-color: rgb(2, 49, 15);
		}
		.q{
			margin: 0;
			width: 450px;
			height: 280px;
			background: #000;
			color: #fff;
			left:30%;
			position: absolute;
			opacity: .7;
			font-size: 28px;
			text-align: center;
			animation: mk 2s infinite alternate;
			border-style: solid;
			border-color: green;
		}
		@keyframes mk{
			from{border-radius: 2%;}
			to{border-radius: 15%;}
		}
		.q input{
			height: 40px;
			width: 60%;
			font-size: 18px;
			color: red;
			text-align: center;
		}
		input[type=submit]{
			background-color: green;
			color: white;
		}
		button{
			width: 32%;
			background-color: gray;
		}
		.q input[type=submit]:hover{
			color: #fff;
			background-color: red;
			font-size: 22px;
		}
	</style>
</head>
<body>
	<h1> <marquee><u> WELCOME TO ONLINE STUDY PORTAL. </u></marquee></h1>
	<div class="q">
	<h4> Please enter your email address for forget password. </h4>
	<form action ="mail.php" method="POST" autocomplete="off">
		<input type="email" name="email" placeholder=" Enter Email address " required></p>
		<button><input type="submit" name="" value="submit"></button>		
	</form>
	</div>
</body>
</html>