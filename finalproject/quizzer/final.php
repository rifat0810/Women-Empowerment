<?php 
session_start();
if(!isset($_SESSION['user_name'])){
header("location: ../login.php");
}
else {
include 'database.php';
if(isset($_GET['id'])){
$member=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
$page_id = $_GET['id'];
$select_query = "INSERT INTO result(id,name,result) VALUES( '" .$id. "','" . $member . "','" . $page_id . "')"; 
$run_query = mysqli_query($con,$select_query);
if($run_query){
echo "<script>window.open('../result.php','_self')</script>";
}
else
{
echo "<script>alert('Error')</script>";
}
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>PHP Quizzer</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<main>
		<div class="container">
			<h2>You're Done!</h2>
				<p>Congrats! You have completed the test</p>
				<p>Final Score: <?php echo $_SESSION['score']; ?></p>
				<a href="final.php?id=<?php echo $_SESSION['score']; ?>" class="start">Result</a>
		</div>
	</main>
	<footer>
		<div class="container">
		</div>
	</footer>
</body>
</html>
<?php } ?>