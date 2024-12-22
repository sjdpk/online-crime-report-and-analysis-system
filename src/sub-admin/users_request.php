<?php
   
  if (session_status() == PHP_SESSION_NONE) {
  session_start();
  }
    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    
    if(!isset($_SESSION['x']))
    header("location:../subadmin_login.php");
    
         $subadmin_batchno=$_SESSION['subadmin_batchno'];

        $result=mysqli_query($conn,"SELECT u_id,first_name,last_name,contact_no,city,state,email,identity_no,status,type FROM user_details  WHERE status='pending ORDER BY u_id desc");
        
        $q2=@mysqli_fetch_assoc($result);
        $u_id=$q2['u_id'];
        $first_name=$q2["first_name"];
        $last_name=$q2["last_name"];
        $contact_no=$q2['contact_no'];
        $city=$q2['city'];
        $state=$q2['state'];
        $email=$q2['email'];
        $identity_no=$q2['identity_no'];
        $status=$q2['status'];
        $type=$q2['type'];
    ?>


<!DOCTYPE html>
<html>
<head>
  <title>Manage Users</title>
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
</head>
<body>



<section>
  <h2 class="text-capitalize text-center bg-light text-danger font-weight-bold"> Un-Approved Users</h2>
  <table class="table table-striped table-hover table-responsive">
            <thead class="thead-dark bg-dark text-white font-italic">
            
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact_No</th>
                <th>City / State</th>
                <th>Email</th>
                
                <th>ID_no</th>
                <th>Send</th>
                <th>Approve</th>
                <th>Delete</th>
              </tr>

            </thead>

            <tbody>


  <?php
   global $conn;
    $rs = @mysqli_select_db(  $conn ,"ocras")  or die( "Err:Db" );
   $sql="SELECT * FROM user_details WHERE status='off' ORDER BY u_id desc";

    $rs = mysqli_query(  $conn,$sql );
    $SrNo=0;
     while( $row = mysqli_fetch_array( $rs )){

        $u_id=$row['u_id'];
        $first_name=$row["first_name"];
        $last_name=$row["last_name"];
        $contact_no=$row['contact_no'];
        $city=$row['city'];
        $state=$row['state'];
        $email=$row['email'];
        $identity_no=$row['identity_no'];
        $status=$row['status'];
        $type=$row['type'];
        $SrNo++;


?>

            <tr>
              <td><?php echo htmlentities($u_id); ?></td>
              <td><?php echo htmlentities($first_name." " .$last_name); ?></td>
              <td><?php echo htmlentities($contact_no); ?></td>
              <td><?php echo htmlentities($city." / ".$state); ?></td>
              <td><?php echo htmlentities($email); ?></td>
             
              <td><?php echo htmlentities($identity_no); ?></td>
              <td> <a href="sendemail.php?u_id=<?php echo $u_id; ?>" class="btn btn-primary">Email</a></td> 
              <td> <a href="approveduser.php?u_id=<?php echo $u_id; ?>" class="btn btn-success">Approve</a></td>  

              <td> <a href="#" class="btn btn-danger">Delete</a>  </td>
             
            </tr>
            <?php } ?>
          </tbody>
          
          </table>


</section>

<section>
  


 <section>
  <h2 class="text-capitalize text-center font-weight-bold font-italic"> Approved Users</h2>
  <table class="table table-striped table-hover table-responsive">
            <thead class="thead-dark bg-dark text-white font-italic">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact_No</th>
                <th>City / State</th>
                <th>Email</th>
                
                <th>ID_no</th>
                <th>Approve-By</th>
                <th>UN-Approve</th>
              </tr>
            </thead>

            <tbody>

  <?php
   global $conn;
    $rs = @mysqli_select_db(  $conn ,"ocras")  or die( "Err:Db" );
   $sql="SELECT * FROM user_details WHERE status='on' ORDER BY u_id desc LIMIT 6;";

    $rs = mysqli_query(  $conn,$sql );
    $SrNo=0;

     while( $row = mysqli_fetch_array( $rs )){

        $u_id=$row['u_id'];
        $first_name=$row["first_name"];
        $last_name=$row["last_name"];
        $contact_no=$row['contact_no'];
        $city=$row['city'];
        $state=$row['state'];
        $email=$row['email'];
        $identity_no=$row['identity_no'];
        $status=$row['status'];
        $type=$row['type'];
        $SrNo++;


?>


            <tr>
              <td><?php echo htmlentities($u_id); ?></td>
             <td><?php echo htmlentities($first_name." " .$last_name); ?></td>
              <td><?php echo htmlentities($contact_no); ?></td>
              <td><?php echo htmlentities($city." / ".$state); ?></td>
              <td><?php echo htmlentities($email); ?></td>
             
              <td><?php echo htmlentities($identity_no); ?></td>


              <td> <span class="text-success"><?php echo $_SESSION['subadmin_batchno']; ?></span></td>

              <td> <a href="unapproveuser.php?u_id=<?php echo $u_id; ?>" class="btn btn-danger">Unapprove</a>  </td>
             
            </tr>
             
             <tr>
              <?php } ?>
              <td colspan="7"></td>
              
              <td colspan="2"><a href="subadmin_dashboard.php?option=registered_user" ><button class="btn btn-outline-primary">See_More</button></a></td>

            </tr>
            

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