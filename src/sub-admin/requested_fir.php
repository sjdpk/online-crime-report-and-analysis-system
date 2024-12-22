<?php  
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  }  
 if(!isset($_SESSION['x']))
    header("location:../subadmin_login.php");
  $subadmin_batchno=$_SESSION['subadmin_batchno'];

$link = mysqli_connect("localhost", "root", "", "ocras"); 
  
if ($link == false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 
  
$sql = "SELECT * FROM complaint where fir_status='pending'"; 


if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { ?>

  <h3 class="text-capitalize text-center bg-light text-danger font-weight-bold"> FIR Request </h3>
  <table class="table table-striped table-hover table-responsive">
            <thead class="thead-dark bg-dark text-white font-italic">
              <tr>
                <th>ID</th>
                <th>FIR_ID</th>
                <th>Submitted_By</th>
                <th>Subject</th>
                <th>Complaint-Details</th>
                <th>Victum-Email</th>
                <th>Phone-No</th>
                <th>Incident-Date/Time</th>
                <th>Accused Name</th>
                <th>Victum-Profile</th>
              
                <th>Police-Station</th>
                <th>Ward.No</th>
                <th>Witness Name(s)</th>
                <th>Witness Address(s)</th>
                <th>File</th>
                <th>Send</th>
                <!-- <th>Handle_BY</th> -->
                <th>Approve</th>
                <th>Delete</th>
                
              </tr>
            </thead>

            <?php
            while ($row = mysqli_fetch_array($res)) { 
                $submitted_by=$row['submitted_by'];
                 $Id=$row['id'];
                  $identity_no=$row['identity_no'];
                   $police_station=$row['police_station'];
                    $police_ward=$row['police_ward'];
                     $other_policestation=$row['other_policestation'];
                      $fir_id=$row['fir_id'];
                       $victum_email=$row['victum_email'];
                        $crime_type=$row['crime_type'];
                         $crime_details=$row['crime_details'];
                          $incident_date=$row['incident_date'];
                           $incident_time=$row['incident_time'];
                            $incident_place=$row['incident_place'];
                             $accused_name=$row['accused_name'];
                              $witness_name=$row['witness_name'];
                               $witness_address=$row['witness_address'];
                                $fir_status=$row['fir_status'];
                                 $firsubmit_date=$row['firsubmit_date'];
                                  $incident_datetime=$incident_date." ".$incident_time;
            
  ?>
            <tbody>
            <tr>
              <td><?php echo htmlentities($Id); ?></td>
              <td><?php echo htmlentities($fir_id); ?></td>
              <td><?php echo htmlentities($submitted_by); ?></td>
              <td><?php echo htmlentities($crime_type); ?></td>
              <td><?php echo htmlentities($crime_details); ?></td>
              <td><?php echo htmlentities($victum_email); ?></td>
              <td><?php echo htmlentities($incident_datetime); ?></td>
              <td><?php echo htmlentities($incident_datetime); ?></td>
              
              <td style="color: red;font-weight: bold;"><?php echo htmlentities($accused_name); ?></td>
              <td><?php echo htmlentities($fir_id); ?></td>
              <td><?php echo htmlentities($police_station); ?></td>
              

              <td><?php echo htmlentities($police_ward); ?></td>
              <td><?php echo htmlentities($witness_name); ?></td>
              <td><?php echo htmlentities($witness_address); ?></td>
              <td><?php echo htmlentities($witness_address); ?></td>

              <td> <a href="fir_accept_email.php?id=<?php echo $Id; ?>" class="btn btn-primary">Email</a></td>

              <td> <form action="approvefir.php?id=<?php echo $Id; ?>" method="POST"><input type="submit" name="approveBy" value="Approve" class="btn btn-success"></form></td>

              <td> <a href="#" class="btn btn-danger">Delete</a>  </td>
             
            </tr>
          </tbody>
          <?php } ?>
          
          </table>
 <?php 
        
    } 
   
} 


mysqli_close($link);
?> 

<?php include('asset.php');?>