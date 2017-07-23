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
  <link rel="stylesheet" type="text/css" href="../../style/welcome.css">
  <link rel="stylesheet" type="text/css" href="../../style/bootstrap-social-gh-pages/bootstrap-social.css">
  <link rel="stylesheet" type="text/css" href="../../style/bootstrap-social-gh-pages/assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../../style/welcome.css">
  <link rel="stylesheet" type="text/css" href="../../style/main-page.css">
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
	  <a class="navbar-brand" href="#myPage">Oh My Genie</a>
	  <a class="navbar-brand navbar-nav" href="../main.php">Login as User</a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="../../index.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></button></li>
	  </ul>
	</div>
  </div>
</nav>

<div class="container-fluid main-page">
	<div class="container">
		<div class="row content">
			<div class="col-sm-3 sidenav">
				<h4 class="text-center">Hello Genie Jomar</h4>
				<div class="row text-center">
					<img src="../../images/jomar.jpg" class="img-circle" alt="User" width="200" height="200">
				</div>				
				<br/>
				<ul class="nav nav-pills nav-stacked user-menu">
					<li class="active"><a id="genie-bid" href="#"><span class="glyphicon glyphicon-pushpin"></span> Genie Bid</a></li>
					<li><a id="genie-history" href="#"><span class="glyphicon glyphicon-check"></span> Genie History</a></li>
					<li><a id="genie-earnings" href="#"><span class="glyphicon glyphicon-usd"></span> Genie Earnings</a></li>
					<li><a id="genie-account" href="#"><span class="glyphicon glyphicon-user"></span> Genie Account</a></li>
					<li><a id="genie-reviews" href="#"><span class="glyphicon glyphicon-star"></span> Genie Reviews</a></li>
					<li><a href="#section3"><span class="glyphicon glyphicon-gift"></span> Genie Perks</a></li>
					<li><a href="../../index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
			<div class="col-sm-9" id="genie-content">
			</div>
		</div>
	</div>
</div>
<footer class="container-fluid main-footer">
	<div class="container">
		<span class="fa fa-facebook"></span>
	</div>
</footer>
<script src="../../js/genie-dashboard.js" type="text/javascript"></script>
</body>
</html>