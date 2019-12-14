<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signup_sys";
    
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $_SESSION["Username"]=$user;   // To access same username across multiple pages
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM users WHERE user_name='$user' AND password='$pass'";
    $result=mysqli_query($conn,$sql);
    $row1=mysqli_fetch_assoc($result);
    if($row1 >0){
        header("Location: http://localhost/phptut/test/user_page.php");
    }
    else{
        echo "error";
    }
    ?>
