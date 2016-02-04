<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $host = 'localhost';
    $username = 'root';
    $pass = 'PASSWORD HERE';
    $database = $username;

    $conn = new mysqli($host, $username, $pass, $database);

    if ($conn->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}

    $title  	 = $_POST['title'];
    $advice 	 = $_POST['advice'];
    $name  		 = $_POST['name'];
    $role     	 = $_POST['role'];
    $affiliation = $_POST['affiliation'];
    $tags		 = $_POST['tags'];
    $category 	 = $_POST['category'];

    $query = "INSERT INTO payforward (`title`,`advice`,`name`,`role`,`affiliation`,`tags`,`category`)
              VALUES (?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssssss', $title, $advice, $name, $role, $affiliation, $tags, $category);


    $result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$query);

}

header( 'Location: advice.php' ) ;
die();

?>

