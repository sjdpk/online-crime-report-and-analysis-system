<?php

    if(!isset($_SESSION['x']))
        header("location:../admin_login.php");
    
    
    
    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
        $admin_batchno=$_SESSION['admin_batchno']; 

        $result=mysqli_query($conn,"SELECT * FROM admin_details where batch_no='$admin_batchno' ");
        $q2=mysqli_fetch_assoc($result);
        $first_name=$q2['first_name'];
        $middle_name=$q2['middle_name'];
        $last_name=$q2['last_name'];
        $contact_no=$q2['contact_no'];
        
        $username=$q2['username'];
        $email=$q2['email'];
        $datetime=$q2['datetime'];
        $type=$q2['type'];

        if(isset($_POST["submit"])){

          $password0=$_POST["prepassword"];
          $password1=$_POST["password1"];
          $password2=$_POST["password2"];
          

          $result1=mysqli_query($conn,"SELECT password FROM admin_details where batch_no='$admin_batchno' ");
          $q2=mysqli_fetch_assoc($result1);
          $password=$q2['password'];

          if($password1==$password2){

              if($password0==$password){

                $Query="UPDATE `admin_details` SET `password`='$password1'   WHERE batch_no='$admin_batchno' ";
                $Execute=mysqli_query($conn,$Query);
                     if($Execute){
                    echo "<h3 style='color:red'>Password Changed Successfully</h3>";
                    // Redirect_to("subadmin_profile.php");
                    }else{
                    echo "<h3 style='color:red'>Something Went Wrong. Try Again !</h3>";
                    // Redirect_to("subadmin_profile.php");
                     }

              }
              
            else {
           echo "<h3 style='color:red'>New Password and Confirm Password Does Not Match ,Try Again !</h3>";
              // Redirect_to("subadmin_profile.php");
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
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
 
</head>

<body class="">

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
                        <label>Batch Number</label>
                        <input type="text" class="form-control" disabled="" placeholder="CitizenShip Number" value="<?php echo($admin_batchno)?>">
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
                        <label>Joined Date</label>
                        <input type="text" class="form-control" disabled="" placeholder="Postal Code" value="<?php echo($datetime) ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" disabled="" placeholder="Home Address" value="<?php echo($type)?>">
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


   <script src="bootstrap/jquery/jquery-3.4.1.js" ></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
</body>
</html>