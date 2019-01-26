<?php
	start_session();
	session_unset();
	header("Location: ./browse.php");
	exit();
?>