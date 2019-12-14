<?php 
	session_start();
	include 'dbh.inc.php';
	$username=$_SESSION['username'];
	$companyname=$_SESSION['sq'];
	$rate=$_POST['rating'];
	$review=$_POST['review'];
	$query="INSERT INTO reviews(user_name,company_name,rating,review) VALUES('$username','$companyname','$rate','$review')";
	header("Location: http://localhost/phptut/Company/company.php");
	mysqli_query($conn,$query);
?>
