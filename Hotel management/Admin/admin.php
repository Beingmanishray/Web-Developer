<?php
session_start();
include 'dblink.php';
$email=$_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<style type="text/css">
	    body{
	    	margin: 0;
	    	padding: 0;
	    }
		h1{
            margin: 0;
            padding: 0;
            color: white;
            background-color: gray; 
        }
        h2{
            margin: 0;
            background-color: black;
            color: white;
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
        .p{
            margin: 0px 0% 0px 22%;
            font-size: 20px;
        }
        .p img{
            height: 200px;
            width: 200px;
            border-radius: 20px;
        }
        .p a{
            text-decoration: none;
            color: red;
        }
        .p a:hover,a:focus{
            color: green;
        }
        .update,.addemployee{
            
            margin: -21% 0% 0% 60%; 
        }
        .addroom{
            margin: -21% 0% 0% 60%;
        }
        .update input,.addroom input,.addemployee input{
            font-size: 20px;
            text-align: center;
            height: 30px;
            width: 300px;
            border-radius: 20px
        }
        button {
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
        td a{
            background-color: gray;
            color: red;
            text-decoration: none;
        }
        td a:hover,a:focus,b a:hover,a:focus{
            color: green;
        }
        .r{
            display:inline-block;
            position:absolute;
            font-size:40px;
            margin-top:2%;
        }
        .st{
            width: 80%;
            margin: auto;
            background-color: silver;
        }
        tr th a{
            text-decoration: none;
            color: red;
        }
        tr th a:hover{
            text-decoration: none;
            color: blue;
        }
        
	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".p").hide();
            $(".update").hide();
            $(".addroom").hide();
            $(".addemployee").hide();
            $(".payment1").hide();
            $(".u").hide();
            $(".display_employee").hide();
            $(".Profile").click(function(){
                $(".p").show();
                $(".update").show();
                $(".status1").hide();
                $(".addroom").hide();
                $(".addemployee").hide();
                $(".u").hide();
                $(".display_employee").hide();
            });
            $(".edit").click(function(){
                $(".addroom").hide();
                $(".update").show();
                $(".addemployee").hide();
            });
            $(".aroom").click(function(){
                $(".addroom").show();
                $(".update").hide();
                $(".addemployee").hide();
            });
            $(".aemployee").click(function(){
                $(".addemployee").show();
                $(".update").hide();
                $(".addroom").hide();
            });
            $(".user").click(function(){
                $(".u").show();
                $(".status1").hide();
                $(".p").hide();
                $(".update").hide();
                $(".addroom").hide();
                $(".addemployee").hide();
                $(".display_employee").hide();
            });
            $(".employee").click(function(){
                $(".display_employee").show();
                $(".status1").hide();
                $(".u").hide();
                $(".p").hide();
                $(".update").hide();
                $(".addroom").hide();
                $(".addemployee").hide();
            });
            $(".status").click(function(){
                $(".status1").show();
                $(".display_employee").hide();
                $(".u").hide();
                $(".p").hide();
                $(".update").hide();
                $(".addroom").hide();
                $(".addemployee").hide();
            });
            $(".payment").click(function(){
                $(".payment1").show();
                $(".status1").hide();
                $(".display_employee").hide();
                $(".u").hide();
                $(".p").hide();
                $(".update").hide();
                $(".addroom").hide();
                $(".addemployee").hide();
            });
        });
    </script>
</head>
<body>
	<h1> <marquee>WELCOME  TO   HOTEL SARKAR. </marquee></h1>
	<h2> <a href="#"> Home </a><a href="#" class="Profile"> Profile </a><a href="#" class="status">Status</a><a href="#" class="rb"> Booked Room</a><a href="#" class="payment">payment</a><a href="#" class="user">user</a><a href="#" class="employee"> Employee </a><a href="login.php"> Logout </a> </h2>

<!-- this code for profile display -->
    <div class="p">
        <?php
    $db="select * from admin";
    $data=mysqli_query($con,$db);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);?>
    <a class="pro" href="#"><img src="<?php echo 'image/'.$result['admin_photo'];?>" ></a><div class="r"><?php
    echo "$result[admin_name]"."<br/>";
    echo "$result[admin_email]"."<br/>";
    echo "$result[admin_cont]"."<br/>";
    ?></div>
    <br/><a href="#" class="edit">Edit profile</a><br/>
    <a href="#" class="aroom">Add Room</a><br/>
    <a href="#" class="aemployee">Add Employee</a>
    </div>


