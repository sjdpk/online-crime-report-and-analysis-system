
<?php

function Redirect_to($New_Location){
    header("Location:".$New_Location);
	exit;
}
// Create connection
   $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }

 // $Userid= isset($_GET['u_id']) ? $_GET['u_id'] : '';

if(isset($_POST["submit"])){

	$first_name=$_POST["first_name"];
    $middle_name=$_POST["middle_name"];
    $last_name=$_POST["last_name"];
    
    $gender=$_POST["gender"];
    $age=$_POST["age"];
    $contact_no=$_POST["contact_no"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zcode=$_POST["zcode"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $identity_no=$_POST['identity_no'];
    $type="user";
    $status="off";

     date_default_timezone_set("Asia/Kathmandu");
    $ctime=time();
    $datetime=strftime("%B-%d-%Y  %H-%M-%S ",$ctime);
    $datetime;

    // $Image=$_FILES["Image"]["name"];
    // $Target="Upload/".basename($_FILES["Image"]["name"]);
  	$userid= isset($_GET['u_id']) ? $_GET['u_id'] : '';
    
    


	$sql = "INSERT INTO user_details (first_name,middle_name,last_name,gender,age,contact_no,city,state,zcode,username,email,password,identity_no,type,status,datetime)
	
	VALUES('$first_name','$middle_name','$last_name','$gender','$age','$contact_no','$city','$state','$zcode','$username','$email','$password','$identity_no','$type','$status','$datetime')";
 	
	 if (mysqli_query($conn, $sql)) {
 // 	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

 		$_SESSION["SuccessMessage"]="Your Registration Added Successfully  ! Wait for a admin Approval.";
 		 Redirect_to("index.php");

 		  echo "<h3 style='color:red;background-color:black;text-align:center'>Your Registration Added Successfully  ! Wait for a admin Approval. </h3>";
	} else {
		 $_SESSION["ErrorMessage"]="Something Went Wrong. Try Again !";
  		 Redirect_to("user_register.php");

	}
	}
mysqli_close($conn);

?>
