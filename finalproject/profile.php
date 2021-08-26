<?php 
session_start();

if(!isset($_SESSION['user_name'])){
header("location: login.php");
}
else {

?>
<html>
<head>
<title>WOMEN'S EMPOWERMENT</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/stylee.css" rel="stylesheet" type="text/css" media="all" />
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
				<!--navigation-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
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
		<li><a href="quiz.php">Online Exam</a></li>
		<li><a href="quizzer/index.php">Result</a></li>
		 <li><script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
<div id="SkypeButton_Call_rifatislam_1">
 <script type="text/javascript">
 Skype.ui({
 "name": "call",
 "element": "SkypeButton_Call_rifatislam_1",
 "participants": ["rifatislam"],
 "imageSize": 16
 });
 </script>
</div></li>
		<li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['user_name'];?></a>
         <ul class="dropdown-menu">
		<li><a href="profile.php">Profile</a></li>
		</ul>
        </li>
		
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		<?php } else { ?>
		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span>SIGN UP</a></li>
		<?php } ?>

      </ul>
    </div>
</nav>	<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<div class="clearfix"></div>
			<div class="main-content">		
				<div class="contact-section">
					<div class="contact-section-head">
						<h3>User Profile</h3>
					</div>
					<div class="contact-form-bottom">
					<div class="col-md-4 address">
						
						</div>
<?php 
include("dbconnect.php");
$member = $_SESSION['user_id'];
$query = "select * from user where id='$member'";
$run = mysqli_query($con,$query);
while($row=mysqli_fetch_array($run)){

	$id = $row['id'];
	$date = $row['date'];
	$fullname = $row['fullname'];
	$email = $row['email'];
?>
					
						<div class="col-md-4 contact-form">
						<form>
								<div class="contact-form-row">
									<div>
										<span>Name</span>
										<input type="text" class="text" value="<?php echo $fullname; ?>" disabled>
									</div>
									<div>
										<span>Email</span>
										<input type="text" class="text" value="<?php echo $email; ?>" disabled>
									</div>
									<div>
										<span>Join Date</span>
										<input type="text" class="text" value="<?php echo $date; ?>" disabled>
									</div>									
									<div class="clearfix"> </div>
									<a href="changename.php?id=<?php echo $id; ?>" class="start" >Change Name</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="changepass.php?id=<?php echo $id; ?>" class="start" >Change Password</a>
									
								</div>
						</form>
						 <?php } ?>
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
<?php } ?>