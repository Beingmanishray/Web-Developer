<?php
session_start();
$email=$_SESSION['username'];
include 'dblink.php';
$query = "select * from user where user_email= '$email' ";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);
?>


<html>
<head>
	<title> Hotel Sarkar</title>
	<style type="text/css">
		body{
            margin: 0%;
            padding: 0%;
        }
        h1{
            margin: 0;
            color: white;
            background-color: rgb(2, 49, 15);
            text-align: center;
            word-spacing: 10px;
        }
        h2{
            margin: 0;
            background-color: black;
            opacity: .9;
            text-align: center;
        }
        h2 a{
            color: red;
            text-decoration: none;
            margin: 20px;
        }
        h2 a:hover,a:focus{
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
        .jb,.question{
            margin: auto;
            text-align: center;
            font-size: 50px;    
        }
        .jb a,.question a{
            margin: 20px 20px 20px 20px;
            text-decoration: none;
        }
        .profile{
            margin: -24% 0% 0% 50%; 
        }
        .profile input{
            font-size: 20px;
            text-align: center;
            height: 30px;
            width: 300px;
            border-radius: 20px
        }
        .profile button {
            background-color: gray;
            height: 40px;
            width: 140px;
            margin-left: 15%;
        }
        input[type="submit"] {
            width: 100px;
            color: #fff;
            background-color: red;
            font-size: 20px;
        }
        input[type="submit"]:hover {
            color: red;
            background-color: #fff;
            font-size: 22px;
        }
        .reg{
            margin: 0px 0% 0px 22%;
            font-size: 20px;
        }
        .reg img{
            height: 200px;
            width: 200px;
            border-radius: 20px;
        }
        .reg a{
            text-decoration: none;
            color: red;
        }
        .reg a:hover,a:focus{
            color: green;
        }
        .gallery img{
            height: 33%;
            width: 33%;
        }
        .room1 span{
            color: red;
            font-size: 30px;
            margin: 10px;
        }
        .price-gd-top{
            float: left;
            margin: 25px;
            border-radius: 10px;
            border:solid green;
        }
        .room1 h4{
            margin: 0px 0px 0px 130px;
            height: 30px;
            font-size: 20px;
            background-color: darkblue;
            color: white;
        }
        .room1 button{
            margin: -50px 0px 0px 130px;
            background-color: yellow;
            font-size: 20px;
        }
        .room1 a{
            text-decoration: none;
            color: black;
        }
        .info-about{
            height: 20%;
            width: 5    0%;
            border:solid black;
            text-align: center;
            font-size: 20px;
            margin: -15% 0% 0% 50%;
        }
        .info-about h4{
            margin-left: 40px;
            background-color: blue;
            color: yellow;
            height: 20%;
            width: 80%
        }
        .info-about p{
            margin: -27px 0px 0px 40px;
            background-color: black;
            color: white;
            height: 20%;
            width: 80%
        }
        .s,.s1{
            border:solid black;
            margin-left: 9.5%;
            width: 40%;
            height: 40%;
            text-align: center;
            font-size: 20px;
            background-color: dimgray;
            color: white;
        }
        .s1{
            margin:-20% 0% 0% 50%;
        }
        .reservation-info,.person-info{
            width: 40%;
            height: 75%;
            border:solid blue;
            font-size: 20px;
            background-color: white;
            border-radius: 20px;
            margin-left: 8.5%;
        }
        .reservation-info input,.person-info input,.reservation-info select,.person-info select{
            width: 60%;
            height: 40px;
            border:solid blue;
            font-size: 30px;
            border-radius: 15px;
            text-align: center;
        }
        .reservation-info{
            margin: -37% 0% 0% 49%;
        }
        .viewbooking button{
            background-color: red;
            font-size: 20px;
        }
        .viewbooking a{
            color: white;
            text-decoration: none;
        }
	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".reg").hide();
            $(".profile").hide();
            $(".reservation").hide();
            $(".viewbooking").hide();
            $(".prof").click(function(){
                $(".reg").show();
                $(".Profile").show();
            });
            $(".view").click(function(){
                $(".viewbooking").show();
            });
            $(".booknow").click(function(){
                $(".reservation").show();
                $(".room").hide();
                $(".gallery1").hide();
                $(".reg").hide();
                $(".profile").hide();
                $(".viewbooking").hide();
            });
        });
    </script>
</head>
<body>
	<h1> <marquee>WELCOME  TO HOTEL SARKAR. </marquee></h1>
    <h2> <a href="uhome.php"> Home </a><a href="#pr" class="prof"> Profile </a><a href="#g" class="gallery">Gallery</a><a href="#p" class="rooms">Rooms</a><a <a href="#about" class="about"> About_us </a><a <a href="login.php"> Logout </a> </h2>
    <div class="slider">
        <div class="ph">
	       <img src="image/Profile.jpg">
           <img src="image/Profile1.png">
           <img src="image/tutorial.jpg">
           <img src="image/about.jpg">	
        </div>
    </div>

