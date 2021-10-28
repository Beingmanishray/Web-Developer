<?php
session_start();
$email=$_SESSION['username'];
include 'dblink.php';
if (!$_SESSION['username']) {
    header('location:login.php');
}
$query = "select * from user where user_email= '$email' ";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>user_profile</title>
	<style type="text/css">
		body{
            margin: 0%;
            padding: 0%;
        }
        .h{
            position: fixed;
            width: 100%;
        }
        h1{
            margin: 0;
            color: white;
            background-color: rgb(2, 49, 15);
            word-spacing: 10px;
        }
        h2{
            margin: 0;
            background-color: black;
            opacity: .9;
            color: white;
            text-align: center;
        }
        h2 a{
            color: red;
            text-decoration: none;
            margin: 18%;
        }
        h2 a:hover{
            background-color: gray;
            color: rgb(0, 255, 64);
        }
        .profile,.jb{
            
            margin: -27% 0% 0% 50%; 
        }
        .profile input,.jb input{
            font-size: 20px;
            text-align: center;
            height: 30px;
            width: 300px;
            border-radius: 20px
        }
        img{
            height: 200px;
            width: 200px;
            border-radius: 20%;
        }
        select{
            width: 300px;
            height: 30px;
            font-size: 20px;
            border-radius: 20px;
        }
        label{
            font-size: 20px;
        }
        .profile button,.jb button {
            background-color: gray;
            height: 40px;
            width: 140px;
            margin-left: 15%;
        }
        button{
            background-color: gray;
            height: 40px;
            width: 140px;
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
            margin-top: 80px;
        }
        .reg a{
            text-decoration: none;
            color: red;
        }
        .reg a:hover,a:focus{
            color: green;
        }
        tr td a{
            font-size: 18px;
            background-color: red;
            color: #fff;
        }
        td a:hover,a:focus{
            color:red;
            background-color: #fff;
        }
        table{
            font-size: 30px;
            text-align: center;
        }
	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".profile").hide();
            $(".edit").click(function(){
                $(".profile").show();
                $(".jb").hide();
            });
            $(".avideo").click(function(){
                $(".profile").hide();
                $(".jb").show();
            });
        });
    </script>
</head>
<body><div class="h">
	<h1><marquee>WELCOME  TO ONLINE STUDY PORTAL.</marquee></h1>
	<h2> <a href="uhome.php"> Home </a>YOUR PROFILE.<a href="../admin/logout.php"> logout </a></h2></div>
    <div class=reg>
        <a class="pro" href="#"><img src="<?php echo 'photos/'.$result['photo'];?>" ></a><br/>
    
        <?php
        echo "$result[user_name]","<br>";
        echo "$result[user_email]","<br>";
        echo "$result[user_cont]","<br><br>";
        ?>
        <a href="#" class="edit">Edit profile</a><br/>
        <a href="#" class="avideo">Upload videos</a><br/>
    </div>
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
    
    <form action="upload.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="jb">
        <p style="font-size: 20px; color: red">you can upload your tutorial bellow</p>
        <select name="course" required>
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
            <option value="BTECH">BTECH</option>
            <option value="Bsc">Bsc</option>
        </select></br></br>
        <input type="text" name="name" placeholder="Enter Subject Name" required></p>
        <input type="text" name="topic" placeholder="Enter Topic Name" required ></p>
        <p style="font-size: 20px; color: red"><i> Select your videos for upload:</i></p><input type="file" name="video" accept="video/*" required ></p>
        <button><input type="submit" name="upload" value="UPLOAD"></button>       
    </div>
    </form>

    <p style="color: red">=======================================================================================================================================</p>
    <p style="text-align: center; font-size: 20px"><b>your videos</b>
    <p style="color: red">=======================================================================================================================================</p>
    <table border="1" >
        <tr>
            <th>course</th>
            <th>subject</th>
            <th>topic</th>
            <th>video</th>
            <th>operation</th>
        </tr>
    
</body>
</html>
<?php

$query = "select * from upload where user_id= '$email' ";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
if($total !=0)
{
    while ($result= mysqli_fetch_array($data)) {
        
        echo "<tr>
            <td>".$result['course']."</td>
            <td>".$result['subject']."</td>
            <td>".$result['topic']."</td>
            <td><video width='320' height='240' controls> <source src='videos/".$result['videos']."' type='video/mp4' ></video></td>
            <td><button><a href='udelete.php?ui=$result[id]' onclick ='return checkdelete()' >Delete</a></button></td>
        </tr>";       
    }
}else{
    echo "No Record Found";
}
?>
<script>
    function checkdelete(){
        return confirm('Are you sure you want to Delete this data??');
    }
</script>

