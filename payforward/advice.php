<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "<h1>Pay it Forward Advices </h1>";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $host = 'localhost';
    $username = 'root';
    $pass = 'Password here';
    $database = $username;

    $conn = new mysqli($host, $username, $pass, $database);

    if ($conn->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}

$query = "SELECT * FROM payforward";
echo $query; 
$result = mysql_query($query);

$row = mysql_fetch_array($result);
echo $row['title'] . " " . $row['advice'] . " " . $row['name'];  

}

?>

