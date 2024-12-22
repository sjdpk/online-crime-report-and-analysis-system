<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:../user_login.php");
    
    
    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
        $email=$_SESSION['user_email'];    
        $result=mysqli_query($conn,"SELECT * FROM user_details where email='$email' ");
        $q2=mysqli_fetch_assoc($result);
        $first_name=$_SESSION['first_name']=$q2['first_name'];
        $middle_name=$q2['middle_name'];
        $last_name=$_SESSION['last_name']=$q2['last_name'];
        $contact_no=$q2['contact_no'];
        $identity_no=$q2['identity_no'];
        $username=$q2['username'];
        $zcode=$q2['zcode'];
        $city1=$q2['city'];
        $city=ucfirst($city1);
        $state=$q2['state'];
        $mess="State :- ";
        $Address=$mess.$state.' / '.$city;





     function Redirect_to($New_Location){
    header("Location:".$New_Location);
  exit;
}
    
        if(isset($_POST["submit"])){

          $password0=$_POST["prepassword"];
          $password1=$_POST["password1"];
          $password2=$_POST["password2"];

          $result1=mysqli_query($conn,"SELECT password FROM user_details where email='$email' ");
          $q2=mysqli_fetch_assoc($result1);
          $password=$q2['password'];

          if($password1==$password2){

              if($password0==$password){

                $Query="UPDATE `user_details` SET `password`='$password1'   WHERE email='$email' ";
                $Execute=mysqli_query($conn,$Query);
                     if($Execute){
                    echo "<h3 style='color:red'>Password Changed Successfully</h3>";
                    
                    }else{
                    echo "<h3 style='color:red'>Something Went Wrong. Try Again !</h3>";
                    // Redirect_to("user_profile.php");
                     }

              }
              
            else {
           echo "New Password and Confirm Password Does Not Match ,Try Again !";
              // Redirect_to("user_profile.php");
            }
          }
        }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    User Profile
  </title>
  <meta content='width=device-width, initial-scale=1.0' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
 
</head>

<body class="">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <span class="navbar-brand text-primary font-italic font-weight-bold"><?php echo ucfirst($_SESSION['first_name']); ?> Dashboard</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="user_dashboard.php" class="nav-link text-white font-italic" >HOME</a>
      </li>
      <li class="nav-item">
       <a href="user_fir.php" class="nav-link text-white font-italic">FIR</a>
      </li>
      <li class="nav-item">
        <a href="fir_status.php" class="nav-link text-white font-italic">FIR_STATUS</a>
      </li>
      <li class="nav-item">
        <a href="police_station.php" class="nav-link text-white font-italic">POLICE STATION</a>
      </li>
       <li class="nav-item">
        <a href="#contact" class="nav-link text-white font-italic">CONTACT US</a>
      </li>
       <li class="nav-item">
        <a href="user_profile.php" class="nav-link text-white font-italic">PROFILE</a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>&nbsp;&nbsp;&nbsp;
    <a href="user_logout.php"><button type="button" class="btn btn-danger" >LOG OUT</button></a>
  </div>
</nav>

  <div class="row">



    <div class="col-2"></div>
 <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Profile Details</h5>
              </div>
              <div class="card-body">
                <form action=" " method="POST">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>CitizenShip Number</label>
                        <input type="text" class="form-control" disabled="" placeholder="CitizenShip Number" value="<?php echo($identity_no)?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" disabled="" placeholder="Username" value="<?php echo($username)?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" disabled=""  value="<?php echo($email)?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" disabled="" placeholder="First Name" value="<?php echo($first_name)?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" disabled="" placeholder="" value="<?php echo($middle_name)?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" disabled="" placeholder="Last Name" value="<?php echo($last_name)?>">
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" disabled="" placeholder="Contact Number" value="<?php echo($contact_no)?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="text" class="form-control" disabled="" placeholder="Postal Code" value="<?php echo($zcode) ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" disabled="" placeholder="Home Address" value="<?php echo($Address)?>">
                      </div>
                    </div>
                  </div>
                  
                 
              <div class="row justify-content-center">
                <div class="col-md-12 bg-light rounded" >
                 
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Previous Password</span>
                      </div>
                      <input type="password" name="prepassword" class="form-control" placeholder="Enter your Previous Password" required>
                    
                    </div>
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">New Password <i class="mr-4"></i></span>
                      </div>
                      <input type="password" name="password1" class="form-control" placeholder="Enter New Password" required>
                    </div>
                      <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Confirm Password</span>
                      </div>
                      <input type="password" name="password2" class="form-control" placeholder="Again Enter New Password " required>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Update Profile" style="border-radius: 30px;height: 50px;background-color: #2e1f84 ">
                     
                    </div>
              
                </div>
              </div>
           
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


    
    <footer style="background-color: #373a48"><br>
      <style type="text/css">.nav-link{color: white;font-style: italic;}</style>
      <div class="container">
        <div class="row text-center custom-list">
          <div class="col-sm-4">
            <ul class="list-unstyled">
            <li><a href="#main" class="nav-link">Home</a></li>

            <li ><a href="police_station.php" class="nav-link">Police_Station</a></li>
            
          </ul>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
              <li><a href="#setvice" class="nav-link">Fir</a></li>

               <li><a href="#contact" class="nav-link">Contact_Us</a></li>
              
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
             
              <li><a href="user_case.php" class="nav-link">Case</a></li>

              <li><a href="user_logout.php" class="nav-link">Logout</a></li>
            </ul>
          </div>
          
        </div>
        
      </div>
      
  
      <div class="footer-copyright text-center text-white" style="background-color: black;">
              <p >&copy;2019 All Rights Reserved | Developed By <span class="text-primary">Deepak And Arun </span></p>
          </div>
    </footer>

 <a style="position:fixed;bottom:0px;right:0px;margin:0;padding:5px 3px;" href="#"><button class="btn btn-floating waves-effect btn-outline-primary" style="border-radius: 50%;margin-right: 15px;"><img src="../image/top.png" style="height: 40px;width:20px;"></button></a>






<!-- Bootstrap js -->
<script src="../bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="../bootstrap/popper.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.js" ></script>
<script src="../bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>