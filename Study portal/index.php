<!DOCTYPE html>
<html>
<head>

<title>Login page</title>
<style type="text/css">
	body{
	margin: 0;
	padding: 0;
	background: url(admin/image/1.jpg);
	background-size:cover;
	background-position: center;
	font-family: sans-serif;
	}
	.loginbox{
		width: 420px;
		background: #000;
		color: rgb(255, 255, 255);
		top: 15%;
		left: 55%;
		border-radius: 5%;
		position: absolute;
		transform: tranlate(-50%, -50%);
		box-sizing: border-box;
		padding: 70px 30px;
		opacity: .9;
		border-style: solid;
		border-color: green;
	}
	#signbox{
		height: 410px;
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
	.loginbox input,.loginbox select{
		width:100%;
		margin-bottom: 20px;
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
		color: #fff;
		font-size: 18px;
	}
	.loginbox select{
		font-size: 26px;
		color: red;
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
	#q,#signbox{
		display: none;
	}
	.slider{
        width: 600px;
        margin:20px;
        overflow: hidden;
        border: 10px solid white;
        box-shadow: 0px 0px 5px 2px black;
    }
    .ph{
        position: relative;
    	width: 2400px;
        animation-name: manish;
        animation-duration: 20s;
        animation-iteration-count: infinite;
        opacity: .9;
    }
    .ph img{
        float: left;
        width: 600px;
        height: 400px;
    }
    @keyframes manish{
        0%{
            left:0px;
        }
        20%{
            left:0px;
        }
        25%{
            left: -600px;
        }
        45%{
            left: -600px;
        }
        50%{
            left: -1200px;
        }
        70%{
            left: -1200px;
        }
        75%{
            left: -1800px;
        }
        95%{
            left: -1800px;
        }
    }
</style>
<script type="text/javascript">
	function forget() {
		document.getElementById('q').style.display="block"
		document.getElementById('l').style.display="none"
		document.getElementById('signbox').style.display="none"
	};
	function login(){
		document.getElementById('q').style.display="none"
		document.getElementById('l').style.display="block"
		document.getElementById('signbox').style.display="none"
	}
	function sign(){
		document.getElementById('signbox').style.display="block"
		document.getElementById('q').style.display="none"
		document.getElementById('l').style.display="none"
	}
</script>
<body>
	<h1 style="font-size: 50px;color: black;text-align: center;background-color: blue;"><img style="height: 60px;border-radius: 50%;" src="admin/image/0.png"> Study <small style="font-size: 40px;color: silver;">Portal </small></h1>
	<div class="slider">
        <div class="ph">
	       <img src="admin/image/j1.jpeg">
           <img src="admin/image/j2.jpeg">
           <img src="admin/image/j3.jpeg">
           <img src="admin/image/j4.jpeg">	
        </div>
    </div>
	
	<div class="loginbox">
		<img src="user/image/signin.jpg"class="log">
		<div id="l">
		<form action="user/log.php" method="post" autocomplete="off">
			<select name="select" required>
				<option value="user">User Login Here</option>
				<option value="admin">Admin Login Here</option>
			</select>
			<input type="text" name="username" placeholder="Enter Username" required >
			<input type="password" name="password" placeholder="Enter Password" required >
			<input type="submit" name="" value="Login">
			<a href="#" onclick="forget()">Forget password?</a><br>
			<a href="#" onclick="sign()">create account.</a>
		</form></div>
		<div id="q">
		<form action ="user/forget password/mail.php" method="POST" autocomplete="off">
			<select name="select" required>
				<option value="user">Forget Password For User.</option>
				<option value="admin">Forget Password For Admin.</option>
			</select>
			<input type="email" name="email" placeholder="Please Enter Email Address. " required></p>
			<input type="submit" name="" value="submit">
			<a href="#" onclick="login()" style="font-size: 30px;">Now Login</a><br>
		</form></div>
    
	    <div id="signbox">
			<img src="user/image/sign.jpg"class="log">
			<form action="user/sign.php" method="post" enctype="multipart/form-data" autocomplete="off">
				<input type="text" name="username" placeholder="Enter Username" required>
				<input type="email" name="email" placeholder="Enter Email " required>
				<input type="text" name="number" placeholder="Enter contact number" required>
				<input type="password" name="pass" placeholder="Enter Password" required>
				<input type="password" name="conformpass" placeholder="Enter conform Password" required>
				Select profile<input type="file" name="photo" accept="image/*" required>
				<input type="submit" name="" value="Sign up">
				<a href="#" onclick="login()"> Now Login here</a>
			</form>
		</div>
	</div>
</body>
</head>
</html>
