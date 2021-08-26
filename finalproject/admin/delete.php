<?php 
include("dbconnect.php"); 
if(isset($_GET['del'])){
	$delete_id = $_GET['del'];
	$delete_query = "delete from ctutorial where id='$delete_id' ";
	if(mysqli_query($con,$delete_query)){
	echo "<script>alert('Post Has been Deleted')</script>";
	echo "<script>window.open('viewcompost.php','_self')</script>";
	}
}
?>