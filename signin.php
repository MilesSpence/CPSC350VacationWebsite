<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Vacation Picker</title>
    <link rel='stylesheet' href='stylesheet.css'>
</head>
<body>

	<?php
		if ($_GET['error'] == 'bad creds') {

	    	?>
				<script>
					alert("Username or password incorrect.")
				</script>
			<?php
		}
		elseif ($_GET['error'] == 'user exists') {
	        
	    	?>
				<script>
					alert("A user with this email already exists.")
				</script>
			<?php
	    }
	    elseif ($_GET['error'] == 'bad entry') {
	        
	    	?>
				<script>
					alert("Invalid data entry.")
				</script>
			<?php
		}
		elseif ($_GET['error'] == 'bad form') {
	    	?>
				<script>
					alert("Bad request.")
				</script>
			<?php
		}
	?>

	<?php include 'header.php'; ?>

	<div style='margin-left: 30%; margin-right: 30%;'>
		<h1>Sign in</h1>
		<form class='signin-field' action="session_start.php" method="post">
			<label>Email</label>
			<input type="text" name="email">
			<label>Password</label>
			<input type="password" name="password">
			<input type="submit" name="sign" value="Sign in">
		</form>

		<h1 style="font-size: 300%; text-align: center;">OR</h1>

		<h1>Sign up</h1>
		<form class='signin-field' action="session_start.php" method="post">
			<label>Email</label>
			<input type="text" name="email">
			<label>Password</label>
			<input type="password" name="password">
			<label>First Name</label>
			<input type="text" name="fname">
			<label>Last Name</label>
			<input type="text" name="lname">
			<input type="submit" name="sign" value="Sign up">
		</form>
	</div>
</body>
</html>
