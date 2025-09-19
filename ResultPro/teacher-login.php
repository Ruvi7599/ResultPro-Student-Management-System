<?php
   session_start();
   error_reporting(0);
   include('includes/config.php');
   if($_SESSION['alogin']!=''){
   $_SESSION['alogin']='';
   }
   if(isset($_POST['login']))
   {
   $uname=$_POST['username'];
   $password=md5($_POST['password']);
   $sql ="SELECT UserName,Password FROM teacher WHERE UserName=:uname and Password=:password";
   $query= $dbh -> prepare($sql);
   $query-> bindParam(':uname', $uname, PDO::PARAM_STR);
   $query-> bindParam(':password', $password, PDO::PARAM_STR);
   $query-> execute();
   $results=$query->fetchAll(PDO::FETCH_OBJ);
   if($query->rowCount() > 0)
   {
   $_SESSION['alogin']=$_POST['username'];
   echo "<script type='text/javascript'> document.location = 'teacher-dash.php'; </script>";
   } else{
       
       echo "<script>alert('Username or Password is Wrong Please try again!!!');</script>";
   
   }
   
   }
   
   ?>
<!-- PHP -->


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ResultPro || Admin-Login</title>
  <link rel="stylesheet" href="css/teacher-login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
  
  
  <link rel="stylesheet" href="styleofall.css">
  <script src="scriptofall.js"></script>
  
  
</head>
<body>
<div id="preloader"></div>
  <div class="wrapper">
    <form method="POST">
	<center><img src="assets/images/logo.png" width="70px"></center>
      <h1>ResultPro  Teachers Login</h1>
      <div class="input-box">
        <input type="email" placeholder="Email" required name="username">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required name="password">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <!-- <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div> -->
      <button type="submit" class="btn" name="login">Login</button><br><br>
      <button  class="btn" name="Signup" onclick="openNewTab()">Signup</button>
      

<script>
function openNewTab() {
    // Replace the URL below with the URL you want to open
    var url = "teacher-register.php";
    window.open(url, '_blank').focus();
}
</script>




      <div class="register-link">
        <p>Back to <a href="index.php">Home</a></p>
      </div>
    </form>
  </div>
</body>
</html>