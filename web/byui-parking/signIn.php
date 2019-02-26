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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php require 'header.php'; ?>
	<div class="container">
		<div class="row">
			<?php if($badLogin){ echo "<div><b>Error:</b> Either Username or Password is incorrect<br></div>";} ?>
			<form method="POST" action="signIn.php" >
				Username:<input type="text" name="username"><br>
				Password:<input type="password" name="password"><br>
				<input type="submit">
			</form>
		</div> <br>
		<div class="row">
			<p>Or <a href="signUp.php">Create a new Account</a></p>
		</div>
	</div>
</body>
</html>