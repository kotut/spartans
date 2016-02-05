<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Handshake </title>
	<meta name="description" content="Handshake App">
	<!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

	<style>
	body{
		padding-top: 40px;
	}
	</style>

<body data-spy="scroll" data-target="#my-navbar">

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
  					<li><a href="#meet_up">Meet &amp; Greet</a> 
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
  			<h1>Post Your Ad Here </h1>

  		</div><!-- End container -->
  	</div>

  	<!-- End jumbotron-->







  <!-- Contact -->


  <div class="container">
    <section>
      <div class="page-header" id="contact">
          <h2>Create Ads</h2>
      </div><!-- End Page Header -->



      <div class="col-lg-8">
	  <form action="insert.php" method="post">
		<form action="" class="form-horizontal">
		  <div class="form-group">
			<label for="event_name" class="col-lg-2 control-label">Name</label>
			<div class="col-lg-10">
			  <input type="text" class="form-control" name="Name" id="user-name" placeholder="Enter your name">
			</div>
		  </div><!-- End form group -->

		  <div class="form-group">
		  <form action="insert.php" method="post">
			<label for="event_description" class="col-lg-2 control-label">Description</label>
			<div class="col-lg-10">
			  <textarea  name="Description" id="user-message" class="form-control
			   cols="20" rows="10"  placeholder="Enter your product description"></textarea>
			</div>
		  </div><!-- End form group -->


		   <div class="form-group">
		   <form action="insert.php" method="post">
			<label for="event_name" class="col-lg-2 control-label">Product</label>
			<div class="col-lg-10">
			  <input type="text" class="form-control" name="Product" id="user-name" placeholder="Enter you product">
			</div>
		  </div><!-- End form group -->

		  <div class="form-group">
		   <form action="insert.php" method="post">
			<label for="event_name" class="col-lg-2 control-label">Contact</label>
			<div class="col-lg-10">
			  <input type="text" class="form-control" name="Contact" id="user-name" placeholder="Enter you contact details">
			</div>
		  </div><!-- End form group -->





        <div class="input-group">
		<form action="insert.php" method="post">
        <div class="input-group-addon">$</div>

        <input type="text" class="form-control" name= "Amount" id="exampleInputAmount" placeholder="Amount">
        <div class="input-group-addon">.00</div>
    </div>
    <div class="form-group">
	<form action="insert.php" method="post">
        <label for="exampleInputEmail1">Expiry Date</label>

        <input type="date" class="form-control" name="Expiry" placeholder="Text input">
    </div>









            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

            </div>


            <button type="submit" class="btn btn-default">Submit</button>

            <button type="submit" class="btn btn-default">Cancel</button>

		</form>
	  </div>
	</div><!-- End the row -->










<!-- Footer -->

    <footer>

    </footer>

	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
