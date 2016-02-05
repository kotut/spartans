<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("include/header.php"); ?>
    <style>
      .modal-open .modal,.btn:focus{
      outline:none!important;
      .thumbnail{min-height:200px;}
      }
     </style>       
</head>
<body id="bootstrap-overrides">
	
<?php session_start(); ?>
<?php if(!isset($_SESSION['user'])) : ?>
	<div class="container">
		<div class="jumbotron">
			<div style="float:right;width:100px;"> 
				<a href="#LogModal" data-toggle="modal" class="btn" align=right> Login </a>
			</div>
			<div style="float:right;width:60px;"> 
				<a href="#RegModal" data-toggle="modal" class="btn" align= right> Register </a>
			</div>
		</div>
	</div>
<?php else : ?>
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
<?php endif; ?>
	
   <div class="modal fade" id="RegModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Register</h4>
          </div>
          <div class="modal-body">
            <form action="registration.php" method="post">
              <div class="form-group">
                <label for="first-name" class="control-label">First Name:</label>
                <input type="text" class="form-control" name="first-name" id="first-name">
                <label for="last-name" class="control-label">Last Name:</label>
                <input type="text" class="form-control" name="last-name" id="last-name">
                <label for="major" class="control-label">Major:</label>
                <input type="text" class="form-control" name="major" id="major">
                <label for="email" class="control-label">Email:</label>
                <input type="text" class="form-control" name="email" id="email">
                <label for="username" class="control-label">Username:</label>
                <input type="text" class="form-control" name="username" id="username">
                <label for="password" class="control-label">Password:</label>
                <input type="password" class="form-control" name="password" id="password">
                <label for="retypepass" class="control-label">Confirm Password:</label>
                <input type="password" class="form-control" name="retypepass"id="retypepass">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="submt" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>            
        </div>
      </div>
    </div>

    <div class="modal fade" id="LogModal" role="dialog">
       <div class="modal-dialog">
    
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="email-user" class="control-label">Email/Username:</label>
                                <input type="text" class="form-control" name="email-user" id="email-user">
                                <label for="password" class="control-label">Password:</label>
                                <input type="password" class="form-control" name="password" id="password">
                                <a href="#" id="forgot-pass">Forgot password?</a>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" name="submit" value="submt" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
      
            </div>
    </div>

    <div class="container">
        <div class="row"> 
            <h2>HANDSHAKE</h2>
            <p><strong>Where nobody is a stranger.</strong></p>
        </div>
    </div>

	<div class="container images" style="marigin: auto;">
 <div class="row images" >
  <div class="col-md-4" >
    <a href="/payforward/advice.php" class="thumbnail">
      <img src="image/handshake.jpg" alt=" " >
	  <h4 align =center> Pay it Forward </h4>
    </a>
  </div>
  <div class="col-md-4" >
    <a href="event.php" class="thumbnail">
      <img src="image/handshake.jpg" alt=" " >
	  <h4 align =center> Handshake Meet-Up</h4>
    </a>
  </div>
  <div class="col-md-4">
    <a href="#" class="thumbnail">
      <img src="image/handshake.jpg" alt=" " >
	  	 <h4 align =center> Advertisements </h4>
    </a>
  </div>
  
</div>
</div>

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

