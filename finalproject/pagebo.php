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
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
		<li class="active"><a href="blog.php">Blogs</a></li>
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
</nav> 
	
	<div class="clearfix"></div>
			<div class="movie-main-content">		
				<div class="col-md-9 total-news">
					
	<div class="grids">
		<div class="msingle-grid box">
<?php 
include("dbconnect.php");
if(isset($_GET['id'])){
$page_id = $_GET['id'];

$select_query = "select * from blog where id='$page_id'";
$run_query = mysqli_query($con,$select_query);
while($row=mysqli_fetch_array($run_query)){

	$post_id = $row['id']; 
	$post_title = $row['title'];
	$post_date = $row['date'];
	$post_author = $row['author'];
	$post_image = $row['images'];
	$post_content =$row['content'];
?>

			<div class="grid-header">
				<h3><?php echo $post_title; ?></h3>
				<ul>
				<li><span><?php echo $post_author; ?><?php echo "  "?><?php echo $post_date; ?></span></li>
				</ul>
			</div>
			<div class="singlepage">
			<img src="admin/images/<?php echo $post_image; ?>"  width="792" height="387" />
			
						<br><br>
						<div class="clearfix"> </div>
						</div>							
							<div class="story-review">
								<?php echo $post_content; ?>
							</div>		 
	<?php }}?>
		</div>	
			<div class="clearfix"> </div>
	</div>
<br>
			</div>	
			
				<div class="col-md-3 side-bar">
					
							
<div class="popular">
						<div class="main-title-head">
							<h5>POPULAR</h5>
							<div class="clearfix"></div>
						</div>
<marquee  height="463" scrolldelay="200" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
						<?php 
include("dbconnect.php");
$select_posts = "select * from post order by 1 DESC LIMIT 0,6";
$run_posts = mysqli_query($con,$select_posts);
while($row=mysqli_fetch_array($run_posts)){
	$post_id = $row['id']; 
	$post_title = substr($row['title'],0,100);
	$post_date = $row['date'];
	$post_author = $row['author'];
	$post_image = $row['images'];
	$post_content = substr($row['content'],0,200);
?>
						<div class="popular-news">
										
								<i><?php echo $post_date; ?> </i>
								<p><?php echo $post_title; ?>  <a href="pagepo.php?id=<?php echo $post_id; ?>" style="color:#cf0000;">Read More</a></p>
							<div class="popular-grid">
							</div>
							<?php } ?>
							
						</div>
						</marquee>
					</div>
					<div class="clearfix"></div>
					
					<div class="clearfix"></div>
				
						<div class="subscribe-now">
						<div class="discount">
							<a href="#">
								<div class="save">
									<p>Save</p>
									<p>upto</p>
								</div>
								<div class="percent">
									<h2>50%</h2>
								</div>
								<div class="clearfix"></div>
						</div>						
						<h3 class="sn">subscribe     now</h3>
							</a>
					</div>
					
					<div class="clearfix"></div>
					<div class="popular">
						<div class="main-title-head">
							<br><br>
							<h5>CALENDAR</h5>
							<div class="clearfix"></div>
						</div>				
						<div class="popular-news">
						
						<div>
						<div class="clearfix"></div>
						<link rel="stylesheet" href="caleandar/css/theme1.css"/>
							<div id="caleandar"></div>
							<script type="text/javascript" src="caleandar/js/caleandar.js"></script>
							<script type="text/javascript" src="caleandar/js/demo.js"></script>
						</div>
						</div>
						
						
					</div>					
					<div class="clearfix"></div>
				</div>	
				<div class="clearfix"></div>
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
</html>