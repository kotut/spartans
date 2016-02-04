<?php
  	$server = "localhost";
	$db_username = "root";
	$db_password = "root";
	$database = "HackU";

	// Create connection
	$conn = mysqli_connect($server, $db_username, $db_password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	//print_r($_POST);

	$users_fname = $_POST['first-name'];
	$users_lname = $_POST['last-name'];
	$users_major = $_POST['major'];
  	$users_email = $_POST['email'];
  	$users_username = $_POST['username'];
  	$users_password = $_POST['password'];
  	$users_retypepass = $_POST['retypepass'];

  	if(isset($_REQUEST['submit'])!='') {
  		if($_POST['first-name']=='' || $_POST['last-name']=='' || $_POST['major']==''|| $_POST['email']==''|| $_POST['username']==''|| $_POST['password']==''|| $_POST['retypepass']=='')
  		{
			Echo "please fill the empty field.";
  		}
  	else {
  			if($_POST[password]!='' && $_POST['retypepass']!='' && $_POST[password]==$_POST['retypepass']) {
  				$pass = $_POST['retypepass'];
  				$hashpass = md5($pass);

  			}
  		
  		$sql = "INSERT INTO user_hack (FirstName, LastName, Major, Email, Username, Password) 
  		VALUES ('$users_fname', '$users_lname', '$users_major', '$users_email', '$users_username', '$hashpass')";
  		//echo $sql;
  		$res=mysqli_query($conn, $sql);
  		//var_dump($res);
  		if($res) {
  			Echo "Record successfully inserted";
  		}
  		else {
  			Echo "There is some problem in inserting record: " . "<br>" . mysqli_error($conn);
  		}
  	}
  }


?>