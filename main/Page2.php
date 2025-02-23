<?php
require_once("connect6.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Bungee+Inline&family=Chivo+Mono:wght@300;500&family=Comfortaa:wght@700&family=Fira+Sans:wght@200&family=Monofett&family=Raleway:wght@300&family=Sono:wght@200;600&family=Sonsie+One&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://i.ibb.co/nnLmmqM/505-5055502-simple-location-map-pin-icon3-red-free-vector-removebg-preview.png" type="image/x-icon">
    <link href="style2.css" rel="stylesheet">
    <title>Triajao</title>
</head>
<body>
    <nav>
        <div class="Name"><a href="Page1.php">Triajao</a></div>
        <div class="options">
            <button class="active">Search Hotel</button>
            <a href="page7.php" target="_blank"><button>Hire Guide</button></a>
            <a href="Page4.php" target="_blank"><button>Buy Tickets</button></a>
            <a href="page8.php" target="_blank"><button>Place To Travel</button></a>
        </div>
        <div class="acc"><i class="bi bi-person-circle"></i>My Account</div>
    </nav>
    <div class="half-box">
        <h1>Discover your life.<br>Explore world.</h1>
        <img class="img1" src="img1.jpg" alt="">
        <img class="img2" src="img2.jpg" alt="">
        <img class="img3" src="img3.jpg" alt="">
        <img class="bus" src="busaa.jpg" alt="">
    </div>
    <form action="">
        <table>
            <th class="left">
                <i class="bi bi-pin-map-fill"></i>
                <input class="fline" placeholder="Location">
                <p class="sline">Where are you going?</p> 
            </th>
            <th class="mid"><i class="bi bi-calendar-range"></i><p class="mid_sline">Check In</p><br><input type="date" class="date" placeholder="date"></th>
            <th class="right"><i class="bi bi-calendar-range-fill"></i><p class="right_sline">Check Out</p><br><input type="date" class="date" placeholder="date"></th>
        </table>
        </form>
    <button class="submit">SUBMIT</button>
    <div class="hotels">
        <div class="hotel1">
            <p class="top"><i class="bi bi-bookmark-star-fill"></i></i></p>
            <p class="Seagul">Hotel Seagull<br></p><p class="area"><i class="bi bi-geo-alt-fill"></i>Cox's Bazar, Bangladesh</p>
            <p class="star5"><i class="bi bi-hospital-fill"></i>5 Star</p>
            <p class="wifi"><i class="bi bi-router"></i>Free Wifi</p>
            <p class="sea"><i class="bi bi-brightness-alt-high-fill"></i>Sea side</p>
            <p class="tour"><i class="bi bi-people"></i>Tour guide</p>
            <div class="bdt"><p class="teka">3500 BDT</p><p class="rait">/Night</p></div>
        </div>
        <img src="hotel1.jpg" alt="">
        <div class="hotel1" id="hotel2">
            <p class="Seagul">Hotel Pacific<br></p><p class="area"><i class="bi bi-geo-alt-fill"></i>Cox's Bazar, Bangladesh</p>
            <p class="star5"><i class="bi bi-coin"></i>Low cost</p>
            <p class="wifi"><i class="bi bi-router"></i>Free Wifi</p>
            <div class="bdt"><p class="teka">2200 BDT</p><p class="rait">/Night</p></div>
        </div>
        <img src="hotel2.jpg" alt="" class="h2">
        <div class="hotel1" id="hotel3">
            <p class="Seagul">Hotel Radison<br></p><p class="area"><i class="bi bi-geo-alt-fill"></i>Cox's Bazar, Bangladesh</p>
            <p class="star5"><i class="bi bi-hospital-fill"></i>5 Star</p>
            <p class="wifi"><i class="bi bi-router"></i>Free Wifi</p>
            <p class="sea"><i class="bi bi-people"></i>Tour guide</p>
            <div class="bdt"><p class="teka">3200 BDT</p><p class="rait">/Night</p></div>
        </div>
        <img src="hotel3.jpg" alt="" class="h3">
    </div>
    <img src="msg.png" alt="" class="msgg">
    <div class="busT">
        <img src="busT.png" alt="">
        <div class="busTbtn">See Tickets</div>
    </div>
    <div class="airT">
        <img src="airT.png" alt="">
        <div class="airTbtn">See Tickets</div>
    </div>
    <div class="trainT">
        <img src="trainT.png" alt="">
        <div class="trainTbtn">See Tickets</div>
    </div>
</body>