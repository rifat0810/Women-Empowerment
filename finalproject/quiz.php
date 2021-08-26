<?php 
session_start();
if(!isset($_SESSION['user_name'])){
header("location:login.php");
}
else {
include_once 'dbconnect.php';
$member = $_SESSION['user_id'];
$user_query = mysqli_query($con,"select id from result where id='$member'");
if (mysqli_num_rows($user_query)>0){
	echo "<script>alert('You Already Given Exam..')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
else
{
	echo "<script>window.open('quizzer/index.php','_self')</script>";
}
}

?>
