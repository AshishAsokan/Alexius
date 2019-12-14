<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css" type="text/css">
    <link rel="stylesheet" href="navigation_bar.css" type="text/css">
    <style type="text/css">
        body {
    background: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.70)), url('contact_background.png');
}
    </style>
</head>

<body scroll="no" style="overflow: hidden">

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
    <img id="logo" src="Images/logo-no.png">

    <!-- Display message for contact page -->
    <p class="message" id="content_0">
        We'd love to hear from you
    </p>
    <p class="message" id="content_1">
        Alexius is here to provide you with more information or answer any questions you may have <br/> Feel free to call us, send us an Email or fill out the form below and we'll get back to you ASAP.
    </p>


    <!-- Alternative contact details for contact page -->
    <p id="heading">
        Alternative Contact Details
    </p>
    <hr class="lines" id="line1" />
    <p class="contact" id="contact_1">
        Name: Ashish Ramayee Asokan <br/>Phone No: 1234567890 <br/>Email ID: raashish020@gmail.com
    </p>
    <hr class="lines" id="line2" />
    <p class="contact" id="contact_2">
        Name: Nidarshan Kumar <br/>Phone No: 1234567890 <br/>Email ID: suryanidarshan@gmail.com
    </p>
    <hr class="lines" id="line3" />
    <p class="contact" id="contact_3">
        Name: Anirudh Ragam <br/>Phone No: 1234567890 <br/>Email ID: anirudhragam@gmail.com
    </p>
    <hr class="lines" id="line4" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <img id="slogan-logo" src="/Images/alexius-slogan.png"> -->
    <div class="container contact-form">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="Name" placeholder="Enter your name" value="" />
                        <input type="text" class="form-control" id="emailID" placeholder="Enter your Email ID" value="" />
                        <input type="text" class="form-control" id="no" placeholder="Enter your Phone Number" value="" />
                        <input type="submit" class="btnContact" id="submit_but" name="submit_button" value="Send Feedback" />
                        <textarea name="message" class="text-control" id="message" placeholder="Enter your message here"></textarea>
                    </div>
                </div>
        </form>
        </div>
</body>

</html>