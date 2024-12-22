<?php

 session_start();

   function Redirect_to($New_Location){
    header("Location:".$New_Location);
  exit;
}

?>

<!DOCTYPEhtml>

<head>
    <meta charset="utf-8"/>
     <meta http-equiv="refresh" content="5;url=../subadmin_dashboard.php" /> 
    <title>subadmin Section</title>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="animate.css">

    <style>
        html {
            height: 100%;
            background: #3023ae;
            background: -moz-linear-gradient(-45deg,  #3023ae 0%, #c86dd7 100%);
            background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#3023ae), color-stop(100%,#c86dd7));
            background: -webkit-linear-gradient(-45deg,  #3023ae 0%,#c86dd7 100%);
            background: -o-linear-gradient(-45deg,  #3023ae 0%,#c86dd7 100%);
            background: -ms-linear-gradient(-45deg,  #3023ae 0%,#c86dd7 100%);
            background: linear-gradient(135deg,  #3023ae 0%,#c86dd7 100%);
            background-attachment: fixed;
        }
      
      
       

    </style>
</head>

<body>
  
            <center style="margin-top: 10%;"><img src="audio.svg" width="40" alt=""></center>

            <center class="animated bounce flash infinite " style="margin-top: 11%;" >
            <h2 style="color:pink;font-weight: bold;">Generating</h2></center>

            <center><div class="animated zoomInLeft delay-3s" style="margin-top: 11%;" >
            <h2 style="color:pink;font-weight: bold;">SomeThing Went Wrong Try Again Later !<br> 
            THANK YOU !</h2></div> </center>

 
</body>

</html>
