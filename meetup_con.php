<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("include/db.php"); 


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    	
		$eventname=$_POST['eventname'];
		$location=$_POST['location'];
		$space=$_POST['space'];
		$eventdescription=$_POST['eventdescription'];
		$datetime=$_POST['datetimepicker1'];
	
	
// 	echo "<PRE>";
// 	var_dump($_POST);
// 	var_dump($eventname);
// 		var_dump($datetime);
// exit;



    $query = "INSERT INTO meetup (`eventname`,`location`,`space`,`eventdescription`,`startdate`) VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssss', $eventname, $location, $space, $eventdescription, $datetime);


    $result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$query);

    

header( 'Location: view_meetup.php?id='.$stmt->insert_id.'&inserted=true' ) ;
die();
}



?>