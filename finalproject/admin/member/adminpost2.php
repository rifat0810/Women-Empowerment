<?php 
$member = $_SESSION['userr_name'];
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

	if($_POST['select']=='Post'){
	move_uploaded_file($image_tmp,$local_image.$post_image);
	$insert_query = "insert into post (date,author,title,images,content) values ('$date','$member','$title','$post_image','$content')";
	if(mysqli_query($con,$insert_query)){
	echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('viewpost.php','_self')</script>";
		}
	}
		
	if($_POST['select']=='Blog'){
	move_uploaded_file($image_tmp,$local_image.$post_image);
	$insert_query = "insert into blog (date,author,title,images,content) values ('$date','$member','$title','$post_image','$content')";
	if(mysqli_query($con,$insert_query)){
	echo "<script>alert('post published successfuly')</script>";
	echo "<script>window.open('viewblog.php','_self')</script>";
		}
	}
	

	
}
?>