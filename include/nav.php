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

  				<a href="http://<?php echo $_SERVER['SERVER_NAME']?>" class="navbar-brand">Handshake</a>
          
  			</div><!-- Navbar Header-->

  			<div class="collapse navbar-collapse" id="navbar-collapse">
  				

  				<ul class="nav navbar-nav">
  					<li class="dropdown">  
              <a href="http://<?php echo $_SERVER['SERVER_NAME']."/view_meetup.php"?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MeetUP <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Create Event</a></li>
                </ul> 
            </li>
			<li class="dropdown">  
              <a href="http://<?php echo $_SERVER['SERVER_NAME']."/payforward/advice.php"?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pay it Forward <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="http://<?php echo $_SERVER['SERVER_NAME']."/payforward/advice.php"?>">View all Contributions</a></li>
                  <li><a href="http://<?php echo $_SERVER['SERVER_NAME']."/payforward/index.php"?>">Post Advice</a></li>
                </ul> 
            </li>
			  <li><a href="http://<?php echo $_SERVER['SERVER_NAME']."/#"?>">University Social</a> 
			  <li><a href="http://<?php echo $_SERVER['SERVER_NAME']."/#"?>">Ask Questions</a> 
				<li class="dropdown">  
              <a href="http://<?php echo $_SERVER['SERVER_NAME']."/payforward/advice.php"?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADS <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Post AD</a></li>
                </ul> 
            </li> 
  				</ul>
  			</div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->


          

          