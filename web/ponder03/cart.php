<?php 
	session_start();
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
		<p>Shopping Cart:</p><br/>
		<?php
			foreach ($_SESSION["cart"] as $key => $value) {
				if ($value == True){
					echo "<form action=\"remove.php\" method\"post\">"
					   . $_SESSION["items"][$key]
					   . "<input type=\"hidden\" name=\"item\" value=\"" . $key . "\"/>"
					   . "<button type=\"submit\">Remove</button><br/>"
					   . "</form>";
				}
			}
		?>
		<div class="row">
			<form class="col" action="browse.php">
				<button type="submit">Back To Shopping</button>
			</form>	
			<form class="col" action="checkout.php">
				<button type="submit">Checkout</button>		
			</form>
		</div>	
	</div>
</body>
</html>