<?php
    session_start();
    include 'dblink.php';
    if(empty($_SESSION['username'])){
        header('location:../index.php');
    }
    $email=$_SESSION['username'];
    $sql = "select * from review";
    $re = mysqli_query($con,$sql);
    $c =0 ;
    while($row=mysqli_fetch_array($re) ){
        $new = $row['status'];
        if($new=="Not seen"){
            $c = $c + 1;
        }
    }
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
        .h{
            position: fixed;
            width: 100%;
            margin-top: -80px;
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
        .yp{
            margin: 0px 0% 0px 22%;
            font-size: 20px;
        }
        .yp img{
            height: 200px;
            width: 200px;
            border-radius: 20px;
        }
        .yp a{
            text-decoration: none;
            color: red;
        }
        .yp a:hover,a:focus{
            color: green;
        }
        .update,.addquestion,.addtutorial{
            
            margin: -26% 0% 0% 50%; 
        }
        .addbook{
            margin: -25% 0% 0% 50%;
        }
        .update input,.addbook input,.addquestion input,.addtutorial input{
            font-size: 20px;
            text-align: center;
            height: 30px;
            width: 300px;
            border-radius: 20px
        }
        .update button,.addbook button,.addquestion button,.addtutorial button {
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
        .book1,.Question1,.tut1{
            border: solid green;
            font-size: 40px;    
        }
        .book1 a,.Question1 a,.tut1 a{
            margin: 20px 20px 20px 20px;
            text-decoration: none;
        }
        .book1 a:hover,a:focus,.Question1 a:hover,a:focus,.tut1 a:hover,a:focus{
            color: green;
        }
        td a{
            background-color: gray;
            color: red;
            text-decoration: none;
        }
        td a:hover,a:focus,b a:hover,a:focus{
            color: green;
        }
        .user1 button,.Message button{
            background-color: red;
            height: 40px;
        }
        .user1 a,.Message a{
            font-size: 20px;
            color: white;
        }
        #mail{
            background-color: black;
            width: 40%;
            text-align: center;
            font-size: 20px;
            border: solid green;
            border-radius: 20px;
            margin: auto 50%;
            display: none;
        }
	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".addbook").hide();
            $(".addquestion").hide();
            $(".addtutorial").hide();
            $(".edit").click(function(){
                $(".update").show();
                $(".addbook").hide();
                $(".addquestion").hide();
                $(".addtutorial").hide();
                $("#mail").hide();
            });
            $(".abook").click(function(){
                $(".addbook").show();
                $(".update").hide();
                $(".addquestion").hide();
                $(".addtutorial").hide();
                $("#mail").hide();
            });
            $(".aquestion").click(function(){
                $(".addquestion").show();
                $(".update").hide();
                $(".addbook").hide();
                $(".addtutorial").hide();
                $("#mail").hide();
            });
            $(".atutorial").click(function(){
                $(".addtutorial").show();
                $(".update").hide();
                $(".addquestion").hide();
                $(".addbook").hide();
                $("#mail").hide();
            });
        });
        function mail(){
            show();
        }
        var show=()=>{
            if (!localStorage.ex) {
                localStorage.ex="1";
                document.querySelector("#mail").style.display="block"
            } else {
                delete(localStorage.ex);
                document.querySelector("#mail").style.display="none"
            }
        }
    </script>
</head>
<body>

<!-- code for heading -->
    <div class="h">
    	<h1> <marquee>WELCOME  TO  ONLINE  STUDY PORTAL. </marquee></h1>
    	<h2> <a href="#"> Home </a><a href="#yp" class="Profile"> Profile </a><a href="#book1" class="Book">Book</a><a href="#tut1" class="Tutorial"> Tutorial </a><a href="#Question1" class="qp">Question paper</a><a href="#user1" class="user">User</a><a href="#Message" class="Message">Message<span style="border-radius: 50%;background-color: red;color: white;"><?php echo $c ; ?></span></a><a href="#mail" onclick="mail()">Mail</a><a href="Logout.php"> Logout </a> </h2>
    </div>

