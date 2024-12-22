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
  
$sql = "SELECT * FROM complaint where fir_status='running'"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { ?>

  <h3 class="text-capitalize text-center bg-light text-danger font-weight-bold"> FIR Request </h3>
  <table class="table table-striped table-hover table-responsive">
            <thead class="thead-dark bg-dark text-white font-italic">
              <tr>
                <th>ID</th>               
                <th>FIR_ID</th>
                <th>Submitted_By</th>
                <th>FIR_Subject</th>
                <th>View_FIR</th>
                
                <th>Police_Head</th>
                <th>Victum_Profile</th>
                <th>FIR_STATUS</th>
                <th>Registered _Date</th>
                <th>Solved</th>
                <th>Closed</th>
                
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
                          $fir_status=$row['fir_status'];
                           $firsubmit_date=$row['firsubmit_date'];
            
  ?>
            <tbody>
            <tr>
              <td><?php echo htmlentities($Id); ?></td>
              <td><?php echo htmlentities($fir_id); ?></td>
              <td><?php echo htmlentities($submitted_by); ?></td>
              <td><?php echo htmlentities($crime_type); ?></td>
              <td><?php echo htmlentities($crime_details); ?></td>
              <td><?php echo htmlentities($subadmin_batchno); ?></td>

              <td><?php echo "View Profile"; ?></td>

              <td><?php echo htmlentities($fir_status); ?></td>
              <td><?php echo htmlentities($firsubmit_date); ?></td>
              <td> <a href="solvedCase_list.php?id=<?php echo $Id; ?>" class="btn btn-success">Solved</a></td>

              <td> <a href="closedCase_list.php?id=<?php echo $Id; ?>" class="btn btn-danger">Closed</a>  </td>
             
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