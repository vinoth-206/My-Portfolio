<?php
$host = "localhost";
$user = "root"; 
$password = "";
$db = "hospital";
$conn = new mysqll($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   
?>