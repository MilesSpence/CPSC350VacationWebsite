<DOCTYPE html>
<html>
        <head>
           <meta charset="utf-8">
           <title>About</title>
           <link rel="stylesheet"  href="stylesheet.css">
           <style>
        .column {
                float: left;
                width: 31%;
                font-size:123%;
                padding: 5px;
        }

        .row:after {
                content: "";
                display: table;
                clear: both;
        }
        .box {
                float: left;
                width: 75%;
                padding: 50px;
                height:  55%;
            }
           </style>
           </head>
        <body>
        <?php include 'header.php'; ?>
        <h3 style='text-align: center; font-size: 400%'>About</h3>

        <p style="text-align:center;font-size:125%;">This website is the final project for CPSC 350. This is a website about various vacation spots around the world that people who are interested in vacationing can research. It has a “home page” that features cities or vacation spots users might be interested in. In a “vacation spot” page, it has information on a specific spot in the form of data tables about the restaurants, airports, hotels, and any other necessary information. All of this information should help users find the ideal place that they want to vacation. In addition, there will be a “sign in” page where users can sign in to add vacations to a “My Vacations Page.” Here users will be able to update thoughts about each vacation spot that they want to visit.</p>


        <div class="row">
                <div class="column">
                        <h3 style="margin-left:25%;font-size:150%;"> Chris Ringham </h3>
                        <img src='images/chris.jpeg' class="box">
                        <p> Chris is a Senior at the University of Mary Washington. While pursuing a major in Computer Science and a minor in Digital Studies, he tutors at the Digital Knowledge Center on campus, teaching peers how to use digital media production and editing tools. </p>
                </div>
                <div class="column">
                        <h3 style="margin-left:20%;font-size:150%;"> Danielle Radosta </h3>
                        <img src='images/headshot.jpg' class="box">
                        <p> Danielle Radosta is a computer science student from the University of Mary Washington. She enjoys looking at memes.</p>
                </div>
                <div class="column">
                        <h3 style="margin-left:25%;font-size:150%;"> Miles Spence </h3>
                        <img src='images/miles.jpg' class="box">
                        <p> Miles Spence is a computer science student from the University of Mary Washington, where he also runs cross country and track. He will graduate 2021. He enjoys football, the TV show Survivor, and hip-hop music.</p>
                </div>
        </div>
        </body>
</html>