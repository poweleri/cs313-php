<?php
	require 'dbConnection.php';
	$db = get_db();
	$lot_id = $_GET['lot'];
	$temp = $db->query("SELECT conditions, description FROM parking_lot WHERE parking_lot_id = $lot_id");
	$lot_info = $temp->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lot_info['description']; ?></title>
</head>
<body>
	<?php require 'header.php'; ?>
	<div>
		<h2><?php echo $lot_info['description']; ?></h2>
		<h3>Conditions: <?php echo $lot_info['conditions']; ?></h3>
		<p>Close Buildings: </p>
		<ul>
			<?php
				$query = "SELECT b.building_id, b.description 
						  FROM building b INNER JOIN parking_lot_building_join pklbj ON b.building_id=pklbj.building_id
						  				  INNER JOIN parking_lot ON pklbj.parking_lot_id=$lot_id";
				$statement = $db->execute($query);
				while($row = $statement->fetch(PDO::FETCH_ASSOC)){
					$desc = $row['description'];
					$id = $row['building_id'];
					echo "<li><a href=\"searchLots.php?buildings=$id\">$desc</a></li>";
				}
			?>
		</ul>
		<div>
			<h2>User Ratings</h2>
			<?php
				$noteQuery = "SELECT lc.lot_comment_info as note, lc.rating, u.username 
							  FROM lot_comment lc INNER JOIN usr u ON lc.usr_id=lc.usr_id
						  	  					  AND lc.parking_lot_id=$lot_id";
				$statement = $db->execute($query);
				while($row = $statement->fetch(PDO::FETCH_ASSOC)){
					$note = $row['note'];
					$rating = $row['rating'];
					$username = $row['username'];
					echo "<div>
							<p>$note<br>Rating: $rating<br>User: $username</p>
						  </div>";
				}		  	  					  
			?>
			<div>
				<form action="addComment.php" method="POST">
					<input type="textbox" name="note">
					<input type="hidden" name="returnPage" value=<?php echo basename($_SERVER['PHP_SELF']); ?>>
					<input type="hidden" name="lot_id" value=<?php echo $lot_id; ?>>
					<input type="submit" value="Add Review">
				</form>
			</div>
		</div>
	</div>
</body>
</html>