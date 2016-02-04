<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "<h1>Pay it Forward Advices </h1>";

    $host = 'localhost';
    $username = 'root';
    $pass = 'PASSWORD HERE';
    $database = $username;

    $conn = new mysqli($host, $username, $pass, $database);

    if ($conn->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}

$query = "SELECT * FROM payforward ORDER BY uid DESC" ;

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);

echo "<p>" . $row['title'] . "</p> <p>" . $row['advice'] . "</p>";

while($row = mysqli_fetch_array($result)){
     echo "<p>" . $row['title'] . "</p>";
     echo "<p>" . $row['advice'] . "</p>";

 }

?>