<!-- this code for profile update -->
    <form method="post" action="apupdate.php" enctype="multipart/form-data" autocomplete="off">
    <div class="update">
        <input type="text" name="name" value="<?php echo "$result[admin_name]"; ?>" required><br/><br/>
        <input type="email" name="email" value="<?php echo "$result[admin_email]"; ?>" required><br/><br/>
        <input type="phonr" name="cont" value="<?php echo "$result[admin_cont]"; ?>" required><br/><br/>
        <input type="password" name="pass" value="<?php echo "$result[password]"; ?>" required><br/>
        <p style="font-size: 20px; color: red"><i>If you want to change your profile image then choose file</i></p><input type="file" name="photo" value="<?php echo "$result[admin_photo]"; ?>" required><br/><br/>
        <button><input type="submit" name="btn" value="UPDATE"></button> <br/><br/> 
    </div>
    </form>



<!-- this code for addroom -->
    <form method="POST" action="addroom.php" enctype="multipart/form-data" autocomplete="off">
        <div class="addroom">
            <p style="font-size: 20px; color: red">Add New Room </p>
            <p>Type Of Room</p>
            <select style="height: 30px;width: 300px;font-size: 20px;border-radius: 20px" name="room" required>
                <option value selected></option>
                <option value="Superior Room">Superior Room</option>
                <option value="Delux Room">Delux Room</option>
                <option value="Single Room">Single Room</option>
                <option value="Guest Room">Guest Room</option>
            </select></br>
            <p>Bedding Type</p>
            <select style="height: 30px;width: 300px;font-size: 20px;border-radius: 20px" name="bed" required>
                <option value selected></option>
                <option value="Single">Single</option>
                <option value="Double ">Double</option>
                <option value="Triple ">Triple</option>
            </select></br></br>
            <button><input type="submit" name="upload" value="UPLOAD"></button>
        </div>
    </form>


<!-- this code for addemployee -->
    <form action="addemployee.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="addemployee">
        <p style="font-size: 20px; color: red">Plese fill the information and choose file for upload</p>
        <input type="text" name="name" placeholder="Enter Employee Full Name" required></p>
        <input type="email" name="email" placeholder="Enter Employee Email" required></p>
        <input type="phone" name="phone" placeholder="Enter Employee Number" required></p>
        <select style="height: 30px;width: 300px;font-size: 20px;border-radius: 20px" name="post" required>
            <option value="0" disabled="disabled" selected="selected" required>select post</option>
            <option value="manager">Manager</option>
            <option value="coock_man">Coock man</option>
            <option value="3">3rd</option>
            <option value="4">4th</option>
            <option value="5">5th</option>
            <option value="6">6th</option>
            <option value="7">7th</option>
            <option value="8">8th</option>
            <option value="9">9th</option>
            <option value="10">10th</option>
            <option value="11">11th</option>
            <option value="12">12th</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="BTECH">BTECH</option>
            <option value="Bsc">Bsc</option>
        </select></br></br>
        <input type="text" name="address" placeholder="Enter Employee Address" required ></p>
        <input type="date" name="date" placeholder="Enter Joining Date" required ></p> 
        <input type="text" name="salary" placeholder="Enter Employee salary" required></p>
        <p style="font-size: 20px; color: red"><i> Select employee image for upload:</i></p><input type="file" name="photo" required ></p>
        <button><input type="submit" name="upload" value="UPLOAD"></button>       
    </div>
    </form>


