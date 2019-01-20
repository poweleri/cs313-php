<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Me</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>

<body>
	<?php
		$page = $_SERVER['PHP_SELF'];		 
		require 'header.php'; 
	?>
	<img class="rounded mx-auto d-block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Ferry_Wenatchee_enroute_to_Bainbridge_Island_WA.jpg/1200px-Ferry_Wenatchee_enroute_to_Bainbridge_Island_WA.jpg"/>
	<div class="container">
		
		
		<ul>
			<li>I love my major of Computer Science!</li>
			<li>Video games are a passion of mine</li>
		</ul>
	</div>
</body>
</html>