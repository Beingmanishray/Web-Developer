<html>
<head>
	<title> job portal</title>

	<style type="text/css">
		body{
                margin: 0%;
                padding: 0%;
                background-image:url(image/cmp.jpg);
                background-size: cover;
                font-family: sans-serif;
    
            }
            h1
            {
                margin: 0;
                padding: 0;
                color: white;
                background-color: rgb(2, 49, 15);
                margin-top:0px;
            }
            .f
            {
                margin: 0;
                color: white;
                background-color: black;
                text-align: center;
                opacity: .8;
            }
            .menu ul
            {
                margin: 0;
                list-style: none;
            }
            .menu ul li
            {
                width: 130px;
                height: 35px;
                background-color:  black;
                text-align: center;
                line-height: 35px;
                float: left;
                border-right: 1px grey solid;
                position: relative;
                left: 200px;
                opacity: .8;
            }
            .menu ul li a
            {
                color:white;
                display: block;
                text-decoration: none;
            }
            .menu ul li a:hover
            {
                color: rgb(0, 255, 64);
                background-color: gray;
            }
            .menu ul ul
            {
                
                position: absolute;
                right: 200px;
                display: none;
            }
            .menu ul li:hover> ul
            {
                display: block;
            }

	</style>



</head>
<body>

    
	<h1> <marquee>WELCOME  TO  ONLINE JOB PORTAL. </marquee></h1>
    <h1 class="f"> <?php 
                    session_start();
                    include "dblink.php";
                    echo $_SESSION['username'];
                    $user = $_SESSION['username'];
                    $_SESSION['username'] = $user;
                    $qu = "select * from companydetails where username = '$user' ";
                    $dat = mysqli_query($con, $qu);
                    $row = mysqli_fetch_array($dat);
                    $id = $row['id'];
                    $_SESSION['id'] = $id;

                    ?> </h1>
    <div class = menu>
         <ul>
           <li> <a href="#"> HOME </a>
            <ul>
                <li><a href="postjob.html"> POST JOBS </a> </li>
                <li><a href="cdisplay.php"> UPDATE JOBS </a> </li>
                <li><a href="rvdisplay.php"> VIEW RESUME </a> </li>
                <li><a href="clogout.php"> LOGOUT </a> </li>
            </ul>        
           
           </li>
            <li> <a href="postjob.html"> POST JOBS </a></li>
            <li> <a href="cdisplay.php"> UPDATE JOBS </a></li>
            <li> <a href="rvdisplay.php"> VIEW RESUME </a></li>
            <li> <a href="clogout.php">LOGOUT</a></li>
         </ul>
    </div>
	
	
   
</body>
</html>
<?php

include 'dblink.php';
if(!$_SESSION['username']==true) {
    header('location:clogin.html');
}
?>