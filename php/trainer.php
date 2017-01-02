<?php
$servername = "localhost";
$username = "Alexis";
$password = "5549";
$dbname = "fitly";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO trainers (name, email)
VALUES ('$_POST[tname]', '$_POST[temail]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>