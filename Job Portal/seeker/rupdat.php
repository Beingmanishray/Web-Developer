<?php
	
	session_start();
	$_SESSION['jid'] = $_GET['ji'];	
?>

<!DOCTYPE html>
<html>
<head>
	<title>update job</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background-image: url(image/home1.jpg);
		}
		.dg{	
			width: 450px;
			height: 500px;
			background:#000;
			color: #fff;
            margin-left: auto;
            margin-right: auto;
			font-size: 28px;
			opacity: .8;
			animation: mk 2s infinite alternate;
			border-style: solid;
			border-color: green;
		}
		@keyframes mk{
			from{border-radius: 2%;}
			to{border-radius: 15%;}
		}
		h1{
		    margin: 0; 
            color: white;
            background-color: rgb(2, 49, 15);
		}
		h2{
		    margin: 0;
            color: black;
            background-color: yellow;
            text-align: center;
            opacity: .7;
		}
		.jb input
		{ 
			height: 30px;
			width: 400px;
			font-size: 18PX;
            color: red;
            display: block;
            margin:auto;
            text-align: center;
        }
        .jb button{
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
        .rej {              
           padding-left: 40px;
        }

	</style>
</head>
<body>
	
	<h1> <marquee> CHANCE  FOR  EVERYONE. </marquee></h1>
	<h2>UPDATE JOB HERE</h2>
	<div class="dg">
	<form action="rupdate.php" method="POST">
	<div class="jb">
		<input style="margin-top: 20px" type="text" name="name" value="<?php echo $_GET['c']; ?>" required></p>
		<input type="email" name="email" value="<?php echo $_GET['e']; ?>" required ></p>
		<input type="text" name="number" value="<?php echo $_GET['n']; ?>" required></p>
        <input type="text" name="location" value="<?php echo $_GET['l']; ?>" required></p>
        <div class="rej"><label> Select your Resume:</label><input type="file" name="resume" accept="pdf/*" required ></div></p>
		<button><input type="submit" name="update" value="UPDATE"></button>
		
	</div>
	</form>
	</div>

</body>
</html>