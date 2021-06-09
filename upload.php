<?php

include "includes/common.php";
if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];
$item = $_POST['item'];
$price = $_POST['price'];
$file = $_FILES['photo'];
//print_r($file);
$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror =$file['error'];

if($fileerror ==0){
	$destfile = 'upload/'.$filename;
	//echo "$destfile";
	move_uploaded_file($filepath, $destfile);
	//$iquery = "INSERT INTO  seller(username,email,contact,city,address,item,price,photo) values ( '$name','$email','$contact','$city ,'$address','$item','$price','$destfile')";

	$insertuery = "INSERT INTO seller (username, email,  contact, city, address,item ,price,photo )VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $city . "','" . $address . "', '" . $item . "','" . $price . "','" . $destfile . "')";
    mysqli_query($con, $insertuery) or die(mysqli_error($con));
	// $query = mysqli_query($con,$insertuery);

	if($insertuery){
		echo "inserted";

	}else{
		echo "not  inserted";
	}
	

}} else { 
	echo "no button has been click";
}
header('location:sell.php');
?>