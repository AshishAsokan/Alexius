<?php
 	session_start();
	include 'domain.php'; 
	$var=$_POST['searchbar'];
    $_SESSION['sq']=$var;
    header("Location: http://localhost/phptut/Company/Company.php");
?> 
    

