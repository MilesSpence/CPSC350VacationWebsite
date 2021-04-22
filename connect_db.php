<!-- Connect to SQL DB -->
<?php
	include 'credentials.php';
	$connection = mysqli_connect($servername, $username, $password, $db_name);
	if(!$connection) {
?>
	<script>
		alert("MySQL Connection Failure.")
	</script>
<?php
	}
?>
