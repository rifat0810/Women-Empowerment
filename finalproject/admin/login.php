<?php 
session_start();
include("dbconnect.php");
if(isset($_SESSION['user_name'])){
header("location: index.php");
}

elseif(isset($_SESSION['userr_name'])){
header("location: member/index.php");
}

elseif(isset($_POST['login'])){
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$pass = mysqli_real_escape_string($con,$_POST['pass']);
	if($_POST['select']=='')
	{
	 echo "<script>alert('Please Select User')</script>";
	}
	if($_POST['select']=='Admin'){
	$query =mysqli_query($con,"select * from admin where email='$name' AND password='$pass'");
		if ($row = mysqli_fetch_array($query)) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        header("Location: index.php");
		}	 
		else {
		echo "<script>alert('Email or password is incorrect')</script>";
		}
	}
	if($_POST['select']=='Member'){
	$query =mysqli_query($con,"select * from member where email='$name' AND password='$pass'");
		if ($row = mysqli_fetch_array($query)) {
        $_SESSION['userr_id'] = $row['id'];
        $_SESSION['userr_name'] = $row['fullname'];
        header("Location: member/index.php");
		} 
		else {
        echo "<script>alert('Email or password is incorrect')</script>";
		}
	}
}
?>
<html>
  <head>
    <title>Login</title>
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
	                 <h1><a href="login.php">Login Panel</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li>
	                        <a href="signup.php" >Sign Up</a>
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
					            <div class="panel-title">Login Form</div>
							</div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">
									<div class="form-group">
										<label class="col-md-2 control-label" for="select-1">Select User</label>
										<div class="col-md-10">
										<select class="form-control" id="select-1" name="select">
											<option></option>
											<option>Admin</option>
											<option>Member</option>
										</select> 
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Email" required>
										</div>
								    </div>
								    <div class="form-group">
										<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassword3" name="pass" placeholder="Password" required>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" name="login" class="btn btn-primary">Sign in</button>
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