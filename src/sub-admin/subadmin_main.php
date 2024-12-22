<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  }  
 if(!isset($_SESSION['x']))
    header("location:../admin_login.php");

    /* Database connection settings */
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'ocras';
    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

    $data1 = '';
    $data2 = '';

    //query to get data from the table
    $sql = "SELECT * FROM `datasets` ";
    $result = mysqli_query($mysqli, $sql);

    //loop through the returned data
    while ($row = mysqli_fetch_array($result)) {

        $data1 = $data1 . '"'. $row['data1'].'",';
        $data2 = $data2 . '"'. $row['data2'] .'",';
    }

    $data1 = trim($data1,",");
    $data2 = trim($data2,",");
?>


        <script type="text/javascript" src="PHPMailer/Chart.bundle.min.js"></script>
        <title>Analysis</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 

        <style type="text/css">         
           
            .container {
                color: #E8E9EB;
                background: #222;
                border: #555652 1px solid;
                padding: 10px;
            }
        </style>

    </head>

    <body>     
        <div class="container"> 
        <h1>Rate  and Time </h1>       
            <canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

            <script>
                var ctx = document.getElementById("chart").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'],
                    datasets: 
                    [{
                        label: 'User Rate',
                        data: [<?php echo $data1; ?>],
                        backgroundColor: 'transparent',
                        borderColor:'rgba(255,99,132)',
                        borderWidth: 3
                    },

                    {
                        label: 'Crime Rate',
                        data: [<?php echo $data2; ?>],
                        backgroundColor: 'transparent',
                        borderColor:'rgba(0,255,255)',
                        borderWidth: 3  
                    }]
                },
             
                options: {
                    scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                    tooltips:{mode: 'index'},
                    legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
                }
            });
            </script>
        </div>

        <div class="container">
             <span class="text-center" style="margin-left: 30%;"> Analysis  : User Registration Rate and Crime Registration Rate</span>
        </div>
        <script src="bootstrap/jquery/jquery-3.4.1.js" ></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>

<!-- <div class="container-fluid mt-5">

            
                   <div class="row" id="card_counts">
                            <div class="col-sm-3">
                                <div class="card card-inverse bg-inverse h-100 text-center pt-2">
                                    <a href="subadmin_dashboard.php?option=users_request" style="text-decoration: none;"><div class="card-block card-title">
                                    Users Request
                                        
                                   </div></a>
                               </div>
                           </div>
                           <div class="col-sm-3">
                                <div class="card card-inverse bg-inverse h-100 text-center pt-2">
                                    <a href="subadmin_dashboard.php?option=registered_user" style="text-decoration: none;"><div class="card-block card-title">
                                    Registered User
                                        
                                   </div></a>
                               </div>
                           </div>
                           <div class="col-sm-3">
                                <div class="card card-inverse bg-inverse h-100 text-center pt-2">
                                    <a href="subadmin_dashboard.php?option=requested_fir" style="text-decoration: none;"><div class="card-block card-title">
                                    FIR  Request
                                        
                                   </div> </a>
                               </div>
                           </div>
                           <div class="col-sm-3">
                                <div class="card card-inverse bg-inverse h-100 text-center pt-2">
                                     <a  href="subadmin_dashboard.php?option=running_case" style="text-decoration: none;"><div class="card-block card-title">
                                    Running Case
                                        
                                   </div></a>
                               </div>
                           </div>

                  </div>
                  <br>
                   <div class="row" id="card_counts">
                            <div class="col-sm-3">
                                <div class="card card-inverse bg-inverse h-100 text-center pt-2">
                                    <a href="subadmin_dashboard.php?option=unsolved_case" style="text-decoration: none;"><div class="card-block card-title">
                                    Unsolved Case
                                        
                                   </div></a>
                               </div>
                           </div>
                           <div class="col-sm-3">
                                <div class="card card-inverse bg-inverse h-100 text-center pt-2">
                                   <a  href="subadmin_dashboard.php?option=solved_case" style="text-decoration: none;"> <div class="card-block card-title">
                                    Solved Case
                                        
                                   </div></a>
                               </div>
                           </div>
                           <div class="col-sm-3">
                                <div class="card card-inverse bg-inverse h-100 text-center pt-2">
                                    <a href="subadmin_dashboard.php?option=registered_fir" style="text-decoration: none;"><div class="card-block card-title">
                                        Registered FIR
                                        
                                   </div></a>
                               </div>
                           </div>
                           <div class="col-sm-3">
                                <div class="card card-inverse bg-inverse h-100 text-center pt-2">
                                    <a href="subadmin_dashboard.php?option=clearence_certi" style="text-decoration: none;"><div class="card-block card-title">
                                        Clearence Certi.
                                        
                                   </div></a>
                               </div>
                           </div>
                 
                  </div>

</div> -->

    </body>
</html>