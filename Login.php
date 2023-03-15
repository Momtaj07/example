<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn){
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registration (username,password)
VALUES ('{$_POST["username"]}','{$_POST["password"]}')";

if ($conn->query($sql) === TRUE) {
  echo "Logged in successfully!!!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>