
<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","recyclus") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables

$Email = $con->real_escape_string($_POST['email']);

$comments = $con->real_escape_string($_POST['text']);
  //query to insert the variable data into the database
$sql="INSERT INTO feedbackfooter ( email,  comments) VALUES ('".$Email."',  '".$comments."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else

echo "Thank you! We will get in touch with you soon";


   
}
header('location: index.php');
?>