<!-- code for profile display -->
    <div class="yp" id="yp">
        <p style="font-size: 60px;color: black;margin: 80px 0px 0px 17%;">Your <small style="font-size: 50px;color: silver;">Profile </small></p><hr style="margin-left: -40%;">
        <?php
            $db="select * from admin";
            $data=mysqli_query($con,$db);
            $total=mysqli_num_rows($data);
            $result=mysqli_fetch_assoc($data);
        ?>
        <a class="pro" href="#"><img src="<?php echo 'image/'.$result['admin_photo'];?>" ></a><br/>
        <?php
            echo "$result[admin_name]"."<br/>";
            echo "$result[admin_email]"."<br/>";
            echo "$result[admin_cont]"."<br/>";
        ?>
        <a href="#" class="edit">Edit profile</a><br/>
        <a href="#" class="abook">Add Book</a><br/>
        <a href="#" class="aquestion">Add Question paper</a><br/>
        <a href="#" class="atutorial">Add Tutorial</a>
    </div>

<!-- code for profile update -->
    <form method="post" action="apupdate.php" enctype="multipart/form-data" autocomplete="off">
    <div class="update">
        <input type="text" name="name" value="<?php echo "$result[admin_name]"; ?>" required><br/><br/>
        <input type="email" name="email" value="<?php echo "$result[admin_email]"; ?>" required><br/><br/>
        <input type="phonr" name="cont" value="<?php echo "$result[admin_cont]"; ?>" required><br/><br/>
        <input type="password" name="pass" value="<?php echo "$result[password]"; ?>" required><br/>
        <p style="font-size: 20px; color: red"><i>If you want to change your profile image then choose file</i></p><input type="file" name="photo" accept="image/*" value="<?php echo "$result[admin_photo]"; ?>" required><br/><br/>
        <button><input type="submit" name="btn" value="UPDATE"></button> <br/><br/> 
    </div>
    </form>


<!-- code for add book -->
    <form method="POST" action="addbook.php" enctype="multipart/form-data" autocomplete="off">
        <div class="addbook">
            <p style="font-size: 20px; color: red">Plese fill the information and choose file for upload</p>
            <select style="height: 30px;width: 300px;font-size: 20px;border-radius: 20px" name="course" required>
                <option value selected disabled>Select Course</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
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
                <option value="BCom">BCom</option>
                <option value="Bsc">Bsc</option>
                <option value="Language">Language</option>
            </select></br></br>
            <select style="height: 30px;width: 300px;font-size: 20px;border-radius: 20px" name="Semester">
                <option value selected disabled>Select Semester</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
            </select></br></br>
            <input type="text" name="name" placeholder="Enter Subject Name" required></p>
            <p style="font-size: 20px; color: red"><i> Select your book for upload only pdf,docx,doc type:</i></p><input type="file" name="book" accept=".doc,.docx,.pdf" required ></p>
            <button><input type="submit" name="upload" value="UPLOAD"></button>
        </div>
    </form>



<!-- code for add question paper -->
    <form method="POST" action="addquestion.php" enctype="multipart/form-data" autocomplete="off">
        <div class="addquestion">
            <p style="font-size: 20px; color: red">Plese fill the information and choose file for upload</p>
            <select style="height: 30px;width: 300px;font-size: 20px;border-radius: 20px" name="course" value="" required>
                <option value selected disabled>Select Course</option>
                <option value="10">10th</option>
                <option value="ISc">ISc</option>
                <option value="IA">IA</option>
                <option value="ICom">ICom</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
                <option value="BCom">BCom</option>
                <option value="Bsc">Bsc</option>
                <option value="BA">BA</option>
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
                <option value="General">General</option>
            </select></br></br>
            <select style="height: 30px;width: 300px;font-size: 20px;border-radius: 20px" name="Semester">
                <option value selected disabled>Select Semester</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
            </select></br></br>
            <input type="varchar" name="year" placeholder="Enter year like 20**" required></p>
            <p style="font-size: 20px; color: red"><i> Select your question for upload only pdf,doc,docx type:</i></p><input type="file" name="pdf" accept=".docx, .doc, .pdf" required ></p>
            <button><input type="submit" name="upload" value="UPLOAD"></button>
        </div>
    </form>



