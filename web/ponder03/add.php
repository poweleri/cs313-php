<?php
	session_start();
	$_SESSION["cart"][$_POST["item"]] = True;

	header("Location: ./browse.php");
	exit();
?>