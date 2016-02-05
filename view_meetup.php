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






    $query = "SELECT * FROM meetup WHERE id = ?";

    $stmt = $conn->prepare($query);



    $stmt->bind_param('i', $id);


    $execute = $stmt->execute() or trigger_error($stmt->error.". Query: ".$query);

    $result = $stmt->get_result();

    if ($result->num_rows != 1) {
    	header( 'Location: list_meetup.php?error=Meetup%20not%20found' ) ;
		die();
    }

        $row = $result->fetch_assoc();

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

  <!-- Navbar -->
  	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>

  				<a href="" class="navbar-brand">Handshake</a>
  			</div><!-- Navbar Header-->
  			<div class="collapse navbar-collapse" id="navbar-collapse">
  				<ul class="nav navbar-nav">
  					<li><a href="#meet_up">MeetUp</a>
  					<li><a href="#pay_it_forward">Pay it Forward</a>
  					<li><a href="#university_socia">University Social</a>
  					<li><a href="#ask_questions">Ask Questions</a>
  					<li><a href="#ads">ADS</a>
  				</ul>
  			</div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->








    	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1>MEETUP </h1>

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





       <ul class="list-inline">
          <li><?php echo $row['eventname']; ?></li>
          <li><?php echo $row['location']; ?></li>
          <li><?php echo $row['space']; ?></li>
          <li><?php echo $row['eventdescription']; ?></li>
          <li><?php echo $row['location']; ?></li>
          <li><?php echo $row['startdate']; ?></li>
        </ul>
<!--
<?php

$query = "SELECT * FROM payforward ORDER BY uid DESC" ;

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);

echo "<div class='container advice-list'>";
    echo "<div class='row'><h4 class='advice-list'>" . $row['title'] . "</h4></div>";
    echo "<div class='row'><p class='advice-list'>" . $row['advice'] . "</p></div>";
    echo "<div class='row'><p class='advice-list'><strong>Posted By: </strong>" . $row['name'] . ", " . $row['role'] . ", " . $row['affiliation'] . ", Class of " . $row['year'] . "</p></div>";
echo "</div>";

while($row = mysqli_fetch_array($result)){

  echo "<div class='container advice-list'>";
    echo "<div class='row'><h4 class='advice-list'>" . $row['title'] . "</h4></div>";
    echo "<div class='row'><p class='advice-list'>" . $row['advice'] . "</p></div>";
    echo "<div class='row'><p class='advice-list'><strong>Posted By: </strong>" . $row['name'] . ", " . $row['role'] . ", " . $row['affiliation'] . ", Class of " . $row['year'] . "</p></div>";
  echo "</div>";
 }
 echo "</div>";

?>

-->



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
