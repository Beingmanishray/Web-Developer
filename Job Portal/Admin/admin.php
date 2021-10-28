<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<style type="text/css">
	    body
	    {
	    	margin: 0;
	    	padding: 0;
	    	background-image: url(image/c.jpg);
	    }
		h1
        {
            margin: 0;
            padding: 0;
            color: white;
            background-color: gray;
           
        }
        h2
        {
            margin: 0;
            background-color: black;
            color: white;
            text-align: center;
           
        }

        .mngt
        {
        	margin-left: 28%;
        	margin-top: 10%;
        }
        .mngt a
        {
        	margin-right: 10%;
        }
       img
       {
            border-style: solid;
            border-color: green;
            animation: mk 1s infinite alternate;
       }
       @keyframes mk{
            from{border-radius: 2%;}
            to{border-radius: 50%;}
       }
	</style>
</head>
<body>
	<h1> <marquee>WELCOME  TO  ONLINE  JOB PORTAL. </marquee></h1>
	<h2><a style="padding: 0% 20% 0% 0%" href="profile.php"><img src="image/profile.png"></a>ADMIN<a style="padding: 0% 0% 0% 20%" href="logout.php"><img src="image/logout.jpg"></a></h2>
	<div class="mngt">
		<a href="company.php"><img src="image/cmp.jpg"></a>
		<a href="user.php"><img src="image/user.jpg"></a>
		
	</div>
</body>
</html>