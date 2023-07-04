<?php
// Handle signup form submission

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $confirm = $_POST["confirm"];

    // Database connection
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = ""; // Enter your database password here
    $dbname = "jee2024";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to insert new user into the database
    $query = "INSERT INTO jeesignup (username, password, email, confirm) VALUES ('$username', '$password', '$email', '$confirm')";

    if ($conn->query($query) === TRUE) {
        // Signup successful
        echo "Signup successful!";
    } else {
        // Signup failed
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: orangered;
        }
        .signup-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .signup-form {
            width: 300px;
            background-color: black;
            padding: 20px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <form class="signup-form" action="signup.php" method="POST">
            <h2 class="text-center mb-4">Sign Up</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm" placeholder="Confirm password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </form>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
