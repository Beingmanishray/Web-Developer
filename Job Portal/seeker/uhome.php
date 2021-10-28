<html>
<head>
	<title> job portal</title>
	<style type="text/css">
		body  {
            margin: 0%;
            padding: 0%;
            background-image: url(image/home.jpg); 
            background-size: cover;
            font-family: sans-serif;    
        }
        h1 {
            margin: 0;
            padding: 0;
            color: white;
            background-color: rgb(2, 49, 15);
            margin-top:0px;
        }
        .f {
            margin: 0;
            color: white;
            background-color: black;
            text-align: center;
            opacity: 0.8;
        }
        .menu ul {
            margin: 0;
            list-style: none;
        }
        .menu ul li {
            width: 150px;
            height: 35px;
            background-color:  black;
            text-align: center;
            line-height: 35px;
            float: left;
            border-right: 1px grey solid;
            position: relative;
            left: 300px;
            opacity: .8;
        }
        .menu ul li a {
            color:white;
            display: block;
            text-decoration: none;
        }
        .menu ul li a:hover {
            color: rgb(0, 255, 64);
            background-color: gray;
        }
        .menu ul ul {        
            position: absolute;
            right: 300px;
            display: none;
        }
        .menu ul li:hover> ul {
            display: block;
        }
	</style>
</head>
<body>  
	<h1> <marquee> WELCOME  TO  ONLINE  JOB PORTAL. </marquee></h1>
    <h1 class="f"> <?php
                        session_start();
                        include 'dblink.php';
                        echo $_SESSION['username'];
                        $user = $_SESSION['username'];
                        $_SESSION['username'] = $user;
                        $qu = "select * from details where username = '$user' ";
                        $dat = mysqli_query($con, $qu);
                        $row = mysqli_fetch_array($dat);
                        $id = $row['id'];
                        $_SESSION['id'] = $id;
                    ?></h1>
    <div class="menu">
        <ul>
            <li><a href="#"> HOME </a>
                <ul>
                    <li> <a href="jdisplay.php"> VIEW JOBS </a></li>
                    <li> <a href="rdisplay.php"> UPDATE RESUME </a></li>
                    <li> <a href="logout.php"> LOGOUT </a></li>
                </ul>
            </li>
	        <li> <a href="jdisplay.php"> VIEW JOBS </a></li>
	        <li> <a href="rdisplay.php"> UPDATE RESUME </a></li>
            <li> <a href="logout.php">LOGOUT</a></li>
        </ul>
    </div> 
</body>
</html>

<?php
    include 'dblink.php';
    if(!$_SESSION['username']==true) {
        header('location:login.html');
    }
?>