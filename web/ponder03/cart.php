<?php 
	session_start();
	if(isset($_SESSION["cart"])){
		$cart = $_SESSION["cart"];
	} else{
		$cart = array();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopping Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<!--link rel="stylesheet" type="text/css" href="style.css" -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>


<body>
	<div class="container">
		<?php
			foreach ($cart as $value) {
				echo "<p>$value</p><br/>";
			}
		?>
		<a href="browse.php">Back To Shopping</a>
		<a href="checkout.php">Checkout</a>		
	</div>
</body>
</html>