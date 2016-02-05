<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../include/db.php");

    $query = "SELECT * FROM ads";

    $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Handshake </title>
	<meta name="description" content="Handshake App">
	<?php include("../include/header.php"); ?>

	<style>
	body{
		padding-top: 40px;
	}
	</style>
</head>


<body data-spy="scroll" data-target="#my-navbar">

   <?php include("../include/nav.php"); ?>








    	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1>View Ads </h1>

  		</div><!-- End container -->
  	</div>

  	<!-- End jumbotron-->

  	<!--
  	<div class="container text-left">
  			<div class="btn-group">
  				<a href="" class="btn btn-lg btn-warning">Create Event</a>
  			</div>


  	-->




  <!-- Contact -->


  <div class="container">


<ul class="list-inline">
	<li>Name</li>
          <li>Product</li>
          <li>Description</li>
          <li>Contact</li>
          <li>Amount</li>
          <li>Expiry</li>
          </ul>
         </ul>

     <?php while($row = mysqli_fetch_array($result)){?>
     	<ul class="list-inline">
          <li><?php echo $row['Name']; ?></li>
          <li><?php echo $row['Product']; ?></li>
          <li><?php echo $row['Description']; ?></li>
          <li><?php echo $row['Contact']; ?></li>
          <li><?php echo $row['Amount']; ?></li>
          <li><?php echo $row['Expiry']; ?></li>
         </ul>


 <?php } ?>




<!-- Footer -->

    <footer>

    <style>

    .button1{
    position:absolute;
    bottom: 5%;
    right:80%;
}

    </style>

<a href="createads.php" class="button1 btn btn-warning navbar-btn navbar-left">Create Ads</a>


    </footer>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
	  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>




  <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</body>
</html>
