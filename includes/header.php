<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/navbar.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    




</head>
<body>
<style>
  .navbar-nav.navbar-recyclus {
    position: relative;
    left: 98%;
    transform: translatex(-98%);
}
  </style>
    
    

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:rgb(189, 7, 189); ">
      <div class="container-fluid ">
        
        <a class="navbar-brand logo" href="index.php"style="color:yellow;"> Recyclus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        

        
          <?php
                if (isset($_SESSION['email'])) {
                    ?>
                <br><br><ul class="nav navbar-nav navbar-recyclus"><br>
                <li ><a href = "products.php" style="text-decoration: none;" class="btn btn-outline-warning "><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Buy Again</a></li>
                
            
                &nbsp;&nbsp;<li ><a href = "settings.php" style=" text-decoration: none;" class="btn btn-outline-warning"> <i class="fa fa-cog fa-fw" aria-hidden="true"></i>Settings</a></li>&nbsp;&nbsp;
                    <li ><a href = "history.php" style=" text-decoration: none;" class="btn btn-outline-warning"> <i class="fa fa-history" aria-hidden="true"></i>&nbsp; Your Orders</a></li>&nbsp;&nbsp;
                    <li ><a href = "logout_script.php" style=" text-decoration: none;" class="btn btn-outline-warning">  <i class="fas fa-sign-out-alt"></i> &nbsp; Logout</a></li>&nbsp;&nbsp;
                    <li>
                    <div id="cart" class="d-none" >
            </div>
            <a href="cart.php"   class="cart position-relative d-inline-flex p-2" aria-label="View your shopping cart" style="text-decoration:none;color:white;" >
              <i class="fas fa fa-shopping-cart fa-lg"></i>
              
              <span class="cart-basket d-flex   align-items-center justify-content-center" style="color:white;">
               0
              </span>
            </a>
          </li>&nbsp;&nbsp;
                  </ul><br><br>
                    <?php
                 } else {
                    ?>
        
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php" style="color:yellow;"> <i class="fas fa-home"></i>&nbsp; Home</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="about_us.php"style="color:yellow;"> <i class="fa fa-recycle" aria-hidden="true"></i> &nbsp; About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_us.php"style="color:yellow;"> <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; Contact Us</a>
            </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
          
          &nbsp;&nbsp;<li ><a href ="products.php" style="text-decoration: none;" class="btn btn-outline-warning "><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Buy Waste</a></li>&nbsp;&nbsp;
                <li ><a href = "sell.php" style="text-decoration: none;" class="btn btn-outline-warning "> <i class="far fa-money-bill-alt" aria-hidden="true"></i>&nbsp;Sell Waste </a></li>&nbsp;&nbsp;
                           
           <li> <a href="login.php" style="text-decoration: none;" class="btn btn-outline-warning " ><i class="fas fa-sign-in-alt"></i> &nbsp;Log In</a></li>&nbsp;&nbsp;
            <li><a href="signup.php"style="text-decoration: none;" class="btn btn-outline-warning" > <i class="fas fa-user-plus"></i> &nbsp; Sign Up</a></li>
            <?php
                    }
                    ?>
            </ul>
          
        </div>
      </div>

    </nav>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  
</body>

</html> 





