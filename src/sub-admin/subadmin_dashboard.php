<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:../subadmin_login.php");
    
    
    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
        $subadmin_batchno=$_SESSION['subadmin_batchno']; 

        $result1=mysqli_query($conn,"SELECT first_name, last_name FROM subadmin_details where batch_no='$subadmin_batchno' ");
        $q2=mysqli_fetch_assoc($result1);
        $first_name=$_SESSION['first_name']=$q2['first_name'];
        $last_name=$_SESSION['last_name']=$q2['last_name'];
      
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    display: none;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
    display: none;
  }
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="sidebar">
  <a  href="#"></a>
  <a  href="#"></a>
  <a href="subadmin_dashboard.php" style="text-decoration: none;background-color: red;">Dashboard</a>
  <a href="subadmin_dashboard.php?option=users_request" style="text-decoration: none;">Users Request</a>
   
  <a href="subadmin_dashboard.php?option=requested_fir" style="text-decoration: none;">FIR  Request </a>
  
    <a  href="subadmin_dashboard.php?option=running_case" style="text-decoration: none;">Running Case</a>

    <a href="subadmin_dashboard.php?option=unsolved_case" style="text-decoration: none;">Unsolved Case</a>

     <a  href="subadmin_dashboard.php?option=solved_case" style="text-decoration: none;">Solved Case</a>
     
<a href="subadmin_dashboard.php?option=registered_user" style="text-decoration: none;">Registered User</a>

  <a href="subadmin_dashboard.php?option=registered_fir" style="text-decoration: none;">Registered FIR</a>
 
 
  <a href="subadmin_dashboard.php?option=clearence_certi" style="text-decoration: none;">Clearence Certi.</a>
  <a href="subadmin_dashboard.php?option=contact_admin" style="text-decoration: none;">Contact Admin</a>
  <a href="subadmin_dashboard.php?option=contact_user" style="text-decoration: none;">Contact User</a>



         
         
</div>



   <nav class="navbar navbar-expand-md navbar-darktop fixed-top " style="background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);color: black;font-weight: bold;"> 
        <a class="navbar-brand" href="#">CRAS</a>

    <span style="margin-left: 10%"></span>
        
        <button class="navbar-toggler  bg-secondary" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span >Menu</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" class="text-secondary"><span class="text-secondary">DashBoard</span></a>
            </li>
           
            
          </ul>
          <ul class="navbar-nav text-justify">
               <li class="nav-item">
                <form action="" method="POST">
                  <input type="text" name="search" placeholder=" search What you Want !" class="text-justify btn btn-outline-success" style="padding: 5px;margin-top: 6px;
                  ">
                  
                </form>
                
               </li>&nbsp;&nbsp;
            

            <li class="dropdown" style="margin-top:9px;">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#" style="text-decoration: none;">
              <img src="img/email.png" style="height: 30px;width: 30px;">&nbsp;&nbsp;<!--  <span class="caret"></span> --></a>
              <ul id="g-account-menu" class="dropdown-menu" role="menu">
              <li><a href="#" class="btn btn-outline-primary" style="text-decoration: none;width: 100%;">&nbsp;&nbsp;New user message</a></li>&nbsp;
              <li><a href="#" class="btn btn-outline-primary" style="text-decoration: none;width: 100%;">&nbsp;&nbsp;new admin message</a></li>
              </ul>
             </li>

             <li class="dropdown" style="margin-top:9px;">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#" style="text-decoration: none;">
              <img src="img/notification.png" style="height: 30px;width: 30px;">&nbsp;&nbsp; <!-- <span class="caret"></span> --></a>
              <ul id="g-account-menu" class="dropdown-menu" role="menu">
              <li><a href="#" class="btn btn-warning" style="text-decoration: none;width: 100%;">&nbsp;&nbsp;New user request</a></li>&nbsp;
              <li><a href="#" class="btn btn-warning" style="text-decoration: none;width: 100%;">&nbsp;&nbsp;new fir request</a></li>
              </ul>
             </li>

           <li class="dropdown" style="margin-top:9px;">
            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#" style="text-decoration: none;">
            <img src="img/user.png" style="height: 30px;width: 30px;">&nbsp;<?php echo $first_name ;?><!--  <span class="caret"></span> --></a>
            <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="subadmin_dashboard.php?option=subadmin_profile" class="btn btn-primary" style="text-decoration: none;width: 100%;">&nbsp;&nbsp;Profile</a></li>&nbsp;
            <li><a href="subadmin_logout.php" class="btn btn-danger" style="text-decoration: none;width: 100%;">&nbsp;&nbsp;Logout</a></li>
            </ul>
          </li>
           
          </ul>
       
    

        
        </div>
     
      </nav>
      <br><br><br>

  <div class="content">
        <?php
    @$opt=$_GET['option'];

    if($opt!="")
    {
      if($opt=="users_request")
      {
      include('users_request.php');
      }
      else if($opt=="requested_fir")
      {
      include('requested_fir.php');
      }

      else if($opt=="running_case")
      {
      include('running_case.php');
      }
      else if($opt=="unsolved_case")
      {
      include('unsolved_case.php');
      }

      else if($opt=="solved_case")
      {
      include('solved_case.php');
      }

      else if($opt=="registered_fir")
      {
      include('registered_fir.php');
      }

      else if($opt=="registered_user")
      {
      include('registered_user.php');
      }


      else if($opt=="clearence_certi")
      {
      include('character_verification.php');
      }

       else if($opt=="contact_admin")
      {
      include('contact_admin.php');
      }

      else if($opt=="contact_user")
      {
      include('contact_user.php');
      }
       else if($opt=="subadmin_profile")
      {
      include('subadmin_profile.php');
      }
    }
    else
    {
      include 'subadmin_main.php';

    }
    ?>
 <footer style="clear: both;" class="badge-secondary "><br>
      <style type="text/css">.nav-link{color: white;font-style: italic;}</style>
      <div class="container">
        <div class="row text-center custom-list">
          <div class="col-sm-4">
            <ul class="list-unstyled">
            <li><a href="subadmin_dashboard.php" class="nav-link">Home</a></li>

            <li ><a href="police_station.php" class="nav-link">Police_Station</a></li>
            
          </ul>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
              <li><a href="subadmin_dashboard.php?option=requested_fir" class="nav-link">Fir Request</a></li>

               <li><a href="subadmin_dashboard.php?option=contact_admin" class="nav-link">Contact_Admin</a></li>
              
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
             
              <li><a href="subadmin_dashboard.php?option=users_request" class="nav-link">User Request</a></li>

              <li><a href="subadmin_logout.php" class="nav-link">Logout</a></li>
            </ul>
          </div>
          
        </div>
        
      </div>
      
  
      <div class="footer-copyright text-center text-white" style="background-color: black;">
            <p >&copy;2019 All Rights Reserved | Developed By <span class="text-primary">Deepak And Arun </span></p>
          </div>
    </footer>
 

</div>

   

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
</body>
</html>
