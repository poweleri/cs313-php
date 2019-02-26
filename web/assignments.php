<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Assignments</title>
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
	<div class="container">
		<ul>
			<li><a href="ponder03/browse.php">Ponder 03</a></li>
			<li><a href="byui-parking/searchLots.php">PHP Project</a></li>
		</ul>
	</div>
</body>
</html>