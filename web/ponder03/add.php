<?php
	session_start();
	array_push($_SESSION["cart"], $_POST["cart"]);

	header("Location: ./browse.php");
	exit();
?>