<?php 
session_start();
if(!isset($_SESSION['user_name'])){
header("location: ../login.php");
}
else {
?>

<?php include 'database.php'; ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];
	
	/*
	*	Get total questions
	*/
	$query = "SELECT * FROM `questions`";
	//Get result
	$results = mysqli_query($con,$query) or die("Error " . mysqli_error($con));
	$total = $results->num_rows;
		
	/*
	*	Get Question
	*/
	$query = "SELECT * FROM `questions`
				WHERE question_number = $number";
	//Get result
	$result = mysqli_query($con,$query) or die("Error " . mysqli_error($con));
	
	$question = $result->fetch_assoc();
	
	/*
	*	Get Choices
	*/
	$query = "SELECT * FROM `choices`
				WHERE question_number = $number";
	//Get results
	$choices = mysqli_query($con,$query) or die("Error " . mysqli_error($con));
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>PHP Quizzer</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<center><h3>Timer</h3><div id="counter">10</div></center>
    <script>
        setInterval(function() {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                window.location.href="../index.php";
            }
        }, 1000);
    </script>
	<main>
		<div class="container">
			<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
			<p class="question">
				<?php echo $question['text']; ?>
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<?php while($row = $choices->fetch_assoc()): ?>
						<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" value="Submit" />
				<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
		</div>
	</footer>
</body>
</html>
<?php } ?>