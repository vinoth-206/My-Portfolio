<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM register");
echo "<h2>Registred Succesfully<h2>"
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Address</th><th>Phone</th><th>Bed</th><th>Disease</th><th>Entry Date</th><th>Doctor</th></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['name'] . "</td><td>". $row['address'] . "</td><td>". $row['phone'] . "</td><td>". $row['Bed'] . "</td><td>". $row['disease'] . "</td><td>". $row['endrydate'] . "</td><td>" . $row['doctor'] . "</td></tr>";
}
echo "</table>";
?>