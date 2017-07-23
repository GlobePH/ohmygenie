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
  <link rel="stylesheet" type="text/css" href="style/welcome.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrap-social-gh-pages/bootstrap-social.css">
  <link rel="stylesheet" type="text/css" href="style/bootstrap-social-gh-pages/assets/css/font-awesome.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
		 <a class="navbar-brand site-logo" href="#myPage">Oh my Genie</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
		<li><a href="#howTo">HOW TO</a></li>
	    <li><a href="#jobs">JOBS</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#portfolio">CITIES</a></li>
		<li><a href="#help">HELP</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li><a data-toggle="modal" href="#signupModal"><span class="glyphicon glyphicon-edit"></span> SIGN UP</a></button></li>
		<li><a data-toggle="modal" href="#loginModal"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></button></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center welcome-banner">
  <h1>What can I do for you today?</h1> 
  <br/><br/>
  <div class="container">
	<form>
		<div class="col-lg-8 col-lg-offset-2">
		    <div class="input-group input-group-lg">
			    <input type="text" class="form-control" id="txt-wish" /> 
				<span class="input-group-btn">
			        <button class="btn btn-default" id="btn-wish" type="button" data-toggle="modal" data-target="#inputModal">Wish!</button>
				</span>
		    </div>
		</div>
	</form>
  </div>
</div>

<div id="signupModal" class="modal fade omg-modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
	  <form id="registerUser">
		  <div class="modal-body">
			<div class="row">
				<div class="col-lg-12 form-group">
					<a class="btn btn-block btn-social btn-facebook btn-lg">
						<span class="fa fa-facebook"></span> Sign up with Facebook</a>
				</div>
			</div>
			<div class="row">
				<p class="text-center">OR</p>
			</div>
			<div class="row">
				<div class="col-sm-12 form-group required">
					<input class="form-control" id="userEmail" name="email" placeholder="Email" type="email">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 form-group">
					<label id="passwordMessage"></label>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 form-group required">
					<input class="form-control" id="userPassword" name="password" placeholder="Password" type="password">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 form-group required">
					<input class="form-control" id="confirmPassword" name="password" placeholder="Confirm Password" type="password">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 form-group">
					<div class="checkbox">
						<label><input type="checkbox" value="">I agree to <a href="#TOC" data-toggle="modal">Terms and Conditions</a></label>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-12 form-group">
					<button class="btn btn-primary btn-block btn-lg" id="signUser">Sign up</span></button>
				</div>
			</div>
			<div class="row">
				<p class="text-center">Already have account? <a href="#loginModal" data-toggle="modal">Login here</a></p>
			</div>
		  </div>
	  </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="TOC" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
        <p>User Agreement: ohmygenie.net</p>
<p>Ohmygenie operates an online platform allowing Users to connect through the Ohmygenie Platform with other Users who provide Services.</p>
<p>Please read these terms and all Policies including the Privacy Policy and the Community Guidelines carefully before using the Ohmygenie Platform. These Policies are incorporated into this Agreement by reference.
All defined terms in this Agreement have the meaning given to them in the Ohmygenie Glossary.</p>
<p>1) Scope of OhMyGenie Services</p>	
<p>●	Ohmygenie provides the Ohmygenie Platform to enable Job Posters to publish Posted Tasks.</p>
<p>2. OHMYGENIE'S ROLE AND OBLIGATIONS</p>
<p>●	Ohmygenie has no responsibility and makes no warranty as to the truth or accuracy of any aspect of any information provided by Users, including, but not limited to, the ability of Ohmygenie Workers to perform tasks or supply items, or the honesty or accuracy of any information provided by Job Posters or the Job Posters' ability to pay for the Services requested.</p>
<p>3. USER OBLIGATIONS</p>
<p>●	You will at all times:</p>
<p>○	(a) comply with this Agreement (including all Policies) and all applicable laws and regulations;</p>
<p>○	(b) only post accurate information on the Ohmygenie Platform;</p>
<p>○	(c) promptly and efficiently perform obligations to other User under a Task Contract; and</p>
<p>○	(d) ensure that You are aware of any laws that apply to You as a Job Poster or Ohmygenie Worker, or in relation to using the Ohmygenie Platform.</p>

