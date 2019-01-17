<?php
session_start();
?>

<?php
	if ($_GET["user"] = admin)
		$_SESSION["user"] = admin;
	else
		$_SESSION["user"] = tester;

	header('location: /Teach02/home.php');
	exit;
?>