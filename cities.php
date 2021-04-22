<DOCTYPE html>
<html>
        <head>
           <meta charset="utf-8">
           <title>Vacations</title>
           <link rel="stylesheet"  href="stylesheet.css">
        </head>
        <style>
        table, th, td {
                border: 1px solid black;
        }
        p {
                font-size: 125%;
        }
        table {
                margin-left:100px;
        }
        .cityText {
                margin-left:50px;
        }
        </style>
        <body>

        <?php include 'header.php';
              include 'credentials.php';
                $country = $_GET['city'];

        $connection = mysqli_connect($servername, $username, $password, $db_name);
        if(!$connection) { ?>
        <script>
                alert("MySQL Connection Failure.")
        </script>
        <?php
        }
        $poot = 0;
                if($country == 'Mamanuca Islands') {
                        $poot = 1;
                } elseif($country == 'Koh Rong') {
                        $poot = 2;
                } elseif($country == 'Los Angeles') {
                        $poot = 3;
                } elseif($country == 'Belfast') {
                        $poot = 4;
                } elseif($country == 'Paris') {
                        $poot = 5;
                } elseif($country == 'New Orleans') {
                        $poot = 6;
                }

                //for the hotels
                $resultName = mysqli_query($connection, "SELECT name FROM hotel WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT name FROM hotel WHERE city_id = $poot"));
                $hotelName = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($hotelName, $row["name"]);
                        }
                }
                $resultName = mysqli_query($connection, "SELECT rating FROM hotel WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT rating FROM hotel WHERE city_id = $poot"));
                $hotelRating = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($hotelRating, $row["rating"]);
                        }
                }
                $resultName = mysqli_query($connection, "SELECT cost_rating FROM hotel WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT cost_rating FROM hotel WHERE city_id = $poot"));
                $hotelCostRating = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($hotelCostRating, $row["cost_rating"]);
                        }
                }
                function printHotel($yeet,$yope,$yeat) {
                ?><table>
                <tr>
                  <th>Hotel Name</th>
                  <th>Hotel Rating (1-5)</th>
                  <th>Cost Rating (1-5)</th>
                </tr>

                <?php for($i = 0; $i < sizeOf($yeet); $i++) { ?> <tr>
                <?php   for($x = 0; $x < 3; $x++) {
                        if($x == 0) {?>
                                <td><?php echo $yeet[$i]  ?></td>
        <?php     } elseif($x == 1) { ?>
                                 <td><?php echo $yope[$i]  ?></td>
        <?php     } elseif($x == 2) { ?>
                                <td><?php echo $yeat[$i]  ?></td>
        <?php    }
                }
                }?>
                </tr>
                </table>
                <?php }
                //for the airports
                $resultName = mysqli_query($connection, "SELECT name FROM airport WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT name FROM airport WHERE city_id = $poot"));
                $airportName = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($airportName, $row["name"]);
                        }
                }
                $resultName = mysqli_query($connection, "SELECT rating FROM airport WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT rating FROM airport WHERE city_id = $poot"));
                $airportRating = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($airportRating, $row["rating"]);
                        }
                }

                function printAirport($aN,$aR) {
                ?><table>
                <tr>
                  <th>Airport Name</th>
                  <th>Airport Rating (1-5)</th>
                </tr>

                <?php for($i = 0; $i < sizeOf($aN); $i++) { ?> <tr>
                <?php   for($x = 0; $x < 3; $x++) {
                        if($x == 0) {?>
                                <td><?php echo $aN[$i]  ?></td>
        <?php     } elseif($x == 1) { ?>
                                 <td><?php echo $aR[$i]  ?></td>
        <?php     }
                }
                }?>
                </tr>
                </table>
                <?php }
                //for the restaurants
                $resultName = mysqli_query($connection, "SELECT name FROM restaurant WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT name FROM restaurant WHERE city_id = $poot"));
                $restaurantName = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($restaurantName, $row["name"]);
                        }
                }
                $resultName = mysqli_query($connection, "SELECT type FROM restaurant WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT type FROM restaurant WHERE city_id = $poot"));
                $restaurantType = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($restaurantType, $row["type"]);
                        }
                }
                $resultName = mysqli_query($connection, "SELECT rating FROM restaurant WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT rating FROM restaurant WHERE city_id = $poot"));
                $restaurantRating = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($restaurantRating, $row["rating"]);
                        }
                }
                $resultName = mysqli_query($connection, "SELECT cost_rating FROM restaurant WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT cost_rating FROM restaurant WHERE city_id = $poot"));
                $restaurantCostRating = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($restaurantCostRating, $row["cost_rating"]);
                        }
                }
                function printRestaurant($rN,$rT,$rR,$rCR) {
                ?><table>
                <tr>
                  <th>Restaurant Name</th>
                  <th>Restaurant Type</th>
                  <th>Restaurant Rating (1-5)</th>
                  <th>Cost Rating (1-5)</th>
                </tr>

                <?php for($i = 0; $i < sizeOf($rN); $i++) { ?> <tr>
                <?php   for($x = 0; $x < 4; $x++) {
                        if($x == 0) {?>
                                <td><?php echo $rN[$i]  ?></td>
        <?php     } elseif($x == 1) { ?>
                                 <td><?php echo $rT[$i]  ?></td>
        <?php     } elseif($x == 2) { ?>
                                 <td><?php echo $rR[$i]  ?></td>
        <?php     }  elseif($x == 3) { ?>
                                 <td><?php echo $rCR[$i]  ?></td>
        <?php     }
                }
                }?>
                </tr>
                </table>
                <?php }

                //for the activities
                $resultName = mysqli_query($connection, "SELECT activity_name FROM city_activity WHERE city_id = $poot");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT activity_name FROM city_activity WHERE city_id = $poot"));
                $activityName = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($activityName, $row["activity_name"]);
                        }
                }
                $resultName = mysqli_query($connection, "SELECT group_mx FROM city_activity INNER JOIN activity ON activity.name = city_activity.activity_name");
                $num_rows_name= mysqli_num_rows(mysqli_query($connection, "SELECT group_mx FROM city_activity INNER JOIN activity ON activity.name = city_activity.activity_name"));
                $groupMax = array();
                if($num_rows_name > 0){
                        while($row=mysqli_fetch_assoc($resultName)) {
                                array_push($groupMax, $row["group_mx"]);
                        }
                }
                function printActivity($aN,$aGM) {
                ?><table>
                <tr>
                  <th>Activity Name</th>
                  <th>Maximum Group Size</th>
                </tr>

                <?php for($i = 0; $i < sizeOf($aN); $i++) { ?> <tr>
                <?php   for($x = 0; $x < 5; $x++) {
                        if($x == 0) {?>
                                <td><?php echo $aN[$i]  ?></td>
        <?php     } elseif($x == 1) { ?>
                                 <td><?php echo $aGM[$i]  ?></td>
        <?php     }
                }
                }?>
                </tr>
                </table>
                <?php }
        function title($cityFirstName, $citySecondName) {
                ?> <h3 style='text-align: center; font-size: 400%'> <?php echo $cityFirstName ?>  <?php echo $citySecondName ?> </h3>     <?php
        }

        if($country == 'Belfast') {
                title(Belfast, null);
                ?><img src='images/belfast.jpg' style='width:400px;height:300px;display:block;margin-left:auto;margin-right:auto;width:50%;'>
                <p class="cityText" style="text-align:center"> Interested in the magistic Belfast? Enjoy the weather and terrain! </p><?php
                printHotel($hotelName,$hotelRating,$hotelCostRating);
                ?> <p class="cityText">Above are some hotels offered as well as some additional information (The cost rating is in ascending order of price). </p> <?php
                printAirport($airportName,$airportRating); ?>
                <p class="cityText">Above are some airports located in Belfast as well as some additional information. </p><?php
                printRestaurant($restaurantName,$restaurantType,$restaurantRating,$restaurantCostRating);
                ?> <p class="cityText">Above are some restaurants located in Belfast as well as some additional information. </p><?php
                printActivity($activityName,$groupMax);
                ?> <p class="cityText">Above are some activities to do in Belfast once you arrive. There is also some additional information. </p>
                  <p style="text-align:center;">Hope you enjoy!</p><?php
        } else if($country == 'Koh Rong') {
                title(Koh, Rong);
                ?><img src='images/koh_rong.jpg' style='width:400px;height:300px;display:block;margin-left:auto;margin-right:auto;width:50%;'>
                <p class="cityText" style="text-align:center"> Interested in the splendid Koh Rong? Enjoy the culture and climate! </p><?php
                printHotel($hotelName,$hotelRating,$hotelCostRating);
                ?> <p class="cityText">Above are some hotels offered as well as some additional information (The cost rating is in ascending order of price). </p> <?php
                printAirport($airportName,$airportRating); ?>
                <p class="cityText">Above are some airports located in Koh Rong as well as some additional information. </p><?php
                printRestaurant($restaurantName,$restaurantType,$restaurantRating,$restaurantCostRating);
                ?> <p class="cityText">Above are some restaurants located in Koh Rong as well as some additional information. </p><?php
                printActivity($activityName,$groupMax);
                ?> <p class="cityText">Above are some activities to do in Koh Rong, once you arrive. There is also some additional information. </p>
                  <p style="text-align:center;">Hope you enjoy!</p><?php
        } else if($country == 'Los Angeles') {
                title(Los, Angeles);
                ?><img src='images/los_angeles.jpg' style='width:400px;height:300px;display:block;margin-left:auto;margin-right:auto;width:50%;'>
                <p class="cityText" style="text-align:center"> Interested in the sensational Los Angeles? Enjoy the city and excitement! </p><?php
                printHotel($hotelName,$hotelRating,$hotelCostRating);
                ?> <p class="cityText">Above are some hotels offered as well as some additional information (The cost rating is in ascending order of price). </p> <?php
                printAirport($airportName,$airportRating); ?>
                <p class="cityText">Above are some airports located in Los Angeles as well as some additional information. </p><?php
                printRestaurant($restaurantName,$restaurantType,$restaurantRating,$restaurantCostRating);
                ?> <p class="cityText">Above are some restaurants located in Los Angeles as well as some additional information. </p><?php
                printActivity($activityName,$groupMax);
                ?> <p class="cityText">Above are some activities to do in Los Angeles, once you arrive. There is also some additional information. </p>
                  <p style="text-align:center;">Hope you enjoy!</p><?php
        } else if($country == 'Mamanuca Islands') {
                title(Mamanuca, Islands);
                ?><img src='images/mamanuca.jpg' style='width:400px;height:300px;display:block;margin-left:auto;margin-right:auto;width:50%;'>
                <p class="cityText" style="text-align:center"> Interested in the beautiful Mamanuca Islands? Enjoy the sun and beaches! </p><?php
                printHotel($hotelName,$hotelRating,$hotelCostRating);
                ?> <p class="cityText">Above are some hotels offered as well as some additional information (The cost rating is in ascending order of price). </p> <?php
                printAirport($airportName,$airportRating); ?>
                <p class="cityText">Above are some airports located in Mamanuca Islands as well as some additional information. </p><?php
                printRestaurant($restaurantName,$restaurantType,$restaurantRating,$restaurantCostRating);
                ?> <p class="cityText">Above are some restaurants located in Mamanuca Islands as well as some additional information. </p><?php
                printActivity($activityName,$groupMax);
                ?> <p class="cityText">Above are some activities to do in Mamanuca Islands, once you arrive. There is also some additional information. </p>
                  <p style="text-align:center;">Hope you enjoy!</p><?php
         } else if($country == 'New Orleans') {
                title('New', Orleans);
                ?><img src='images/new_orleans.jpg' style='width:400px;height:300px;display:block;margin-left:auto;margin-right:auto;width:50%;'>
                <p class="cityText" style="text-align:center"> Interested in the gorgeous New Orleans? Enjoy the city and night-life! </p><?php
                printHotel($hotelName,$hotelRating,$hotelCostRating);
                ?> <p class="cityText">Above are some hotels offered as well as some additional information (The cost rating is in ascending order of price). </p> <?php
                printAirport($airportName,$airportRating); ?>
                <p class="cityText">Above are some airports located in New Orleans as well as some additional information. </p><?php
                printRestaurant($restaurantName,$restaurantType,$restaurantRating,$restaurantCostRating);
                ?> <p class="cityText">Above are some restaurants located in New Orleans as well as some additional information. </p><?php
                printActivity($activityName,$groupMax);
                ?> <p class="cityText">Above are some activities to do in New Orleans, once you arrive. There is also some additional information. </p>
                  <p style="text-align:center;">Hope you enjoy!</p><?php
        } else if($country == 'Paris') {
                title(Paris, null);
                ?><img src='images/paris.jpg' style='width:400px;height:300px;display:block;margin-left:auto;margin-right:auto;width:50%;'>
                <p class="cityText" style="text-align:center"> Interested in the beautiful Paris? Enjoy the history and attractions! </p><?php
                printHotel($hotelName,$hotelRating,$hotelCostRating);
                ?> <p class="cityText">Above are some hotels offered as well as some additional information (The cost rating is in ascending order of price). </p> <?php
                printAirport($airportName,$airportRating); ?>
                <p class="cityText">Above are some airports located in Paris as well as some additional information. </p><?php
                printRestaurant($restaurantName,$restaurantType,$restaurantRating,$restaurantCostRating);
                ?> <p class="cityText">Above are some restaurants located in Paris as well as some additional information. </p><?php
                printActivity($activityName,$groupMax);
                ?> <p class="cityText">Above are some activities to do in Paris, once you arrive. There is also some additional information. </p>
                  <p style="text-align:center;">Hope you enjoy!</p><?php
                }
        ?>
        <p> </p>
        </head>
</html>