<?php
include 'db.php';
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$bed = $_POST['bed'];
$disease = $_POST['disease'];
$date = $_POST['endrydate'];
$doctor = $_POST['doctor'];

$sql = "INSERT INTO register(name, address, phone, Bed, disease, endrydate, doctor) VALUES ('$name', '$address', '$phone', '$bed', '$disease', '$date', '$doctor')";
 
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" .$conn->error;
}