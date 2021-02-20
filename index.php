<?php
session_start();
$connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"online notice board");

 if(isset($_POST['login'])){
$query="select * from users where email='$_POST[email]' AND password='$_POST[password]'";
$query_run=mysqli_query($connection,$query);
if(mysqli_num_rows($query_run)){
  $_SESSION['email']=$_POST['email'];
  while($row=mysqli_fetch_assoc($query_run)){
   $_SESSION['class'] = $row['class'];
  echo "<script>
  window.location.href='user_dashboard.php';
  </script>";
}
}
else{
  echo "<script>alert('Pls enter correct email-id and password');
  </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title> Online Notice Board System </title>
        <!--bootstrap files-->
      <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
      <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js" charset="utf-8"> </script>
      <!--css file-->
      <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!--header section code starts here-->
    <div class="row" id="header">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <h5> Online Notice Board </h5>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <!--login form starts here-->
    <section id="login form">
      <div class="row">
        <div class=" col-md-4 m-auto-block">
          <center><h4>Login form</h4></center>
          <form action='index.php' method="post">
            <div class="form-group">
              <label>Email ID</label>
                <input class="form-control" type="text" name='email' placeholder='enter your email'>
            </div>
            <div class="form-group">
              <label>Password</label>
                <input class="form-control" type="password" name='password' placeholder='enter your password'>
            </div>
            <button class="btn btn-primary" type="submit" name="login">Login</button>
            </form>
            <a href="register.php">Click here to register</a>
          </div>
      </div>
    </section>
  </body>
</html>
