<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  } 
    if(!isset($_SESSION['x']))
        header("location:../user_login.php");
    
    
    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    $email=$_SESSION['user_email'];



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



<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  } 
    if(!isset($_SESSION['x']))
        header("location:../user_login.php");
    
    
    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    $email=$_SESSION['user_email'];
?>



<section>
  <h2 class="text-capitalize text-center font-weight-bold font-italic"> Approved Users</h2>
  <table class="table table-striped table-hover table-responsive">
            <thead class="thead-dark bg-dark text-white font-italic">

 

              <tr>
                     <th style="width:6%">Police Station Id</th>  
                      <th style="width:8%">Police Station Name</th>  
                      <th style="width:10%">Officer in Charge</th>  
                      <th style="width:10%">Phone Number</th>  
                      <th style="width:7%">City</th>  
                      <th style="width:7%">State</th>  
              </tr>
            </thead>
 <?php
   global $conn;
    $rs = @mysqli_select_db(  $conn ,"ocras")  or die( "Err:Db" );
   $sql="SELECT * FROM police_station  ORDER BY id desc";

    $rs1 = mysqli_query(  $conn,$sql );
    $SrNo=0;

     while( $row = mysqli_fetch_array( $rs1 )){

        $station_id=$row["station_id"];
        $station_name=$row["station_name"];
        $station_incharge=$row["station_incharge"];
        $station_phone=$row["station_phone"];
         $station_email=$row["station_email"];
        $station_address=$row["station_address"];
         $SrNo++;


?>

            <tbody>

            <tr>
              <td><?php echo htmlentities($station_id); ?></td>
             <td><?php echo htmlentities($station_name); ?></td>
              <td><?php echo htmlentities($station_incharge); ?></td>
              <td><?php echo htmlentities($station_phone); ?></td>
              <td><?php echo htmlentities($station_email); ?></td>
              
              <td><?php echo htmlentities($station_address); ?></td>

            </tr>
<?php } ?>
            
             
          </tbody>
          
          </table>
</section>




<!-- Bootstrap js -->
<script src="../bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="../bootstrap/popper.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.js" ></script>
<script src="../bootstrap/js/bootstrap.min.js" ></script>
</body>
</html><script src="../bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="../bootstrap/popper.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.js" ></script>
<script src="../bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>