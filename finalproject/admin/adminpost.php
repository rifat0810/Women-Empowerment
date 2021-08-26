<?php 
$member = $_SESSION['user_name'];
if(isset($_POST['submit'])){
	  $title = $_POST['title'];
	  $date = date('m-d-y');
	  $content = mysqli_real_escape_string($con,$_POST['content']);
	  $post_image= $_FILES['image']['name'];
	  $image_tmp= $_FILES['image']['tmp_name'];
	  $local_image="images/";
	  
	
	if($_POST['select']==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	}

	if($_POST['select']=='Computer Tutorial'){
	move_uploaded_file($image_tmp,$local_image.$post_image);
	$insert_query = "insert into ctutorial (date,author,title,images,content) values ('$date','$member','$title','$post_image','$content')";
	if(mysqli_query($con,$insert_query)){
	echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('admintutorialfrom.php','_self')</script>";
		}
	}	
	if($_POST['select']=='Handicraft Tutorial'){
	move_uploaded_file($image_tmp,$local_image.$post_image);
	$insert_query = "insert into htutorial (date,author,title,images,content) values ('$date','$member','$title','$post_image','$content')";
	if(mysqli_query($con,$insert_query)){
	echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('admintutorialfrom.php','_self')</script>";
		}
	}
}
?>