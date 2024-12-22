<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  }  
 if(!isset($_SESSION['x']))
    header("location:../subadmin_login.php");

$subadmin_batchno=$_SESSION['subadmin_batchno'];
 $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Users</title>
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
</head>
<body>


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
                <th>ID_Proof</th>
                <th>ID_no</th>
                <th>Approve-Date</th>
                <th>Approve-By</th>
                <th>UN-Approve</th>
              </tr>
            </thead>
 <?php
   global $conn;
    $rs = @mysqli_select_db(  $conn ,"ocras")  or die( "Err:Db" );
   $sql="SELECT * FROM user_details WHERE status='on' ORDER BY u_id desc";

    $rs1 = mysqli_query(  $conn,$sql );
    $SrNo=0;

     while( $row = mysqli_fetch_array( $rs1 )){

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
        $datetime=date("Y-m-d");
        $SrNo++;


?>

            <tbody>

            <tr>
              <td><?php echo htmlentities($u_id); ?></td>
             <td><?php echo htmlentities($first_name." " .$last_name); ?></td>
              <td><?php echo htmlentities($contact_no); ?></td>
              <td><?php echo htmlentities($city." / ".$state); ?></td>
              <td><?php echo htmlentities($email); ?></td>
              <td>file.jpg</td>
              <td><?php echo htmlentities($identity_no); ?></td>

             
              <td><?php echo htmlentities($datetime); ?></td>

              <td> <span class="text-success"><?php echo $_SESSION['subadmin_batchno']; ?></span></td>

              <td> <a href="unapproveuser.php?u_id=<?php echo $u_id; ?>" class="btn btn-danger">Unapprove</a>  </td>
             
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