<p>4. FEES</p>
<p>•	Upon the creation of a Task Contract, the Users owe Ohmygenie the Fees. Fees will automatically be deducted from the Task Payment held in the Escrow Account.</p>
<p>5. PAYMENTS AND REFUNDS</p>
<p>●	The Job Poster and the Ohmygenie Worker mutually agree to cancel the Task Contract.</p>
<p>6. PAYMENT FACILITY</p>
<p>●	Ohmygenie may use an Escrow Provider to operate the Escrow Account.</p>
<p>7. VERIFICATION & BADGES</p>
<p>●	Ohmygenie may use Identity Verification Services.</p>
<p>●	10.2 You agree that Ohmygenie Identity Verification Services may not be fully accurate as all Ohmygenie Services are dependent on User-supplied information and/or information or verification services provided by third parties.</p>
<p>8. INSURANCE</p>
<p>Ohmygenie may offer its Users an opportunity to obtain insurance for certain Task Contracts. All such insurance will be offered by a third party. Any application and terms and conditions for such third party insurance will be available at the Ohmygenie website when they are available. Ohmygenie confirms that all insurance policies are Third Party Services and subject to further terms set out for Third Party Services.</p>
<p>9. FEEDBACK</p>
<p>You can complain about any comment made on the Ohmygenie Platform using the 'Report' function of the Ohmygenie Platform or contact Ohmygenie via the Ohmygenie Platform.</p>
<p>10. LIMITATION OF LIABILITY</p>
<p>13.1 Except for liability in relation to breach of Non-excludable Condition, to the extent permitted by law Ohmygenie specifically disclaims all liability for any loss or damage (actual, special, direct, indirect and consequential) of every kind and nature, known and unknown, suspected and unsuspected, disclosed and undisclosed (including, without limitation, loss or damage relating to any inaccuracy of information provided, or the lack of fitness for purpose of any goods or service supplied), arising out of or in any way connected with any transaction between Job Posters and Ohmygenie Workers.</p>


      </div>
      <div class="modal-footer">
        <a class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#signupModal" />Close</a>
      </div>
    </div>

  </div>
</div>

