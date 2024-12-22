
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Cras">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>User Request</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
  
</head>

<body >

  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 bg-light rounded" >
        <div  style="border-radius:10px;height: 100px;background-color: #6340bc ">
          <h1 class="text-center text-white" style="padding: 25px;">User Request</h1>
        </div>
        <h5 class="text-center text-success"></h5>
        <form action="" method="post" id="form-box" class="p-2">
         
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
           
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" name="subject" class="form-control" placeholder="Enter subject" value=" Resetting My Password / UserName" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
            </div>
            <textarea name="message" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send" style="border-radius: 30px;height: 50px;background-color: #2e1f84 ">
           
          </div>
        </form>
      </div>
    </div>
  </div>
  <br><br><br>
        
          <div>
            <p class="text-muted text-center">Don’t have an account?</p>
            <p class="text-center" ><a href="user_register.php" class="text-success font-weight-bold ">SIGN UP NOW</a> <span class="text-muted">/</span> 
              <a href="index.php" class="text-success font-weight-bold ">HOME</a></p>
          </div>

</body>

</html>