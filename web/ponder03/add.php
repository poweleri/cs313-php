<?php
	session_start();
	$_SESSION["cart"] = $_POST["cart"];

	header("Location: ./browse.php");
	exit();
?>