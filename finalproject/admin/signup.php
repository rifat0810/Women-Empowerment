<?php
session_start();
include("dbconnect.php");
$error = false;
if (isset($_POST['submit'])) {
	$date = date('m-d-y');
    $urname = mysqli_real_escape_string($con, $_POST['urname']);
	$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpass']);
	$post_image= $_FILES['image']['name'];
	$image_tmp= $_FILES['image']['tmp_name'];
	$local_image="images/";
	move_uploaded_file($image_tmp,$local_image.$post_image);
	
	$admin_query = mysqli_query($con,"select email from member where email='$email'");
	if ( mysqli_num_rows($admin_query)>0){
		$error = true;
		$e_mail = "Email Already Exit";
	}
    if (!preg_match("/^[a-zA-Z ]+$/",$fullname)) {
        $error = true;
        $fullname_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
		$query="INSERT INTO member(date,username,email,fullname,images,password) VALUES('$date','$urname','$email','$fullname','$post_image','$password')";
         if(mysqli_query($con,$query)) {
		 	echo "<script>alert('Registration successfuly')</script>";
	        echo "<script>window.open('login.php','_self')</script>";
            $successmsg = "Successfully Registered!";
        } 
		else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
	}
?>	
	
<html>
  <head>
    <title>Sign Up</title>
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
	                 <h1><a href="login.php">Admin Panel</a></h1>
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
					            <div class="panel-title">Sign Up Form For Member'S</div>
							</div>
			  				<div class="panel-body">
								<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Skype Id</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" name="urname" placeholder="SkypeID" required>
										<span class="text-danger"><?php if (isset($ur_name)) echo $ur_name; ?></span>
										</div>
								    </div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" name="fullname" placeholder="full Name" required>
										<span class="text-danger"><?php if (isset($fullname_error)) echo $fullname_error; ?></span>
										</div>
								    </div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
										<input type="text" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
										<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
										<span class="text-danger"><?php if (isset($e_mail)) echo $e_mail; ?></span>
										</div>
								    </div>
									<div class="form-group">
											<label class="col-md-2 control-label">File input</label>
											<div class="col-md-10">
											<input type="file"  class="btn btn-default" id="exampleInputFile1" name="image" required>
											</div>
									</div>
								    <div class="form-group">
										<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassword3" name="pass" placeholder="Password" required>
										<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
										</div>
									</div>
									
									<div class="form-group">
										<label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>
										<div class="col-sm-10">
										<input type="password" class="form-control" id="inputPassword3" name="cpass" placeholder="Confirm Password" required>
										<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
										</div>
									</div>						
									
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" name="submit" class="btn btn-primary">Sign in</button>
										</div>
									</div>
									
								</form>
								<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
								<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
							</div>
			  			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>