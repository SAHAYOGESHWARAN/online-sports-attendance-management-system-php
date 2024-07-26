<?php
// Simulated user credentials (you should replace this with a real authentication system)
$valid_username = "admin";
$valid_password = "aac123";

// Get user input from the login form
$username = $_POST["username"];
$password = $_POST["password"];

// Check if the entered username and password match the valid credentials
if ($username === $valid_username && $password === $valid_password) {
    // Authentication successful
    // Redirect the user to the home page or any other desired location
    header("Location:navigation.php");
    exit();
}
 else {
    // Authentication failed
    // Redirect the user back to the login page with an error message
 echo "invalid password";
    exit();
    //echo "Error for this code";
    //exit();
}
?>