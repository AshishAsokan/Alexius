<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Sign Up</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <link rel="stylesheet" href="sign_up.css" type="text/css">
                        <link rel="stylesheet" href="navigation_bar.css" type="text/css">
    </head>
    
    <body>
        
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
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <br/>
        <div id="div1">
            <img id="slogan-logo" src="images/alexius-slogan.png" height="130" width="370">
        </div>
        <div class="container sign_up-form">
            <form action="includes/signup.inc.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="" />
                            <input type="text" name="user_name"class="form-control" id="username" placeholder="Username" value="" />
                            <input type="date" name="dob" class="form-control" id="dob" placeholder="Date of Birth" value="" />
                            <input type="email" name="email" class="form-control" id="emailID" placeholder="Email ID" value="" />
                            <input type="password" name="password" class="form-control" id="password" placeholder="New password" value=""/>
                            <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm new password" value=""/>
                            <input type="submit" class="btnContact" id="submit_but" name="submit_button" value="Sign Up" onclick="check_pass()"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            function check_pass(){
                let a=document.getElementById("password").value;
                let b=document.getElementById("cpassword").value;
                if(a!=b){
                    alert("Password and Confirm Password do not match!");
                }
            }
            
        </script>
    </body>
    
</html>
