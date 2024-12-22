<?php

 session_start();

   function Redirect_to($New_Location){
    header("Location:".$New_Location);
  exit;
}

if(isset($_GET["u_id"])){

    $IdFromURL=isset($_GET['u_id']) ? $_GET['u_id'] : '';

    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    
     $subadmin_batchno=$_SESSION['subadmin_batchno'];
   
$Query="UPDATE `user_details` SET `status`='on'   WHERE u_id='$IdFromURL' ";
$Execute=mysqli_query($conn,$Query);
if($Execute){
  
   Redirect_to("subadmin_dashboard.php?option=registered_user");
   $_SESSION["SuccessMessage"]="User Approved Successfully";

  }else{
  $_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
  Redirect_to("subadmin_dashboard.php?option=registered_user");
}
}






?>
