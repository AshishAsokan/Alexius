<?php
   if(session_id() == ''){
       session_start();
       echo "<script>console.log('Session started');</script>";
       echo $_SESSION['Username'];
   }
    else
        echo "<script>console.log('Session not started');</script>";
    
    if ($_SESSION['Username'] == '')
    {
         echo "<script>console.log('Session is empty');</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">s

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta cnharset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="navigation_bar.css" type="text/css">
    <link rel="stylesheet" href="user_page_style.css" type="text/css">
</head>

<body overflow-x: auto overflow-y: auto>
    <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "signup_sys";
                $conn = new mysqli($servername, $username, $password, $dbname);
                $US=$_SESSION['Username'];
                echo "tetstststst";
                echo $US;
               // $US=$_SESSION['Username'];
                $sql = "SELECT * FROM users WHERE user_name='$US'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                if($row==0){
                    echo '<script language="javascript">';
                    echo 'alert("Username does not exist")';
                    echo '</script>';
                }
                else{
                        $user=$row["user_name"];
                        $name=$row["name"];
                        $email=$row["email"];
                        $dob=$row["dob"];
                }


    ?>
    <!-- Adding navigation bar items -->
    <div class="topnav">
        <nav class="navbar navbar-default navbar-expand-sm shadow nav-fill w-100">
            <!-- <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
                <img style="max-width:50px; margin-top: -7px;" src="/Images/logo.jpg">
            </a> -->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="hoverable nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="hoverable nav-link" href="#">About Us</a></li>
                <li class="nav-item"><a class="hoverable nav-link" href="#">Contact Us</a></li>
                <!-- <li><img id="logo-navbar-middle" src="/Images/alexius-logo-no.png"></li> -->
                <li>
                    <a href="#"><img id="logo-navbar-middle" src="alexius-logo-no.png"></a>
                </li>
                <li class="nav-item"><a class="hoverable nav-link" href="#">Login</a></li>
                <li class="nav-item"><a class="hoverable nav-link" href="#">Sign Up</a></li>
                <li class="nav-item"><a class="hoverable nav-link" href="#">Write a Review</a></li>
            </ul>
        </nav>
    </div>
    <img id="avatar" src="img_avatar.png">
    <hr class="lines" id="line1">
    <div class="user_details">
<label class="text_detail">Name: <label id="user_name"><?php echo $name; ?></label></label><br />
        <label class="text_detail">Email ID: <label id="user_emailID"><?php echo $email; ?></label></label><br />
        <label class="text_detail">Username: <label id="user_username"><?php echo $user; ?></label></label><br />
        <label class="text_detail">Date of Birth: <label id="user_dob"><?php echo $dob; ?></label></label><br />
        <button id="edit_profile">Account Settings</button>
    </div>
    <!-- <button id="edit_profile">Account Settings</button> -->
    <hr class="lines" id="line2">

    <div class="reviews">
        <label id="heading">John Smith's Reviews</label>
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
        </fieldset>
    </div>

    <!-- div element for adding progress bar -->
    <div class="user_stats">
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <label id="user_values">About John Smith</label>
        <label id="ratings">Rating Distribution</label>
        <div class="container">
            <!-- <label id="likes">Number of Likes : 10</label> -->
            <p id="likes">Number of likes: <label id="no_of_likes">10</label><i class="fa fa-thumbs-o-up"></i></p>
        </div>
        <div class="container">
            <!-- <label id="likes">Number of Likes : 10</label> -->
            <p id="dislikes">Number of dislikes: <label id="no_of_dislikes">10</label><i class="fa fa-thumbs-o-down"></i></p>
        </div>
        <!-- <label id="dislikes">Number of Dislikes: <label id="no_of_dislikes">10</label></label> -->
        <div class="container">
            <!-- <label id="likes">Number of Likes : 10</label> -->
            <p id="comments">Number of comments: <label id="no_of_comments">10</label><i class="fa fa-commenting-o"></i></p>
        </div>
        <div class="bars">
            <div class="star_stat">
                <div class="stats" id="colorbar_1">5 Stars</div>
                <div class="rating_value">10</div>
            </div>
            <div class="star_stat">
                <div class="stats" id="colorbar_2">4 Stars</div>
                <div class="rating_value">5</div>
            </div>
            <div class="star_stat">
                <div class="stats" id="colorbar_3">3 Stars</div>
                <div class="rating_value">50</div>
            </div>
            <div class="star_stat">
                <div class="stats" id="colorbar_4">2 Stars</div>
                <div class="rating_value">60</div>
            </div>
            <div class="star_stat">
                <div class="stats" id="colorbar_5">1 Star</div>
                <div class="rating_value">125</div>
            </div>
        </div>
    </div>

</body>

</html>
