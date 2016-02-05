<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("include/db.php"); 

	session_start();
	
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

  			$sql = "SELECT * FROM user_hacku WHERE (Username='$users' or Email='$users') and Password='$hashpass'";
  			$result = mysqli_query($conn,$sql);
      		$count = $result->num_rows;

      		if($count == 1) {
         		//session_register("users");
         		$_SESSION['user'] = $result->fetch_assoc();
         		
         		header("Location: /");
         		exit;
         	
  			}
  		else{
  			echo "You login name or password is invalid";
  		}
  	  	
  	}
  	}
  }
?>