<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facility Management</title>
    
</head>
<body>
<style>
    /* Reset default styles */
    body, h1, form {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        text-align: center;
        opacity: 0; /* Initially hidden */
        animation: fadeIn 1s ease-in-out forwards; /* Add fade-in animation */
    }

    h1 {
        color: #007BFF;
        text-align: center;
    }

    form {
        text-align: left;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Define the fade-in animation */
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>


    
    <div class="container">
        <h1>Facility Management</h1>
        <form action="" method="POST" >
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="profilepicture">Profile Picture:</label>
            <input type="file" id="profilepicture" name="profilepicture" accept="image/*" required>

            <button type="submit">Submit Facility Details</button>
        </form>
    </div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $profilePicture = $_FILES["profilepicture"]["name"];

    // Database connection parameters
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'sample';

    // Create a database connection
    $mysqli = new mysqli($hostname, $username, $password, $databasename);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Define the SQL query to insert facility details
    $sql = "INSERT INTO facility_details (name, mobile, email, department, profilepicture) VALUES ('$name', '$mobile', '$email', '$department', '$profilep icture')";

    // Perform the query
    if ($mysqli->query($sql) === TRUE) {
        // Successfully inserted facility details

        // Upload and move the profile picture to a directory
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["profilepicture"]["name"]);

        if (move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $targetFile)) {
            // Successfully uploaded the profile picture
        } else {
            // Failed to upload the profile picture
        }

       
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
}
?>

</body>
</html>
