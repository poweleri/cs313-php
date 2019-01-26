<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>
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
		<p>To purchase, Please enter the following information:</p>
		<form action="confirmation.php" method="post">
			Name: <input type="text" name="name">
			Address: <textarea name="address" cols="20" rows="3"></textarea>
			Your Current Shopping Cart:
			<ul>
				<?php
					foreach ($_SESSION["cart"] as $key => $value) {
						if ($value == True){
							echo "<li>" . $_SESSION["items"][$key] . "</li>";
						}
					}
				?>
			</ul>	
			<button type="submit">Confirm Purchase</button>
		</form>
	</div>
</body>
</html>