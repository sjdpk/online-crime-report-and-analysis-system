<?php

require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');
require_once('PHPMailer/PHPMailerAutoload.php');
if(isset($_GET["u_id"])){

    $IdFromURL=isset($_GET['u_id']) ? $_GET['u_id'] : '';
    $link = mysqli_connect("localhost","root","",'ocras');
// Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
            $sql = "SELECT * FROM user_details  WHERE u_id='$IdFromURL'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){
               $EMAIL= $row['email'] ;

            }
        } 
    } 
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
        $mail->AddAddress($EMAIL,"User");


        $mail->Subject = "Request Accept !";
        $mail->Body    = "<b style='color:red;'>***** Congratulation *****</b><br> <h2>Your Request has been accepted</h2> 
         <p>HI,</p>
            <p>Thank you For signing up with Crime report System! Your Registration will now be setup over the next few minutes<br> Thank you ! </p> ";
         $mail->AltBody = "<b style='color:red;'>***** Congratulation *****</b><br> <h2>Your Request has been accepted</h2> 
         <p>HI,</p>
            <p>Thank you For signing up with Crime report System! Your Registration will now be setup over the next few minutes<br> Thank you ! </p> ";

           if(!$mail->Send())
           {
          echo "Message could not be sent. <p>";
          header("Location:subadmin_dashboard.php?option=users_request");
          exit;
          }

         
         header("Location:subadmin_dashboard.php?option=users_request");
         echo "Message has been sent";
     }
  ?> 