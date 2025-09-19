<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResultPro Teacher Register</title>
    <link rel="stylesheet" href="register-teacher.css">
	<link rel="stylesheet" href="styleofall.css">
   </head>
<body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        document.querySelector("#preloader").style.display = "none";
    }, 1500); 
});

window.addEventListener("load", function() {
    setTimeout(function() {
        document.querySelector("#preloader").style.display = "none";
    }, 1500); 
});
</script>


<div id="preloader"></div>

  <div class="wrapper">
    <h2>Teacher Registration</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Username" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Teacher Name" required>
      </div>
      <div class="input-box">
        <input type="email" placeholder="Email" required>
      </div>

      <div class="input-box">
      <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
      </div>
      <div class="input-box">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>
      </div>
    <br>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="teacher-login.php">Login now</a></h3>
      </div>
    </form>
  </div>

</body>
</html>
