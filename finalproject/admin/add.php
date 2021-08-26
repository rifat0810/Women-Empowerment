<?php include 'database.php'; ?>
<?php
	if(isset($_POST['submit'])){
		//Get post variables
		$question_number = $_POST['question_number'];
		$question_text = $_POST['question_text'];
		$correct_choice = $_POST['correct_choice'];
		//Choices array
		$choices = array();
		$choices[1] = $_POST['choice1'];
		$choices[2] = $_POST['choice2'];
		$choices[3] = $_POST['choice3'];
		$choices[4] = $_POST['choice4'];
		$choices[5] = $_POST['choice5'];
		
		//Question query
		$query = "INSERT INTO `questions`(question_number, text)
					VALUES('$question_number','$question_text')";
					
		//Run query
		$insert_row = mysqli_query($con,$query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO `choices` (question_number, is_correct, text)
							VALUES ('$question_number','$is_correct','$value')";
							
					//Run query
					$insert_row = mysqli_query($con,$query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	}
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `questions`";
	//Get The Results
	$questions = mysqli_query($con,$query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;
?>

<?php 
session_start();
if(!isset($_SESSION['user_name'])){
header("location: login.php");
}
else {
?>


<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Admin</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="css/stylee.css" type="text/css" />
</head>
<body>
  	<div class="header">
	    <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <div class="logo">
	                 <h1><a href="index.php">Home</a></h1>
	              </div>
	           </div>
	        </div>
	    </div>
	</div>

	<main>
		<div class="container">
			<h2>Add A Question</h1>
			<?php
				if(isset($msg)){
					echo '<p>'.$msg.'</p>';
				}
			?>
			<form method="post" action="add.php">
				<p>
					<label>Question Number: </label>
					<input type="number" value="<?php echo $next; ?>" name="question_number" />
				</p>
				<p>
					<label>Question Text: </label>
					<input type="text" name="question_text" />
				</p>
				<p>
					<label>Choice #1: </label>
					<input type="text" name="choice1" />
				</p>
				<p>
					<label>Choice #2: </label>
					<input type="text" name="choice2" />
				</p>
				<p>
					<label>Choice #3: </label>
					<input type="text" name="choice3" />
				</p>
				<p>
					<label>Choice #4: </label>
					<input type="text" name="choice4" />
				</p>
				<p>
					<label>Choice #5: </label>
					<input type="text" name="choice5" />
				</p>
				<p>
					<label>Correct Choice Number: </label>
					<input type="number" name="correct_choice" />
				</p>
				<p>
					<input type="submit" name="submit" value="Submit" />
				</p>
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
		</div>
	</footer>
</body>
</html>
<?php }?>