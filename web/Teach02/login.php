<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<?php
			$page = $_SERVER['PHP_SELF'];
			include 'header.php';
		?>
		<a href="signin.php?user=admin">Login as Administrator</a>
		<a href="signin.php?user=tester">Login as Tester</a>

	</body>


</html>