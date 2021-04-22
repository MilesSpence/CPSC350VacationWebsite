<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Vacation Picker</title>
        <link rel='stylesheet' href='stylesheet.css'>
	</head>
	<body>
		<?php include 'connect_db.php'; ?>

		<!-- Include our site banner -->
		<?php include 'header.php'; ?>
		
		<h3 style='text-align: center; font-size: 400%'>All Cities</h3>
		<form class='city-list' action="cities.php" method="get">
			<?php
				$query = 'SELECT name FROM city ORDER BY name';

		        $result = mysqli_query($connection, $query);
		        $num_fields = mysqli_num_fields($result);
		        while ($row = mysqli_fetch_array($result)) {
					echo "<input class='tab' id='".$row[0]."' type='submit' name='city' value='".$row[0]."'/>";
		        }
			?>
		</form>
	</body>
</html>
