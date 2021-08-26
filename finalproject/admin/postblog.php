<?php 
session_start();

if(!isset($_SESSION['user_name'])){
header("location: login.php");
}
else {
include("dbconnect.php"); 
include("adminpost2.php"); 
}
?>
<html>
  <head>
    <title>Post & Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <div class="logo">
	                 <h1><a href="index.php">Admin Panel</a></h1>
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
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user_name']; ?><b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Post & Blog From</div>
							</div>
			  				<div class="panel-body">
								<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-md-2 control-label" for="select-1">Select</label>
										<div class="col-md-10">
										<select class="form-control" id="select-1" name="select">								
										<option></option>
										<option>Post</option>
										<option>Blog</option>
										</select> 
										</div>
									</div>
									
									
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Post Author:</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" name="author" placeholder="Author Name"  value="<?php echo $_SESSION['user_name']; ?>" disabled>
										</div>
								    </div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" name="title" placeholder="Title" required>
										</div>
								    </div>
									<div class="form-group">
											<label class="col-md-2 control-label">File input</label>
											<div class="col-md-10">
											<input type="file"  class="btn btn-default" id="exampleInputFile1" name="image" required>
											</div>
									</div>
								    <div class="form-group">
										<label for="inputPassword3" class="col-sm-2 control-label">Post Content:</label>
										<div class="col-sm-10">
										<textarea class="form-control" placeholder="Textarea" name="content" rows="3" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										<br><br>
										<button type="submit" name="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
  </body>
</html>