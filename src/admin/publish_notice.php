

<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  }  
 if(!isset($_SESSION['x']))
    header("location:../admin_login.php");
  
function Redirect_to($New_Location){
    header("Location:".$New_Location);
  exit;
}
// Create connection
   $conn=mysqli_connect("localhost","root","","ocras");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }


if(isset($_POST["submit"])){

    $notice_subject=$_POST["notice_subject"];
    $notice_details=$_POST["notice_details"];
    
    


  $sql = "INSERT INTO general_notice (notice_subject,notice_details)
  
  VALUES(' $notice_subject','$notice_details')";
  
   if (mysqli_query($conn, $sql)) {


      echo "<h3 style='color:red;background-color:black;text-align:center'> Notice Added Successfully  ! </h3>";
  } else {
     echo ("Something Went Wrong. Try Again !");

  }
  }
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Cras">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Admin Dashboard</title>
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
          <h1 class="text-center text-white" style="padding: 25px;">General Notice </h1>
        </div>
        <h5 class="text-center text-success"></h5>
        <form action="" method="post" id="form-box" class="p-2">
         
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Subject</span>
            </div>
            <input type="text" name="notice_subject" class="form-control" placeholder="Enter Subject" required>
          
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Notice Details </span>
            </div>
             <textarea name="notice_details" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
  
          </div>

          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Publish Notice" style="border-radius: 30px;height: 50px;background-color: #2e1f84 ">
           
          </div>
        </form>
      </div>
    </div>
  </div>
     <script src="bootstrap/jquery/jquery-3.4.1.js" ></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
</body>

</html>