<!-- this code for status -->
    <div class="status1">
        <p style="font-size: 50px;color: black;text-align: center;">
            Status <small style="font-size: 40px;color: silver;">Room Booking </small>
        </p>
        <div class="st">
            <?php
            $sql = "select * from reservation";
            $re = mysqli_query($con,$sql);
            $c =0 ;
            while($row=mysqli_fetch_array($re) ){
            $new = $row['status'];
            $cin = $row['check_in'];
            $id = $row['booking_id'];
            if($new=="Not Conform"){
                $c = $c + 1;
            }
            }
            ?>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            <button style="width: 24%;background-color: white;font-size: 18px;" class="roombookin" type="button">
            New Room Bookings  <span style="border-radius: 50%;background-color: black;color: white;"><?php echo $c ; ?></span>
            </button>
            </a>
            <div class="display_status">
            <table border="1" style="background-color: white;font-size: 20px;margin: 10px;width: 98%;">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Adhar</th>
                    <th>Room</th>
                    <th>Bedding</th>
                    <th>Meal</th>
                    <th>chech in</th>
                    <th>check out</th>
                    <th>status</th>
                    <th>More</th>
                </tr>

                <?php
                    $tsql = "select * from reservation";
                    $tre = mysqli_query($con,$tsql);
                    while($trow=mysqli_fetch_array($tre) )
                    {   
                        $co =$trow['status']; 
                        if($co=="Not Conform")
                        {
                        echo"<tr>
                            <th>".$trow['booking_id']."</th>
                            <th>".$trow['first_name']." ".$trow['last_name']."</th>
                            <th>".$trow['email']."</th>
                            <th>".$trow['adhar_no']."</th>
                            <th>".$trow['room_type']."</th>
                            <th>".$trow['bed']."</th>
                            <th>".$trow['meal_plan']."</th>
                            <th>".$trow['check_in']."</th>
                            <th>".$trow['check_out']."</th>
                            <th>".$trow['status']."</th>
                            <th><a href='roombooking.php?rid=".$trow['booking_id']." '>conform</a></th>
                            </tr>";
                        }   
                                    
                    }
                ?>
            </table></div>
        </div>


        <div class="st">
            <?php
            $sql = "select * from reservation";
            $rre = mysqli_query($con,$sql);
            $r =0 ;
            while($row=mysqli_fetch_array($rre) ){
            $new = $row['status'];
            $cin = $row['check_in'];
            $id = $row['booking_id'];
            if($new=="Conform"){
                $r = $r + 1;
            }
            }
            ?>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            <button style="width: 24%;background-color: white;font-size: 18px;" class="booked" type="button">
            Booked Rooms  <span style="border-radius: 50%;background-color: black;color: white;"><?php echo $r ; ?></span>
            </button>
            </a>
            <div class="display_status">
            <table border="1" style="background-color: white;font-size: 20px;margin: 10px;width: 98%;">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Adhar</th>
                    <th>Room</th>
                    <th>Bedding</th>
                    <th>Meal</th>
                    <th>chech in</th>
                    <th>check out</th>
                    <th>status</th>
                    <th>More</th>
                </tr>

                <?php
                    $tsql = "select * from reservation";
                    $tre = mysqli_query($con,$tsql);
                    while($trow=mysqli_fetch_array($tre) )
                    {   
                        $co =$trow['status']; 
                        if($co=="Conform")
                        {
                        echo"<tr>
                            <th>".$trow['booking_id']."</th>
                            <th>".$trow['first_name']." ".$trow['last_name']."</th>
                            <th>".$trow['email']."</th>
                            <th>".$trow['adhar_no']."</th>
                            <th>".$trow['room_type']."</th>
                            <th>".$trow['bed']."</th>
                            <th>".$trow['meal_plan']."</th>
                            <th>".$trow['check_in']."</th>
                            <th>".$trow['check_out']."</th>
                            <th>".$trow['status']."</th>
                            <th><a href='show.php?rid=".$trow['booking_id']." '>show</a></th>
                            </tr>";
                        }   
                                    
                    }
                ?>
            </table></div>
        </div>
    </div>






<!-- this code for payment status -->
    <div class="payment1">
        <p style="font-size: 50px;color: black;text-align: center;">
            Status <small style="font-size: 40px;color: silver;">Room Booking Payment </small>
        </p>
        <div class="st">
            <?php
            $sql = "select * from reservation";
            $re = mysqli_query($con,$sql);
            $c =0 ;
            while($row=mysqli_fetch_array($re) ){
            $new = $row['payment'];
            $cin = $row['check_in'];
            $id = $row['booking_id'];
            if($new=="Not Paid"){
                $c = $c + 1;
            }
            }
            ?>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            <button style="width: 24%;background-color: white;font-size: 15px;" class="roombookin" type="button">
            New Room Booking Payment  <span style="border-radius: 50%;background-color: black;color: white;"><?php echo $c ; ?></span>
            </button>
            </a>
            <div class="display_status">
            <table border="1" style="background-color: white;font-size: 20px;margin: 10px;width: 98%;">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Adhar</th>
                    <th>Room</th>
                    <th>Bedding</th>
                    <th>Meal</th>
                    <th>chech in</th>
                    <th>check out</th>
                    <th>status</th>
                    <th>More</th>
                </tr>

                <?php
                    $tsql = "select * from reservation";
                    $tre = mysqli_query($con,$tsql);
                    while($trow=mysqli_fetch_array($tre) )
                    {   
                        $co =$trow['payment']; 
                        if($co=="Not Paid")
                        {
                        echo"<tr>
                            <th>".$trow['booking_id']."</th>
                            <th>".$trow['first_name']." ".$trow['last_name']."</th>
                            <th>".$trow['email']."</th>
                            <th>".$trow['adhar_no']."</th>
                            <th>".$trow['room_type']."</th>
                            <th>".$trow['bed']."</th>
                            <th>".$trow['meal_plan']."</th>
                            <th>".$trow['check_in']."</th>
                            <th>".$trow['check_out']."</th>
                            <th>".$trow['payment']."</th>
                            <th><a href='payment.php?rid=".$trow['booking_id']." '>Pay</a></th>
                            </tr>";
                        }   
                                    
                    }
                ?>
            </table></div>
        </div>


        <div class="st">
            <?php
            $sql = "select * from reservation";
            $rre = mysqli_query($con,$sql);
            $r =0 ;
            while($row=mysqli_fetch_array($rre) ){
            $new = $row['payment'];
            $cin = $row['check_in'];
            $id = $row['booking_id'];
            if($new=="Paid"){
                $r = $r + 1;
            }
            }
            ?>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            <button style="width: 24%;background-color: white;font-size: 15px;" class="booked" type="button">
            Payment For Booked Rooms  <span style="border-radius: 50%;background-color: black;color: white;"><?php echo $r ; ?></span>
            </button>
            </a>
            <div class="display_status">
            <table border="1" style="background-color: white;font-size: 20px;margin: 10px;width: 98%;">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Adhar</th>
                    <th>Room</th>
                    <th>Bedding</th>
                    <th>Meal</th>
                    <th>chech in</th>
                    <th>check out</th>
                    <th>status</th>
                    <th>More</th>
                </tr>

                <?php
                    $tsql = "select * from reservation";
                    $tre = mysqli_query($con,$tsql);
                    while($trow=mysqli_fetch_array($tre) )
                    {   
                        $co =$trow['payment']; 
                        if($co=="Paid")
                        {
                        echo"<tr>
                            <th>".$trow['booking_id']."</th>
                            <th>".$trow['first_name']." ".$trow['last_name']."</th>
                            <th>".$trow['email']."</th>
                            <th>".$trow['adhar_no']."</th>
                            <th>".$trow['room_type']."</th>
                            <th>".$trow['bed']."</th>
                            <th>".$trow['meal_plan']."</th>
                            <th>".$trow['check_in']."</th>
                            <th>".$trow['check_out']."</th>
                            <th>".$trow['payment']."</th>
                            <th><a href='show.php?rid=".$trow['booking_id']." '>show</a></th>
                            </tr>";
                        }   
                                    
                    }
                ?>
            </table></div>
        </div>
    </div>







