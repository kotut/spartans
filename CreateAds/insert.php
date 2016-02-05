<?php

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
?>