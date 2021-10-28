<?php
include '../dblink.php';
  if($_POST)
  {
    $msg = $_POST['msg'];
    $data = mysqli_query($con, "select * from user") or die(mysqli_error($con));
    $count = mysqli_num_rows($data);
    require 'PHPMailer-master/PHPMailerAutoload.php';
    while($row = mysqli_fetch_assoc($data)){
      $rcc=$row['user_email'];    

    $mail = new PHPMailer();
    
    //Enable SMTP debugging.
    $mail->SMTPDebug = 1;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name
    $mail->Host = "smtp.gmail.com";

    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = TRUE;
    //Provide username and password
    $mail->Username = "manishray10799@gmail.com";
    $mail->Password = "hackermani7549";
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "false";
    $mail->Port = 587;
    //Set TCP port to connect to
    
    $mail->From = "studyportal@gmail.com";
    $mail->FromName = "Study portal";
    
    $mail->addAddress($rcc);
    $mail->addcc($rcc);
    $mail->isHTML(true);
   
    $mail->Subject = "Notification";
    $mail->Body = "$msg";
    $mail->AltBody = "This is the plain text version of the email content";
    }
    if(!$mail->send())
    {
     echo "<script>alert ('Email not found. please enter valid email')</script> ";
    }
    else
    {
     echo "<script>alert ('Your message has has been sent to the user')</script>";
    }
  }
?>