<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confPass = $_POST['confirm'];
	if (!isset($username) || $username == "" || !isset($password) || $password == "" || 
		!isset($confPass) || $confPass == "" || $password != $confPass)
	{
		header("Location: signUp.php");
		die(); 
	}

	require("dbConnect.php");
	$db = get_db();

	$username = htmlspecialchars($username);
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	$query = 'INSERT INTO usr(username, password) VALUES(:username, :password)';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $hashedPassword);
	$statement->execute();

	header("Location: signIn.php");
	die(); 
?>