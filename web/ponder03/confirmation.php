<?php 
	session_start();
	$name = htmlspecialchars($_POST["name"]);
	$address = htmlspecialchars($_POST["name"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Confirmation</title>
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
		<h2>Thank You <?php echo $name; ?>!</h2>
		<h4>Here are your purchase details:</h4>
		<p>
			Name: <?php echo $name; ?><br/>
			Address: <?php echo $address ?><br/>
			Items:
			<ul>
				<?php
					foreach ($_SESSION["cart"] as $key => $value) {
						if ($value == True){
							echo "<li>" . $_SESSION["items"][$key] . "</li>";
						}
					}
				?>
			</ul><br/>
			<form action="clear.php">
				<button type="submit">Return To Homepage</button>
			</form>	
		</p>
	</div>
</body>
</html>