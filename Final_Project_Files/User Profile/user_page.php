<?php
    session_start();
    include 'dbh.inc.php';


   if(isset($_SESSION['username'])){
    $us=$_SESSION['username'];
        $sql="SELECT * FROM users WHERE user_name='$us'";
        $result=mysqli_query($conn,$sql);
        $row1=mysqli_fetch_assoc($result);
        $email=$row1['email'];
        $name=$row1['name'];
   }
   else{
    echo "you are not logged in!";
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="navigation_bar.css" type="text/css">
    <link rel="stylesheet" href="user_page_style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
    <style type="text/css">
                .checked {
            color: orange;
    </style>
</head>

<body overflow-x: auto overflow-y: auto>
    <!-- Adding navigation bar items -->
        <div class="topnav">
            <nav class="navbar navbar-default navbar-expand-sm shadow nav-fill w-100">
                <!-- <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
                    <img style="max-width:50px; margin-top: -7px;" src="/Images/logo.jpg">
                </a> -->
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="hoverable nav-link" href="http://localhost/phptut/home/homepage_final.php">Home</a></li>
                    <li class="nav-item"><a class="hoverable nav-link" href="http://localhost/phptut/About Us/about_us.php">About Us</a></li>
                    <li class="nav-item"><a class="hoverable nav-link" href="http://localhost/phptut/Contact Us/contact_us.php">Contact Us</a></li>
                    <!-- <li><img id="logo-navbar-middle" src="/Images/alexius-logo-no.png"></li> -->
                    <li>
                        <a href="#"><img id="logo-navbar-middle" src="images/alexius-logo-no.png"></a>
                    </li>
                    <li class="nav-item"><a class="hoverable nav-link" href="http://localhost/phptut/Login/login.php">Login</a></li>
                    <li class="nav-item"><a class="hoverable nav-link" href="http://localhost/phptut/signup/Signup.php">Sign Up</a></li>
                    <li class="nav-item"><a class="hoverable nav-link" href="">Write a Review</a></li>
                </ul>
            </nav>
        </div>
    <img id="avatar" src="Images/img_avatar.png">
    <hr class="lines" id="line1">
    <div class="user_details">
        <label class="text_detail">Name: <label id="user_name"><?php echo $name ?></label></label><br/>
        <label class="text_detail">Email ID: <label id="user_emailID"><?php echo $email?></label></label><br />
        <label class="text_detail">Username: <label id="user_username"><?php echo $us?></label></label><br />
        <label class="text_detail">Phone No: <label id="user_phoneno">1234567890</label></label><br />
    </div>
    <!-- <button id="edit_profile">Account Settings</button> -->
    <hr class="lines" id="line2">

    <div class="reviews" id="review_id">
<!--         <label id="heading">John Smith's Reviews</label>
        <fieldset class="review">
            Place: abc <br /> Name: abc <br /> Class: abc
        </fieldset>
        <fieldset class="review">
            Place: abc <br /> Name: abc <br /> Class: abc
        </fieldset>
        <fieldset class="review">
            Place: abc <br /> Name: abc <br /> Class: abc
        </fieldset>
        <fieldset class="review">
            Place: abc <br /> Name: abc <br /> Class: abc
        </fieldset>
        <fieldset class="review">
            Place: abc <br /> Name: abc <br /> Class: abc
        </fieldset>
        <fieldset class="review">
            Place: abc <br /> Name: abc <br /> Class: abc
        </fieldset>
        <fieldset class="review">
            Place: abc <br /> Name: abc <br /> Class: abc
        </fieldset>
        <fieldset class="review">
            Place: abc <br /> Name: abc <br /> Class: abc
        </fieldset>
        <fieldset class="review">
            Place: abc <br /> Name: abc <br /> Class: abc
        </fieldset> -->
    </div>

    <!-- div element for adding progress bar -->
    <div class="user_stats">
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <label id="user_values">About <?php echo $us; ?></label>
        <label id="ratings">Rating Distribution</label>
        <div class="bars">
            <div class="star_stat">
                <div class="stats" id="colorbar_1">5 Stars</div>
                <div class="rating_value" id="s5">10</div>
            </div>
            <div class="star_stat">
                <div class="stats" id="colorbar_2">4 Stars</div>
                <div class="rating_value" id="s4">5</div>
            </div>
            <div class="star_stat">
                <div class="stats" id="colorbar_3">3 Stars</div>
                <div class="rating_value" id="s3">50</div>
            </div>
            <div class="star_stat">
                <div class="stats" id="colorbar_4">2 Stars</div>
                <div class="rating_value" id="s2">60</div>
            </div>
            <div class="star_stat">
                <div class="stats" id="colorbar_5">1 Star</div>
                <div class="rating_value" id="s1">125</div>
            </div>
        </div>
    </div>

</body>

</html>
<?php 
        include 'display_review.php';
        ?>