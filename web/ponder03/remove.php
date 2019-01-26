<?php 
	session_start();
	$_SESSION["cart"][$_POST["item"]] -= 1;

	header("Location: ./cart.php");
	exit();
?>