<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "jee2024";
$conn = new mysqli($servername, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $fatherName = $_POST["fatherName"];
    $motherName = $_POST["motherName"];
    $schoolName = $_POST["schoolName"];
    $boardName = $_POST["boardName"];
    $marks = $_POST["marks"];
    $homeAddress = $_POST["homeAddress"];
    $state = $_POST["state"];
    $pinCode = $_POST["pinCode"];
    $password = $_POST["password"];
    $securityQuestion = $_POST["securityQuestion"];

    // Perform any necessary validation on the form data
    // ...

    // Prepare and execute an SQL statement to insert the data into a table
    $sql = "INSERT INTO jeedata (name, fatherName, motherName, schoolName, boardName, marks, homeAddress, state, pinCode, password, securityQuestion) VALUES ('$name', '$fatherName', '$motherName', '$schoolName', '$boardName', '$marks', '$homeAddress', '$state', '$pinCode', '$password', '$securityQuestion')";

    if ($conn->query($sql) === TRUE) {
        echo "Data submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: antiquewhite;">
    <h1 style="text-align: center; color: crimson;">Please Register for JEE MAIN 2024 EXAM</h1>
    <form style="max-width: 800px; margin: auto; background-color: darkcyan; padding: 20px; border: 2px solid orangered;" action="Jeemain.php" method="POST">
        <h2 class="bg-warning text-center mb-3 p-2">Personal Details</h2>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="father-name">Father Name</label>
            <input type="text" class="form-control" name="fatherName">
        </div>
        <div class="form-group">
            <label for="mother-name">Mother Name</label>
            <input type="text" class="form-control" name="motherName">
        </div>
        
        <h2 class="bg-warning text-center mb-3 p-2">Education Details</h2>
        <div class="form-group">
            <label for="school-name">School Name</label>
            <input type="text" class="form-control" name="schoolName">
        </div>
        <div class="form-group">
            <label for="board-name">Board Name</label>
            <input type="text" class="form-control" name="boardName">
        </div>
        <div class="form-group">
            <label for="marks">Marks</label>
            <input type="text" class="form-control" name="marks">
        </div>
        
        <h2 class="bg-warning text-center mb-3 p-2">Address Details</h2>
        <div class="form-group">
            <label for="home-address">Home Address</label>
            <input type="text" class="form-control" name="homeAddress">
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" name="state">
        </div>
        <div class="form-group">
            <label for="pin-code">Pin Code</label>
            <input type="text" class="form-control" name="pinCode">
        </div>
        
        <h2 class="bg-warning text-center mb-3 p-2">Password</h2>
        <div class="form-group">
            <label for="password">Choose Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="security-question">Security Question</label>
            <input type="text" class="form-control" name="securityQuestion">
        </div>
        
        <button type="submit" class="btn btn-success btn-block">Submit</button>
    </form>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
