<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  }  
 if(!isset($_SESSION['x']))
    header("location:../admin_login.php"); 


    
    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
        $admin_batchno=$_SESSION['admin_batchno']; 

        $result1=mysqli_query($conn,"SELECT first_name, last_name FROM admin_details where batch_no='$admin_batchno' ");
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
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="sidebar">
  <a  href="#"></a>
  <a  href="#"></a>

   <a href="admin_dashboard.php" style="text-decoration: none;background-color: red;">Dashboard</a>



  <a href="admin_dashboard.php?option=add_subadmin"  style="text-decoration: none;">Add Sub-Admin</a>

  <a href="admin_dashboard.php?option=add_admin" style="text-decoration: none;">Add Admin</a>


<a href="admin_dashboard.php?option=admin_contact" style="text-decoration: none;">Admin-Admin Contact</a>

<a href="admin_dashboard.php?option=subadmin_contact" style="text-decoration: none;">Contact Sub-Admin</a>

<a href="admin_dashboard.php?option=managment" style="text-decoration: none;">Managment</a>
<a href="admin_dashboard.php?option=publish_notice" style="text-decoration: none;">Publish Notice</a>



         
         
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
              <a class="nav-link" href="#" class="text-secondary"><span class="text-secondary">&nbsp;<?php echo $first_name; ?>&nbsp;DashBoard</span></a>
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
              <img src="img/email.png" style="height: 30px;width: 30px;">&nbsp;&nbsp; Email or Message<span class="caret"></span></a>
              <ul id="g-account-menu" class="dropdown-menu" role="menu">
              <li><a href="#">&nbsp;&nbsp;New user message</a></li>
              <li><a href="#">&nbsp;&nbsp;new admin message</a></li>
              </ul>
             </li>

             <li class="dropdown" style="margin-top:9px;">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#" style="text-decoration: none;">
              <img src="img/notification.png" style="height: 30px;width: 30px;">&nbsp;&nbsp; Notification<span class="caret"></span></a>
              <ul id="g-account-menu" class="dropdown-menu" role="menu">
              <li><a href="#">&nbsp;&nbsp;New user request</a></li>
              <li><a href="#">&nbsp;&nbsp;new fir request</a></li>
              </ul>
             </li>

           <li class="dropdown" style="margin-top:9px;">
            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#" style="text-decoration: none;">
            <img src="img/user.png" style="height: 30px;width: 30px;">&nbsp; &nbsp;<?php echo $first_name ;?></a>
            <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="admin_dashboard.php?option=admin_profile">&nbsp;&nbsp;Profile</a></li>
            <li><a href="admin_logout.php">&nbsp;&nbsp;Logout</a></li>
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
      if($opt=="add_subadmin")
      {
      include('add_subadmin.php');
      }
      else if($opt=="add_admin")
      {
      include('add_admin.php');
      }

      else if($opt=="admin_contact")
      {
      include('admin_admin_contact.php');
      }
      else if($opt=="subadmin_contact")
      {
      include('subadmin_contact.php');
      }

      else if($opt=="managment")
      {
      include('managment.php');
      }
      else if($opt=="admin_profile")
      {
      include('admin_profile.php');
      }
      else if($opt=="publish_notice")
      {
      include('publish_notice.php');
      }

     

    }
    else
    {
      include 'admin_main.php';

    }
    ?>


</div>

 <footer style="background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898; 
 background-blend-mode: multiply,multiply;"><br>
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

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="bootstrap/jquery/jquery-3.4.1.js" ></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>

</body>
</html>
