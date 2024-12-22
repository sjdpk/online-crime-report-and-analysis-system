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
  
$sql = "SELECT * FROM complaint where fir_status='solved'"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { ?>

  <h3 class="text-capitalize text-center bg-light text-danger font-weight-bold">Solved FIR Details</h3>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 
  <table class="table table-striped table-hover table-responsive">
            <thead class="thead-dark bg-dark text-white font-italic">
              <tr>
                <th>ID</th>               
                <th>FIR_ID</th>
                <th>FIR_Subject</th>
                <th>View_FIR</th>
                <th>REG_Date</th>
                <th>Police_Head</th>
                <th>Victum_Profile</th>
                <th>FIR_STATUS</th>
                <th>Closed _Date</th>
                
                
              </tr>
            </thead>

            <?php
            while ($row = mysqli_fetch_array($res)) { ?>
            <tbody>
            <tr>
              
              <td><?php echo $row['id']; ?></td> 
              <td><?php echo $row['fir_id']; ?></td> 
              <td><?php echo $row['crime_type']; ?></td> 
              <td>View Fir</td> 

              <td ><?php echo $row['firsubmit_date']; ?></td>
              <td><?php echo $subadmin_batchno; ?></td>
              
              <td><a href="#">Victum_Profile</a></td>
              <td><?php echo $row['fir_status']; ?></td>
              <td >2019-12-20</td>

            </tr>
          </tbody>
          <?php } ?>
          
          </table>
 <?php 
        
    } 
   
} 
 
mysqli_close($link); 
?> 



<!-- Bootstrap js -->
<script src="../bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="../bootstrap/popper.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.js" ></script>
<script src="../bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>