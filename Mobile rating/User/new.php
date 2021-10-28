
<html>
<head>
    <style>
        body{
            background:gray;
        }
        h1{
            margin: 0;
            padding: 0;
            background-color: green;
        }
        h2
        {
            margin: 0;
            text-align: center;
            margin-left: 30%;
        }

        .slider
        {
            width: 800px;
            margin: auto;
            overflow: hidden;
            border: 10px solid white;
            box-shadow: 0px 0px 5px 2px black;
        }
        .ph
        {
            position: relative;
        	width: 3200px;
            animation-name: manish;
            animation-duration: 20s;
            animation-iteration-count: infinite;
        }
        .ph img
        {
            float: left;
        }
        @keyframes manish
        {
            0%
            {
                left:0px;
            }
            20%
            {
                left:0px;
            }
            25%
            {
                left: -800px;
            }
            45%
            {
                left: -800px;
            }
            50%
            {
                left: -1600px;
            }
            70%
            {
                left: -1600px;
            }
            75%
            {
                left: -2400px;
            }
            95%
            {
                left: -2400px;
            }
        } 
    </style>

</head>
<body>
    <form action="dbfetch.php" method="POST">
<h1> <marquee> WELCOME TO MOBILE RATING WEBSITE </marquee> </h1>
<h2> About Phone  <input style="margin: 0px 0px 0px 30%" class="search-txt" type="text" name="mov" placeholder="search here"><input type="submit" value="search"> </h2>
</form>
<div class="slider">
        <div class="ph">
	       <img src="images/h1.jpg">
           <img src="images/h1.jpg">
           <img src="images/h1.jpg">
           <img src="images/h1.jpg">	
        </div>
    </div>
<?php
    session_start();
    include 'dblink.php';
    connectDB();
   
    $res = mysqli_query($accs,"select trailer from mobile where released_year<2016 limit 4;");

while($row=mysqli_fetch_array($res)){
   $tral = $row['trailer'];
   $_SESSION['tral'] = $tral;
     echo "$tral";
}

?>
</body>
    
</html>




