<?php 
include("dbconnect.php"); 
if(isset($_GET['del'])){
	$delete_id = $_GET['del'];
	$delete_query = "delete from blog where id='$delete_id' ";
	if(mysqli_query($con,$delete_query)){
	echo "<script>alert('Post Has been Deleted')</script>";
	echo "<script>window.open('viewblog.php','_self')</script>";
	}
}
?>