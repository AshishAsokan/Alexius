<?php
    include 'domain.php'; 
    session_start();
    $name=$_SESSION['sq'];
    $test_user=$_SESSION['username'];
    //echo $test_user;
    $query="SELECT * FROM restaurants WHERE name='$name'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    if($row==0){
        echo '<script language="javascript">';
        echo 'alert("Company does not exist")';
        echo '</script>';
        $query="SELECT * FROM hotels WHERE property_name='$name'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if($row==0){
        header("Location: http://localhost/phptut/home/homepage_final.php");
    }
    }
    else{
    $phone=$row['phone'];
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
    <link rel="stylesheet" href="company.css" type="text/css">
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
                        <a href="#"><img id="logo-navbar-middle" src="alexius-logo-no.png"></a>
                    </li>
                    <li class="nav-item"><a class="hoverable nav-link" href="http://localhost/phptut/Login/login.php">Login</a></li>
                    <li class="nav-item"><a class="hoverable nav-link" href="http://localhost/phptut/signup/Signup.php">Sign Up</a></li>
                    <li class="nav-item"><a class="hoverable nav-link" href="">Write a Review</a></li>
                </ul>
            </nav>
        </div>
    <img id="avatar" src="company_ogo.png">
    <hr class="lines" id="line1">
    <div class="company_details">
        <label class="text_detail">Name: <label id="company_name"><?php echo $name; ?></label></label><br />
        <fieldset class="rating">
            <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
            <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
            <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
             <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
            <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
            <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
            <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
            <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
            <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
    </fieldset>
        <hr class="lines" id="line2">

    </div>
    <!-- <button id="edit_profile">Account Settings</button> -->
    
    <div class="reviews" id="review_id">
        <label id="heading"><?php echo $name; ?> reviews</label>
        <form action="company_review.php" method="POST" class="review">
            Username : <?php echo $test_user;?><br>
            Rating :<input type="text" name="rating"><br><br>
            Review : <textarea name="review" rows="5" cols="10"></textarea><br>
            <input type="submit" name="submit" value="Add Review">
            <a href="http://localhost/phptut/User Profile/user_page.php">redirect</a>

        </form>
  <!--       <fieldset class="review">
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
    <div id="map">
        <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=Malet%20St%2C%20London%20WC1E%207HU%2C%20United%20Kingdom+(Your%20Business%20Name)&ie=UTF8&t=&z=20&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/journey-planner.htm">www.mapsdirections.info</a></iframe>
    </div>
    <br />



</body>

</html>