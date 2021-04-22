<?php

// Access the session
session_start();

// Connect to DB
include 'connect_db.php';

// Helper functions
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

function userExists($connection, $email) {

	if($email === NULL) {
		return FALSE;
	}

	$query = "SELECT email FROM user WHERE email='".$email."'";

	$exists = FALSE;
    $result = mysqli_query($connection, $query);
    $num_fields = mysqli_num_fields($result);
    while ($row = mysqli_fetch_array($result)) {
		if ($email == $row[0]) {
			$exists = TRUE;
		}
    }

    return $exists;
}

function isAuthentic($connection, $email, $password) {

	if($email === '' || $password === '') {
		return FALSE;
	}

	$query = "SELECT email, password FROM user WHERE email='".$email."'";

	$authentic = FALSE;
    $result = mysqli_query($connection, $query);
    $num_fields = mysqli_num_fields($result);
    while ($row = mysqli_fetch_array($result)) {
		if ($email == $row[0] && $password == $row[1]) {
			$authentic = TRUE;
		}
    }

    if ($authentic) {

    	return TRUE;
    }
    else {

    	return FALSE;
    }

}

function signUp($connection, $email, $password, $fname, $lname) {

	if($email === '' || $password === '' || $fname === '' || $lname === '') {
		return FALSE;
	}

	$query = "INSERT INTO user VALUES ('".$email."', '".$password."', '".$fname."', '".$lname."')";
    if (mysqli_query($connection, $query)) {

    	return TRUE;
    }
    else {

    	return FALSE;
    }
}

// Are we signin in, or signing up?
$sign = $_POST["sign"];

if ($sign == 'Sign in') {

	$email = $_POST["email"];
	$password = $_POST["password"];

	$isAuthentic = isAuthentic($connection, $email, $password);
	if ($isAuthentic) {

		$_SESSION["email"] = $email;
		redirect('http://cs.umw.edu/~cringham/vacations/home.php');
	}
	else {

		// Bad email or password, redirect back to sign in page
		redirect('http://cs.umw.edu/~cringham/vacations/signin.php?error=bad+creds');
	}
}
elseif ($sign == 'Sign up') {

	$email = $_POST["email"];
	$password = $_POST["password"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];

	if (userExists($connection, $email)) {
		// User already exists
		redirect('http://cs.umw.edu/~cringham/vacations/signin.php?error=user+exists');
	}

	$successful = signUp($connection, $email, $password, $fname, $lname);
	if ($successful) {

		$_SESSION["email"] = $email;
		redirect('http://cs.umw.edu/~cringham/vacations/home.php');
	}
	else {

		// Bad entry
		redirect('http://cs.umw.edu/~cringham/vacations/signin.php?error=bad+entry');
	}
}
else {

	// Someone tried to mess with GET params
	redirect('http://cs.umw.edu/~cringham/vacations/signin.php?error=bad+form');
}

?>
