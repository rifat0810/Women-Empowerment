<?php 
session_start();

if(!isset($_SESSION['userr_name'])){
header("location: login.php");
}
else {

?>

<html>
  <head>
    <title>Member</title>
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
	                 <h1><a href="index.php">Member Panel</a></h1>
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
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['userr_name']; ?><b class="caret"></b></a>
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
  				 			</div>

  			
  			
  				
  		

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Blog Tables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="1px" class="table table-striped table-bordered" >
						<thead>
							<tr>
								<th>ID</th>
								<th>Date</th>
								<th>Author</th>
								<th>Title</th>
								<th>Images</th>
								<th>Content</th>
								<th>Delete</th>
								<th>Edit</th>
							</tr>
						</thead>
<?php 
include("dbconnect.php");
$name=$_SESSION['userr_name'];
$query = "select * from blog where author='$name'";
$run = mysqli_query($con,$query);
while($row=mysqli_fetch_array($run)){

	$id = $row['id'];
	$date = $row['date'];
	$author = $row['author'];
	$title = $row['title'];
	$image = $row['images'];
	$content = $row['content'];
?>
		
						<tbody>
					<tr class="odd gradeX">
								<td><?php echo $id; ?></td>
								<td><?php echo $date; ?></td>
								<td ><?php echo $author; ?></td>
								<td><?php echo $title; ?></td>
								<td ><img src="images/<?php echo $image; ?>" width="50%" height="30%"></td>
								<td ><?php echo $content; ?></td>
								<td><a href="../deleteblog.php?del=<?php echo $id; ?>">Delete</a></td>
		                        <td><a href="editblogpost.php?edit=<?php echo $id; ?>">Edit</a></td>
							</tr>
						</tbody>
						 <?php } ?>
					</table>
  				</div>
  			</div>



		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               <a href='#'>Women's Empowerment System</a>
            </div>
            
         </div>
      </footer>

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>
<?php } ?>