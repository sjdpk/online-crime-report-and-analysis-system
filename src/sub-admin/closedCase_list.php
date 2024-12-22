<?php

 session_start();

   function Redirect_to($New_Location){
    header("Location:".$New_Location);
  exit;
}

if(isset($_GET["id"])){

    $IdFromURL=isset($_GET['id']) ? $_GET['id'] : '';

    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    
     $subadmin_batchno=$_SESSION['subadmin_batchno'];
   
$Query="UPDATE `complaint` SET `fir_status`='closed'   WHERE id='$IdFromURL' ";
$Execute=mysqli_query($conn,$Query);
if($Execute){
  $_SESSION["SuccessMessage"]="FIR Approved Successfully";
  Redirect_to("subadmin_dashboard.php?option=unsolved_case");
  }else{
  $_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
  Redirect_to("subadmin_dashboard.php?option=running_case");
}
}
?>
