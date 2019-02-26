<?php
	require 'dbConnection.php';
	$db = get_db();

	if (isset($_POST["buildings"])){
		$buildings = $_POST["buildings"];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>BYU-I Parking Lots</title>
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
		<h2>Buildings</h2>
		<form action="searchLots.php" method="GET">
			<?php 
				$buildingQuery = 'SELECT building_id as id, description from building;';

				$statement = $db->query($buildingQuery);
				while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
					$id = $row['id'];
					$desc = $row['description'];
					echo "<input type=\"checkbox\" name=\"buildings\" value=\"$id\">$desc<br>";
				}
			?>
			<input type="submit" value="Update List">
		</form>
	</div>
	<div class="container">
		<h2>Lots</h2>
		<?php
			$statement = NULL;
			if ($buildings){
				$lots = Set();
				$parkinglotQuery = 'SELECT pkl.parking_lot_id as id, pkl.description as desc
								  , pkl.conditions as cond, COALESCE(NULLIF(avg(lc.rating), NULL), \'0\') as average
									FROM parking_lot pkl LEFT JOIN lot_comment lc ON pkl.parking_lot_id = lc.parking_lot_id
	                    			INNER JOIN parking_lot_building_join pklbj ON pklbj.parking_lot_id = pkl.parking_lot_id
	                         			  AND  pklbj.building_id = :building
									GROUP BY id;';
				foreach($buildings as $building){
					$statement = $db->prepare($parkingLotQuery);
					$statement->bindValue(":building", $building);
					$statement->execute();
					while($lots.add($statement->fetch(PDO::FETCH_ASSOC)));
				}
				foreach ($row as $lots) { 
					$id   = $row['id'];
					$desc = $row['desc'];
					$cond = $row['cond'];
					$avg  = number_format($row['average'], 2);
					echo "<div class=\"row\">
							<p><a href=\"lotComments.php?lot=$id\">$desc</a><br>
							   Score: $avg<br>
							   Conditions: $cond</p>
					 	  </div>";
				}

			} else {
				$parkinglotQuery = 'SELECT pkl.parking_lot_id as id, pkl.description as desc
								  , pkl.conditions as cond, COALESCE(NULLIF(avg(lc.rating), NULL), \'0\') as average
									FROM parking_lot pkl LEFT JOIN lot_comment lc ON pkl.parking_lot_id = lc.parking_lot_id
									GROUP BY id;';
				$statement = $db->query($parkinglotQuery);
				
			}	
			while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$id   = $row['id'];
				$desc = $row['desc'];
				$cond = $row['cond'];
				$avg  = number_format($row['average'], 2);
				echo "<div class=\"row\">
						<p><a href=\"lotComments.php?lot=$id\">$desc</a><br>
						   Score: $avg<br>
						   Conditions: $cond</p>
				 	  </div>";
			} 
		?>
	</div>
</body>
</html>