<!-- this code for user detail -->
    <div class="u" style="text-align: center;margin-top: 5%;">
        <b style="color: red;font-size: 20px">USER REGISTER DATA IS BELLOW.</b><br/><br/>
    <table border="1" style="font-size: 20px;text-align: center;margin: auto;">
        <tr>
            <th>user_name</th>
            <th>user_email</th>
            <th>user_cont</th>
            <th>password</th>
            <th>user_profile</th>
            <th>operation</th>
        </tr>

    <?php
        $query = "select * from user";
        $data = mysqli_query($con, $query);
        $total = mysqli_num_rows($data);
        if($total !=0){
            while ($result= mysqli_fetch_array($data)) {    
                echo "<tr>
                    <td>".$result['user_name']."</td>
                    <td>".$result['user_email']."</td>
                    <td>".$result['user_cont']."</td>
                    <td>".$result['password']."</td>
                    <td><img src='../user/photos/".$result['user_photo']."' height='100' width='100' /></td>
                    <td><a href='udelete.php?ji=$result[id]' onclick ='return checkdelete()' ><img src='image/delete.png'></a></td>
                </tr>";       
            }
        }else{
            echo "No Record Found";
        }
    ?>
    </table>
    <script>
    function checkdelete()
    {
        return confirm('Are you sure you want to Delete this data??');
    }
    </script>
    </div>




<!-- this code for employee display -->
    <div class="display_employee" style="text-align: center;margin-top: 5%;">
    <b style="color: red;font-size: 22px">HOTEL EMPLOYEE DATA IS BELLOW.</b><br/><br/><b style="font-size: 20px;">Total Employee in this hotel is:-</b>
    <table border="1" style="font-size: 16px;text-align: center;margin: auto;">
        <tr>
            <th>Employee_name</th>
            <th>Employee_email</th>
            <th>Employee_cont</th>
            <th>Employee_post</th>
            <th>Employee_address</th>
            <th>Employee_jdate</th>
            <th>Employee_salary</th>
            <th>Employee_profile</th>
            <th>operation</th>
        </tr>

    <?php
        $query = "select * from employee";
        $data = mysqli_query($con, $query);
        $total = mysqli_num_rows($data);
        echo "$total";
        if($total !=0){
            while ($result= mysqli_fetch_array($data)) {    
                echo "<tr>
                    <td>".$result['e_name']."</td>
                    <td>".$result['e_email']."</td>
                    <td>".$result['e_phone']."</td>
                    <td>".$result['e_post']."</td>
                    <td>".$result['e_address']."</td>
                    <td>".$result['e_jdate']."</td>
                    <td>".$result['e_salary']."</td>
                    <td><img src='photos/".$result['e_photo']."' height='100' width='100' /></td>
                    <td><a href='edelete.php?ji=$result[id]' onclick ='return checkdelete()' ><img src='image/delete.png'></a></td>
                </tr>";       
            }
        }else{
            echo "No Record Found";
        }
    ?>
    </table>
    <script>
    function checkdelete()
    {
        return confirm('Are you sure you want to Delete this data??');
    }
    </script>
    </div>

</body>
</html>