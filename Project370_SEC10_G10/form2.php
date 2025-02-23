<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        .main #edit{
            background-image: url('form2.jpg');
        }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Bungee+Inline&family=Comfortaa:wght@700&family=Fira+Sans:wght@200&family=Monofett&family=Sono:wght@200;600&family=Sonsie+One&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://i.ibb.co/nnLmmqM/505-5055502-simple-location-map-pin-icon3-red-free-vector-removebg-preview.png" type="image/x-icon">
    <title>Triajao - Hotel Form</title> 
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form2B.css" />
  </head>
  <body>
    <form action="form2B.php" method="post">
      <section class="main" id="edit">
          <div class="main-box">
              <div class="form-left">
                  <h2>HOTEL FORM</h2>
                  <p>Ready to provide the best service <br>and boost your business?</p>
              </div>
              <div class="form-right">
                <p class="sign">
                </p>
                  <div class="icon"><i class="bi bi-person-bounding-box"></i><label for="hname"></label><input type="text" placeholder="Hotel Name" id="hname" name="hname"></div>
                  <div class="icon"><i class="bi bi-telephone-fill"></i><label for="hphone"></label><input type="text" placeholder="Hotel Phone Number" id="hphone" name="hphone"></div>
                  <div class="icon"><i class="bi bi-envelope-at-fill"></i><label for="hmail"></label><input type="text" id="hmail" name="hmail" placeholder="Hotel's Email Address"></div>
                  <div class="icon"><i class="bi bi-house-add-fill"></i><label for="hlocation"></label><input type="text" id="hlocation" name="hlocation" placeholder="Hotel Address"></div>
                  <div class="icon"><i class="bi bi-text-paragraph"></i><label for="hdesc"></label><input type="text" id="hdesc" name="hdesc" placeholder="Short Bio for your Hotel"></div>
                  <div class="icon"><i class="bi bi-person-fill-exclamation"></i><label for="desc"></label><input type="text" placeholder="Your Customer ID"></div>
                  <button class="submit">Submit</button>
              </div>
          </div>
          </div>
      </section>
  </body>
</html>
