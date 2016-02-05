<?php
	session_start();
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

	$users_email = $_POST['email-user'];
  	$users_password = $_POST['password'];

  	if(isset($_REQUEST['submit'])!='') {
  		if($_POST['email-user']=='' || $_POST['password']=='' ){
			echo "Username/email or password is empty.";
  		}
  	else {
  		if($_POST['password']!='' && $_POST['email-user']!=''){
  			$pass = $_POST['password'];
  			$hashpass = md5($pass);
  			$users = $_POST['email-user'];

  			$sql = "SELECT * FROM user_hack WHERE (Username='$users' or Email='$users') and Password='$hashpass'";
  			$result = mysqli_query($conn,$sql);
      
      		$count = mysqli_num_rows($result);

      		if($count == 1) {
         		session_register("users");
         	
  			}
  		else{
  			echo "You login name or password is invalid";
  		}
  	  	
  	}
  	}
  }
?>