<!-- this code for profile display -->
    <div class=reg id="pr">
        <p style="font-size: 40px;color: red;">your profile you can update from here.</p>
        <a href="#"><img src="<?php echo 'photos/'.$result['user_photo'];?>" ></a><br/>
        <?php
        echo "$result[user_name]","<br>";
        echo "$result[user_email]","<br>";
        echo "$result[user_cont]","<br><br/>";
        ?>
        <a style="font-size: 20px;" href="#vb" class="view">view booked info</a><br/>
    </div>

<!-- this code for profile update design -->
    <form action="upupdate.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="profile">       
        <input type="text" name="name" value="<?php echo "$result[user_name]"; ?>" required><br/><br/>
        <input type="email" name="email" value="<?php echo "$result[user_email]"; ?>" required><br/><br/>
        <input type="phone" name="cont" value="<?php echo "$result[user_cont]"; ?>" required><br/><br/>
        <input type="password" name="pass" value="<?php echo "$result[password]"; ?>" required><br/>
        <p style="font-size: 20px; color: red"><i>If you want to change your profile image then choose file</i></p><input type="file" name="photo" value="<?php echo "$result[admin_photo]"; ?>" required><br/><br/>
        <button><input type="submit" name="btn" value="UPDATE"></button> <br/><br/>      
    </div>
    </form>  
    <br/><br/>


<!-- this code for view roombook information -->
    <div class="viewbooking" id="vb">
        <p style="color: red;font-size: 40px;text-align: center;">you have booked this much room</p>
        <table border="1">
        <tr>
            <th>Title</th>
            <th>FName</th>
            <th>LName</th>
            <th>Email</th>
            <th>Adhar No</th>
            <th>Phone No</th>
            <th>Room Type</th>
            <th>Bedding Type</th>
            <th>Nrooms</th>
            <th>Meals</th>
            <th>check in</th>
            <th>check out</th>
            <th>status</th>
            <th>payment status</th>
            <th>Nodays</th>
            <th>Amount</th>
            <th>operation</th>
        </tr>
        


        <?php
            $query = "select * from reservation where email= '$email' ";
            $data = mysqli_query($con, $query);
            $total = mysqli_num_rows($data);
            if ($total!=0) {
                while ($result= mysqli_fetch_assoc($data)) {
                    echo "<tr>
                    <td>".$result['title']."</td>
                    <td>".$result['first_name']."</td>
                    <td>".$result['last_name']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['adhar_no']."</td>
                    <td>".$result['phone_no']."</td>
                    <td>".$result['room_type']."</td>
                    <td>".$result['bed']."</td>
                    <td>".$result['no_of_room']."</td>
                    <td>".$result['meal_plan']."</td>
                    <td>".$result['check_in']."</td>
                    <td>".$result['check_out']."</td>
                    <td>".$result['status']."</td>
                    <td>".$result['payment']."</td>
                    <td>".$result['nday']."</td>
                    <td>".$result['amount']."</td>
                    <td><button><a href='rdelete.php?ji=$result[booking_id]' onclick ='return checkdelete()' >Cancel</a></button></td>
                    </tr>";
                }
            } else {
                echo "<script>alert('you didn't book any room')";
            }
        ?>
    </table>
    <script>
    function checkdelete()
    {
        return confirm('Are you sure you want to Cancel this Room??');
    }
    </script>
    </div>


<!-- this code for Gallery photos     -->
    <div class="gallery1" id="g">
        <p style="font-size: 40px;color: red;text-align: center;">OUR GALLERY.</p>
        <a href="image/g1.jpg"><img src="image/g1.jpg"  alt="/">
        <a href="image/g2.jpg"><img src="image/g2.jpg"  alt="/">
        <a href="image/g3.jpg"><img src="image/g3.jpg"  alt="/">
        <a href="image/g4.jpg"><img src="image/g4.jpg"  alt="/">
        <a href="image/g5.jpg"><img src="image/g5.jpg"  alt="/">
        <a href="image/g6.jpg"><img src="image/g6.jpg"  alt="/">
        <a href="image/g7.jpg"><img src="image/g7.jpg"  alt="/">
        <a href="image/g8.jpg"><img src="image/g8.jpg"  alt="/">
        <a href="image/g9.jpg"><img src="image/g9.jpg"  alt="/">
        <a href="image/g10.jpg"><img src="image/g10.jpg" alt="/">
        <a href="image/g4.jpg"><img src="image/g4.jpg"  alt="/">
        <a href="image/g2.jpg"><img src="image/g2.jpg"  alt="/"></a>  
    </div>
    <br/><br/>

