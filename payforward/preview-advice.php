
<html>
<head> 
	<title>Pay it Forward </title>

	<?php include("../include/header.php"); ?>

</head>

<body>

	  	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1>Preview Submission</h1>

  		</div><!-- End container -->
  	</div>
  	
  	<!-- End jumbotron-->

	<?php 
	
	include("../include/nav.php"); 

	echo "<div class='container'> </div>";
	

	echo "<div class='container'>";

	echo "<p><strong>Advice Title: </strong>" .$_POST["title"]. "</p>"; 

	echo "<p><strong>Your Advice: </strong>" .$_POST["advice"]. "</p>"; 

	echo "<p><strong>Your Information: </strong> " .$_POST["name"]. ", " .$_POST["role"]. ", " .$_POST["affiliation"]. ", " .$_POST["year"]." </p>"; 

	echo "<p><strong>Tags: " .$_POST["tags"]. "<p> " . "<strong>Category: </strong>" .$_POST["category"]. "</p>";

?>

<form method="POST" action="process-advice.php">
		<button type="submit" class="btn btn-success btn-lg">Publish</button>
        <input type="hidden" name="title" value="<?=$_POST['title']?>">
        <input type="hidden" name="advice" value="<?=$_POST['advice']?>">
        <input type="hidden" name="name" value="<?=$_POST['name']?>">
        <input type="hidden" name="role" value="<?=$_POST['role']?>">
        <input type="hidden" name="affiliation" value="<?=$_POST['affiliation']?>">
        <input type="hidden" name="tags" value="<?=$_POST['tags']?>">
        <input type="hidden" name="category" value="<?=$_POST['category']?>">

</form>

</div>

</body>
</html>