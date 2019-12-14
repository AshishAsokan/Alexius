<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="nav.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/phptut/home/hover_effect/hover.css">
        <title>Home</title>
        <style type="text/css">
        body{
    background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),url('aboutus2.jpeg');
    background-size: cover;
        }
        #sec{
            text-align: center;
            padding-top: 40px;
        }
        #sec2{
            text-align: center;
            padding-top: 15px;

        }
        #sec3{
            text-align:center;
            padding-top:20px;
            font-size: 25px;

        }
        #search{
            width:885px;
            height:45px;
            border-radius: 1em;
        }
  .container .card{
    position: relative;
    cursor: pointer;
    background-color: transparent;
}
#sec123{
    margin:1000px;
}

.container .card .face{
    width: 300px;
    height: 200px;
    transition: 0.5s;
}

.container .card .face.face1{
    position: relative;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
}

.container .card:hover .face.face1{
    background: #ff0057;
    transform: translateY(0);
}

.container .card .face.face1 .content{
    opacity: 0.2;
    transition: 0.5s;
}

.container .card:hover .face.face1 .content{
    opacity: 1;
}

.container .card .face.face1 .content img{
    width: 100px;
    height:100px;
}

.container .card .face.face1 .content h3{
    margin: 10px 0 0;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 1.5em;
}

.container .card .face.face2{
    position: relative;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px;
    box-sizing: border-box;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
    transform: translateY(-100px);
}

.container .card:hover .face.face2{
    transform: translateY(0);
}

.container .card .face.face2 .content p{
    margin: 0;
    padding: 0;
}

.container .card .face.face2 .content a{
    margin: 15px 0 0;
    display:  inline-block;
    text-decoration: none;
    font-weight: 900;
    color: #333;
    padding: 10px;
    border: 1px solid #333;
}

.container .card .face.face2 .content a:hover{
    background: transparent;
    color: #fff;
}
        </style>
    </head>
    <body style="">
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
    <div id="sec">
        <img src="logo-no.png" width="500" height="200">
    </div>
    <div id="sec2">
        <form action="search.php" method="POST">
            <input id="search" type="text" name="searchbar" placeholder="Find Restaurants,Hotels and Schools ..." width="50" height="22">
            <input type="submit" name="submit" value="Search">
        </form>
    </div>
    <div> 
    <h3 style="color: white; text-align:center;padding-top: 60px;padding-bottom: 10px;">Browse By Categories</h3>
    <div class="container">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="education.png">
                    <h3>Education</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Click here for top suggestions</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="healthcare.jpg">
                    <h3>Health Care</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Click here for top suggestions</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="hotels.jpg">
                    <h3>Hotels</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <a href="http://localhost/phptut/top_suggestion/top_hotel.php">Click here for top suggestions</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="restaurant.jpg">
                    <h3>Restaurants</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <a href="http://localhost/phptut/top_suggestion/top_suggestion_template.php">Click here for top suggestions</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>