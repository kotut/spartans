<!DOCTYPE html>
<html lang="en">

<head>
<?php include("include/header.php"); ?>
	<title>Handshake </title>
	<?php include("../include/header.php"); ?>
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
          <h2>Create Event</h2>
      </div><!-- End Page Header -->
      
      
          
      <div class="col-lg-8">
		<form action="meetup_con.php" method='post' class="form-horizontal">
		  <div class="form-group">
			<label for="event_name" class="col-lg-2 control-label">Event Name</label>
			<div class="col-lg-10">
			  <input name="eventname" type="text" class="form-control" id="eventname" placeholder="Event Name">
			</div>
		  </div><!-- End form group -->




		  <div class="form-group">
			<label for="event_time" class="col-lg-2 control-label">Date Time</label><br>
				<div class='input-group date' id='datetimepicker1' >
                    <input type='text' class="form-control" name='datetimepicker1'/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
		  </div><!-- End form group -->

		   <div class="form-group">
			<label for="event_name" class="col-lg-2 control-label">Location</label>
			<div class="col-lg-10">
			  <input type="text" class="form-control" id="location" name="location" placeholder="Location">
			</div>
		  </div><!-- End form group -->
		  
		  
		  


		  
		  

		  
		  
		  
		  
		  

		  
		  
		  
		  
		  

		  
		  
		  <div class="form-group">
			<label for="event_name" class="col-lg-2 control-label">Spaces</label>
			<div class="col-lg-10">
			  <input name="space" type="text" class="form-control" id="space" id="name" placeholder="Available Spaces">
			</div>
		  </div><!-- End form group --> 
		  
		  
		  
		  <div class="form-group">
			<label for="event_name" class="col-lg-2 control-label">Availability</label>
		<select>
             <option value="Am">Closed</option>
             <option value="Pm">Public</option>
			</select>
		  </div><!-- End form group -->
		  


		  <div class="form-group">
			<label for="event_description" class="col-lg-2 control-label">Description</label>
			<div class="col-lg-10">
			  <textarea id="eventdescription" name="eventdescription" class="form-control" 
			  cols="20" rows="10" placeholder="Enter your Description..."></textarea>
			</div>
		  </div><!-- End form group -->



		



	 <div class="form-group">
		<div class="col-lg-10 col-lg-offset-2">
		  <button type="submit" class="btn btn-success btn-lg">Submit</button>
		</div>
	  </div>
		  
		  
		  

		</form>
	  </div>
	</div><!-- End the row -->








  

<!-- Footer -->

    <footer>

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