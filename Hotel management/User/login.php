<!DOCTYPE html>
<html>
<head>

<title>LOGIN PAGE</title>
<style type="text/css">
	body{
	margin: 0;
	padding: 0;
	background: url(image/01.jpeg);
	background-size:cover;
	background-position: center;
	font-family: sans-serif;
	}
	.loginbox{
		width: 420px;
		height: 480px;
		background: #000;
		color: rgb(255, 255, 255);
		top: 15%;
		left: 35%;
		border-radius: 10%;
		position: absolute;
		transform: tranlate(-50%, -50%);
		box-sizing: border-box;
		padding: 70px 30px;
		opacity: .9;
		animation: mk 2s infinite alternate;
		border-style: solid;
		border-color: green;
	}
	@keyframes mk{
		from{border-radius: 2%;}
		to{border-radius: 20%;}
	}
	.log{
		width:100px;
		height:100px;
		border-radius: 50%;
		position: absolute;
		top: -40px;
		left: calc(50% - 50px);
	}
	h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size: 32px;
	}
	.loginbox input{
		width:100%;
		margin-bottom: 20px;
	}
	.loginbox input[type="text"], input[type="password"]{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
		color: #fff;
		font-size: 16px;
	}
	.loginbox input[type="submit"]{
		border: none;
		outline: none;
		height: 40px;
		background: #fb2525;
		color: #fff;
		font-size: 18px;
		border-radius: 20px;
		border-style: solid;
		border-color: skyblue;
	}
	.loginbox input[type="submit"]:hover{
		cursor: pointer;
		background: #ffc107;
		color: #000;
	}
	.loginbox a{
		text-decoration: none;
		font-size: 18px;
		line-height: 20px;
	    color: rgb(48, 211, 157);
	}
	.loginbox a:hover{
		color: #ffc107;
	}
</style>
<body>
     <div class="loginbox">
	 <img src="image/signin.jpg"class="log">
	  <h1>User Login Here</h1>
	  <form action="log.php" method="post" autocomplete="off">
		 <input type="text" name="username" placeholder="Enter Username" required >
		 <input type="password" name="password" placeholder="Enter Password" required >
		 <input type="submit" name="" value="Login">
		 <a href="mail/index.php">forget password?</a><br>
		 <a href="signup.php">create account.</a>
	 </form>
     </div>
</body>
</head>
</html>