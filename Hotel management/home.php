<html>
<head>
	<title> Hotel sarkar</title>
	<style type="text/css">
		body{
            margin: 0%;
            padding: 0%;
            background-image: url(seeker/image/home.jpg)
        }
        h1{
            margin: 0;
            color: white;
            background-color: rgb(2, 49, 15);
            word-spacing: 10px;
        }
        .lg{
            margin: 0;
            color: white;
            background-color: black;
            opacity: .9;
        }
        .lg a{
            color: red;
            text-decoration: none;
            

        }
        .lg a:hover{
            background-color: gray;
            color: rgb(0, 255, 64);
        }
        .slider{
            width: 800px;
            margin:auto;
            overflow: hidden;
            border: 10px solid white;
            box-shadow: 0px 0px 5px 2px black;
        }
        .ph{
            position: relative;
        	width: 3200px;
            animation-name: manish;
            animation-duration: 20s;
            animation-iteration-count: infinite;
            opacity: .9;
        }
        .ph img{
            float: left;
        }
        @keyframes manish{
            0%{
                left:0px;
            }
            20%{
                left:0px;
            }
            25%{
                left: -800px;
            }
            45%{
                left: -800px;
            }
            50%{
                left: -1600px;
            }
            70%{
                left: -1600px;
            }
            75%{
                left: -2400px;
            }
            95%{
                left: -2400px;
            }
        }
	</style>
</head>
<body>
	<h1> <marquee>WELCOME  TO HOTEL SARKAR. </marquee></h1>
    <h1 class="lg"> <a href=""> Home </a><a style="margin: 30%;" href="Admin/login.php">Admin Login</a><a href="User/login.php"> User Login </a> </h1>
    <div class="slider">
        <div class="ph">
	       <img src="admin/image/j1.jpeg">
           <img src="admin/image/j2.jpeg">
           <img src="admin/image/j3.jpeg">
           <img src="admin/image/j4.jpeg">	
        </div>
    </div>
</body>
</html>
