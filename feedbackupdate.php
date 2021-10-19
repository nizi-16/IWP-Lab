<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli_update($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE feedback SET name='Suyash Keshri' WHERE id=33";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>