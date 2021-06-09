

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact US | RECYCLUS </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/recyclus.png" />
	
	
	
	
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<!--===============================================================================================-->
	
         <link rel="stylesheet" type="text/css" href="./css/main.css">            
	<!--===============================================================================================-->
</head>
<style>
 .feed {
  position: relative;
  text-align: center;
  color: white;
padding-bottom: 20px;
}
 .center100 {
  position: absolute;
  top: 95%;
  left: 45%;
  transform: translate(-50%, -50%);
text-transform: uppercase;
display:block;
color:green;
}  
img.free {
  height: 102%;
  width: 100%;
padding-top: 10px;
}
</style>
<script language="javascript" type="text/javascript" >
function validate(){
	{
        alert("Thank you! We will get in touch with you soon");
}
}
</script>
</head>
<?php include 'includes/header.php'; ?>

<body class="bac-col">

	
<form class="form" action="contactform.php" method="POST" onsubmit="return validate()">


	<div class="row">

		<div class="col-lg-6">
                                           <div class="feed">
			<img class="free" src="img/bin.jpg" alt="recycling-image"  >
<div class="center100">
<h1 style="font-family: "Times New Roman", Times, serif; font-size: 1.0rem;"> Tell Us </h1>
  <p style="font-family: "Times New Roman", Times, serif;font-size: 1.0rem;">  How We Can Serve You Better.</p>
  </div>
</div>
		</div>

		<div class="col-lg-6 " >
			<div class="container-contact100">

				<div class="wrap-contact100">
					<form class="contact100-form validate-form">
						<span class="contact100-form-title" style="padding-bottom: 0;font-size: 2.5rem;">
							Conatct Us

						</span>
						<hr style="background-color: white; height:2px;">
						</hr>




						<div class="wrap-input100 validate-input" data-validate="Please enter your name">
							<input class="input100" type="text" name="name" required placeholder="Full Name">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
							<input class="input100" type="text" name="email" required placeholder="E-mail">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Please enter your phone">
							<input class="input100" type="text" name="contact" required placeholder="Phone">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Please enter your message">
							<textarea class="input100" name="text" required placeholder="Your Message"></textarea>
							<span class="focus-input100"></span>
						</div>

						<div class="container-contact100-form-btn">
							<button  class="contact100-form-btn" name="submit">
								<span >
									<i style='font-size:24px' class='far'>&#xf1d8;</i>
									SEND
								</span>

							</button>
							

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	
</body>
<?php include 'includes/footer.php'; ?>
</html>
