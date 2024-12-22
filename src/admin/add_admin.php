
<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  }  
 if(!isset($_SESSION['x']))
    header("location:../admin_login.php");


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
 
    $batch_no=$_POST["batch_no"];
	$contact_no=$_POST["contact_no"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $type="admin";

     date_default_timezone_set("Asia/Kathmandu");
    $ctime=time();
    $datetime=strftime("%B-%d-%Y  %H-%M-%S ",$ctime);
    $datetime;

    // $Image=$_FILES["Image"]["name"];
    // $Target="Upload/".basename($_FILES["Image"]["name"]);
    
    


	$sql = "INSERT INTO admin_details(batch_no,first_name,middle_name,last_name,contact_no,username,email,password,type,datetime)
	
	VALUES('$batch_no','$first_name','$middle_name','$last_name','$contact_no','$username','$email','$password','$type','$datetime')";
 	
	 if (mysqli_query($conn, $sql)) {
 // 	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

 		$_SESSION["SuccessMessage"]="Your Registration Added Successfully  ! ";

 		  echo "<h3 style='color:red;background-color:black;text-align:center'>Admin Registration Added Successfully  ! </h3>";
	} else {
		 echo "Something Went Wrong. Try Again !";

	}
	}
mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Register</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		body{
			background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
	</style>
</head>
<body >
<section class="container-fluid " style="margin-top: 2%;">
	<div class="row">
			<div class="col-3"></div>
			<div class="col-8"> 

				<div class="card" style="width: 35rem;">
				  <div class="bg-success" style="border-radius:10px;height: 100px;">
					<h1 class="text-center text-white" style="padding: 25px;">Admin Register</h1>
				</div>


				  <div class="card-body">
				   <form action="" method="POST"><br>

				   		<div class="row">
				   		<div class="col">
				   			    <input type="text" class="form-control bg-light" id="first_name"  name="first_name" placeholder="&nbsp;&nbsp;First Name" required="required" style="border-radius:25px;height: 50px;">
				   		</div>

				   		<div class="col">
				   			    <input type="text" class="form-control bg-light" id="middle_name" name="middle_name" placeholder="&nbsp;&nbsp;Middle Name"  style="border-radius:25px;height: 50px;">
				   		</div>

				   		<div class="col">
				   			    <input type="text" class="form-control bg-light" id="last_name" name="last_name"  placeholder="&nbsp;&nbsp;Last Name" required="required" style="border-radius:25px;height: 50px;">
				   		</div>

				   	</div> <br>
				   	<!-- end of row -->

				  
				   	<!-- end of row -->
 					<div class="form-group">
							    <input type="text" class="form-control bg-light" id="batch_no"  name="batch_no" placeholder="&nbsp;&nbsp;Batch NO" required="required" style="border-radius:25px;height: 50px;">

					</div>

				   	<div class="form-group">
							    <input type="text" class="form-control bg-light" id="contact_no"  name="contact_no" placeholder="&nbsp;&nbsp;Contact NO" required="required" style="border-radius:25px;height: 50px;">

					</div>

				   	
				   	<!-- end of row -->

				   	<div class="form-group">
							    <input type="text" class="form-control bg-light" id="username" name="username" placeholder="&nbsp;&nbsp;Username" required="required" style="border-radius:25px;height: 50px;">

					</div>

					<div class="form-group">
							    <input type="email" class="form-control bg-light" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="&nbsp;&nbsp;Email" required="required" style="border-radius:25px;height: 50px;">

					</div>

					<div class="form-group">
							    <input type="password" class="form-control bg-light" id="Password1" name="password" placeholder="&nbsp;&nbsp;Password" required="required" style="border-radius:25px;height: 50px;">

					</div >

					<div class="form-group">
							    <input type="password" class="form-control bg-light" name="cpassword" placeholder="&nbsp;&nbsp;Confirm Password" required="required" style="border-radius:25px;height: 50px;">

					</div >


						

					<div class="form-group">
							    <button type="submit" class="btn  btn-success btn-lg btn-block" name="submit" style="border-radius: 30px;height: 50px;">Register Now</button>

					</div >


					</form>
					

				  </div>
				</div>
			</div>



	</div>
</section>

   <script src="bootstrap/jquery/jquery-3.4.1.js" ></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
</body>
</html>