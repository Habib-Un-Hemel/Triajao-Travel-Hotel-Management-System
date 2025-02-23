<?php

require_once('dbconnect.php');
//  database er sathe dbconnect er database er connect er code
$name = $_POST['ho_name'];
$phone = $_POST['ho_number'];
$email = $_POST['ho_email'];
$password = $_POST['ho_password'];
$gender = $_POST['ho_gender'];
$address = $_POST['ho_address'];

if(!empty($name) && !empty($phone) && !empty($email) && !empty($password) && !empty($gender) && !empty($address)){
// sql query run   
// null for auto increament 
// ?  readibilty 
// aktao empty thakle else e jabe
    $stmt = $conn->prepare("INSERT INTO users VALUES (NULL, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $phone, $email, $password, $gender, $address);
    $stmt->execute();
    echo 'signup successful';
    $stmt->close();
    $conn->close();
} else {
    echo "All fields are required";
    die();
}

?>