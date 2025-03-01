

<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" href="search_result.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://i.ibb.co/nnLmmqM/505-5055502-simple-location-map-pin-icon3-red-free-vector-removebg-preview.png" type="image/x-icon">
    <!-- seach hotel er nil beguni design  -->
    <style>
        body {
            background: rgb(245, 178, 207);
            background: radial-gradient(circle, rgba(245, 178, 207, 1) 0%, rgba(148, 191, 233, 0.8995973389355743) 100%);
        }
    </style>
</head>

<body>
    
    <?php include 'user_navbar.php'?>

    <?php
    require_once('dbconnect.php');
    $query = $_POST['query'];
    $noresults = true;

    if (!empty($query)) {
        // Query to find the hotel id
        $stmt = "SELECT h.h_id FROM Hotel h
        WHERE h_name LIKE '%$query%' OR h_location LIKE '%$query%'" ;

        $result = mysqli_query($conn, $stmt);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                // Finding the hotel name
                $stmt2 = "SELECT h_name, h_location, h_email FROM Hotel WHERE h_id = " . $row["h_id"];
                $result2 = mysqli_query($conn, $stmt2);
                $row2 = mysqli_fetch_assoc($result2);

                $Hotel_name = $row2["h_name"];
                $Hotel_location = $row2["h_location"];
                $Hotel_email = $row2["h_email"];


        

                $stmt5 = "SELECT MAX(r_price) as max_price, MIN(r_price) as min_price FROM Room WHERE h_id = " . $row["h_id"];
                $result5 = mysqli_query($conn, $stmt5);

                if ($row5 = mysqli_fetch_assoc($result5)) {
                    $max_price = $row5["max_price"];
                    $min_price = $row5["min_price"];
                }

                $noresults = false;  // to make sure that the no results found jumbotron is not displayed

                
                echo
                //Printing Hotel Details  first page ta
                '<div class="col-md-12 col-md-pull-3" style="border-style:groove; width:180%">
                    
                      
                    <div class="search-result-item-body">
                        <div class="row">
                            <div class="col-sm-9">
                            <a class="image-link" href="hotel_details.php?h_id=' . $row["h_id"] . '"><img class="image" src="hotelG.jpg' . $imageSrc . '" style="height:200px; width:200px; "> </a>
                            
                            <h4 class="search-result-item-heading"><a href="hotel_details.php?h_id=' . $row["h_id"] . '">' . $Hotel_name . '</a></h4>
                                <p class="info">Location:' . $Hotel_location . '</p>
                                <p class="description">Email: ' . $Hotel_email . '</p>
                            </div>
                            <div class="col-sm-3 text-align-center" style="margin-top:9%">
                                <p class="value3 mt-sm">'.$min_price.'TK - '.$max_price.'TK</p>
                                <p class="fs-mini text-muted" >Per Night</p>
                                <a class="btn btn-primary btn-info btn-sm" href="hotel_details.php?h_id=' . $row["h_id"] . '">View Rooms</a>
                            </div>
                        </div>
                    </div>

                </div> ';
            }
        }
        if ($noresults) {
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Results Found</p>
                        <p class="lead"> Suggestions: <ul>
                                <li>Make sure that all words are spelled correctly.</li>
                                <li>Try different keywords.</li>
                                <li>Try more general keywords. </li></ul>
                        </p>
                    </div>
                 </div>';
        }
        mysqli_close($conn);
    }
    ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>