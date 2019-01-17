<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Not Clearly Enough</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<?php
			$page = $_SERVER['PHP_SELF'];
			include 'header.php';
		?>
		<p>This is the homepage</p>
		<div>
			<?php
				if($_SESSION["user"] == admin){
					echo "<p>Welcome Supreme Overlord and Master</p>";
				} elseif($_SESSION["user"] == tester){
					echo "<p>I promise there are no bugs on this page</p>";
				} else {
					echo "<p>Welcome Anon, Please don't break my page </p>";
				}
			?>
		</div>
	</body>


</html>