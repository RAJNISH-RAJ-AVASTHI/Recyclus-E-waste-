<html>

<head>
  <meta charset="utf-8" />
  <!-- CSS BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>RECYCLUS | sign up</title>
  <link rel="shortcut icon" href="img/recyclus.png" />
  <!-- CSS CUSTOM -->
  <link rel="stylesheet" href="css/signup.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

<!--//reCAPTCHA demo: Running both v2 and v3
  <title>reCAPTCHA demo: Running both v2 and v3</title> 
  <script src="https://www.google.com/recaptcha/api.js?render=v3_site_key"></script>
  <script>
    grecaptcha.ready(() => {
      grecaptcha.render('html_element', {
        'sitekey': 'v2_site_key'
      });
    });
  </script>
  <script>
    function onSubmit() {
      grecaptcha.ready(() => {
        grecaptcha.execute('v3_site_key', {
          action: 'homepage'
        }).then((token) => {
          ...
        });
      });
    }
  </script> -->
  <!-- <div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
paypal.Button.render({
// Configure environment
env: 'sandbox',
client: {
sandbox: 'demo_sandbox_client_id',
production: 'demo_production_client_id'
},
// Customize button (optional)
locale: 'en_US',
style: {
size: 'small',
color: 'gold',
shape: 'pill',
},
// Set up a payment
payment: function (data, actions) {
return actions.payment.create({
transactions: [{
amount: {
total: '0.01',
currency: 'USD'
}
}]
});
},
// Execute the payment
onAuthorize: function (data, actions) {
return actions.payment.execute()
.then(function () {
// Show a confirmation message to the buyer
window.alert('Thank you for your purchase!');
});
}
}, '#paypal-button');
</script> -->



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



<?php
                require 'includes/header.php';
            ?>
  <div class="row">

    <div class="col-lg-6" id="first">
      <h2>Sign Up</h2>
      <p id="text1">Enter your details to create an account.</p>
      <!-- FULL NAME -->
      <form action="signup_script.php" method="POST">
      <div class="form" id="form1">
        <input type="text" name="name" autocomplete="off" required />
        <label for="name" class="label-name">
          <span class="content-name">Full Name</span>
        </label>
      </div>

      <!-- PASSWORD FIELD -->
      
 <!--     
<div class="form" id="form2">
  
 <input type="password" id="pwd" name="password"  placeholder="Password " pattern="[A-Za-z0-9]{8,}" autocomplete="off" required>
      <label for="password" class="label-password">
        </label><br>
      
      <i class="fa fa-eye showpwd" ></i>
    </div>
    <span class="error-msg">Please write 8 or more characters.</span>-->
    <div class="form" id="form2">
      
    <input type="password" id="pwd" name="password"  placeholder="password" pattern="[A-Za-z0-9]{8,}" autocomplete="off" required>
      <label for="password" class="label-password">
          <span class="content-password"></span>
        
      </label>
      
      <i class="fa fa-eye showpwd" ></i>
    </div>
    <span class="error-msg">Please write 8 or more characters.</span>
    
    
    
    
<!-- CONFIRM PASSWORD FIELD --><br>
      <div class="form" id="form2">
        <input type="password" id="confirmpassword"  name="confirmpassword"  placeholder="Confirm Password" pattern="[A-Za-z0-9]{8,}" autocomplete="off" required>
        <label for="password" class="label-password">
          <span class="content-password"></span>
        </label>
        
      <i class="fa fa-eye showpwd" ></i>
      </div>
      <span class="error-msg">Please write 8 or more characters.</span>
      <!-- ADDRESS FIELD -->
      <div class="form" id="form3">
        <input type="text" name="address" autocomplete="off" required>
        <label for="address" class="label-address">
          <span class="content-address">Address</span>
        </label>
      </div>
      <!-- E-mail -->
      <div class="form" id="form4">
        <input type="text" name="email"  autocomplete="off" required><!--pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" -->
        <label for="e-mail" class="label-e-mail">
          <span class="content-e-mail">E-mail</span>
        </label>
      </div>
      <!-- PHONE NUMBER -->
      <div class="form" id="form4">
        <input type="text"  name="contact"  maxlength="10" autocomplete="off" required>
        <label for="e-mail" class="label-e-mail">
          <span class="content-e-mail">Phone Number</span>
        </label>
      </div>


      <input type="submit" class="butn" value="SIGN UP"><br><hr/>
      <a href="#" style="text-decoration: none;" class="butn-1">Log In  with Google &nbsp;<i class="fab fa-google"></i> </a>
      <a href="#" style="text-decoration: none;" class="butn-1">Log In  with Facebook &nbsp;<i class="fab fa-facebook"></i> </a>

      <p class="text2">This Site is Protected by reCAPTCHA and the Google</p>
      <p class="text2" id="termsAndCondition"><a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</p>

    </div>

    <div class="second col-lg-6" id="second">
      <img class="image" src="img/ssignup.jpg" alt="sign-page-image" />
    </div>

  </div>
</form>
<style>
  hr {
    border: none;
    border-top: 3px double #333;
    color: rgb(17, 17, 17);
    overflow: visible;
    text-align: center;
    height: 5px;
    width: 330px;
}

hr:after {
    background: #fff;
    content: 'OR';
    padding: 0 4px;
    position: relative;
    top: -13px;
}

</style>

</body><br><br>
<br><br><br><br><br>
<br><br>
<?php include "includes/footer.php"; ?>
</html>
