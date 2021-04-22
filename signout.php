<?php

// Access the session
session_start();

// Remove all session variables
session_unset(); 
// Destroy the session 
session_destroy(); 

// Back to home
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

redirect('http://cs.umw.edu/~cringham/vacations/home.php');

?>
