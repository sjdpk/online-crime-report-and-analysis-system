
<?php

    
if(isset($_POST['submit']))
{
    session_start();
    $_SESSION['x']=1;
    $conn=mysqli_connect("localhost","root","",'ocras');
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=mysqli_real_escape_string($conn,$_POST['user_email']);
        $pass=mysqli_real_escape_string($conn,$_POST['user_password']);
        $result=mysqli_query($conn,"SELECT email,password FROM user_details where email='$name' and password='$pass'and status='on' ");
       
          $email=mysqli_real_escape_string($conn,$_POST['user_email']);
          $_SESSION['user_email']=$email;
   
        
        if(mysqli_num_rows($result)==0)
        {
             $message = "Id or Password not Matched. Or May be your Request is in Pending !  Wait for Approval .  Thank You !";
             echo "<script type='text/javascript'>alert('$message');</script>";
              header( "Location: index.php" );
        }
        else 
        {
          header( "Location: user/user_dashboard.php" ); 
        }
    }                
}
?> 