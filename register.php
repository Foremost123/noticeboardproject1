<?php
$connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"online notice board");

 if(isset($_POST['register'])){
$query="insert into users
values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[class])";
$query_run=mysqli_query($connection,$query);
if($query_run){
  echo "<script>alert('Registration successfully done..you may now login');
  window.location.href='index.php';
  </script>";
}
else{
  echo "<script>alert('Registration failed..try again');
  window.location.href='register.php';
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
  </body>
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
    <!--register form starts here-->
    <section id="register form">
      <div class="row">
        <div class=" col-md-4 m-auto-block">
          <center><h4>Registration form</h4></center>
          <form action='register.php' method="post">
            <div class="form-group">
              <label>First Name:</label>
                <input class="form-control" type="text" name='first name' placeholder='enter your first name'>
            </div>
            <div class="form-group">
              <label>Last Name</label>
                <input class="form-control" type="text" name='last mail name' placeholder='enter your second name'>
            </div>
            <div class="form-group">
              <label>Email ID</label>
                <input class="form-control" type="text" name='email' placeholder='enter your email-id'>
            </div>
            <div class="form-group">
              <label>Password</label>
                <input class="form-control" type="password" name='password' placeholder='enter your password'>
            </div>
            <div class="form-group">
              <label>Select your class</label>
              <select class="form-control" name="class">
                <option>-Select-</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
            </div>
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <a href="index.php">Click here to login</a>
        </div>
      </div>
    </section>
  </body>
</html>
