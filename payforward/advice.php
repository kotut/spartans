<?php

include("../include/db.php"); 

$query = "SELECT * FROM payforward ORDER BY uid DESC" ;

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);

echo "<p>" . $row['title'] . "</p> <p>" . $row['advice'] . "</p>";

while($row = mysqli_fetch_array($result)){
     echo "<p>" . $row['title'] . "</p>";
     echo "<p>" . $row['advice'] . "</p>";

 }

?>

