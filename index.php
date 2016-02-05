<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <style>
    .modal-open .modal,.btn:focus{
                outline:none!important;
            }
     </style>       
</head>
<body id="bootstrap-overrides">
	
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
                        <form>
                            <div class="form-group">
                                <label for="email-user" class="control-label">Email/Username:</label>
                                <input type="text" class="form-control" id="email-user">
                                <label for="password" class="control-label">Password:</label>
                                <input type="text" class="form-control" id="password">
                                <a href="#" id="forgot-pass">Forgot password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
      
            </div>
        </div>
	<div class="container images" style="marigin: auto;">
 <div class="row images" >
  <div class="col-md-3" >
    <a href="image\handshake.jpg" class="thumbnail">
      <img src="image\handshake.jpg" alt="Event" >
	  <span align =center> Meet and greet </span>
    </a>
  </div>
  <div class="col-md-3" >
    <a href="image\handshake.jpg" class="thumbnail">
      <img src="image\handshake.jpg" alt="Handshake" >
	  <span align =center> Meet and greet </span>
    </a>
  </div>
  <div class="col-md-3" >
    <a href="image\handshake.jpg" class="thumbnail">
      <img src="image\handshake.jpg" alt="Ads" >
	  	 <span align =center> Meet and greet </span>
    </a>
  </div>
  
</div>
</div>
	<div class="container images" style="marigin: auto;">
	 <div class="row" align=center>
  <div class="col-md-3">
    <a href="image\handshake.jpg" class="thumbnail">
      <img src="image\handshake.jpg" alt="Event" >
	  <span align =center> Meet and greet </span>
    </a>
  </div>
  <div class="col-md-3">
    <a href="image\handshake.jpg" class="thumbnail">
      <img src="image\handshake.jpg" alt="Handshake" >
	  <span align =center> Meet and greet </span>
    </a>
  </div>
  </div>
</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
