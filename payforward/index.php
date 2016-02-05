<html>
<head> 
	<title>Pay it Forward </title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	<link href="../css/custom.css" rel="stylesheet" type="text/css">
</head>

<body data-spy="scroll" data-target="#my-navbar">

 <?php include("include/menu.php"); ?>

  	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1>Pay It Forwards</h1>

  		</div><!-- End container -->
  	</div>
  	
  	<!-- End jumbotron-->

<div class="container">

<form method="POST" action="process-advice.php">

	<p> <label for "title"> Title Post: </label> <input type="text" class="form-control"  name="title" value="" required /> </p>
	
	<p> <label for "advice"> Advice: </label> <br/><textarea name="advice" class="form-control" rows="10" cols="30"></textarea></p>
	
	<p> <label for "Name"> Your Name: </label> <input type="text" name="name" value="" required/></p>
		
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
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Modal</button>
	<button type="submit" class="btn btn-success btn-lg" id="preview_view">Preview</button>

</form>	


</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PREVIEW ENTRY</h4>
      </div>
      <div class="modal-body">
			<p><strong>Advice Title: </strong><span id="preview_title"></span></p> 
			<p><strong>Your Advice: </strong><span id="preview_advice"></span></p>
			<p><strong>Your Information: </strong> 
				<span id="preview_name"></span>,  
				<span id="preview_role"></span>, 
				<span id="preview_affiliation"></span>,  
				<span id="preview_year"></span> 
			</p>

			<p><strong>Tags: </strong>
				<span id="preview_tags"></span> <strong>Category:</strong> <span id="preview_category"></span> 
			</p>

      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-default" data-dismiss="modal">Edit</button>
      	<button type="button" class="btn btn-default" id="publish">Publish</button>

      </div>
    </div>

  </div>
</div>

<!-- JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$('#preview_view').click(function(){
			$('#preview_title').text($('input[name="title"]').val());
			$('#preview_advice').text($('textarea[name="advice"]').val());						
			$('#preview_name').text($('input[name="name"]').val());
			$('#preview_year').text($('input[name="year"]').val());
			$('#preview_affiliation').text($('select[name="affiliation"]').val());
			$('#preview_role').text($('select[name="role"]').val());
			$('#preview_category').text($('select[name="category"]').val());
			$('#preview_tags').text($('input[name="tags"]').val());
			$('#myModal').modal({show:true});
			return false;
		});

		$('#publish').click(function(){
			$('form').submit();
			return false;
		});

	})
</script>
</body>	

</html>