<?php
	include_once 'dbh.inc.php';
	$name=$_POST['name'];
	$username=$_POST['user_name'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$check_username="SELECT * FROM users WHERE user_name='$username'";
	$result=mysqli_query($conn,$check_username);
	$row1=mysqli_fetch_assoc($result);
	$check_email="SELECT * FROM users WHERE email='$email'";
	$result=mysqli_query($conn,$check_email);
	$row2=mysqli_fetch_assoc($result);
	if($row1 >0){
		echo "username exists";
		 //header("Location: http://www.redirect.to.url.com/"); 
	}
	else if($row2>0){
		echo "email exists";
	    // header("Location: http://www.redirect.to.url.com/"); 
	}
	else{
		
		$sql="INSERT INTO users (name,user_name,dob,email,password) VALUES ('$name','$username','$dob','$email','$password')";
		mysqli_query($conn,$sql);
		header("Location: http://localhost/phptut/Login/login.php"); 
     }
?>