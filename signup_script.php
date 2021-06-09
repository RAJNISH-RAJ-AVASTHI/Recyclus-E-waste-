<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

$password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $confirmpassword = $_POST['confirmpassword'];
  $confirmpassword = mysqli_real_escape_string($con, $confirmpassword);
  $confirmpassword = MD5($confirmpassword);



$address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);


  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  
  

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    echo '<script>alert("Email Already Exists");
    
    window.location.href="signup.php";
    </script>';
    
    // $m = "<span class='red'>Email Already Exists</span>";
    // header('location: signup.php?m1=' . $m);

  } else if (!preg_match($regex_email, $email)) {
    echo '<script>alert("Not a valid Email Id");
    window.location.href="signup.php";
    </script>';
    // $m = "<span class='red'>Not a valid Email Id</span>";
    // header('location: signup.php?m1=' . $m);

  } else if (!preg_match($regex_num, $contact)) {
    echo '<script>alert("Not a valid phone number");
    window.location.href="signup.php";
    </script>';
    // $m = "<span class='red'>Not a valid phone number</span>";
    // header('location: signup.php?m2=' . $m);
  
  }else if ($password != $confirmpassword){

    

    echo '<script>alert("password are not matching");
    window.location.href="signup.php";
    </script>';
    
  }else {
    
    $query = "INSERT INTO users(name,  password,confirmpassword ,  address,email,contact)VALUES('" . $name . "','" . $password . "','" . $confirmpassword . "','" .$address . "','" . $email . "','" . $contact . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: products.php');
  }
  
?>
