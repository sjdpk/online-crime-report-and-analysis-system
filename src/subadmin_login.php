<?php
if(isset($_POST["submit"])){
	session_start();
    $_SESSION['x']=1;
	$con = mysqli_connect("localhost","root","","ocras");
	if (!$con)
	   {
	   die('Could not connect: ' . mysqli_error());
	   }

	if($_SERVER["REQUEST_METHOD"]=="POST"){


	$subadmin_batchno=mysqli_real_escape_string($con,$_POST['subadmin_batchno']);
	$subadmin_username=mysqli_real_escape_string($con,$_POST['subadmin_username']);
	$subadmin_Password=mysqli_real_escape_string($con,$_POST['subadmin_Password']);




$query = "SELECT * FROM subadmin_details WHERE batch_no='$subadmin_batchno' and username='$subadmin_username' and password='$subadmin_Password'";  

 			$subadmin_batchno=mysqli_real_escape_string($con,$_POST['subadmin_batchno']);
          $_SESSION['subadmin_batchno']=$subadmin_batchno;

$result = mysqli_query($con,$query);

if ( mysqli_num_rows($result) >= 1 ) {
    header( "Location: sub-admin/subadmin_dashboard.php" ); 
} else {
    // redirect user to another page
    echo "<h3 style='color:red;background-color:black;text-align:center'>SomeThing Wents Wrong !<br> Try Again ! </h3>";
    // header( "Location: subadmin_login.php" );
}
}
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>subadmin_login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body class="bg-dark">
<section class="container-fluid bg-dark " style="margin-top: 2%;">
	<div class="row">
			<div class="col-4"></div>
			<div class="col-8"> 

				<div class="card" style="width: 25rem;">
				  <div class="bg-success" style="border-radius:10px;height: 100px;">
					<h1 class="text-center text-white" style="padding: 25px;">Sub-Admin</h1>
				</div>


				  <div class="card-body">
				  	<br><br>
				   <form action=" " method="POST">

				   		<div class="form-group">
							    <input type="text" class="form-control bg-light" name="subadmin_batchno" id="exampleInputBatchNo"  placeholder="&nbsp;&nbsp;Enter Your Batch No" required="required" style="border-radius:25px;height: 50px;" onfocusout="f1()">

						</div>

						<div class="form-group">
							    <input type="text" class="form-control bg-light" name="subadmin_username"  id=" exampleInputUserName" placeholder="&nbsp;&nbsp;Email / Username" required="required" style="border-radius:25px;height: 50px;" onfocusout="f1()">

						</div>

						<div class="form-group">
							    <input type="password" class="form-control bg-light" name="subadmin_Password" id="exampleInputPassword1" placeholder="&nbsp;&nbsp;Password" required="required" style="border-radius:25px;height: 50px;" onfocusout="f1()">

						</div >

						<div style="float: right;">
							<p class="text-muted">Forgot &nbsp;<a href="#" class="text-success">Username / Password?</a> </p>
							
						</div><br>

						<div class="form-group">
							    <button type="submit" class="btn  btn-success btn-lg btn-block" name="submit" style="border-radius: 30px;height: 50px;" onclick="f1()">Sign In</button>
						</div >

					</form>
					<br><br><br>
					<div>
						<p class="text-muted text-center">Any Trouble?</p>
						<p class="text-center" ><a href="sub-admin/contact_admin.php" class="text-success font-weight-bold ">Contact Admin Now </a> / <a href="index.php" class="text-success">HOME</a></p>
					</div>

					<!-- remove after all setup -->
						<!-- <div class="form-group">
							    <a href="sub-admin/subadmin_dashboard.php"><button  class="btn  btn-primary btn-lg btn-block" name="submit" style="border-radius: 30px;height: 50px;text-decoration: none;">SubAdmin Section</button></a>
						</div > -->

				  </div>
				</div>
			</div>



	</div>
</section>




</body>
</html>