<div id="smsVerifyModal" class="modal fade omg-modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Login</h4>
      </div>
      <div class="modal-body">
        <div class="row">
			<div class="col-sm-12 form-group">
				<input class="form-control" id="email" name="email" placeholder="Email" type="email">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 form-group">
				<input class="form-control" id="password" name="password" placeholder="Password" type="password">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 form-group">
				<a class="form-control" href="#smsVerifyModal">SMS Verification by Globe</a>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-lg-12 form-group">
				<button id="loginUser" class="btn btn-primary btn-block btn-lg">Login</span></button>
			</div>
		</div>
		<div class="row">
			<p class="text-center">Don't have account yet? <a href="#signupModal" data-toggle="modal">Sign up here</a></p>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="inputModal" class="modal fade omg-modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Task</h4>
      </div>
      <div class="modal-body">
		<!--<form id="submitRequest">
			<div class="row">
				<div class="col-sm-12 form-group">
					<input class="form-control" id="jobTitle" name="jobTitle" placeholder="Job" type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 form-group">
					<textarea class="form-control" rows="5" id="jobDescription" placeholder="Job Descrition"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 form-group">
					<button class="btn btn-primary btn-lg" id="submitForm">SUBMIT</button>
				</div>
			</div>
		</form>-->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active">
			  <a href="#billing" aria-controls="billing" role="tab" data-toggle="tab" aria-expanded="true">Create Task</a>
			</li>
			<li>
			  <a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab" aria-expanded="false">Location and Date</a>
			</li>
			<li>
			  <a href="#review" aria-controls="review" role="tab" data-toggle="tab" aria-expanded="false">Review &amp; Order</a>
			</li>
		</ul>
		<div class="tab-content">	
			<div role="tabpanel" class="tab-pane active" id="billing">
				<br/>
				<div class="row">
					<div class="col-sm-12 form-group">
						<input class="form-control" id="jobTitle" name="jobTitle" placeholder="What's your wish" type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 form-group">
						<textarea class="form-control" rows="5" id="jobDescription" placeholder="Tell us a description of your wish"></textarea>
					</div>
				</div>
				<a class="btn btn-primary continue">Continue</a>
			</div>
			<div role="tabpanel" class="tab-pane" id="shipping">
				</br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<input class="form-control" id="txtLocation" name="Location" placeholder="Location" type="text">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 form-group">
						<label for="txtDate">Date Needed</label>
						<input class="form-control" id="txtDate" name="txtDate" type="date">
					</div>
				</div>
				<a class="btn btn-primary back">Go Back</a>
				<a class="btn btn-primary continue">Continue</a>
			</div>
			<div role="tabpanel" class="tab-pane" id="review">
				<br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<input class="form-control" id="txtPrice" name="txtPrice" placeholder="Price" type="text">
					</div>
				</div>
				<hr>
				<h3 class="">Review &amp; Place Order</h3>
				<a class="btn btn-primary back">Go Back</a>
				<a class="btn btn-primary continue" id="placeOrder">Place Order</a>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="howTo" class="container-fluid text-center">
	<h2>How does OhMyGenie work?</h2>
	<div id="howToCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#howToCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#howToCarousel" data-slide-to="1"></li>
      <li data-target="#howToCarousel" data-slide-to="2"></li>
	  <li data-target="#howToCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="img-thumbnail">
			<img src="images/splash/create.jpg" alt="Create" width="400" height="300">
		</div>
      </div>
      <div class="item">
        <div class="img-thumbnail">
			<img src="images/splash/bid.jpg" alt="Create" width="400" height="300">
		</div>
      </div>
      <div class="item">
        <div class="img-thumbnail">
			<img src="images/splash/timeline.jpg" alt="Create" width="400" height="300">
		</div>
      </div>
	  <div class="item">
        <div class="img-thumbnail">
			<img src="images/splash/review.jpg" alt="Create" width="400" height="300">
		</div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#howToCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#howToCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="jobs" class="container-fluid text-center bg-grey">
  <h2>Become a genie and fulfill these wishes</h2>
  <br>
  <div class="row row-eq-height">
	<a  data-toggle="modal" href="#loginModal"> 
    <div class="col-sm-4">
      <div class="img-thumbnail img-jobs">
        <img src="images/jobs/omg-pexel-1-crop.jpeg" alt="BGC">
		<p>Clean my bedroom and two bathrooms.</p>
		<br>
		<p>Location:<strong> BGC, Taguig</strong></p>
		<p>Price: <strong>800 Php</strong></p>
      </div>
    </div>
	</a>
	<a  data-toggle="modal" href="#loginModal"> 
    <div class="col-sm-4">
      <div class="img-thumbnail img-jobs">
        <img src="images/jobs/omg-pexel-2-crop.jpeg" alt="BGC">
		<p>Need plumber to change sink and grease trap. <br/>Materials provided.</p>
        <p>Location:<strong> Makati</strong></p>
		<p>Price: <strong>3000 Php</strong></p>
      </div>
    </div>
	</a>
	<a  data-toggle="modal" href="#loginModal"> 
    <div class="col-sm-4">
      <div class="img-thumbnail img-jobs">
        <img src="images/jobs/omg-pexel-3-crop.jpg" alt="BGC">
		<p>Need someone to fix my broken door knob. <br/> You will provide the materials.<p> 
        <p>Location:<strong> Quezon City</strong></p>
		<p>Price: <strong>3500 Php</strong></p>
      </div>
    </div>
	</a>
  </div>
  <br><br>
  <div class="row row-eq-height">
	<a  data-toggle="modal" href="#loginModal"> 
    <div class="col-sm-4">
      <div class="img-thumbnail img-jobs">
        <img src="images/jobs/omg-pexel-4-crop.jpeg" alt="BGC">
		<p>Install 60 inch TV wall mount on my condo unit. </p>
		<br>
		<p>Location:<strong> Eastwood, Libis</strong></p>
		<p>Price: <strong>500 Php</strong></p>
      </div>
    </div>
	</a>
	<a  data-toggle="modal" href="#loginModal"> 
    <div class="col-sm-4">
      <div class="img-thumbnail img-jobs">
        <img src="images/jobs/omg-pexel-5-crop.jpg" alt="BGC">
		<p>Need an english native voice actor for my <br/>1 minute video presentation. </p>
		<p>Location:<strong> Online</strong></p>
		<p>Price: <strong>1500 Php</strong></p>
      </div>
    </div>
	</a>
	<a  data-toggle="modal" href="#loginModal"> 
    <div class="col-sm-4">
      <div class="img-thumbnail img-jobs">
        <img src="images/jobs/omg-pexel-6-crop.jpg" alt="BGC">
		<p>Need to have my roof painted ASAP. <br/>All the materials will be provided.</p>
		<p>Location:<strong> Quezon City</strong></p>
		<p>Price: <strong>5000 Php</strong></p>
      </div>
    </div>
	</a>
  </div>
