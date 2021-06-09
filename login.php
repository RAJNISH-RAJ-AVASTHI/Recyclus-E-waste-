<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECYCLUS | login  </title>
    <link rel="shortcut icon" href="img/recyclus.png" />
    <!-- CSS BOOTSTRAP-->
    
    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="./css/login.css">
    <title>Log In</title>
    <!-- BOOTSTRAP JAVASCRIPT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

</head>
<body>
  <script>
  window.onload = function () {
  
  const elements = document.querySelectorAll('[type="password"]');
  elements.forEach(function(elem) {

    elem.parentNode.querySelector('i').addEventListener('click', function(){
      if (elem.type === "password") {
        elem.type = "text";
        this.className = 'fa fa-eye-slash showpwd';
      } else {
        elem.type = "password";
        this.className = 'fa fa-eye showpwd';
      }
    });
  });
  
}
</script>
<?php include 'includes/header.php'; ?>
    <body>

    <div class="row">

      <div class="col-lg-6" id="first">
        <h2>Log In</h2>
        <p id="text1">Enter your email and password to login to our dashboard.</p>
        <!-- E-MAIL FIELD -->
        
        <form action="login_submit.php" method="POST">
       <div class="form" id="form1" >
          <input type="text" name="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>"  autocomplete="off" required />
          <label for="name" class="label-name" >
            <span class="content-name">Your e-mail</span>
          </label>
        </div>
        <!-- PASSWORD FIELD -->
        <div class="form" id="form2">
          <input type="password" name="password" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>"  autocomplete="off" required>
          <label for="password" class="label-password" >
            <span class="content-password">Password </span>
            
          </label>
          <i class="fa fa-eye showpwd" ></i>
        </div>
        <button class="butn" type="submit" style="padding: 15px 32px;">Sign in</button>
        <?php echo @$_GET['error']; ?><br>
        <label class="checkbox pull-left mt-3">
          <input type="checkbox" name="remember" id="remember"  value="remember-me" <?php if(isset($_COOKIE["email"])) { ?> checked <?php } ?> >&nbsp;
          Rember me
        </label>

        <p class="text2">Don't have an account? <a href="signup.php">Sign Up</a></p>
        <p class="text2"><a href="reset.php">Forget Password?</a></p>
      </div>

      <div class="second col-lg-6" id="second">
          <img class="image" src="img/login.png" alt="login-page-image" />
      </div>

    </div>
    </form>
</body>
<br><br>
<br><br><br><br><br>
<?php include "includes/footer.php"; ?>
</html>