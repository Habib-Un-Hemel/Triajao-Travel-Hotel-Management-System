<?php
require_once("connect6.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .results-table {
            opacity: 0.7;
            width: 450px;
            position: absolute;
            border: 2px solid white;
            background-color: #323232;
            left: 60%;
            top: 126px;
            border-radius: 20px 20px 0px 0px;
            color: white; /* Add any other styles you want for text color, etc. */
        }
        .results-table th, .results-table td {
            text-shadow: 7px 4px 0px #323232;
            width: 50%;
            font-size: 22px;
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
    <title>Places To Travel</title>
</head>
<body>
<nav>
        <div class="Name"><a href="Page1.php">Triajao</a></div>
        <div class="options">
            <a href="search_result.php" target="_blank"><button>Search Hotel</button></a>
            <a href="page7.php" target="_blank"><button>Hire Guide</button></a>
            <a href="Page4.php" target="_blank"><button >Buy Tickets</button></a>
            <button class="active">Place To Travel</button></a>
        </div>
        <div class="acc"><i class="bi bi-person-circle"></i>My Account</div>
    </nav>
    <div class="bg">
        <form action="page8.php" method="POST" class="input">
            <div class="text">Where would you</div>
            <div class="text2" style="font-size:57px;top:193px;">like to visit?</div>
            <label for="destination"></label>
            <table class="location">
                <tr>
                    <th class="left">
                        <i class="bi bi-pin-map-fill"></i>
                        <input class="fline" type="text" id="destination" name="destination" placeholder="Location">
                    </th>
                </tr>
            </table>
            <button class="submit">Submit</button>
        </form>
        <?php
        if (isset($_POST["destination"])) {
            $destination = mysqli_real_escape_string($con, $_POST["destination"]);
            $query = "SELECT * FROM places WHERE city='$destination'";
            $result = mysqli_query($con, $query);
            if ($result) {
                ?>
                <table class="results-table">
                    <tr>
                        <th style="border-top:0px; border-left:0px;">Destination</th>
                        <th style="border-top:0px; border-right:0px;">Distance from city</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["Spot"] ?></td>
                            <td><?php echo $row["Distance"] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            } else {
                echo "<p>No places for this destination.</p>";
            }
        }
        ?>
    </div>
</body>
</html>