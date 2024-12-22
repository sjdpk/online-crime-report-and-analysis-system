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
  
$sql = "SELECT * FROM complaint where fir_status='closed'"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { ?>
        <h3 class="text-capitalize text-center bg-light text-danger font-weight-bold"> Unsolved FIR Details</h3>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 
        <table class="table table-striped table-hover table-responsive">
            <thead class="thead-dark bg-dark text-white font-italic">
              <tr>
                <th>ID</th>
                <th>FIR_ID</th>
                <th>Submitted By</th>
                <th>Police_Head</th>

                <th>FIR_Subject</th>
                <th>View_FIR</th>
                <th>REG_Date</th>
                <th>FIR_STATUS</th>
                <th>Closed Date</th>
                <th>Remark</th>
              
                
              </tr>
            </thead>

        
        <?php
        while ($row = mysqli_fetch_array($res)) { ?>
          <tbody>
           <td><?php echo $row['id']; ?></td> 
           <td><?php echo $row['fir_id']; ?></td> 
           <td><?php echo $row['submitted_by']; ?></td> 
            <td><?php echo $subadmin_batchno; ?></td> 
           <td><?php echo $row['crime_type']; ?></td> 
           <td><a href="#">View Fir</a></td> 
           <td><?php echo $row['firsubmit_date']; ?></td> 
          
           <td><?php echo $row['fir_status']; ?></td>
           <td>2019-3-3</td> 
           <td> <form action="approvefir.php?id=<?php echo $row['id']; ?>" method="POST"><input type="submit" name="ReinvestedBy" value="Re-INVESTIGATE" class="btn btn-success"></form></td>
              
          </tbody>
             
           
       <?php } ?>
        </table>
        <?php 
        
    } 
   
} 
 
mysqli_close($link); 
?> 