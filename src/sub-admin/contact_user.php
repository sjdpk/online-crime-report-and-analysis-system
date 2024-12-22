<?php

require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');
require_once('PHPMailer/PHPMailerAutoload.php');

if(isset($_POST["submit"])){
  
  $email=$_POST["email"];
  $subject=$_POST["subject"];
  $Message=$_POST["message"];


$mail = new PHPMailer(true);
$mail->IsSendmail();
//Send mail using gmail

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 465; // set the SMTP port for the GMAIL server
$mail->Username = "<your-mail-address>"; // GMAIL username
$mail->Password = "<your-mail-password>"; // GMAIL password

$mail->From = "<your-mail-address>";
$mail->FromName = "Crime Report System";


$mail->AddAddress($email,"myself");


$mail->Subject = $subject;
$mail->Body    = $Message;
 $mail->AltBody = $Message;

   if(!$mail->Send())
   {
  echo "Message could not be sent. <p>";
  echo "Mailer Error: " . $mail->ErrorInfo;
  exit;
  }

 echo "<h2 align=center style='color:blue;'>Message has been sent</h2>";
 
 }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Cras">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Subadmin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>

<body >

  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 bg-light rounded" >
        <div  style="border-radius:10px;height: 100px;background-color: #6340bc ">
          <h1 class="text-center text-white" style="padding: 25px;">Contact User</h1>
        </div>
        <h5 class="text-center text-success"></h5>
        <form action="" method="post" id="form-box" class="p-2">
         
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
            </div>
            <textarea name="message" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send" style="border-radius: 30px;height: 50px;background-color: #2e1f84 ">
           
          </div>
        </form>
      </div>
    </div>
  </div>
       <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
</body>

</html>