<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  } 
 if(!isset($_SESSION['x']))
    header("location:../user_login.php");
  
    $email=$_SESSION['user_email'];

 $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }

     $result=mysqli_query($conn,"SELECT identity_no FROM user_details where email='$email' ");
        $q2=mysqli_fetch_assoc($result);
        $identity_no=$q2['identity_no'];
    
    $query=("select fir_id,crime_type,incident_date,incident_place,fir_status from complaint where identity_no='$identity_no' AND victum_email= '$email' order by id desc");
    $result=mysqli_query($conn,$query);  
    


?>

<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>

  
  <!-- Bootstrap css -->
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">  
  <!-- Vanilla css -->
  <link rel="stylesheet" type="text/css" href="fir_style.css">
  <style type="text/css">html{ scroll-behavior: smooth; }</style>

  
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
        <a href="user_dashboard.php?#contact" class="nav-link text-white font-italic">CONTACT US</a>
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

<section style="height: 100vh;">


  <div style="background-color: green"><h3 class="text-capitalize text-center bg-light text-danger font-weight-bold">FIR STATUS</h3></div>


      <table class="table table-bordered">
       <thead class="thead-dark" style="background-color: black; color: white;">
         <tr>
          <th scope="col">FIR_Id</th>
          <th scope="col">Type of Crime</th>
          <th scope="col">Date of Crime</th>
          <th scope="col">Location of Crime</th>
          <th scope="col">Fir_Status</th>

           <!-- <th scope="col">Approved_By</th>
          <th scope="col">Handle_By</th>
 -->
        </tr>
      </thead>


    <?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['fir_id']; ?></td>
        <td><?php echo $rows['crime_type']; ?></td>     
        <td><?php echo $rows['incident_date']; ?></td>          
        <td><?php echo $rows['incident_place']; ?></td>  
        <td><?php echo $rows['fir_status']; ?></td> 

        <!-- <td><?php //echo $rows['approved_by']; ?></td>     
        <td><?php //echo $rows['handle_by']; ?></td>  -->       
                 
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  


  
</table>
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





<!-- Bootstrap js -->
<script src="../bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="../bootstrap/popper.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.js" ></script>
<script src="../bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>