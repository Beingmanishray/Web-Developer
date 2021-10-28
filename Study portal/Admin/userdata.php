<?php
session_start();
include 'dblink.php';
if(empty($_SESSION['username'])){
    header('location:login.php');
}else{
$email=$_SESSION['username'];
$id=$_GET['ui'];
}
?>


<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	.h{
        position: fixed;
        width: 100%;
        margin-top: -70px;
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
    }
    h2 a{
        color: red;
        text-decoration: none;
    }
    h2 a:hover,a:focus{
        background-color: gray;
        color: rgb(0, 255, 64);
    }
    button{
        background-color: red;
    }
    td a{
        text-decoration: none;
        font-size: 20px;
        color: white;
    }
    td a:hover{
        color: green;
    }
</style>

<div class="h">
    	<h1> <marquee>WELCOME  TO  ONLINE  STUDY PORTAL. </marquee></h1>
    	<h2> <a style="margin-left: 10%;" href="admin.php"> Home </a><a style="margin-left: 70%;" href="Logout.php"> Logout </a> </h2>
</div>


<div class="ud">
	<p style="font-size: 60px;color: black;margin-top: 70px;text-align: center;">User <small style="font-size: 50px;color: silver;">Uploaded Data </small></p><br/>
	<table border="1" style="font-size: 20px;text-align: center;">
    <tr>
        <th>#id</th>
        <th>course</th>
        <th>subject</th>
        <th>topic</th>
        <th>videos</th>
        <th>operation</th>
    </tr>

    <?php
        $query = "select * from upload where user_id='$id' ";
        $data = mysqli_query($con, $query);
        $total = mysqli_num_rows($data);
        if($total !=0){
            while ($result= mysqli_fetch_array($data)) {    
                echo "<tr>
                    <td>".$result['id']."</td>
                    <td>".$result['course']."</td>
                    <td>".$result['subject']."</td>
                    <td>".$result['topic']."</td>
                    <td><video width='350' height='240' controls><source src='../user/videos/".$result['videos']."'</video></td>
                    <td><button><a href='uudelete.php?ui=$result[id]' onclick ='return checkdelete()' >Delete</a></button></td>
                </tr>";       
            }
        }else{
            echo "No Record Found";
        }
    ?>
    <script>
    function checkdelete()
    {
        return confirm('Are you sure you want to Delete this data??');
    }
    </script>
</div>