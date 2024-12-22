
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
        
        $result=mysqli_query($conn,"SELECT identity_no , contact_no FROM user_details where email='$email' ");
        $q2=mysqli_fetch_assoc($result);
        $identity_no=$q2['identity_no'];
        $contact_no=$q2['contact_no'];
    
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
      header("Location:user_dashboard.php");
    }
  }
    $firid= isset($_GET['id']) ? $_GET['id'] : '';

?>
