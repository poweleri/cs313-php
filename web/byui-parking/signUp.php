<?php
	require 'dbConnection.php';
	$db = get_db();

	$err = false;

	if(isset($_POST['username']) && isset( $_POST['password']) && isset($_POST['confirm'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confPass = $_POST['confirm'];
		if ($username == "" || $password == "" || $confPass == "" || $password != $confPass) {
			$err = true;
		} else {

			$username = htmlspecialchars($username);
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

			$query = 'INSERT INTO usr(username, password) VALUES(:username, :password)';
			$statement = $db->prepare($query);
			$statement->bindValue(':username', $username);
			$statement->bindValue(':password', $hashedPassword);
			$statement->execute();

			header("Location: signIn.php");
			die(); 
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		require 'header.php'; 
		if($err){ 
			echo "<p><b>Error:</b> Passwords did not match or missing field</p>"; 
		} 
	?>
	<div>
		<form method="POST" action="signUp.php" method="POST" >
			Username:<input type="text" name="username"><br>
			Password:<input type="password" name="password"><br>
			Confirm Password:<input type="password" name="confirm"><br>
			<input type="submit">
		</form>
	</div>

</body>
</html>