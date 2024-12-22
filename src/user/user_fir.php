
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
        
        $result=mysqli_query($conn,"SELECT identity_no , contact_no,zcode,city FROM user_details where email='$email' ");
        $q2=mysqli_fetch_assoc($result);
        $identity_no=$q2['identity_no'];
        $contact_no=$q2['contact_no'];
        $zcode=$q2['zcode'];
        
        $waddress=$q2['city'];
    
        $result1=mysqli_query($conn,"SELECT first_name, last_name FROM user_details where email='$email' ");
        $q2=mysqli_fetch_assoc($result1);
        $first_name=$_SESSION['first_name']=$q2['first_name'];
        $last_name=$_SESSION['last_name']=$q2['last_name'];
        
        $fullname=ucwords($first_name)." ".ucwords($last_name);

$firid= isset($_GET['id']) ? $_GET['id'] : '';
// time for fir 
            
if(isset($_POST['submit'])){
     

    $conn=mysqli_connect('localhost','root','','ocras');
    if(!$conn)
    {
        die('could not connect: '.mysqli_error());
    }



    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
      $identity_no=$identity_no;
      $submitted_by=$fullname;

      $police_station=$_POST['police_station'];
      $ward_no=$_POST['police_ward'];
      $otherpolice_station=$_POST['other_policestation'];
      $fir_id=$_POST['fir_id'];
      $victum_email=$_SESSION['user_email'];
      $type_crime=$_POST['crime_type'];
      $complaint_details=$_POST['crime_details'];
      $incident_date=$_POST['incident_date'];
      $incident_time=$_POST['incident_time'];
      $incident_place=$_POST['incident_place'];
      $accused_name=$_POST['accused_name'];
      $witness_name=$_POST['witness_name'];
      $witness_address=$_POST['witness_address'];
      $fir_status="pending";
      $firsubmit_date=$_POST['firsubmit_date'];
      $phone=$_POST['phone'];

     
          
       $comp="insert into complaint(submitted_by,identity_no,police_station,police_ward,other_policestation,fir_id,victum_email,phone,crime_type,crime_details,incident_date,incident_time,incident_place,accused_name,witness_name,witness_address,fir_status,firsubmit_date) 

          values('$submitted_by','$identity_no','$police_station','$ward_no','$otherpolice_station','$fir_id','$victum_email','$phone','$type_crime','$complaint_details','$incident_date','$incident_time','$incident_place','$accused_name','$witness_name','$witness_address','$fir_status','$firsubmit_date')";

      mysqli_select_db($conn,"ocras"); 
      $res=mysqli_query($conn,$comp);
      
      if(!$res)
      {
        $message1 = "Complaint already filed";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
      else
      {
          header("location:user_dashboard.php");
          $message = "Complaint Registered Successfully";
          echo "<script type='text/javascript'>alert('$message');</script>";
          
      }
    }
    else
    {
     $message = "Enter Valid Complaint";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
    $firid= isset($_GET['id']) ? $_GET['id'] : '';

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
  <span class="navbar-brand text-primary font-italic font-weight-bold"> <?php echo $fullname; ?></span>
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

    <!-- end of navigation -->


<div class="content" id="main">
      <section class="container-fluid">
        <section class="row justify-content-center">
          <section class="col-12 col-sm-6 col-md-6">
            <form class="form-container" action="user_fir_process.php" method="POST" enctype="multipart/form-data">
              <h2 class="text-center font-weight-bold">FILE FIR</h2>
              <h3 class="text-left my-4">Submit To Police Station</h3>
               
               <div class="form-group">
                  <label for="othersstation" class="font-weight-bold font-italic">Name<span class="text-danger"> : </span> <?php echo $fullname; ?> </label>
                  <br><i class="text-muted">CitizenShip No :  </i>
                  <input type="text" disabled="disabled"  name="identity_no" placeholder="Citizenship Number"  value=<?php echo "$identity_no"; ?>>         
              </div>
              
               <div class="form-row">
                
                <div class="col">
                  <label for="ps_name">Police Station Name</label>
                    <select id="ps_name" class="form-control" name="police_station" required="required">
                      <option value="">--Select Police Station--</option>
                      <option value="Balkumari">Balkumari</option>
                      <option value="Koteshwor">Koteshwor</option>
                      <option value="Baneshwor">Baneshwor</option>
                      <option value="PutaliSadak">PutaliSadak</option>
                      <option value="NewRoad">NewRoad</option>
                      <option value="Satdobato">Satdobato</option>
                      <option value="Kalanki">Kalanki</option>
                      <option value="BusPark">BusPark</option>
                      <option value="Teku">Teku</option>
                      <option value="Others">Others</option>
                      
                    
                    </select>
                </div>
                <div class="col">
                  <label for="ward_no">Ward No</label>
                    <input type="text" class="form-control" placeholder="Enter Ward No" name="police_ward" id="ward_no" required="required">
                </div>
              </div> <br> 

              <div class="form-group">
                  <label for="othersstation" class="font-weight-bold font-italic">If Others<span class="text-danger">*</span></label>
                  <i class="text-muted">Enter Full Address Details of Station</i>
                    <input type="text" class="form-control" name="other_policestation" placeholder="Enter Full Address Details of Station"  id="othersstation" >
              </div>

              <h3 class="text-left my-4">Details of Complaint/Information to Police</h3>
                
            <div class="form-row">
                <div class="col">
                  <label for="fid">FIR Id</label>
                    <input type="text" class="form-control" placeholder="Enter FIR id" name="fir_id" id="fir_id" value="<?php echo(mt_rand(999,9999));?>">
                </div>
                <div class="col">
                  <label for="vid">Victim Email</label>
                    <input type="email" class="form-control" placeholder="Enter Victim Email" name="victum_email" id="user_email" disabled="disabled" value=<?php echo $email ;?>> 
                </div>
              </div><br>

                <div class="form-group">
                  <label for="Types Of Crime">Types Of Crime</label>
                    <input type="text" class="form-control" name="crime_type" placeholder="Enter Types Of Crime"  id="Types Of Crime" required="required">
                  </div>
                <div class="form-group">
                  <label for="c_details">Complaint Details</label>
                    <textarea class="form-control" rows="5" id="c_details" name="crime_details" required="required"></textarea>
                </div>

            <div class="form-row">
                <div class="col">
                  <label for="i_date">Incident Date</label>
                    <input type="date" class="form-control" placeholder="Enter Incident Date" name="incident_date" id="i_date" required="required">
                </div>
                <div class="col">
                  <label for="i_time">Incident Time</label>
                    <input type="time" class="form-control" placeholder="Enter Incident Time" name="incident_time" id="i_time" required="required">
                </div>
                <div class="col">
                  <label for="i_place">Incident Place</label>
                    <input type="text" class="form-control" placeholder="Enter Incident Place" name="incident_place" id="i_place" required="required">
                </div>
              </div> 
                <div class="form-group">
                  <label for="a_name">Accused Name</label>
                    <input type="text" class="form-control" name="accused_name" placeholder="Enter Accused Name" id="a_name" value="Unknown">
                  </div> 
                <div class="form-group">
                
                  <label for="w_name">Witness Name(s)</label>
                    <input type="text" class="form-control" placeholder="Enter Witness Name" name="witness_name" id="w_name" required="required" value=<?php echo $fullname; ?>> 
                
              </div>  
              <div class="form-group">
                
                  <label for="w_address">Witness Address(s)</label>
                    <input type="text" class="form-control" rows="5" id="witness_address" name="witness_address" required="required" value=<?php echo $waddress; ?>>
              </div>



                <div class="form-row">
                <div class="col">
                  <label for="f_date">FIR Submit Date</label>
                    <input type="date" class="form-control" placeholder="Enter FIR Submission Date" name="firsubmit_date" id="f_date" required="required">
                </div>
                <div class="col">
                  <label for="f_time">FIR Submit Time</label>
                    <input type="time" class="form-control" placeholder="Enter FIR Submission Time" name="f_time" id="f_time" required="required">
                </div>
              </div>
             






                  <h3 class="text-left my-4">CONTACT INFO</h3>
           
               
              
             
                <div class="form-group">
                  <label for="p_code">Postal Code</label>
                    <input type="text" class="form-control" placeholder="Enter Postal Code" name="p_code" id="p_code" required="required" value="<?php echo $zcode; ?>">
                </div>

             
                  <div class="form-group">
                  <label for="phone">Phone No</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" required="required" id="phone"  value=<?php echo $contact_no;?>> 
                  </div>

                  <div class="form-group">
                  <label for="e_id">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email Address" required="required" id="email" disabled="disabled" value=<?php echo $_SESSION['user_email']; ?>>
                  </div>



                  <div class="form-check checked">
                <label class="form-check-label my-3">
                    <input type="checkbox" class="form-check-input" value="true" required="required">&nbsp;I, hereby verify that the above details I gave in the FIR are to be true to my knowledge. 
                </label>
              </div>
              <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                  </div>
            </form>
            
          </section>          
        </section>
      </section>
    </div>



<!-- contact Section -->


    


    
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