<!DOCTYPE html>
<html>
<head>
<title>signup page</title>
<style type="text/css">
	body{
	margin: 0;
	padding: 0;
	background:url(image/bcd.jpg);
	background-size:cover;
	background-position: center;
	font-family: sans-serif;
	}
	.loginbox{
		width: 450px;
		height: 650px;
		background:#000;
		color: #fff;
		top: 6%;
		left: 35%;
		position: absolute;
		opacity: .9;
		transform: tranlate(-50%, -50%);
		box-sizing: border-box;
		padding: 60px 30px;
		animation: mk 2s infinite alternate;
		border-style: solid;
		border-color: green;
	}
	@keyframes mk{
		from{border-radius: 2%;}
		to{border-radius: 10%;}
	}
	.log{
		width:90px;
		height:90px;
		border-radius: 50%;
		position: absolute;
		top: -40px;
		left: calc(50% - 50px);
	}
	h2{
		margin: 0;
		padding: 0 0 20px;
	    text-align: center;
		font-size: 30px;
	}
	.loginbox input{
		width:100%;
		height: 40px;
		margin-bottom: 20px;
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
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
		font-size: 20px;
		line-height: 20px;
	    color: rgb(48, 211, 157);
	}
	.loginbox a:hover{
		color: #ffc107;
	}
</style>
<body>
     <div class="loginbox">
	 <img src="image/sign.jpg"class="log">
	  <h2>Users Register Here</h2>
	  <form action="sign.php" method="post" enctype="multipart/form-data" autocomplete="off">
		<input type="text" name="username" placeholder="Enter Username" required>
		<input type="email" name="email" placeholder="Enter Email " required>
		<input type="text" name="number" placeholder="Enter contact number" required>
		<input type="password" name="pass" placeholder="Enter Password" required>
		<input type="password" name="conformpass" placeholder="Enter conform Password" required>
		<input type="file" name="photo" required>
		<input type="submit" name="" value="Sign up">
		<h3>After Registration click the following link.</h3>
		<a href="login.php"> Now Login here</a>
	 </form>
</body>
</head>
</html>
