<?php 
session_start();

if(!isset($_SESSION['user_name'])){
header("location: login.php");
}
else {
?>
<html>
  <head>
    <title>edit</title>
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
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
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
				
<?php
 include("dbconnect.php");
	if(isset($_POST['update'])){
	$update_id = $_GET['edit_form'];
	$post_title1 = $_POST['title'];
	  $post_date1 = date('m-d-y');
	  $post_content1 = mysqli_real_escape_string($con,$_POST['content']);
	  $post_image1= $_FILES['image']['name'];
	  $image_tmp= $_FILES['image']['tmp_name'];
	  $local_image="images/";
	 move_uploaded_file($image_tmp,$local_image.$post_image1);
	  $update_query = "update ctutorial set title='$post_title1',date='$post_date1',images='$post_image1',content='$post_content1' where id='$update_id'";
		if(mysqli_query($con,$update_query)){
		echo "<script>alert('Post Update Successfully')</script>";
		echo "<script>window.open('viewcompost.php','_self')</script>";
		exit();
	}
	}

?>							
							
<?php 
include("dbconnect.php");
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$query = "select * from ctutorial where id='$id'";	
	$edit = mysqli_query($con,$query); 	
	while ($row=mysqli_fetch_array($edit)){
	$id = $row['id'];
	$date = $row['date'];
	$title = $row['title'];
	$author = $row['author'];
	$image = $row['images'];
	$content = $row['content'];
	}
}
?>
<div class="page-content container">
	<div class="row">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Edit Computer Tutorial Form</div>
			</div>
			  		<div class="panel-body">
						<form method="POST" action="editcompost.php?edit_form=<?php echo $id; ?>" enctype="multipart/form-data">
						  	<div class="form-group"><br>
								<label for="inputEmail3" class="col-sm-2 control-label">Post Author:</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail3" name="author" placeholder="Author Name"  value="<?php echo $_SESSION['user_name']; ?>" disabled>
								</div>
							</div>
							<br>
							<div class="form-group"><br>
								<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail3" name="title" value="<?php echo $title; ?>" required>
								</div>
							</div>
							
							<br><br>
							<div class="form-group">
								<label class="col-md-2 control-label">File input</label>
								<div class="col-md-10">
								<input type="file"  class="btn btn-default" id="exampleInputFile1" name="image" required> <video width="100" height="50" controls> 
						<source src="images/<?php echo $image; ?>" type="video/mp4"> 
						<source src="images/<?php echo $image; ?>" type="video/ogg"> 
						</video>
								<br><br>
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Post Content:</label>
								<div class="col-sm-10">
								<textarea class="form-control" placeholder="Textarea" name="content" rows="3"  required><?php echo $content;?></textarea>
								<br>
								</div>
							</div>
															
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10"><br>
								<button type="submit" name="update" class="btn btn-primary">Ubdate</button>
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
<?php } ?>