<?php



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../include/db.php"); 


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    	
		$Name=$_POST['Name'];
		$Product=$_POST['Product'];
		$Description=$_POST['Description'];
		//$picture=$_POST['eventdescription'];
		$Contact=$_POST['Contact'];	
		$Amount=$_POST['Amount'];
		$Expiry=$_POST['Expiry'];

	
	
// 	echo "<PRE>";
// 	var_dump($_POST);
// 	var_dump($eventname);
// 		var_dump($datetime);
// exit;



    $query = "INSERT INTO ads (`Name`,`Product`,`Description`,`Contact`,`Amount`,`Expiry`) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssssss', $Name, $Product, $Description, $Contact, $Amount, $Expiry); 


    $result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$query);

    

header( 'Location: view_ads.php') ;
die();
}
?>