<?php
include 'dblink.php';
   if($_POST)
   {
      $email = $_POST['email'];
     
      $data = mysqli_query($con, "select * from companydetails where email= '{$email}' ") or die(mysqli_error($con));
      $count = mysqli_num_rows($data);
      $row = mysqli_fetch_assoc($data);

      $message = $_REQUEST['message'] ;


require 'PHPMailer-master/PHPMailerAutoload.php';

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
  $mail->Password = "******************";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "manishray10799@gmail.com";
  $mail->FromName = "manish";
  
  $mail->addAddress($row["email"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "resume selection";
  $mail->Body = $message;
  $mail->AltBody = $message;
  if(!$mail->send())
  {
   echo "<script>alert ('Email not found. please enter valid email')</script> ";
  }
  else
  {
   echo "<script>alert ('Your information has has been sent on his/her Email ID')</script>";
  }
}
  ?>