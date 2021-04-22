<?php

	// Access the session
	session_start();

	include "credentials.php";

	$servername = "localhost";
	$db = "Team_350_Fall18_Teal";

	$connection = mysqlI_connect($servername, $username, $password, $db);

	if (!$connection){
		
			echo "<p>Error; send help :(</p>";
	}

	function redirect($url, $statusCode = 303)
	{
   		header('Location: ' . $url, true, $statusCode);
   		die();
	}

	if ($_POST['add_city'] == 'Add City') {

		$city = $_POST['city'];

		// Find corresponding city_id
		$query = "SELECT city_id FROM city WHERE name='".$city."'";
		$result = mysqli_query($connection, $query);
		$num_fields = mysqli_num_fields($result);
        while ($row = mysqli_fetch_array($result)) {
			$city_id = $row[0];
        }

        $query = "SELECT vac_id FROM vacation WHERE city_id = ".$city_id."";
        $result = mysqli_query($connection, $query);
		$num_fields = mysqli_num_fields($result);
        while ($row = mysqli_fetch_array($result)) {
			$vac_id = $row[0];
        }

		// Add vacation to vacation_list
		$query = "INSERT INTO vacation_list VALUES (".$vac_id.", '".$_SESSION["email"]."', NULL, NULL)";
		mysqli_query($connection, $query);

		redirect("http://cs.umw.edu/~cringham/vacations/my_vacations.php");
	}
	else {
		$vac_id = $_POST['vac_id'];
		$has_been = $_POST['has_been'];
		$comment = $_POST['comment'];

		if ($has_been === "yes"){
			$has_been_col = 1;
		}
		else{
			$has_been_col = 0;
		}

		$sql1 = "UPDATE vacation_list SET has_been = " . $has_been_col . ", comment = '" . $comment . "' WHERE vac_id= " . $vac_id . ";";

		echo $sql1 . "<br>";

		if(mysqli_query($connection, $sql1)){
		    		//echo "Records were updated successfully.";
		    		redirect("http://cs.umw.edu/~cringham/vacations/my_vacations.php");
		}

		else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		//send back to main page
		//redirect("http://cs.umw.edu/~dradosta/vacations/my_vacations.php");
	}

?>
