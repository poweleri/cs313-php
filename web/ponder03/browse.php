<?php 
	session_start();
	if(!isset($_SESSION["cart"])){
		$_SESSION["cart"] = array("swrd" => False, "fksnk" => False, "rlsnk" => False, "brol" => False
	  						     , "bfb" => False, "sjb"   => False, "clj"   => False, "htp"  => False);
	}
	$_SESSION["items"] = array( "swrd" => "Sword", "fksnk" => "A Fake Snake", "rlsnk" => "A Real Snake"
							  , "brol" => "The Breath Of Life", "bfb" => "A Blue Footed Boobie"
						 	  , "sjb" => "A Single Jelly Bean", "clj" => "Child-like Joy"
						 	  , "htp" => "Half of a Tide pod"); 
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
		<div class="jumbotron">
			<h2>Welcome to the Generic Online Shop!</h2>
			<h3>Please browse and enjoy our wares</h3>
			<a href="./cart.php">Shopping Cart</a>
		</div>
		<div class="container">
			<div class="row">
				<form class="col" action="add.php" method="post">
					<h3>Sword</h3>
					<p>This is a sword you can buy</p>
					<input type="hidden" name="item" value="swrd"/>
					<button type="submit">Add To Cart</button>
				</form>
				<form class="col" action="add.php" method="post">
					<h3>A Fake Snake</h3>
					<p>Impress your friends with this fake snake!</p>
					<input type="hidden" name="item" value="fksnk"/>
					<button type="submit">Add To Cart</button>
				</form>
				<form class="col" action="add.php" method="post">
					<h3>A Real Snake</h3>
					<p>Impress your friends with this real snake!</p>
					<input type="hidden" name="item" value="rlsnk"/>
					<button type="submit">Add To Cart</button>
				</form>
				<form class="col" action="add.php" method="post">
					<h3>The Breath of Life</h3>
					<p>I don't know why you would want to get this when you already have it, but you can buy this</p>
					<input type="hidden" name="item" value="brol"/>
					<button type="submit">Add To Cart</button>
				</form>
			</div> <br/>
			<div class="row">
				<form class="col" action="add.php" method="post">
					<h3>A Blue Footed Boobie</h3>
					<p>A very classy bird</p>
					<input type="hidden" name="item" value="bfb"/>
					<button type="submit">Add To Cart</button>
				</form>
				<form class="col" action="add.php" method="post">
					<h3>A Single Jelly Bean</h3>
					<p>A sweet snack you can eat later</p>
					<input type="hidden" name="item" value="sjb"/>
					<button type="submit">Add To Cart</button>
				</form>
				<form class="col" action="add.php" method="post">
					<h3>Child-like Joy</h3>
					<p>Be taken back to your childhood with this purchase</p>
					<input type="hidden" name="item" value="clj"/>
					<button type="submit">Add To Cart</button>
				</form>
				<form class="col" action="add.php" method="post">
					<h3>Half a Tide pod</h3>
					<p>Good for half a load of laundry</p>
					<input type="hidden" name="item" value="htp"/>
					<button type="submit">Add To Cart</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>