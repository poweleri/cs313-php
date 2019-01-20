<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>

<body>
	<?php
		$page = $_SERVER['PHP_SELF'];		 
		require 'header.php'; 
	?>
	<img class="rounded mx-auto d-block" src="http://images.fineartamerica.com/images/artworkimages/mediumlarge/1/mount-rainier-over-puget-sound-greg-hjellen.jpg" alt="Mount Rainer Over the Puget Sound"/>
	<br/>
	<div class="container">
		<div class="row">
			<p class="col"><a href="assignments.php">Assignments</a></p>
			<p class="col"><a href="about-me.php">About Me</a></p>
		</div>
	</div>
</body>

</html>