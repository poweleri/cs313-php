<?php
	require 'dbConnection.php';
	$db = get_db();

	$badLogin = false;

	if (isset($_POST['username']) && isset($_POST['password']))	{
		$username = htmlspecialchars($_POST['username']);
		$password = $_POST['password'];
		$query = 'SELECT usr_id, password FROM usr WHERE username=:username';
		$statement = $db->prepare($query);
		$statement->bindValue(':username', $username);
		$result = $statement->execute();
		if ($result) { 
			$row = $statement->fetch();
			$dbPass = $row['password'];
			if (password_verify($password, $dbPass)) {
				$_SESSION['username'] = $username;
				$_SESSION['usr_id'] = $row['usr_id'];
				header("Location: searchLots.php");
				die(); 
			} else {
				$badLogin = true;
			}
		} else {
			$badLogin = true;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>
<body>
	<?php require 'header.php'; ?>
	<div>
		<p>Sign in:</p>
		<?php if($badLogin){ echo "<p><b>Error:</b> Either Username or Password is incorrect</p>";} ?>
		<form method="POST" action="signIn.php" >
			Username:<input type="text" name="username"><br>
			Password:<input type="password" name="password"><br>
			<input type="submit">
		</form>
	</div>
	<div>
		<p>Or <a href="signUp.php">Create a new Account</a></p>
	</div>
</body>
</html>