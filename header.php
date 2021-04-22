<?php
// Access the session
session_start();
?>

<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
</head>
<body>
    <!-- We save our header here and PHP Include this file to save on typing -->
    <div>
        <div style="border: solid; border-color: #E2C044; background-color: #E2C044; height=4px;"/>
    </div>

    <div class="header">
        <img src="images/light_map_blurred_vignette.jpg" width="100%">
        <a href="http://cs.umw.edu/~cringham/vacations/home.php">
            <h1 class='centered' style='font-family: Sofia; font-size: 650%;'>Vacation Picker</h1>
        </a>
    	<div class='top-right' style="float: right; margin-right: 20px; color: white; background-color: #1E2019; padding: 8px;">
            <?php
                if ($_SESSION["email"] === NULL) {
                    echo "<a href='http://cs.umw.edu/~cringham/vacations/signin.php'><button class='signin-button'>Sign in</button></a>";
                }
                else {
                    echo "<h3>".$_SESSION["email"]."</h3>";
                    echo "<a href='http://cs.umw.edu/~cringham/vacations/signout.php'><button class='account-button'>Sign out</button></a>";
                    echo "<a href='http://cs.umw.edu/~cringham/vacations/my_vacations.php'><button class='account-button'>My Cities</button></a>";
                }
            ?>
    	</div>
    </div>

    <div class="navigation-menu">
        <ul>
            <li><a href="http://cs.umw.edu/~cringham/vacations/about.php">About</a></li>
            <li><a href="http://cs.umw.edu/~cringham/vacations/all_cities.php">All Cities</a> </li>
        </ul>
    </div>

</body>
</html>