<!-- code for add tutorials -->
    <form action="addtutorial.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="addtutorial">
        <p style="font-size: 20px; color: red">Plese fill the information and choose file for upload</p>
        <select style="height: 30px;width: 300px;font-size: 20px;border-radius: 20px" name="course" required>
            <option value selected disabled>Select Course</option>
            <option value="6">6th</option>
            <option value="7">7th</option>
            <option value="8">8th</option>
            <option value="9">9th</option>
            <option value="10">10th</option>
            <option value="11">11th</option>
            <option value="12">12th</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="BCom">BCom</option>
            <option value="Bsc">Bsc</option>
            <option value="Language">Language</option>
        </select></br></br>
        <input type="text" name="name" placeholder="Enter Subject Name" required></p>
        <input type="text" name="topic" placeholder="Enter Descriptions" required ></p>
        <p style="font-size: 20px; color: red"><i> Select your videos for upload:</i></p><input type="file" name="video" accept="video/*" required ></p>
        <button><input type="submit" name="upload" value="UPLOAD"></button>       
    </div>
    </form><hr>



<!-- code for sending mail to the user -->
    <div id="mail">
    <br/><br/><br/><i style="color: red;font-size: 30px;"> Please write your message for users. </i><hr>
    <form action ="mail/mail.php" method="POST" autocomplete="off">
        <select style="height: 30px;width: 380px;font-size: 20px; name="course" required>
            <option value selected disabled>Select Course</option>
            <option value="1">1st</option>
            <option value="2">2nd</option>
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
            <option value="BCom">BCom</option>
            <option value="Bsc">Bsc</option>
            <option value="Language">Language</option>
        </select>
        <textarea cols="50" rows="10" name="msg"></textarea><br/>
        <button><input type="submit" name="" value="Send"></button>       
    </form>
    </div>


<!-- code for display book -->
    <div class="book1" id="book1">
       <p style="font-size: 60px;color: black;margin: 80px 0px 0px 0%;text-align: center;">Available <small style="font-size: 50px;color: silver;">Course Book </small><hr></p>
        <i style="color: red;">Primary School ></i>
        <a href="#book1" class="a">1st</a>
        <a href="#book1" class="b">2nd</a>
        <a href="#book1" class="c">3rd</a>
        <a href="#book1" class="d">4th</a>
        <a href="#book1" class="e">5th</a>
        <a href="#book1" class="f">6th</a>
        <a href="#book1" class="g">7th</a>
        <a href="#book1" class="hh">8th</a> <br/>
        <i style="color: red;margin-left: 52px;">High School ></i>
        <a href="#book1" class="i">9th</a>
        <a href="#book1" class="j">10th</a>
        <a href="#book1" class="k">Isc</a><br/>
        <i style="color: red;">Under graduate ></i>
        <a href="#book1" class="l">BCA</a>
        <a href="#book1" class="m">BBA</a>
        <a href="#book1" class="n">BCom</a>
        <a href="#book1" class="o">BSC</a><br/>
        <i style="color: red;margin-left: 85px;">Language ></i>
        <a href="#book1" class="pp">HTML</a>
        <a href="#book1" class="q">JavaScript</a>
        <a href="#book1" class="r">PHP</a>
        <a href="#book1" class="ss">MySQL</a><hr>

        <?php include 'bdisplay.php';?>
    </div>


<!-- code for display tutorials -->
    <div class="tut1" id="tut1">
       <p style="font-size: 60px;color: black;margin: 80px 0px 0px 0%;text-align: center;">Available <small style="font-size: 50px;color: silver;">Course Tutorial </small><hr></p>
        <a href="#tut1" class="ta">HTML</a>
        <a href="#tut1" class="tb">CSS</a>
        <a href="#tut1" class="tc">MySQL</a>
        <a href="#tut1" class="td">PHP</a>
        <a href="#tut1" class="te">JavaScript</a>
        <a href="#tut1" class="tf">C</a>
        <a href="#tut1" class="tg">C++</a>
        <a href="#tut1" class="th">JAVA</a><hr>
        <?php include 'tdisplay.php';?>
    </div>


