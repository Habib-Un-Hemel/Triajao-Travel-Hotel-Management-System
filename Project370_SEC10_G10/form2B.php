<?php
$hname = $_POST["hname"];
$hphone = $_POST["hphone"];
$hmail = $_POST["hmail"];
$hlocation = $_POST["hlocation"];
$desc = $_POST["hdesc"];

$conn = mysqli_connect("localhost","root","","project_cse370");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into hotel(h_name, h_number, h_email, h_location, h_descripton) 
    values(?,?,?,?,?)");
    $stmt->bind_param("sisss", $hname, $hphone, $hmail, $hlocation, $desc);
    $stmt->execute();
    echo "Registration successfull";
    $stmt->close();
    $conn->close();
}
?>