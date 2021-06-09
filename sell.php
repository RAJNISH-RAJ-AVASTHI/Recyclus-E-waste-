<!DOCTYPE html>
<html>
<head>
<title>SELLER | RECYCLUS  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="./img/recyclus.png" />
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="./css/sell.css">
</head>

<body>
<?php
                require 'includes/header.php';
            ?>
<br><br>

<div class="container register">
	
	<div class="row bg-success " style="background-color: #28a745!important;">
		<div class="col-md-6 register-left" >
			<h3 style="margin-top: 5%;">seller's counter </h3>
			<img src="img/wastes.jpg" class="center" alt="SELL YOUR PRODUCT" style="margin-left: auto;
  margin-right: auto;display: block;" width="100%" height="50%">
			<p style="font-size: 20px;">Please fill all details carefully.</p>
			<a href="display.php"  >Check Form</a>
			</div>
<div class="col-lg-6 register-right">
	<div class="tab-content" id="myTabcontent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" arial-labelledby="home-tab">
			<h1 class="register-heading">ENTER YOUR PRODUCT DETAILS </h1>
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<div class="row register-form">
					<div class="col-md-6 ">
						<div class="form-group">
							<input type="text"  class="form-control" placeholder="Enter your  name *" name="name" value="" required/>
						</div>
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Email *" name="email" value="" required/>
						</div>
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Contact Number *" name="contact" value="" required/>
						</div>
						
<div class="form-group">
							<input type="text"  class="form-control" placeholder="City *" name="city" value="" required/>
						</div>
						</div>
						<div class="col-md-6 ">
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Address  *" name="address" value="" required/>
						</div>
					
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Item Name *" name="item" value="" required/>
						</div>
						
<div class="form-group">
							<input type="text"  class="form-control" placeholder="Price *" name="price" value="" required/>
						</div>
						
<div class="form-group">
							<input type="file"  class="form-control" placeholder="Upload image *" name="photo" value="" required/>
						</div>
						</div>
						<div class="col-md-8 ">
<div class="form-group">
							<input type="submit"  class="btnRegister" placeholder="Upload image *" name="submit" value="Register" required/>
						</div>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
 
</body><br><br>

<?php
                require 'includes/footer.php';
            ?>
</html>