<!-- code for display question paper -->
    <div class="Question1" id="Question1">
       <p style="font-size: 60px;color: black;margin: 80px 0px 0px 0%;text-align: center;">Available <small style="font-size: 50px;color: silver;">Question Paper </small><hr></p>
       <i style="color: red;">High School ></i>
     <a href="#Question1" class="qpa">10th</a>
     <a href="#Question1" class="qpb">Isc</a>
     <a href="#Question1" class="qpc">IA</a>
     <a href="#Question1" class="qpd">Icom</a><br/>
     <i style="color: red;margin-left: 10%">UG ></i>
     <a href="#Question1" class="qpe">BCA</a>
     <a href="#Question1" class="qpf">BBA</a>
     <a href="#Question1" class="qpg">BSC</a>
     <a href="#Question1" class="qph">Bcom</a>
     <a href="#Question1" class="qpi">BA</a>
     <a href="#Question1" class="qpj">MCA</a>
     <a href="#Question1" class="qpk">MBA</a> <br/>
     <i style="color: red;margin-left: 5%">General ></i>
     <a href="#Question1" class="qpl">IAS</a>
     <a href="#Question1" class="qpm">UPSC</a>
     <a href="#Question1" class="qpn">Railway</a>
     <a href="#Question1" class="qpo">SSC</a><hr>
     <?php include 'qdisplay.php'; ?>
    </div>

    
<!-- code for dispay all the users -->
    <div class="user1" id="user1" style="border: solid green;">
        <p style="font-size: 60px;color: black;margin: 80px 0px 0px 0%;text-align: center;">Available <small style="font-size: 50px;color: silver;">User Details </small><hr></p>
        <div style="margin: auto;background-color: silver">
        <i style="color: red;font-size: 30px;margin-left: 30px;">If you want to see user uploaded data then click on view button.</i>
        <table border="1" style="text-align: center;background-color: white;font-size: 20px;margin: auto;width: 96%;">
        <tr>
            <th>user_name</th>
            <th>user_email</th>
            <th>user_cont</th>
            <th>password</th>
            <th>user_profile</th>
            <th colspan="2">operation</th>
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
                        <td><img src='../user/photos/".$result['photo']."' height='100' width='100' /></td>
                        <td><button><a href='userdata.php?ui=".$result['user_email']." '>View </a></button></td>
                        <td><button><a href='udelete.php?ui=$result[user_id]' onclick ='return checkdelete()' >Delete</a></button></td>
                    </tr>";       
                }
            }else{
                echo "No Record Found";
            }
        ?>
        </table></div>
        <script>
        function checkdelete()
        {
            return confirm('Are you sure you want to Delete this data??');
        }
        </script>
    </div>



<!-- code for dispay all the users message -->
    <div class="Message" id="Message" style="border: solid green;">
        <p style="font-size: 60px;color: black;margin: 80px 0px 0px 0%;text-align: center;">Available <small style="font-size: 50px;color: silver;">User Message </small><hr></p>
        <div style="margin: auto;background-color: silver;">
            <button style="width: 24%;background-color: white;font-size: 20px;margin-left: 30px;">New Messages  <span style="border-radius: 50%;background-color: black;color: white;"><?php echo $c ; ?></span></button>
            <table border="1" style="text-align: center;background-color: white;font-size: 20px;margin: 10px;width: 98%;">
                <tr>
                    <th>Email</th>
                    <th>Message About</th>
                    <th>Message</th>
                    <th>More</th>
                </tr>

                <?php
                    $tsql = "select * from review order by status";
                    $tre = mysqli_query($con,$tsql);
                    while($trow=mysqli_fetch_array($tre) )
                    {   
                        $co =$trow['status']; 
                        if($co=="Not seen")
                        {
                        echo"<tr>
                            <th>".$trow['user_name']."</th>
                            <th>".$trow['subject']."</th>
                            <th>".$trow['message']."</th>
                            <td><button><a href='mseen.php?rid=".$trow['id']." '>View</a></button></td>
                            </tr>";
                        } else {
                           echo"<tr>
                        <th>".$trow['user_name']."</th>
                        <th>".$trow['subject']."</th>
                        <th>".$trow['message']."</th>
                        <td><button><a href='msgdelete.php?rid=".$trow['id']." '>Delete</a></button></td>
                        </tr>"; 
                        }          
                    }
                ?>
            </table>
        </div>
    </div>
    <p style="background-color: blue;height: 40px;font-size: 20px;color: white;text-align: center;"># 2019 Study Portal.Designed by Beingmanishray.</p>
</body>
</html>