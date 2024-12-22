 
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
        $result1=mysqli_query($conn,"SELECT first_name, last_name FROM user_details where email='$email' ");
        $q2=mysqli_fetch_assoc($result1);
        $first_name=$_SESSION['first_name']=$q2['first_name'];
        $last_name=$_SESSION['last_name']=$q2['last_name'];
      
?>
    

<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>

  
  <!-- Bootstrap css -->
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">  
  <!-- Vanilla css -->
  <link rel="stylesheet" type="text/css" href="user_dashboard_style.css">
  <style type="text/css">html{ scroll-behavior: smooth; }
       
  </style>

  
</head>
<body>  
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

    <div class="content" id="main">
      
      <h5 class="float-right user" style="margin-top: -30px; margin-right: 20px;">Hi, <?php echo ucfirst($_SESSION['first_name']); ?></h5>

      
      <div class="jumbotron text-center">
       

        <?php

        $result1=mysqli_query($conn,"SELECT * FROM  general_notice ORDER BY id DESC  ");
        $q2=mysqli_fetch_assoc($result1);
        $notice_subject=$q2['notice_subject'];
        $notice_details=$q2['notice_details'];
      

        echo '<h1 style="color:blue;">'. $notice_subject.'</h1>';
        echo '<h1>'. $notice_details.'</h1>';
          ?>
        
      </div>

    </div>


<!-- contact Section -->

<section class="container" style="margin-top: 2%;" id="contact">
  <!-- <div class="row">
      <div class="col-3"></div>
      <div class="col-8">  -->

        <div class="card" style="width: 100%;">
          <div  style="border-radius:10px;height: 100px;background-color: #6340bc ">
          <h1 class="text-center text-white" style="padding: 25px;">Contact</h1>
        </div>


          <div class="card-body">
           <form><br>
            <div class="form-group">
                  <input type="email" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="&nbsp;&nbsp;Email" required="required" style="border-radius:25px;height: 50px;">

            </div>

            <div class="form-group">
                  <input type="text" class="form-control bg-light" id="subject"  placeholder="&nbsp;&nbsp;Subject" required="required" style="border-radius:25px;height: 50px;">

            </div>

            <div class="form-group">
                  <textarea class="form-control bg-light" placeholder="&nbsp;&nbsp;Enter your Message" required="required" style="border-radius:25px;height: 100px;" rows="5" cols="5"></textarea>  

            </div >


            <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-block text-white" name="submit" style="border-radius: 30px;height: 50px;background-color: #2e1f84 ">Send</button>

            </div >
          </form>
        

          </div>
        </div>
      
</section>
    
    
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

 <a style="position:fixed;bottom:0px;right:0px;margin:0;padding:5px 3px;" href="#main"><button class="btn btn-floating waves-effect btn-outline-primary" style="border-radius: 50%;margin-right: 15px;"><img src="../image/top.png" style="height: 40px;width:20px;"></button></a>



<!-- Bootstrap js -->
<script src="../bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="../bootstrap/popper.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.js" ></script>
<script src="../bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>