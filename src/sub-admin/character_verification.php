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
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >

 
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

          #formcontrol{
            
            border-radius: 9px;
            width: 50%; 
            height: 40px;
          }
           #generate{
              position: absolute;
              margin-top: 80%;
              margin-left: 40%;
              width: 350px;
              height: 70px;
             transform: skewY(-17.5deg);
             text-align: center;
             padding: 24px;
             

            }
   </style>
  </head>
  <body id="backgroundimage">
   <a href="id_proof/certificate.php"><div class=" btn btn-outline-success" id="generate">Generate Certificate</div></a>

<div class="container mt-5">
  <img src="img/policelogo.png" id="image">
  <header class="text-capitalize text-danger font-weight-bold">
  <div class="text-center text-danger"><p>Government of Nepal</p></div>
  <div class="text-center text-danger text-capitalize"><h4>Ministery of Home affairs</h4></div>
  <div class="text-danger text-center text-capitalize"><h1>Police Headquarters</h1></div>
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
  
<div style="clear: both;"><span class="text-danger">Dispatch No:-</span> <span id="demo"></span>- <?php echo(mt_rand(999,9999));?></div>

<div class="text-center text-danger"><u><h2>Police Clearance Cerificate</h2></u></div>
<form action="" method="POST">
<div class="mt-5 text-justify" >
<div class="row">
  <div class="col-7">

    <label></label>Full Name :<span class="ml-5"><span class="ml-5"><span class="ml-4 "><input type="text" name="fullname" placeholder="Enter Full Name" id="formcontrol"></span></p>

    <p>Spouse Name :<span class="ml-5"><span class="ml-5"><input type="text" name="spousename" placeholder="Enter Spouse Name" id="formcontrol"></span></p>

    <p>Address :<span class="ml-5"><span class="ml-5"><span class="ml-5"><input type="text" name="address" placeholder="Enter Full Address" id="formcontrol"></span></p>

    <p>Date of Birth :<span class="ml-5"><span class="ml-5"><input type="date" name="dateofbirth" placeholder="Enter Date of Birth" id="formcontrol"></span></p>

    <p>Gender:<span class="ml-5"><span class="ml-5"><span class="ml-5"><input type="radio" name="gender" value="male">&nbsp;Male <span class="ml-5"></span><input type="radio" name="gender" >&nbsp;Female</span></p>

    <p>Nationality :<span class="ml-5"><span class="ml-5"><input type="text" name="nationality" value="&nbsp;&nbsp;&nbsp;Nepali" disabled="disabled" id="formcontrol"></span></span></p>

  </div>
  <div class="col-4">
    <span ><img src="img/avatar.png" style="border-radius: 50%; height: 250px;width: 250px;"></span>
    <input type="file" name="photo">
  </div>
  
</div>
  <div class="row">
    <div class="col-7">Citizenship No :<span class="ml-5"><input type="text" name="citizenship Number" placeholder="Citizenship Number" id="formcontrol"> </span></div>
    <div class="col-5">Citizenship issued From : <input type="text" name="citizenissueddate" placeholder="Enter Citizenship issued Address" id="formcontrol"></div>
  </div><br>
  <div class="row">
    <div class="col-7">Passport No :<span class="ml-5"><span class="ml-3"><input type="text" name="passportnumber" placeholder="Enter Passport Number" id="formcontrol"></span></div>
    <div class="col-5">Passport issued From : <span class="ml-3"><input type="text" name="passportissued" placeholder="Enter Passport Issued Address" id="formcontrol"></div>
  </div>


</div>
</form>
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




<section class="container text-danger" style="clear: both;">
  <hr style="color:red;background: red; ">
  <u>Note:</u>
  <ul>
    <li>To Verify this document, visit www.cras.gov.np or contact CRAS,character verification section.</li>
    <li>any erasure or amendment in this certificate makes it invalid. </li>
  </ul>
</section>

</div>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.getFullYear();
document.getElementById("demo2").innerHTML = d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate();


</script>

<script src="bootstrap/jquery/jquery-3.4.1.js" ></script>
<script src="bootstrap/popper.js"></script>
<script src="bootstrap/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>
