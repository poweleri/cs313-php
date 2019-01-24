<?php 
	session_start();
	$_SESSION["item_codes"] = array("swrd", "fksnk", "rlsnk", "brol", "bfb", "sjb", "clj", "htp");
	$_SESSION["items"] = array ( "swrd" => "Sword", "fksnk" => "A Fake Snake", "rlsnk" => "A Real Snake"
							   , "brol" => "The Breath Of Life", "bfb" => "A Blue Footed Boobie"
						 	   , "sjb" => "A Single Jelly Bean", "clj" => "Child-like Joy"
						 	   , "htp" => "Half of a Tide pod");
	$_SESSION["cart"] = $_POST["cart"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Commerce Website</title>
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
		<p>Welcome to the Generic Online Shop!</p><br/>
		<p>Please browse and enjoy our wares</p>
		<a href="./cart.php">Shopping Cart</a>
		<form action="browse.php" method="post">
			<?php
				foreach($_SESSION["items"] as $key => $val){
					echo "<input class='item' type='checkbox' name='cart' value=\"" 
						 . $key . "\">" . $value . "</input><br/>";
				}
			?>
			<button type="submit">Add To Cart</button>
		</form>
	</div>
</body>
</html>