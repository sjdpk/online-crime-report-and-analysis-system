<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>crime report system</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,900" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" >

  <!-- Bootstrap CDN and external CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
  <link rel="stylesheet" href="indexstyle.css">
   <style>
          html{
              scroll-behavior: smooth;
            }
           .MobileContent {
               display: none;
             text-align:center;
           }
          @media screen and (min-width: 768px) {
           .MobileContent {
               display:block;
           }
          }
          .nav-link{
            color: white;
            font-style:italic;
            font-weight: normal;
          }
          .navbar a:hover:not(.active) {
              background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
              color: white;
              /*border-radius: 50%;*/
            }

         
        </style>
  </head>
  <body>

    <!-- This is the FINISHED VERSION  -->
    <!-- Main Section -->

    <section id="main">
      <div class="container">
        <!-- Navbar Here -->

        
  <nav class="navbar navbar-expand-md navbar-dark bg-transparent pt-5">
     <span  class="navbar-brand logo font-italic">CRAS</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse ml-auto" id="navbarColor01" >
        <ul class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">
                            Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">
                            Service
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">
                            Contact
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_login.php">
                            Login
            </a>
          </li>
           <li class="nav-item">
             <a class="nav-link" href="user_register.php">
                            Signup
            </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#">
                            Notice
            </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <!-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> -->
        </form>
      </div>
</nav>



      </div><br>


    <center><h2 class="text-white font-weight-bold ">Wel-Come</h2>  <br> 
            <h3 class="font-italic text-white font-weight-bold">Report Any Crime , Using Our Simple, Confidential Online Service.</h3>
    </center>
       
      <div class="MobileContent"><br><br><br>
        <a href="user_login.php"><button class="btn btn-dark btn-lg btn-space"  id="MobileContent2"><i class="fas fa-user-check"></i>&nbsp; Login</button></a>
        <a href="user_register.php"><button class="btn btn-outline-light btn-lg btn-space text-dark"  id="MobileContent3"><i class="fas fa-user-edit"></i>&nbsp; Signup</button></a>
     </div>
        
      </div>
    </section>


    <!-- Overview Section -->


    <section id="service" class="responsive"><br>
        
        <div class="container-fluid">
          <h2 class="text-center section-title font-weight-bold font-italic">Services</h2>
            <div class="row overview-row">

                <div class="col-md-4 text-center"></i>
                    <i class="far fa-object-group overview-icon"></i>
                <h3 class="overview-header">Report A Crime</h3>
            <p class="info-width mx-auto">Report Any Crime , Using Our Simple, Confidential Online Service.</p></div>


            <div class="col-md-4 text-center"></i>
                <i class="fas fa-cogs overview-icon"></i>
                <h3 class="overview-header">Register A Complaint</h3>
                <p class="info-width mx-auto">Register any type of crime through this form. </p>
                
        </div>


        <div class="col-md-4 text-center"></i>
            <i class="fas fa-phone overview-icon"></i>
            <h3 class="overview-header">24/7 Support</h3>
            <p class="info-width mx-auto">We Provide 24/7 Support With Our Experienced And Dedicated Staff .</p>
    </div>
    </section>

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


<div class="container bg-dark">
        <div class="row text-center custom-list">
          <div class="col-sm-4">
            <ul class="list-unstyled">
            <li><a href="admin_login.php" class="nav-link">Admin-Login</a></li>
          </ul>

          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
              <li><a href="subadmin_login.php" class="nav-link">Sub_Admin-Login</a></li>
              
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
             
              <li><a href="user_login.php" class="nav-link">User-Login</a></li>

            </ul>
          </div>
          
        </div>
        
      </div>

    <footer style="background-color: #373a48"><br>
      <div class="container">
        <div class="row text-center custom-list">
          <div class="col-sm-4">
            <ul class="list-unstyled">
            <li><a href="#main" class="nav-link">Home</a></li>

            <li style="margin-left: 60%;"><a href="user_login.php" class="nav-link">Login</a></li>
            
          </ul>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
              <li><a href="#setvice" class="nav-link">Service</a></li>
              
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="list-unstyled">
             
              <li><a href="#contact" class="nav-link">Contact</a></li>

              <li style="margin-right: 100%;"><a href="user_register.php" class="nav-link">Register</a></li>
            </ul>
          </div>
          
        </div>
        
      </div>


     
      
  
      <div class="footer-copyright text-center text-white" style="background-color: black;">
              <p >&copy;2019 All Rights Reserved | Designed By <span class="text-primary">CRAS TEAM</span></p>
          </div>
    </footer>





 <a style="position:fixed;bottom:0px;right:0px;margin:0;padding:5px 3px;" href="#main"><button class="btn btn-floating waves-effect btn-outline-primary" style="border-radius: 50%;margin-right: 15px;"><img src="image/top.png" style="height: 40px;width:20px;"></button></a>



    <!-- Bootstrap's Javascript -->
<script src="bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>
