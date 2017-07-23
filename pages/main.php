<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Oh My Genie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/welcome.css">
  <link rel="stylesheet" type="text/css" href="../style/bootstrap-social-gh-pages/bootstrap-social.css">
  <link rel="stylesheet" type="text/css" href="../style/bootstrap-social-gh-pages/assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../style/welcome.css">
  <link rel="stylesheet" type="text/css" href="../style/main-page.css">
	<style>
	.bar {
			height: 18px;
			background: green;
	}
	</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>                        
	  </button>
	  <a class="navbar-brand site-logo" href="#myPage">
		Oh my Genie
	  </a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
	  <ul class="nav navbar-nav navbar-right">
	    <li><a id="switch-user" href="#"><span class="glyphicon glyphicon-transfer"></span> Switch as Genie</a></li>
		<li><a href="../index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></button></li>
	  </ul>
	</div>
  </div>
</nav>

<div id="chgLocModal" class="modal fade omg-modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Genie Location</h4>
      </div>
      <div class="modal-body">
		<div class="row">
			<p class="text-center">Current location should be up to date. Would you like to update your location?</p>
		</div>
		<div class="row">
			<div class="col-lg-12 form-group">
				<div class="checkbox" style="text-align:center;">
					<input type="button" style="align:center;" onclick="location.href='http://developer.globelabs.com.ph/dialog/oauth?app_id=pjdMH98xGEu67Taxpqixxzu8ojjBHg8K';" value="Yes" />&nbsp;&nbsp;&nbsp;
					<input type="button" style="align:center;" onclick="location.href='location.html';" value="No" />
				</div>
			</div>
		</div><!-- Add Google Maps -->
<div class="container-fluid bg-grey" align="center" style='padding:0;'>
<div class="mapouter"><div class="gmap_canvas"><iframe width="425" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Globe%20Tower%20&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>embed google map <a href="http://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{overflow:hidden;height:300px;width:300px;}.gmap_canvas {background:none!important;height:300px;width:425px;}</style></div>
</div>
</div>
      <div class="modal-footer">
        <input type="button" onclick="location.href='location.html';" value="Close" />
      </div>
    </div>
  </div>
</div>

<div class="container-fluid main-page">
	<div class="container">
		<div class="row content">
			<div class="col-sm-3 sidenav">
				<h4 class="text-center" style="margin:0;">Hello Jomar</h4>
				<h6 class="text-center" id="switch-status">You're logged in as user</h6>
				<div class="row text-center">
					<img src="../images/jomar.jpg" class="img-circle" alt="User" width="200" height="200">
				</div>				
				<br/>
				<div id="omg-main-menu">				
				</div>
			</div>
			<div class="col-sm-9">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-1">
						<div class="input-group">
							<span class="input-group-addon">Search</span>
							<input id="msg" type="text" class="form-control" name="msg" placeholder="Search for Genie or Jobs">
							<div class="input-group-btn">
								<button class="btn btn-default" id="searchCmd">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row"  id="user-content">
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="container-fluid main-footer text-center">
	<div class="col-sm-4">
		<span class="fa fa-facebook-square fa-3x"></span>
		<span class="fa fa-twitter-square fa-3x"></span>
		<span class="fa fa-share-alt-square fa-3x"></span>
		<span class="fa fa-youtube-square fa-3x"></span>
	</div>
	<div class="col-sm-4">
		<p>OhMyGenie Property. Copyright 2017, All rights reserved</p>
	</div>
	<div class="col-sm-4">
		<img class="omg-badge" alt='Get it on Google Play' src='../images/badge/google-play-badge.png'/>
		<img class="omg-badge" alt='Get it on App Store' src='../images/badge/apple-store-badge.svg'/>
	</div>
</footer>
<script src="../js/user-dashboard.js" type="text/javascript"></script>
</body>
</html>