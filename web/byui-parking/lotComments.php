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
		<h2><?php echo $lot_info['description']; ?></h2>
		<h3>Conditions: <?php echo $lot_info['conditions']; ?></h3>
		<p>Close Buildings: </p>
		<ul>
			<?php
				$query = "SELECT DISTINCT b.building_id, b.description 
						  FROM building b INNER JOIN parking_lot_building_join pklbj ON b.building_id=pklbj.building_id
						  				  INNER JOIN parking_lot ON pklbj.parking_lot_id=$lot_id";
				$statement = $db->query($query);
				while($row = $statement->fetch(PDO::FETCH_ASSOC)){
					$desc = $row['description'];
					$id = $row['building_id'];
					echo "<li><a href=\"searchLots.php?buildings=$id\">$desc</a></li>";
				}
			?>
		</ul>
	</div>
	<div class="container">
		<h2>User Ratings</h2>
		<?php
			$noteQuery = "SELECT lc.lot_comment_info as note, lc.rating, u.username 
						  FROM lot_comment lc INNER JOIN usr u ON lc.usr_id=u.usr_id AND lc.parking_lot_id = $lot_id;";
			$statement = $db->query($noteQuery);
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$note = $row['note'];
				$rating = $row['rating'];
				$username = $row['username'];
				echo "<div class=\"row\"><p><textarea rows=\"5\" cols=\"100\" disabled>$note</textarea><br>Rating: $rating<br>User: $username</p></div>";
			}		  	  					  
		?>
		<div class="row">
			<form action="addComment.php" method="POST">
				<textarea name="note" rows="5" cols="100"></textarea><br>
				1: <input type="radio" name="rating" value="1">
				2: <input type="radio" name="rating" value="2">
				3: <input type="radio" name="rating" value="3">
				4: <input type="radio" name="rating" value="4">
				5: <input type="radio" name="rating" value="5" checked="true"><br>
				<input type="hidden" name="returnPage" value=<?php echo basename($_SERVER['PHP_SELF']) . "?lot=" . $lot_id; ?>>
				<input type="hidden" name="lot_id" value=<?php echo $lot_id; ?>>
				<input type="submit" value="Add Review">
			</form>
		</div>
	</div>
</body>
</html>