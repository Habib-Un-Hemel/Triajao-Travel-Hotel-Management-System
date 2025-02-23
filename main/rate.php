<?php
// Connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_cse370";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guide_id = $_POST['id'];
    $rating = $_POST['rating'];

    // Check if the rating is valid
    if (is_numeric($rating) && $rating >= 1 && $rating <= 5) {
        // Retrieve all existing ratings for this guide
        $sql = "SELECT Ratings FROM guides WHERE ID = '$guide_id'";
        $result = $conn->query($sql);
        $totalRating = 0;
        $numRatings = 0;

        while($row = $result->fetch_assoc()) {
            $totalRating += $row["Ratings"];
            $numRatings++;
        }

        // Add new rating to total and increment count
        $totalRating += $rating;
        $numRatings++;

        // Calculate average
        $averageRating = $totalRating / $numRatings;

        // Insert or update the average rating in the database
        $sql = "INSERT INTO guides (ID, Ratings) VALUES ('$guide_id', $averageRating)
                ON DUPLICATE KEY UPDATE Ratings = $averageRating";

        if ($conn->query($sql) === TRUE) {
            echo "New rating recorded successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid rating. Please enter a number between 1 and 5.";
    }
}

$conn->close();
?>