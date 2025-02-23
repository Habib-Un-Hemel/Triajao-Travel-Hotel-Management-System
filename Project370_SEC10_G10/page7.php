<?php
require_once("connect6.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .bg{
            background-image: url('tour.jpg');
        }
        .rate #submit-right{
            top: 86%;
            left: 21%;
        }
        .rate .location #right{
            position: absolute;
            top: 0px;
            left: 240px;
        }
        .rate .location{
            top: 76%;
            left: 6%;
            width: 570px;
        }
        .results-table {
            opacity: 0.7;
            width: 480px;
            position: absolute;
            border: 2px solid white;
            background-color: #323232;
            left: 58%;
            top: 126px;
            border-radius: 20px 20px 0px 0px;
            color: white; /* Add any other styles you want for text color, etc. */
        }
        .results-table th, .results-table td {
            text-shadow: 7px 4px 0px #323232;
            width: 50%;
            font-size: 19px;
            font-family: 'Sono', sans-serif;
            border: 2px solid white;
            padding: 10px; /* Adjust padding as needed */
            text-align: center; /* Align text to left, center, or right as preferred */
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Bungee+Inline&family=Comfortaa:wght@700&family=Fira+Sans:wght@200&family=Monofett&family=Sono:wght@200;600&family=Sonsie+One&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Bungee+Inline&family=Chivo+Mono:wght@300;500&family=Comfortaa:wght@700&family=Fira+Sans:wght@200&family=Monofett&family=Raleway:wght@300&family=Sono:wght@200;600&family=Sonsie+One&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://i.ibb.co/nnLmmqM/505-5055502-simple-location-map-pin-icon3-red-free-vector-removebg-preview.png" type="image/x-icon">
    <link href="page7.css" rel="stylesheet">
    <title>Hire Guide</title>
</head>
<body>
    <nav>
        <div class="Name"><a href="Page1.php">Triajao</a></div>
        <div class="options">
            <a href="search_result.php" target="_blank"><button>Search Hotel</button></a>
            <button class="active">Hire Guide</button>
            <a href="Page4.php" target="_blank"><button>Buy Tickets</button></a>
            <a href="Page8.php" target="_blank"><button>Place To Travel</button></a>
        </div>
        <div class="acc"><i class="bi bi-person-circle"></i>My Account</div>
    </nav>
    <div class="bg" style="background-image: url('tour.jpg');">
        <form action="page7.php" method="POST" class="input">
            <div class="text">Your preferrable</div>
            <div class="text2">DESTINATION</div>
            <label for="place"></label>
            <table class="location">
                <tr>
                    <th class="left">
                        <i class="bi bi-pin-map-fill"></i>
                        <input class="fline" type="text" id="place" name="place" placeholder="city">
                    </th>
                </tr>
            </table>
            <button class="submit">Submit</button> 
        </form>
        <?php
        if (isset($_POST["place"])) {
            $place = mysqli_real_escape_string($con, $_POST["place"]);
            $query = "SELECT * FROM guides WHERE city='$place'";
            $result = mysqli_query($con, $query);

            if ($result) {
                ?>
                <table class="results-table">
                    <tr>
                        <th style="border-top:0px; border-left:0px;">Guide Name</th>
                        <th style="border-top:0px;">Ratings</th>
                        <th style="border-top:0px;">City</th>
                        <th style="border-top:0px; border-right:0px;">Hire</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["Name"] ?></td>
                            <td><?php echo $row["Ratings"] ?></td>
                            <td><?php echo $row["City"] ?></td>
                            <td><button style="margin:5px;">Click To Hire</button></td>  
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            } else {
                echo "<p>No guides found for this city.</p>";
            }
        }
        ?>
    </div>
    <form action="rate.php" method="post" class="rate">
        <table class="location" >
            <tr>
                <th class="left">
                    <i class="bi bi-list-ol"></i>
                    <input class="fline" type="text" id="id" name="id" placeholder="Guide's ID">
                </th>
                <th class="left" id="right">
                    <i class="bi bi-star-half"></i>
                    <input class="fline" type="text" id="rating" name="rating" placeholder="Rate out of 5">
                </th>
            </tr>
        </table>
        <button class="submit" id="submit-right">Submit</button>
    </form>
</body>
</html>