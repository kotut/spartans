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

<form method="POST" action="preview-advice.php">

	<p> <label for "title"> Title Post: </label> <input type="text" class="form-control"  name="title" value="" required /> </p>
	
	<p> <label for "advice"> Advice: </label> <br/><textarea name="advice" class="form-control" rows="10" cols="30"></textarea></p>
	
	<p> <label for "Name"> Your Name: </label> <input type="text" name="name" value="" required s/></p>
		
	<div class="row">
		
		<div class="col-md-3"> 
			<p> <label for "role"> Role:  </label> 
			<select name="role">
				<option value="roles"> Select role </option>
				<option value="current"> Current Student </option>
				<option value="alumni"> Alumni </option>
				<option value="citizen"> Concerned Citizen </option>
			</select>	
		</div>

		<div class="col-md-3"> 
			<p> <label for "year"> Year: </label> <input type="number" min="1930" max="<?php echo date("Y"); ?>" name="year" value="" required /> </p>
		</div>
		
		<div class="col-md-3"> 
			<p> <label for "affiliation"> Affiliation: </label> 

				<select name="affiliation">
					<option value="affiliations"> Select Affiliation </option>
					<option value="norfolk"> Norfolk State</option>
					<option value="odu"> Old Dominion</option>
					<option value="tcc"> Tidewater CC </option>
					<option value="other"> Other </option>
				</select>	

			</p>

		</div>
	</div>

	
	<div class="row">
		<div class="col-md-3"> 
			<p> <label for "category"> Category: </label> 
				<select name="category">
					<option value="categories"> Categories </option>
					<option value="general"> General Advice</option>
					<option value="academic"> Academic</option>
					<option value="health"> Health </option>
					<option value="lifestyle"> Lifestyle </option>
				</select>
			</p>
		</div>

		<div class="col-md-3"> 
			<p> <label for "tags"> Tags: </label> <input type="text" name="tags" value="" /> </p>
		</div>

	</div>
	

	<?php

	if($_POST['submit'] && $_POST['submit'] != 0)
	{
		$role=$_POST['role'];
		$affiliation=$_POST['affiliation'];
		$category=$_POST['category'];
	}
	
	?>

	<button type="submit" class="btn btn-success btn-lg">Preview</button>

</form>	


</div>

<!-- JAVASCRIPT -->
<script src="../js/bootstrap.min.js"></script>
</body>	

</html>