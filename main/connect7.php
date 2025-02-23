<?php
$name = $_POST["name"];
$phone = $_POST["phone"];
$nid = $_POST["nid"];
$ratings = 0;
$address = $_POST["address"];
$city = $_POST["city"];

$conn = mysqli_connect("localhost","root","","project_cse370");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into guides(Name, Phone, NID, Ratings, Address, City) 
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssidss", $name, $phone, $nid, $ratings, $address, $city);
    $stmt->execute();
    echo "Registration successfull";
    $stmt->close();
    $conn->close();
}
?>