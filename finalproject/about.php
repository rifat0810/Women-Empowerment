<?php
session_start();
include_once 'dbconnect.php';
?>
<html>
<head>
<title>WOMEN'S EMPOWERMENT</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The News Reporter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->

</head>
<body>
	<!-- header-section-starts -->
	<div class="container">	
		<div class="news-paper">
			<div class="header">
				<div class="header-left">
					<div class="logo">
						<a href="index.php">
							<h1><span>WOMEN'S EMPOWERMENT</span></h1>
						</a>
					</div>
				</div>
					<div class="social-icons">
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="rss"></i></a></li>
						<li><div class="facebook"><div id="fb-root"></div>
							
							<div id="fb-root"></div>
							</div></li>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
	   						
	   						<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
							

					</div>
				<div class="clearfix"></div>
				</div>
				<span class="menu"></span>
				<!--navigation-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li class="active"><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
		<li><a href="blog.php">Blogs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	    <?php if (isset($_SESSION['user_id'])) { ?>
		  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorial<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="comtutorial.php">Computer Tutorial</a></li>
            <li><a href="handtutorial.php">Handicraft Tutorial</a></li>
          </ul>
        </li>
	    <li><a href="member.php">Member</a></li>
        <li><a href="www.skype.com">Video Call With Skype</a></li>
		   <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['user_name'];?></a>
          <ul class="dropdown-menu">
			<li><a href="profile.php">Profile</a></li>
			<li><a href="quespaper.php">Online Exam</a></li>
			<li><a href="result.php">Result</a></li>
           </ul>
        </li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		<?php } else { ?>
		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span>SIGN UP</a></li>
		<?php } ?>

      </ul>
    </div>
</nav><!-- script for menu -->
			<!-- script for menu -->
			<div class="clearfix"></div>
			<div class="main-content">		
				<div class="about-section">
					<div class="about-us">
						<div class="col-md-7 about-left">
							<h3>ABOUT US</h3>
							<div class="abt_image">
								<img src="images/abt_pic.jpg" alt="" />
							</div>
							<h5>WOMENS EMPOWERMENT SYSTEM</h5>
							<p>This project is to develop a tool will help womens to learning about the computer tutorial and the handicraft tutorial. In this system the admin and member can create tutorial about the computer and handicraft. The admin can see all members and user information and all document. But member can see his or her create tutorial and edit or delete it. The main site user can see the members all information like as email, and Skype id. If any user cannot understand any tutorial she can contact by creator with Skype id. Member and admin see the result of the online examination.</p>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="footer text-center">
				<div class="bottom-menu">
					<ul>                 
						<li><a href="index.php">Home</a></li> |
						<li><a href="about.php">About</a></li> |
						<li><a href="contact.php">Contact</a></li> |
						<li><a href="blog.php">Blogs</a></li>							
					</ul>
				</div>
				<div class="copyright text-center">
					<p></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>