</div>

<div id="loginModal" class="modal fade omg-modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
	<form id="userLogin">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">User Login</h4>
		  </div>
		  <div class="modal-body">
			<div class="row">
				<div class="col-sm-12 form-group">
					<input class="form-control" id="loginEmail" name="email" placeholder="Email" type="email">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 form-group">
					<input class="form-control" id="loginPassword" name="password" placeholder="Password" type="password">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<a href="http://developer.globelabs.com.ph/dialog/oauth?app_id=neg5uX9xGEu67cgxpbTxxzu8oezaubkX">SMS Verification by Globe</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 form-group">
					<button class="btn btn-primary btn-block btn-lg" id="loginUser">Login</span></button>
				</div>
			</div>
			<div class="row">
				<p class="text-center">Don't have account yet? <a href="#signupModal" data-toggle="modal">Sign up here</a></p>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</form>
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row slideanim">
    <div class="col-sm-7">
      <h2>What is OhMyGenie</h2><br>
      <h4>Imagine a local app that intuitively finds the best worker, out from a pool of other competitive providers, for a task that you want featuring community reviews ensuring the job you are outsourcing will be finished with high quality. In addition, safely keeps your money until you are satisfied with the job done for you.</h4>
      <p>The amount of people who are too busy to accomplish a simple labor is increasing. This is very
evident to most professionals working more than 8 hours a day – sometimes even during the weekend – leaving no
time to do a simple chore such as “replacing a door knob”. Oh My Genie application aims to solve that as we do not
have any real system that simplifies the process of finding quality service providers for a reasonable price – its closest
competitor charges hefty cost to users without providing any reviews, milestones or any means of assurance that a
task will be accomplished after paying the amount.</p>
    </div>
	<div class="col-sm-5">
		<img src="images/splash/about.jpg" class="img-thumbnail" alt="About">
	</div>
  </div>	
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>CITIES</h2><br>
  <h4>Where we operate</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="img-thumbnail">
        <img src="images/manila.jpg" alt="Manila" width="400" height="300">
        <p><strong>Manila</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="img-thumbnail">
        <img src="images/cebu.jpg" alt="Signapore" width="400" height="300">
        <p><strong>Cebu</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="img-thumbnail">
        <img src="images/davao.jpg" alt="Kuala Lumpur" width="400" height="300">
        <p><strong>Davao</strong></p>
      </div>
    </div>
  </div>
  
  <br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This app is the best. I am so happy with the result!"<br><span>Minette Navarette, President, Kickstart</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>Abe Astillero, Manager, Accenture Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this app?"<br><span>Abigail Villanueva, Housewife</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="help" class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Manila, Philippines</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>jomarnuguid0830@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div class="container-fluid bg-grey" align="center" style='padding:0;'>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB8_y6ftrIDEGIJaE0mfhWw04efq5yEaH4'></script>
<div id='gmap_canvas' style='height:440px;width:auto;'></div><div><small></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(14.553406,121.04992259999995),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.553406,121.04992259999995)});infowindow = new google.maps.InfoWindow({content:'<strong>Globe Tower, Bonifacio Global City</strong><br>Globe Tower BGC<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <div class="col-sm-4">
      <span class="fa fa-facebook-square fa-3x"></span>
	  <span class="fa fa-twitter-square fa-3x"></span>
	  <span class="fa fa-share-alt-square fa-3x"></span>
	  <span class="fa fa-youtube-square fa-3x"></span>
  </div>
  <div class="col-sm-4">
	  <a href="#omgFooter" title="To Top">
		<span class="glyphicon glyphicon-chevron-up"></span>
	  </a>
	  <p>OhMyGenie Property. Copyright 2017, All rights reserved</p>
  </div>
  <div class="col-sm-4">
	<img class="omg-badge" alt='Get it on Google Play' src='images/badge/google-play-badge.png'/>
	<img class="omg-badge" alt='Get it on App Store' src='images/badge/apple-store-badge.svg'/>
  </div>
</footer>
<script src="js/welcome.js" type="text/javascript"></script>
<script src="js/welcome_cntl.js" type="text/javascript"></script>
</body>
</html>
