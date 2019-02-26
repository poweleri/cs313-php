<?php
	require 'dbConnection.php';
	$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BYU-I Parking Lots</title>
</head>
<body>
	<?php require 'header.php' ?>
	<div>
		<h2>Buildings</h2>
		<form action="searchLots.php">
			<?php 
				$buildingQuery = 'SELECT building_id as id, description from building;';

				$statement = $db->query($buildingQuery);
				while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
					echo "<input type=\"checkbox\" name=\"buildings\" value=\"$row['id']\">$row['description']<br>";
				}
			?>
			<input type="submit" value="Update List">
		</form>
	</div>
	<div>
		<h2>Lots</h2>
		<?php
			echo"<div>";

			echo"</div>";
		?>
	</div>
</body>
</html>