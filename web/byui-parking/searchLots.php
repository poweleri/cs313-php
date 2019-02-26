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
	<?php require 'header.php'; ?>
	<div>
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
	<div>
		<h2>Lots</h2>
		<?php
			$statement = NULL;
			if (isset($_POST["buildings"])){
				$parkinglotQuery = 'SELECT pkl.parking_lot_id as id, pkl.description as desc, pkl.conditions as cond, avg(lc.rating) as average
									FROM parking_lot pkl INNER JOIN lot_comment lc ON pkl.parking_lot_id = lc.parking_lot_id
	                    			INNER JOIN parking_lot_building_join pklbj ON pklbj.parking_lot_id = pkl.parking_lot_id
	                         			  AND  pklbj.building_id IN :buildings
									GROUP BY id;';
				$buildings = "(" . implode($_POST["buildings"], ", ") . ")";
				$statement = $db->prepare($parkingLotQuery);
				$statement->bindValue(":buildings", $buildings);
				$statement->execute();

			} else {
				$parkinglotQuery = 'SELECT pkl.parking_lot_id as id, pkl.description as desc, pkl.conditions as cond, avg(lc.rating) as average
									FROM parking_lot pkl INNER JOIN lot_comment lc ON pkl.parking_lot_id = lc.parking_lot_id
									GROUP BY id;';
				$statement = $db->query($parkinglotQuery);
				
			}	
			while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$id   = $row['id'];
				$desc = $row['desc'];
				$cond = $row['cond'];
				$avg  = number_format($row['average'], 2);
				echo "<div>
						<p><a href=\"lotComments.php?lot=$id\">$desc</a><br>
						   Score: $avg<br>
						   Conditions: $cond</p>
				 	  </div>";
			} 
		?>
	</div>
</body>
</html>