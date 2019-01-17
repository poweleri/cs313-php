<?php
session_start();
?>

<?php
	session_unset();

	if ($_GET["user"] = admin)
		$_SESSION["user"] = admin;
	elseif($_GET["user"] = tester)
		$_SESSION["user"] = tester;

	header('location: /Teach02/home.php');
	exit;
?>