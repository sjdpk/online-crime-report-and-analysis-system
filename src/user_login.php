
<!DOCTYPE html>
<html>
<head>
	<title>user_login</title>
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
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
     <span  class="navbar-brand logo font-italic">CRAS</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse ml-auto" id="navbarColor01" >
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
         <form class="form-inline my-2 my-lg-0 ml-5">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <!-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> -->
        </form>
    
    
  </div>
</nav>
<section class="container-fluid  " style="margin-top: 2%;">
	<div class="row">
			<div class="col-4"></div>
			<div class="col-8"> 

				<div class="card" style="width: 25rem;">
				  <div class="bg-success" style="border-radius:10px;height: 100px;">
					<h1 class="text-center text-white" style="padding: 25px;">Sign In</h1>
				</div>


				  <div class="card-body">
				  	<br><br>
				   <form action="user_login_process.php" method="POST">
						<div class="form-group">
							    <input type="text" name="user_email" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="&nbsp;&nbsp;User Email" required="required" style="border-radius:25px;height: 50px;"  onfocusout="f1()">

						</div>

						<div class="form-group">
							    <input type="password" name="user_password" class="form-control bg-light" id="exampleInputPassword1" placeholder="&nbsp;&nbsp;Password" required="required" style="border-radius:25px;height: 50px;" onfocusout="f1()">

						</div >

						<div style="float: right;">
							<p class="text-muted">Forgot &nbsp;<a href="user_request.php" class="text-success">Username</a> / <a href="user_request.php" class="text-success">Password?</a></p>
							
						</div><br>

						<div class="form-group">
							    <button type="submit" class="btn  btn-success btn-lg btn-block" name="submit" style="border-radius: 30px;height: 50px;"  onclick="f1()">Sign In</button>
						</div >

					</form>
					<br><br><br>
				
					<div>
						<p class="text-muted text-center">Don’t have an account?</p>
						<p class="text-center" ><a href="user_register.php" class="text-success font-weight-bold ">SIGN UP NOW</a> <span class="text-muted">/</span> 
							<a href="index.php" class="text-success font-weight-bold ">HOME</a></p>
					</div>

					<!-- remove after all setup -->
					<!-- 	<div class="form-group">
							    <a href="user/user_dashboard.php"><button  class="btn  btn-primary btn-lg btn-block" name="submit" style="border-radius: 30px;height: 50px;text-decoration: none;">User Section</button></a>
						</div > -->

				  </div>
				</div>
			</div>



	</div>
</section>


</body>
</html>