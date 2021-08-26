<?php 
session_start();

if(!isset($_SESSION['userr_name'])){
header("location: login.php");
}
else {

?>
<html>
  <head>
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="../mindex.php">Member Panel</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['userr_name']; ?> <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.php">Profile</a></li>
	                          <li><a href="../logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	
	
	    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
           <ul class="nav">
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
										<li class="current"><a href="add.php"><i class="glyphicon glyphicon-list"></i> Create Question</a></li>
					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>Create Tutorial
                            <span class="caret pull-right"></span>
                         </a>
                        <ul>
                            <li><a href="admintutorialfrom.php">Computer Tutorial</a></li>
                            <li><a href="admintutorialfrom.php">Handicraft Tutorial</a></li>
                        </ul>
                    </li>
					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>Post & Blog
                            <span class="caret pull-right"></span>
                         </a>
                        <ul>
                            <li><a href="postblog.php">Post</a></li>
                            <li><a href="postblog.php">Blog</a></li>
                        </ul>
                    </li>

					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>View Something
                            <span class="caret pull-right"></span>
                         </a>
                        <ul>
                            <li><a href="viewcompost.php">Computer Tutorial</a></li>
                            <li><a href="viewhandpost.php">Handicraft Tutorial</a></li>
							<li><a href="viewpost.php">Post</a></li>
							<li><a href="viewblog.php">Blog</a></li>
                        </ul>
                    </li>
					<li class="current"><a href="showresult.php"><i class="glyphicon glyphicon-list"></i> Exam Result</a></li>
				</ul>
             </div>
		  </div>
		  <div class="col-md-10">
<div class="row">
<div class="container">
<?php 
include("dbconnect.php");
$member = $_SESSION['userr_id'];
$query = "select * from member where id='$member'";
$run = mysqli_query($con,$query);
while($row=mysqli_fetch_array($run)){
	$id = $row['id'];
	$date = $row['date'];
	$username = $row['username'];
	$fullname = $row['fullname'];
	$email = $row['email'];
	$image = $row['images'];
?>
    
	<div class="row">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal Information</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Skype ID:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $username; ?>" disabled>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-lg-3 control-label">Full name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $fullname; ?>" disabled>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $email; ?>" disabled>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-lg-3 control-label">Image:</label>
            <div class="col-lg-8">
              <img src="images/<?php echo $image; ?>" width="80%" height="35%" alt="avatar">
            </div>
          </div>
		  <div class="form-group">
            <label class="col-lg-3 control-label">Signup Date:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $date; ?>" disabled>
            </div>
          </div>
		  <?php } ?>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="update">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
		  	</div>
		  </div>
		</div>
    </div>

   
   <footer>
         <div class="container">
         
            <div class="copy text-center">
              <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
<?php } ?>