<!-- this code for display room and rate. -->
    <div class="room1" id="p">
        <p style="font-size: 60px;color: red;text-align: center;">Rooms And Rates.</p>
        <div class="price-gd-top">
            <img src="image/r1.jpg" alt=" " class="img-responsive" />
            <h4>Deluxe Room</h4>  
            <h3><span>RS</span>3200</h3>                      
            <button><a href="#r" class="booknow" >Book Now</a></button>
        </div>

        <div class="price-gd-top">
            <img src="image/r2.jpg" alt=" " class="img-responsive" />
            <h4>Luxury Room</h4>
            <h3><span>RS</span>2200</h3>                      
            <button><a href="#r" class="booknow">Book Now</a></button>
        </div>

        <div class="price-gd-top">
            <img src="image/r3.jpg" alt=" " class="img-responsive" />
            <h4>Guest Room</h4>  
            <h3><span>RS</span>1800</h3>                      
            <button><a href="#r" class="booknow">Book Now</a></button>
        </div>

        <div class="price-gd-top">
            <img src="image/r4.jpg" alt=" "/>
            <h4>Single Room</h4> 
            <h3><span>RS</span>1500</h3>                      
            <button><a href="#r"class="booknow"> Book Now </a></button>
        </div>
    </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>




<!-- this code for book room -->
    <form method="POST" action="reservation.php" autocomplete="off">
    <div class="reservation" id="r" style="background-color: silver;">
       <p style="font-size: 40px;text-align: center;"><u>RESERVATION</u></p><br/><br/>
       <div class="person-info">
           <p style="background-color: blue;color: white;font-size: 20px;text-align: center;">PERSONAL INFORMATION</p>
           <label>Title*</label><br/>
            <select name="title" required ><br/>
            <option value selected ></option>
            <option value="Dr.">Dr.</option>
            <option value="Miss.">Miss.</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Prof.">Prof.</option>
            </select><br/>
            <label>First Name</label><br/>
            <input name="fname"  required><br/>
            <label>Last Name</label><br/>
            <input name="lname"  required><br/>
            <label>Email</label><br/>
            <input name="email" type="email" value="<?php echo($email) ?>" required><br/>
            <label>Adhar no</label><br/>
            <input name="adhar" type="text"  required><br/>
            <label>Phone Number</label><br/>
            <input name="phone" type ="text"  required><br/>
       </div>
       <div class="reservation-info">
           <p style="background-color: blue;color: white;font-size: 20px;text-align: center;">RESERVATION INFORMATION</p>
           <label>Type Of Room *</label><br/>
                <select name="troom"   required><br/>
                <option value selected ></option>
                <option value="Superior Room">SUPERIOR ROOM</option>
                <option value="Deluxe Room">DELUXE ROOM</option>
                <option value="Guest House">GUEST HOUSE</option>
                <option value="Single Room">SINGLE ROOM</option>
                </select><br/>
            <label>Bedding Type</label><br/>
                <select name="bed"  required><br/>
                    <option value selected ></option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Triple">Triple</option>
                    <option value="Quad">Quad</option>
                    <option value="None">None</option>
                </select><br/>
            <label>No.of Rooms *</label><br/>
                <select name="nroom"  required><br/>
                    <option value selected ></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br/>
            <label>Meal Plan</label><br/>
                <select name="meal" required><br/>
                    <option value selected ></option>
                    <option value="Room only">Room only</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Half Board">Half Board</option>
                    <option value="Full Board">Full Board</option>
                </select><br/>
            <label>Check-In</label><br/>
                <input name="cin" type ="date" ><br/>
            <label>Check-Out</label><br/>   
                <input name="cout" type ="date" ><br/>
       </div><br/><br/>
       <button style="margin-left: 35%;height: 10%;width: 30%"><input style="width: 85%;height: 65%;" type="submit" name="submit" placeholder="Book"></button>
    </div></form><br/><br/>




<!-- this code for about us -->
    <div class="about1" id="about">
        <div style="background-color: silver;">
        <p style="font-size: 60px;color: red;text-align: center;">About Our Hotel Sarkar.</p>
        <p style="font-size: 20px;text-align: center;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Sed tempus vestibulum lacus blandit faucibus. Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, at imperdiet urna</p>
        <img style="width: 100%" src="image/about1.jpg">
        <img style="margin-top: -10%" src="image/a1.jpg">
        <div class="info-about">
            <h4>You'll love all the amenities we offer!</h4>
            <p>Lorem ipsum dolor sit amet, ut magna aliqua. </p>
        </div><br/><br/><br/><br/>
        </div>

        <div class="service" style="background-image: url(image/g2.jpg);">
            <p style="font-size: 60px;color: black;text-align: center;">Our Services.</p>
            <div class="s">
                <h4>Stay First, Pay After! </h4>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                <p>Decorated room, proper air conditioned</p>
                <p>Private balcony</p>    
            </div>
            <div class="s1">
                <h4>24 Hour Restaurant</h4>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
                <p>24 hours room service</p>
                <p></i>24-hour Concierge service</p>
            </div>
        </div>
    </div>
</body>
</html>