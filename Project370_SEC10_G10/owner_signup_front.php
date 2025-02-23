<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    
    <link rel="shortcut icon" href="https://i.ibb.co/nnLmmqM/505-5055502-simple-location-map-pin-icon3-red-free-vector-removebg-preview.png" type="image/x-icon">
	<title>Sign Up</title>
    <link rel="stylesheet" href="owner_signup_design.css">
</head>
<body>
    <!-- backend er sathe connection -->
    <!-- class diye css  -->
    <form action="owner_signup_back.php" class="box" method="post">
        <h1>Sign Up </h1>
        <br>
        <hr>

        <input type="text" name="ho_name" placeholder="Name">
        <input type="int" name="ho_number" placeholder="Phone Number">
        <input type="text" name="ho_email" placeholder="Email">
        <input type="text" name="ho_address" placeholder="Address">
        <input type="text" name="ho_gender" placeholder="Gender">
        <input type="password" name="ho_password" placeholder="Password">
        <input type="submit" name="" value="Sign Up">
        <!-- link to login page  -->
        <p class="message">Registered? <a href="owner_login_front.php">Log in here</a></p>
    </form>

</body>
</html>
