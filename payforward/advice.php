<?php
include("../include/db.php"); 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>

<head> 
	<title>Pay it Forward </title>
	<?php include("../include/header.php"); ?>
</head>

<body data-spy="scroll" data-target="#my-navbar">

 <?php include("../include/nav.php"); ?>

  	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1>Pay It Forwards</h1>

  		</div><!-- End container -->
  	</div>
  	
  	<!-- End jumbotron-->

<div class="container">

<?php

$query = "SELECT * FROM payforward ORDER BY uid DESC" ;

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);
echo "<div class='container'>";
echo "<div class='row'>";
echo "<p>" . $row['title'] . "</p> <p>" . $row['advice'] . "</p>";
echo "</div>";
while($row = mysqli_fetch_array($result)){
	echo "<div class='container advice-list'>";
    echo "<div class='row'><h4 class='advice-list'>" . $row['title'] . "</h4></div>";
    echo "<div class='row'><p class='advice-list'>" . $row['advice'] . "</p></div>";
    echo "<div class='row'><p class='advice-list'>" . $row['name'] . ", " . $row['role'] . ", " . $row['affiliation'] . ", " . $row['year'] . "</p></div>";
    echo "</div>";
 }
 echo "</div>";

?>

</div>
<div class="footer"></div>

<!-- JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
