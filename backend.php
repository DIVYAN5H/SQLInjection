<?php
// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "root", "SQLInjection");

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// Vulnerable SQL query
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

// Execute the query
$result = $mysqli->query($query);

if ($result) {
  // Process and display the results
  while ($row = $result->fetch_assoc()) {
    echo "Username: " . $row['username'] . "<br>";
  }
} else {
  echo "Login failed.";
}

// Close the database connection
$mysqli->close();
?>
