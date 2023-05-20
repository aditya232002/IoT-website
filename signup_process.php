<?php
// Connect to MySQL server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iot";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process signup form
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert new user into the database
    $sql = "INSERT INTO `users` ('sno',`username`, `email`, `password`) VALUES ('','$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        include 'login.php';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
