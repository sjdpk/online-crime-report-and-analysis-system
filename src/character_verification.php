<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>crime report system</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,900" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" >

  <!-- Bootstrap CDN and external CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
  <link rel="stylesheet" href="./indexstyle.css">
   <style>
          html{
              scroll-behavior: smooth;
            }
            body{
              scroll-behavior: smooth;
            }
            #backgroundimage{
              background: #E1D9D9;
            }
            #image{
              position: absolute;
              margin-top: 5px;
              margin-left: 10px;
              border-radius: 50%;
              height: 200px;
              width: 200px; 

            }
   </style>
  </head>
  <body id="backgroundimage">
<div class="container mt-5">
  <img src="policelogo.png" id="image">
  <header class="text-capitalize text-danger">
  <div class="text-center text-danger"><p>Government of Nepal</p></div>
  <div class="text-center text-danger text-capitalize"><h4>Ministery of Home affairs</h4></div>
  <div class="text-danger text-center text-capitalize"><h3>Police Headquarters</h3></div>
  <div class="text-center text-danger text-capitalize"><h4>operation and crime investigation department</h4></div>
  <div class="text-center text-danger"><h5>PostBox:xyz</h5></div>
  <div class="text-center text-danger"><h5>Kathmandu,Nepal</h5></div>
  <div class="text-center text-danger"><h5>(character Verificarion Section)</h5></div>


  <ul type="none" style="float: right;">
      <li>Phone: 987-65-476</li>
      <li>Fax:  987-65-476</li>
      <li>email:contact@cras.com</li>
      <li>Date:- <span id="demo2" style="color: black"></span></li>

  </ul>
  </header>
  
<div style="clear: both;"><span class="text-danger">Dispatch No:-</span> <span id="demo"></span>- <span id="demo1"></span></div>

<div class="text-center text-danger"><u><h2>Police clearance Cerificate</h2></u></div>

<div class="mt-5 text-justify" >
<div class="row">
  <div class="col-7">
    <p>Full Name :<span class="ml-5"><span class="ml-5"><span class="ml-4">Ram sharma</span></p>
    <p>Spouse Name :<span class="ml-5"><span class="ml-5">Rama sharma</span></p>
    <p>Address :<span class="ml-5"><span class="ml-5"><span class="ml-5">Kathmandu</span></p>
    <p>Date of Birth :<span class="ml-5"><span class="ml-5">11 November 1998</span></p>
    <p>Gender:<span class="ml-5"><span class="ml-5"><span class="ml-5">Male</span></p>
    <p>Nationality :<span class="ml-5"><span class="ml-5">Nepali</span></span></p>
  </div>
  <div class="col-4">
    <span ><img src="image/slute.png" style="border-radius: 50%; height: 250px;width: 250px;"></span>
  </div>
  
</div>
  <div class="row">
    <div class="col-7">Citizenship No :<span class="ml-5">76378-3898-43889</span></div>
    <div class="col-5">Citizenship issued From : Baglung</div>
  </div>
  <div class="row">
    <div class="col-7">Passport No :<span class="ml-5"><span class="ml-3">76678-67887</span></div>
    <div class="col-5">Passport issued From : <span class="ml-3">Baglung</div>
  </div>


</div>
<div class="mt-5">
  <p>Status :</p>
  <p>she has no criminal record against her/his till <span id="demo3" style="color: black"></span> as Verified from Central police crime database . </p>
</div>

<div style="float: right;">
  <br>
  <br><br><br>
  <p>.........................</p>
  <p>Head Name </p>
  <p>(Deputy Seperintendent of Police)</p>
</div>


</div>
<hr style="color:red;background: red; clear: both;">
<footer class="container text-danger">
  <u>Note:</u>
  <ul>
    <li>To Verify this document, visit www.cras.gov.np or contact CRAS,character verification section.</li>
    <li>any erasure or amendment in this certificate makes it invalid. </li>
  </ul>
</footer>

  
<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.getFullYear();
document.getElementById("demo1").innerHTML = d.getFullYear();
document.getElementById("demo2").innerHTML = d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate();;
document.getElementById("demo3").innerHTML = d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate();;


</script>

    <!-- Bootstrap's Javascript -->
<script src="bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>
