<?php
// db connect e main connect deya 
require_once('dbconnect.php');
$email = $_POST['ho_email'];
$password = $_POST['ho_password'];


if(!empty($email) && !empty($password)){
  
    $stmt = $conn->prepare("SELECT * FROM users WHERE ho_email = ? AND ho_password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();


// result ashbe table rup e num_row can be max1 so ican write num_rows ==1

    if($result->num_rows > 0){
        // header("Location: page1.html");
        header("Location: Page1.php");

    } else {
        echo 'Invalid email or password';
    }
    // not needed but good practise
    $stmt->close();
    $conn->close();
} else {
    echo "All fields are required";
    die();
}   
?>