<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("include/db.php");
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("include/header.php"); ?>
	<link type="text/css" href="/css/event.css" rel="stylesheet">

</head>

<body>

<?php include("include/nav.php"); ?>

<?php

$query = "SELECT * FROM meetup ORDER BY id DESC" ;

$result = mysqli_query($conn, $query);
?>


<div class="csswrap">
	<div class="col-md-9">
		<ul>
      <?php while($row = mysqli_fetch_array($result)){ ?>
			<li>
				<a href="#">
				<h2><?php echo $row['eventname']; ?></h2>
				<p>Location: <?php echo $row['location']; ?><br>
          Space Available: <?php echo $row['space']; ?><br>
          Description: <?php echo $row['eventdescription']; ?><br>
          Date/Time: <?php echo $row['startdate']; ?></p>
				</a>
			</li>
      <?php } ?>
  </ul >
</div>
</div>
		<div class="col-md-3">
		<ul>
		<li> <p  align=center style="font-size: 16px;padding-top: 40px;"> Advertisements </p> </li>
		<li> <a href=#> Computer Architecture Book </a> </li>
		 <li> <a href=#> Selling shoes(used,size 9)Nike</a> <li>
		<li> <a href=#> Selling Car, Nissan 2008 </a> </li>
		<li> <a href=#> Looking for a roommate @ Norfolk </a> </li>
		<li> <a href=#> Computer Architecture Book </a> </li>
		 <li> <a href=#> Selling shoes(used,size 9)Nike</a> <li>
		 </ul>
		</div>


</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
