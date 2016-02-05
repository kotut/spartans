<?php
/*
$host="Localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="handshake"; // Database name 
$tbl_name="new_table"; // Table name 

// Connect to server and select database.
mysql_connect($host, $username, $password)or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
    $description  	 = $_POST['Description'];
    $name 	 = $_POST['Name'];
    $amount  	 = $_POST['Amount'];

// Insert data into mysql 
$sql="INSERT INTO new_table(Name, Description, Amount)VALUES('$name', '$description', '$amount')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";

}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();


*/












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