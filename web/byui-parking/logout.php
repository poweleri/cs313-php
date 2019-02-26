<?php
	session_start();
	unset($_SESSION['usr_id'], $_SESSEION['username']);
	header('Location: signIn.php');
	die();
?>