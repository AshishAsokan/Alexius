
<?php
	session_start();
	include 'dbh.inc.php';
	echo "test";
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$sql = "SELECT * FROM users WHERE user_name='$user' AND password='$pass'";
	$result=mysqli_query($conn,$sql);
	$row1=mysqli_fetch_assoc($result);
	echo "test";
	if($row1 >0){
		echo "valid";
		$_SESSION['username']=$user;
	header("Location: http://localhost/phptut/User Profile/user_page.php");
	}
	else{
		echo "error";
	}
?>