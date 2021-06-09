<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>SELLER | RECYCLUS  </title>
<link rel="shortcut icon" href="./img/recyclus.png" />

  
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
 td {
  border: 20px solid black;
 color:#8B4513;
font-weight: bold;
border-color: rgba(50, 115, 220, 0.3);
}
</style>
</head>
<body>
<br>
<center><h1 > Waste Product List </h1></center>
<div class="container" >
<div class="row d-flex justify-content-center">
	<div class="col-lg-11 col-12">
		<div class="tabel-responsive">
		<table class="table-striped text-center table-bordered text-white">
			<tr >
			<thead class="bg-dark text-white">
			<th class="p-3 my-3 text-whitetext-white " >ID </th> 
			<th class="p-3 my-3 text-white">NAME </th>
			<th class="p-3 my-3 text-white">EMAIL </th>
			<th class="p-3 my-3 text-white">PHONE </th>
			<th class="p-3 my-3 text-white">CITY </th>
			<th class="p-3 my-3 text-white">ADDRESS </th>
			<th class="p-3 my-3 text-white">ITEM </th>
			<th class="p-3 my-3 text-white">PRICE<h3> ₹</h3> </th>
			<th class="p-3 my-3 text-white">PHOTO </th>
		</tr>
		</thead>
		<tbody>
		<?php
		include 'includes/discon.php';
		$selectquery="select *from seller";
		$query = mysqli_query($con,$selectquery);
		//$result=mysqli_fetch_array($query);
		while($result=mysqli_fetch_array($query)){
		?>


		<tr>
			<td><?php echo $result['id']; ?> </td>
			<td><?php echo $result['username']; ?> </td>
			<td><?php echo $result['email']; ?> </td>
			<td><?php echo $result['contact']; ?> </td>
			<td><?php echo $result['city']; ?> </td>
			<td><?php echo $result['address']; ?> </td>
			<td><?php echo $result['item']; ?> </td>
			<td><?php echo $result['price']; ?> </td>
			<td><img src="<?php echo $result['photo']; ?>" width="100" height="60"> </td>
             
		</tr>
		<?php

	}

?>

		</tbody>


	</table>
</div>
</div>
</div>
</div>









</body><br>
<?php include 'includes/footer.php'; ?>
</html>