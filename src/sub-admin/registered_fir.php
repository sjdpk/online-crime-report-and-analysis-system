
<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  }  
 if(!isset($_SESSION['x']))
    header("location:../subadmin_login.php");

$mysqli = new mysqli("localhost", "root", "", "ocras");

$count = mysqli_query($conn,"SELECT * FROM complaint");
$num_rows = mysqli_num_rows($count);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage FIR</title>
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
</head>
<body>
<section>
  <h3 class="text-capitalize text-center bg-light text-danger font-weight-bold"> Un-Approved FIR(s)</h3>
  <table class="table table-striped table-hover table-responsive">

  
            <thead class="thead-dark bg-dark text-white font-italic">
              <tr>
                <th>ID</th>
                <th>FIR_ID</th>
                
                <th>Subject</th>
                <th>Complaint-Details</th>
                <th>Victum-Email</th>
                <th>Phone-No</th>
                <th>Incident-Date/Time</th>
                <th>Accused Name</th>
                <th>Victum-Profile</th>
                
                <th>FIR_ID</th>
                <th>Police-Station</th>
                <th>Ward.No</th>
                <th>Other Police-Station</th>
                <th>Witness Name(s)</th>
                <th>Witness Address(s)</th>
                <th>File</th>
                <th>Handle_By</th>
                
                
              </tr>
            </thead>

            <tbody>

              <?php

   for ($i=1; $i <$num_rows+1; $i++) { 
     # code...

       
      $result=mysqli_query($conn,"SELECT * FROM complaint where id=$i ORDER BY id ASC ");
        $q2=mysqli_fetch_assoc($result);
        $submitted_by=$q2['submitted_by'];
        $id_no=$q2['id'];
        $identity_no=$q2['identity_no'];
         $police_station=$q2['police_station'];
          $police_ward=$q2['police_ward'];
           $other_policestation=$q2['other_policestation'];
            $fir_id=$q2['fir_id'];
             $victum_email=$q2['victum_email'];
              $crime_type=$q2['crime_type'];
               $crime_details=$q2['crime_details'];
                $incident_date=$q2['incident_date'];
                 $incident_time=$q2['incident_time'];
                  $incident_place=$q2['incident_place'];
                   $accused_name=$q2['accused_name'];
                    $witness_name=$q2['witness_name'];
                     $witness_address=$q2['witness_address'];
                      $fir_status=$q2['fir_status'];
                       $firsubmit_date=$q2['firsubmit_date'];

                    $incident_datetime=$incident_date." ".$incident_time
  
        
  
      ?>

            <tr>
              <td><?php echo $id_no;?></td>
              <td><?php echo $fir_id;?></td>
              
              <td><?php echo $crime_type ;?></td>
              <td class="text-justify"><?php echo $crime_details;?></td>
              <td class="text-justify"><?php echo $victum_email;?></td>
              <td>9876543210</td>
              <td><?php echo $incident_datetime;?></td>
              <td class="text-justify"><?php echo $accused_name;?></td>
              <td><a href="#">Profile</a></td>

              <td><?php echo $fir_id;?></td>
              <td><?php echo $police_station;?></td>
              <td><?php echo $police_ward;?></td>
              <td><?php echo $other_policestation?></td>
              <td><?php echo $witness_name;?></td>
              <td><?php echo $witness_address;?></td>
              <td class="text-justify">photo.jpg</td>
              <td>Name of Police</td>
              
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
</html>