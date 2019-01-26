<?php 
	session_start();
	$_SESSION["cart"][$_POST["item"]] = False;

	header("Location: ./cart.php");
	exit();
?>