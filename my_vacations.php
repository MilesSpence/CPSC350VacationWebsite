<!DOCTYPE html>

<html>

	<head>
		<title>My Vacations</title>
		 <meta charset="utf-8">
    		<link rel="stylesheet" href="stylesheet.css">
	</head>

	<body>
		<?php include 'header.php';

		include "credentials.php";

		$delete_row = $_GET['row'];
		$vac_id = $_GET['vac_id'];

		$servername = "localhost";
		$db = "Team_350_Fall18_Teal";

		$connection = mysqlI_connect($servername, $username, $password, $db);

		$user = $_SESSION["email"];

		if (!$connection){
		
			echo "<p>Error; send help :(</p>";
		}
		
		if ($delete_row){

			$sql = "DELETE FROM vacation_list WHERE vac_id= $vac_id";
	           	
	        if(mysqli_query($connection, $sql)){
	    		// Do nothing
			}

			else{
	    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
 
		}	
		?>

		<h2 style='text-align: center; font-size: 400%;'>My Cities</h2>
		<table style='margin: auto; margin-top: 20px; margin-bottom: 20px;'>

		<thead>
			<tr>
				<th>Vacation Number</th>
				<th>City</th>
				<th>Has Been To</th>
				<th>Comments</th>
			</tr>
		</thead>

		<tbody>

			<?php

				$sql_select = "SELECT vacation.vac_id, city.name, vacation_list.has_been, vacation_list.comment FROM user INNER JOIN vacation_list ON user.email = vacation_list.email INNER JOIN vacation ON vacation_list.vac_id = vacation.vac_id INNER JOIN city ON vacation.city_id = city.city_id WHERE user.email= '".$user."'";

				$result = mysqli_query($connection, $sql_select);
				$num_rows = mysqli_num_rows($result) . "<br>";
				
				$length = count($vacations);
				$count = 1;
				
				if ($num_rows > 0){
					while ($row = mysqli_fetch_assoc($result)){

						if ($row["has_been"] == 1){
							$has_been = "yes";
						}
						else{
							$has_been = "no";
						}

						if ($row["comment"] === NULL){
							$comment = "Begin typing";
						}

						else{
							$comment = $row["comment"];
						}

						echo "<form action='update_vacations_table.php' method='post'>";

							echo "<tr>";
								echo "<td><input type='number' name='vac_id' value=".$row['vac_id']." readonly></td>";

								echo "<td>" . $row["name"] . "</td>";

								echo "<td><input type='text' value='$has_been' name='has_been' ></td>";
								echo "<td><input type='text' value='$comment' name='comment'></td>";

								echo "<td><input type='submit' value='Save Edits'></td>";

								echo "<td><button class=\"delete\" style='height: 100%; float: left;'><a href='?row=true&&vac_id=$count'>Delete City</a></button></td>";
							echo "</tr>";

						echo "</form>";
						$count++;
					}
				}
				//mysql_close($connection);			
			 ?>
			
		</tbody>
	</table>

	<div style='margin-right: 20%; margin-bottom: 20px; width: 30%; float: right;'>
		<form action='update_vacations_table.php' method='post'>
			<select name='city' style='width: 100%;'>
				<?php
					$query = 'SELECT name FROM city ORDER BY name';

			        $result = mysqli_query($connection, $query);
			        $num_fields = mysqli_num_fields($result);
			        while ($row = mysqli_fetch_array($result)) {
						echo "<option value='".$row[0]."'>".$row[0]."</option>";
			        }
				?>
			</select>
			<input type='submit' name='add_city' value='Add City' style='float: right;'>
		</form>
	</div>

	</body>

</html>
