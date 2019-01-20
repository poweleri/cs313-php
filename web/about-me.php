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
	<img class="rounded mx-auto d-block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Ferry_Wenatchee_enroute_to_Bainbridge_Island_WA.jpg/1200px-Ferry_Wenatchee_enroute_to_Bainbridge_Island_WA.jpg"/>
	<br/>
	<div class="container">
		<p>I am a computer science major and I love it! I am not the best with web development, but I am nonetheless excited to be taking this class. I hail from the Pacific North West, near Seattle. I love classical music, and outdoors. I also love video games, it has shaped alot of my interests and things I enjoy in life.</p>
	</div>
</body>
</html>