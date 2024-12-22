
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
    
    if ($password==$cpassword) {
    	# code...
  

	$sql = "INSERT INTO user_details (first_name,middle_name,last_name,gender,age,contact_no,city,state,zcode,username,email,password,identity_no,type,status,datetime)
	
	VALUES('$first_name','$middle_name','$last_name','$gender','$age','$contact_no','$city','$state','$zcode','$username','$email','$password','$identity_no','$type','$status','$datetime')";
 	
	 if (mysqli_query($conn, $sql)) {
 // 	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

 		

 		  echo "<h3 style='color:red;background-color:black;text-align:center'>Your Registration Added Successfully  ! Wait for a admin Approval. </h3>";
	} else {
		 echo "Something Went Wrong. Try Again !";
  		 // Redirect_to("user_register.php");

	}
}
else{
	echo "Password Does Not Match ,Try Again !";
}




	}
mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
	<title>User Register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		body{
			background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
		}
		.navbar a:hover:not(.active) {
              background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
              color: white;
              /*border-radius: 50%;*/
            }
	</style>
</head>
<body >

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <span class="navbar-brand text-primary font-italic font-weight-bold">CRAS</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav ml-5" style="float: right;">
          <li class="nav-item active ml-5">
            <a class="nav-link" href="index.php">
                            Home
            </a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link" href="index.php?#Service">
                            Service
            </a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link" href="index.php?#contact">
                            Contact
            </a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link" href="user_login.php">
                            Login
            </a>
          </li>
           <li class="nav-item ml-5">
             <a class="nav-link" href="user_register.php">
                            Signup
            </a>
          </li>
          <li class="nav-item ml-5">
             <a class="nav-link" href="index.php">
                            Notice
            </a>
          </li>
        </ul>
    
    
  </div>
</nav>

<section class="container-fluid " style="margin-top: 3%;">
	<div class="row">
			<div class="col-3"></div>
			<div class="col-8"> 

				<div class="card" style="width: 35rem;">
				  <div class="bg-success" style="border-radius:10px;height: 100px;">
					<h1 class="text-center text-white" style="padding: 25px;">User Register</h1>
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

				   	<div class="row">
				   		<div class="col">
				   			   <label class="form-control bg-light mt-2" style="border-radius:25px;height: 40px;">Gender : &nbsp;<input type="radio" id="gender"  name="gender"  value="male">&nbsp;&nbsp;Male &nbsp;
				   			    <input type="radio"  id="gender"  name="gender"  value="female">&nbsp;Female
				   			</label>
				   		</div>

				   		<div class="col">
				   			    <input type="text" class="form-control bg-light" id="age" name="age" placeholder="&nbsp;&nbsp;Age" required="required"  style="border-radius:25px;height: 50px;">
				   		</div>

				   	</div><br>
				   	<!-- end of row -->

				   	<div class="form-group">
							    <input type="text" class="form-control bg-light" id="contact_no"  name="contact_no" placeholder="&nbsp;&nbsp;Contact NO" required="required" style="border-radius:25px;height: 50px;">

					</div>

				   	<div class="row">
				   		<div class="col">
				   			    <input type="text" class="form-control bg-light" id="city"  name="city" placeholder="&nbsp;&nbsp;City" required="required" style="border-radius:25px;height: 50px;">
				   		</div>

				   		<div class="col">
				   			    <input type="text" class="form-control bg-light" id="state" name="state" placeholder="&nbsp;&nbsp;State" required="required"  style="border-radius:25px;height: 50px;">
				   		</div>

				   		<div class="col">
				   			    <input type="text" class="form-control bg-light" id="zcode" name="zcode"  placeholder="&nbsp;&nbsp;Zcode" style="border-radius:25px;height: 50px;">
				   		</div>
				   		
				   	</div><br>
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



										<p class="text-muted">Choose your National ID Proof</p>
					 <div class="form-group">
					  <label for="imageselect"><span class="FieldInfo">Select Image:</span></label>
					  <input type="File" class="form-control" name="image" id="imageselect">
					  </div>

					<div class="form-group">
							  <input type="text" class="form-control" placeholder="Enter Number of your above mentioned Identity Proof" name="identity_no" id="identity_no" required="required" style="border-radius:25px;height: 50px;">

					</div >

						

					<div class="form-group">
							    <button type="submit" class="btn  btn-success btn-lg btn-block" name="submit" style="border-radius: 30px;height: 50px;">Register Now</button>

					</div >


					</form>
					<br><br>
					<div>
						<p class="text-muted text-center">Already have an account?</p>
						<p class="text-center" ><a href="user_login.php" class="text-success font-weight-bold ">SIGN IN </a> <span class="text-muted">/</span> 
							<a href="index.php" class="text-success font-weight-bold ">HOME</a></p>
					</div>

				  </div>
				</div>
			</div>



	</div>
</section>






</body>
</html>