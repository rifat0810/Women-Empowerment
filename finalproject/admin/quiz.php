<?php 
session_start();
if(!isset($_SESSION['user_name'])){
header("location:login.php");
}
else {
include("dbconnect.php");
$member = $_SESSION['user_name'];
$user_query = mysqli_query($con,"select * from result");
if ($row = mysqli_fetch_array($user_query)){
$name = $row['name'];
if($member==$name)
{
	echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
else
{
	echo "<script>window.open('quizzer/index.php','_self')</script>";
}}
?>
