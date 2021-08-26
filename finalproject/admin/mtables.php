<?php 
session_start();
if(!isset($_SESSION['user_name'])){
header("location: login.php");
}
else {
?>
<html>
  <head>
    <title>Admin</title>
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
					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>Data Table
                            <span class="caret pull-right"></span>
                         </a>
                        <ul>
                            <li><a href="mtables.php">Member</a></li>
							<li><a href="utables.php">User</a></li>
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
					<div class="panel-title">Members DataTables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="1px" class="table table-striped table-bordered" >
						<thead>
							<tr>
								<th>ID</th>
								<th>Date</th>
								<th>UserName</th>
								<th>FullName</th>
								<th>Email</th>
								<th>Password</th>
								<th>Images</th>
								<th>Delete</th>
							</tr>
						</thead>
<?php 
include("dbconnect.php");
$query = "select * from member";
$run = mysqli_query($con,$query);
while($row=mysqli_fetch_array($run)){

	$id = $row['id'];
	$date = $row['date'];
	$username = $row['username'];
	$fullname = $row['fullname'];
	$email = $row['email'];
	$image = $row['images'];
	$password = $row['password'];
?>
		
						<tbody>
					<tr class="odd gradeX">
								<td><?php echo $id; ?></td>
								<td><?php echo $date; ?></td>
								<td><?php echo $username; ?></td>
								<td ><?php echo $fullname; ?></td>
								<td ><?php echo $email; ?></td>
								<td ><?php echo $password; ?></td>
								<td ><img src="images/<?php echo $image; ?>" width="10%" height="10%"></td>
								<td class="btn btn-primary"><a href="deletetb.php?del=<?php echo $id; ?>">Delete</a></td>
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