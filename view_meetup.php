<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("include/db.php");


if(!isset($_GET['id']))
{
	header( 'Location: list_meetup.php?error=Invalid%20meetup' ) ;
	die();
}

$id = $_GET['id'];





// $query = "SELECT * FROM meetup ORDER BY id DESC" ;





    $query = "SELECT * FROM meetup WHERE id = ".$id;

$result = mysqli_query($conn, $query);


$row = mysqli_fetch_array($result)

    // if ($ro) {
    // 	header( 'Location: event.php?error=Meetup%20not%20found' ) ;
		// die();
    // }

        // $row = $result->fetch_assoc();

    //print_r($row);


 /*<?php echo $row['eventname']; ?> */
?>







<!DOCTYPE html>
<html lang="en">

<head>
<?php include("include/header.php"); ?>
	<title>Handshake </title>
	<?php include("include/header.php"); ?>
	<meta name="description" content="Handshake App">
</head>
	<style>
	body{
		padding-top: 40px;
	}
	</style>

<body data-spy="scroll" data-target="#my-navbar">
<?php include("include/header.php"); ?>

  <?php include("include/nav.php"); ?>








    	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1>Meet &amp; Greet</h1>

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
    <section>
      <div class="page-header" id="contact">
          <h2><?php echo $row['eventname']; ?></h2>
      </div><!-- End Page Header -->





       <ul class="list">
          <li>Location: <?php echo $row['location']; ?><br/></li>
          <li>Space Available: <?php echo $row['space']; ?><br/></li>
          <li>Description: <?php echo $row['eventdescription']; ?><br/></li>
          <li>Location: <?php echo $row['location']; ?><br/></li>
          <li>Date/Time: <?php echo $row['startdate']; ?><br/></li>
        </ul>



<!-- Footer -->

    <footer>

    <style>

    .button1{
    position:absolute;
    bottom: 5%;
    right:80%;
}

    </style>

<a href="create_meetup.php" class="button1 btn btn-warning navbar-btn navbar-left">Create Meet &amp; Greet</a>


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
