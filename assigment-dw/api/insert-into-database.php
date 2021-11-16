<?php
$nameStreet = $_POST['nameStreet'];
$district = $_POST['district'];
$foundedYear = $_POST['foundedYear'];
$status = $_POST['status'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assigment-dw";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO streets (name , year, districtid, status) VALUES ('$nameStreet', '$foundedYear', '$district', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


