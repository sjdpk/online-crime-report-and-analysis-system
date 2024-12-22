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


	$admin_batchno=mysqli_real_escape_string($con,$_POST['admin_batchno']);
	$admin_username=mysqli_real_escape_string($con,$_POST['admin_username']);
	$admin_Password=mysqli_real_escape_string($con,$_POST['admin_Password']);




$query = "SELECT * FROM admin_details WHERE batch_no='$admin_batchno' and username='$admin_username' and password='$admin_Password'";  

 			$admin_batchno=mysqli_real_escape_string($con,$_POST['admin_batchno']);
          $_SESSION['admin_batchno']=$admin_batchno;

$result = mysqli_query($con,$query);

if ( mysqli_num_rows($result) >= 1 ) {
    header( "Location: admin/admin_dashboard.php" ); 
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
	<title>Admin_login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body class="bg-dark">
<section class="container-fluid bg-dark " style="margin-top: 2%;">
	<div class="row">
			<div class="col-4"></div>
			<div class="col-8"> 

				<div class="card" style="width: 25rem;">
				  <div class="bg-success" style="border-radius:10px;height: 100px;">
					<h1 class="text-center text-white" style="padding: 25px;">Admin</h1>
				</div>


				  <div class="card-body">
				  	<br><br>
				   <form action=" " method="POST">

				   		<div class="form-group">
							    <input type="text" class="form-control bg-light" name="admin_batchno" id="exampleInputBatchNo" placeholder="&nbsp;&nbsp;Enter Your Batch No" required="required" style="border-radius:25px;height: 50px;" onfocusout="f1()">

						</div>

						<div class="form-group">
							    <input type="text" class="form-control bg-light" name="admin_username" id="exampleInputUserName"  placeholder="&nbsp;&nbsp;Email / Username" required="required" style="border-radius:25px;height: 50px;" onfocusout="f1()">

						</div>

						<div class="form-group">
							    <input type="password" class="form-control bg-light" name="admin_Password" id="exampleInputPassword1" placeholder="&nbsp;&nbsp;Password" required="required" style="border-radius:25px;height: 50px;" onfocusout="f1()">

						</div >

						<div style="float: right;">
							<p class="text-muted">Forgot &nbsp;<a href="#" class="text-success">Username / Password?</a> </p>
							
						</div><br>

						<div class="form-group">
							    <button type="submit" class="btn  btn-success btn-lg btn-block" name="submit" style="border-radius: 30px;height: 50px;" onclick="f1()">Sign In</button>
						</div >

					</form>
					<br><br><br>
				

					

				  </div>
				</div>
			</div>



	</div>
</section>
</body>
</html>