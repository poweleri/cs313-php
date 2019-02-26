<!DOCTYPE html>
<html>
<?php
	require 'dbConnection.php';
	$db = get_db();

	if (not isset($_SESSION['user'])){
		echo "<script type=\"text/javascript\">alert(\"You must be signed in to add a review. Redirecting to Login page\");</script>";
		header("Location: signIn.html");
		die();
	}

	$query = "INSERT INTO lot_comment (lot_comment_info, rating, usr_id, parking_lot_id)
					VALUES (:note, :rating, :usr_id, :lot_id)";
	$statement = $db->prepare($query);
	$statement->bindValue(':note', $_POST['note']);
	$statement->bindValue(':rating', $_POST['rating'], PDO::PARAM_INT);
	$statement->bindValue(':usr_id', $_SESSION['user'], PDO::PARAM_INT);
	$statement->bindValue(':lot_id', $_POST['lot_id'], PDO::PARAM_INT);
	$statement->execute();

	header("Location: $_POST['returnPage']");
	die();
?>
</html>