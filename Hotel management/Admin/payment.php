<?php
session_start();
include 'dblink.php';
$curdate=date("Y/m/d");
$id = $_GET['rid'];
$_SESSION['rid']=$id;


$sql ="Select * from reservation where booking_id = '$id'";
$re = mysqli_query($con,$sql);
$cout = mysqli_num_rows($re);
while($row=mysqli_fetch_assoc($re))
{
	$title = $row['title'];
	$fname = $row['first_name'];
	$lname = $row['last_name'];
	$email = $row['email'];
	$adhar = $row['adhar_no'];
	$Phone = $row['phone_no'];
	$troom = $row['room_type'];
	$nroom = $row['no_of_room'];
	$bed = $row['bed'];
	// $non = $row['NRoom'];
	$meal = $row['meal_plan'];
	$cin = $row['check_in'];
	$cout = $row['check_out'];
	$sta = $row['payment'];
	$days = $row['nday'];
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>payment</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
		}
		.table-responsive/*,.paymentdetail,.paymentdetail1*/{
			width: 40%;
			border: solid skyblue;
			margin: -50px auto;
			font-size: 20px;
			border-radius: 10px;
		}
		/*.paymentdetail,.paymentdetail1{
			margin: -31.8% 0% 0% 50%;
			font-size: 20px;
		}*/
		h2{
			background-color: skyblue;
			font-size: 30px;
			margin: 0;
		}
		.table{
			width: 100%;
			text-align: left;
		}
		/*.paymentdetail input,.paymentdetail1 input{
			height: 25px;
			width: 50%;
			font-size: 26px;
			text-align: center;
			border-radius: 10px;

		}*/
		button{
			height: 50px;
			width: 40%;
			background-color: skyblue;
			margin-left: 30%;
			border-radius: 20px;
		}
		/*.paymentdetail input[type=submit],.paymentdetail1 input[type=submit]{
			height: 40px;
			width: 65%;
			font-size: 26px;
			background-color: red;
			color: white;
		}*/
		input[type=submit]{
			height: 40px;
			width: 65%;
			font-size: 26px;
			background-color: red;
			color: white;
			border-radius: 20px;
		}
	</style>
</head>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".paymentdetail1").hide();
        $(".calc").click(function(){
            $(".paymentdetail1").show();
            $(".paymentdetail").hide();
        });
	});
	function cal() {
		form=document.getElementById("form1");
		tday=form.tday.value;
		troom=form.troom.value;
		rcharge=form.rcharge.value;
		mcharge=form.mcharge.value;
		scharge=form.scharge.value;
		rfare=parseInt(tday)*parseInt(troom)*parseInt(rcharge);
		mfare=parseInt(mcharge)*parseInt(tday)*parseInt(troom);
		form.rcharge1.value=rfare;
		form.mcharge1.value=mfare;
		form.scharge1.value=scharge;
		total=parseInt(rfare)+parseInt(mfare)+parseInt(scharge);
		// form.tamount.value= total;
	}
</script> -->


<body>

	<p style="font-size: 50px;color: black;text-align: center;margin-top: -1px">
            Status <small style="font-size: 40px;color: silver;">Payment </small>
        </p>
	<div class="table-responsive">
        <table class="table">
        	<h2>Personal Information</h2>
            <tr style="color: blue">
                <th>DESCRIPTION</th>
                <th>INFORMATION</th>
            </tr>
            <tr>
                <th>Name</th>
                <th><?php echo $title.$fname.$lname; ?> </th>
                
            </tr>
			<tr>
                <th>Email</th>
                <th><?php echo $email; ?> </th>
                
            </tr>
			<tr>
                <th>Adhar </th>
                <th><?php echo $adhar;  ?></th>
                
            </tr>
			<tr>
                <th>Phone No </th>
                <th><?php echo $Phone; ?></th>
                
            </tr>
			<tr>
                <th>Type Of the Room </th>
                <th><?php echo $troom; ?></th>
                
            </tr>
			<tr>
                <th>No Of the Room </th>
                <th><?php echo $nroom; ?></th>
                
            </tr>
			<tr>
                <th>Meal Plan </th>
                <th><?php echo $meal; ?></th>
                
            </tr>
			<tr>
                <th>Bedding </th>
                <th><?php echo $bed; ?></th>
                
            </tr>
			<tr>
                <th>Check-in Date </th>
                <th><?php echo $cin; ?></th>
                
            </tr>
			<tr>
                <th>Check-out Date</th>
                <th><?php echo $cout; ?></th>
                
            </tr>
			<tr>
                <th>No of days</th>
                <th><?php echo $days; ?></th>
                
            </tr>
			<tr>
                <th>Status Level</th>
                <th><?php echo $sta; ?></th>
                
            </tr>
        </table><br/>
        <form method="POST" id=form1 action="pay.php" autocomplete="off">
        <b>Total Amount</b>
			<input style="height: 30px;width: 60%;border-radius: 10px;" type="text" name="paid"><br/><br/>
			<button><input type="submit" name="pay" value="Pay"></button></form>
    </div>

    <!-- <div class="paymentdetail">
    	<h2>Payment Details</h2>
    	<b>Total Days</b>
    	<input type="text" name="tday" value="<?php echo $days; ?>" required><br/><br/>
    	<b>Total Room</b>
    	<input type="text" name="troom" value="<?php echo $nroom; ?>" required><br/><br/>
    	<b>Room Charge</b>
    	<input type="text" name="rcharge" required><br/><br/>
    	<b>Meals Charge</b>
    	<input type="text" name="mcharge" required><br/><br/>
    	<b>Service Charge</b>
    	<input type="text" name="scharge" required><br/><br/>
		<button><input type="submit" name="calc" value="Calculate" class="calc" onclick="cal()"></button>
    </div>

    <div class="paymentdetail1">
    	<h2>Payment Details</h2>
    	<b>Room Charge</b>
    	<input type="text" name="rcharge1" required><br/><br/>
    	<b>Meals Charge</b>
    	<input type="text" name="mcharge1" required><br/><br/>
    	<b>Service Charge</b>
    	<input type="text" name="scharge1" required><br/><br/>
    	<b>Total Amount</b>
    	<input type="text" name="tamount" required><br/><br/>
		<button><input type="submit" name="pay" value="Pay"></button>
    </div> -->
<!-- </form> -->
</body>
</html>


<!-- <?php
if(isset($_POST['pay'])) {
$r=$_POST['rcharge1'];
$m=$_POST['mcharge1'];
$s=$_POST['scharge1'];
$t=$_POST['tamount'];


$new="paid";	
$newUser="INSERT INTO `payment`(`title`, `first_name`, `last_name`, `room_type`, `bed`, `nroom`, `cin`, `count`, `no_of_days`, `room_fare`, `service`, `meal_price`,`tprice`,`status`) VALUES ('$title','$fname','$lname','$troom','$bed','$nroom','$cin','$cout','$days','$r','$s','$m','$t','$new')";
if (mysqli_query($con,$newUser))
	{
		echo "<script type='text/javascript'> alert('Your payment has been sent')</script>";									
	}else{
		echo "<script type='text/javascript'> alert('Error adding payment in database')</script>";
	}
}
?> -->