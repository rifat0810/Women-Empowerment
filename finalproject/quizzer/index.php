<?php 
session_start();
if(!isset($_SESSION['user_name'])){
header("location: ../login.php");
}
else {
?>
<?php include 'database.php'; ?>
<?php
/*
 *	Get Total Questions
 */
 $query ="SELECT * FROM questions";
 //Get results
 $results = mysqli_query($con,$query) or die("Error " . mysqli_error($con));
 $total = $results->num_rows;
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
			<h2>Test Your PHP Knowledge</h2>
			<p>This is a multiple choice quiz to test your knowledge of PHP</p>
			<ul>
				<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>&nbsp;&nbsp;<a href="../index.php" class="start">Home Page</a>
		</div>
	</main>
	<footer>
		<div class="container">
		</div>
	</footer>
</body>
</html>
<?php } ?>