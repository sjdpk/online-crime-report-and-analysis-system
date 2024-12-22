

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

    $station_id=$_POST["station_id"];
    $station_name=$_POST["station_name"];
    $station_incharge=$_POST["station_incharge"];
    $station_phone=$_POST["station_phone"];
     $station_email=$_POST["station_email"];
    $station_address=$_POST["station_address"];
    


  $sql = "INSERT INTO police_station (station_id,station_name,station_incharge,station_phone,station_email,station_address)
  
  VALUES('$station_id','$station_name','$station_incharge','$station_phone','$station_email','$station_address')";
  
   if (mysqli_query($conn, $sql)) {


      echo "<h3 style='color:red;background-color:black;text-align:center'> Police Station Added Successfully  ! </h3>";
  } else {
     echo ("Something Went Wrong. Try Again !".mysqli_error($conn));

  }
  }
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Cras">
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
          <h1 class="text-center text-white" style="padding: 25px;">Add Police Station</h1>
        </div>
        <h5 class="text-center text-success"></h5>
        <form action="" method="POST" id="form-box" >
         
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Station ID </span>
            </div>
            <input type="text" name="station_id" class="form-control" placeholder="Enter Station ID" required>
          
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Station Name </span>
            </div>
            <input type="text" name="station_name" class="form-control" placeholder="Enter Station Name" required>
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Station Incharge </span>
            </div>
            <input type="text" name="station_incharge" class="form-control" placeholder="Enter Station Incharge" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Station Address</span>
            </div>
            <input type="text" name="station_address" class="form-control" placeholder="Enter Station Address" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Station Phone</i></span>
            </div>
            <input type="text" name="station_phone" class="form-control" placeholder="Enter Station Phone" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Station Email</i></span>
            </div>
            <input type="email" name="station_email" class="form-control" placeholder="Enter Station Email" required>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Add Police Station" style="border-radius: 30px;height: 50px;background-color: #2e1f84 ">
           
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