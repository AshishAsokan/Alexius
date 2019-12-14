
<!DOCTYPE html>
<html>
<head>
	<title>Top Suggestions</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="top_hotel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="navigation_bar.css" type="text/css">
</head>
<body>
	<div class="topnav">
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
 <!--   <div id="head">
    	<h1>Top Suggestions for Business</h1>
    </div>-->
<!--     <div id="img">
    	   <img src="logo-no.png" width="600" height="200" align="right">
    </div> -->
    <div id="head">
    	<h1 style="color:white;text-align: center;">Top Suggestions for Business</h1>
    	   <!-- <h5 class="spl">Recommended:</h5>
    	    <div class="recomm">
    	    <div class="checkbox">
  				<label><input type="checkbox" value=""> Highest Rated</label>
			</div>
			<div class="checkbox">
  				<label><input type="checkbox" value=""> Most Reviewed</label>
			</div>
		    </div>
			<h5 class="spl">Price:</h5>
			<div class="recomm">
    	    <div class="checkbox">
  				<label><input type="checkbox" value=""> Low</label>
			</div>
			<div class="checkbox">
  				<label><input type="checkbox" value=""> Moderate</label>
			</div>
			<div class="checkbox">
  				<label><input type="checkbox" value=""> High</label>
			</div>
			</div>
		<h5>Results:</h5>
								 -->
		<fieldset class="filter">
		<form  method="POST">
			<h4 style="text-align:left;color:white;">Filter By: </h4>
			<select name="filter_by_recomm">
				<option>hotel_star_rating</option>
				<option>site_review_count</option>
			</select>

			<input type="submit" name="submit">
		</form>
	</fieldset>
	</div>
<!-- 	<div id="business" >
		<h5 style="color: white">Business Name</h5>
		<img src="company_ogo.png"  width=100 height=100 style="">
		<div id="left" style="">
		<fieldset class="rating" style="display: inline;">
    		<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    		<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    		<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    		<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    		<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    		<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    		<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    		<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    		<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
		    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
		    <br><br><br><br>
  		</fieldset>
  		<p style="color: white">Number of reviews : 15</p>
  		<textarea placeholder="description about business" rows="10" cols="60" style="border-radius: 1em; margin-top: 2px;text-align: left; "></textarea>
  		</div>
  	</div > -->
        <div id="review_set" class="reviews" style="">
<!--         <fieldset class="review">
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

<?php
error_reporting(E_ALL ^ E_WARNING);
include "domain.php";
if(isset($_POST['submit'])){
	$filter=$_POST['filter_by_recomm'];
    echo "test"."<br>";
    echo $filter;
    if($filter=="hotel_star_rating"){
    $query = "SELECT * FROM hotels ORDER BY hotel_star_rating DESC LIMIT 20";
}
else{
	 $query = "SELECT * FROM hotels ORDER BY area DESC LIMIT 20";
}
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $company_list = array();
while ($row = mysqli_fetch_assoc($result)) {
    $fields = array();
        array_push($fields, $row['property_name']);
        array_push($fields, $row['URL']);
    array_push($fields, $row['address']);
    array_push($fields, $row['area']);
    array_push($fields, $row['city']);
    array_push($fields, $row['hotel_star_rating']);
     array_push($fields, $row['votes']);   
    array_push($fields, $row['hotel_facilities']);
    array_push($company_list, $fields);
}
}

?>

<!-- Javascript code to access PHP variables -->
<script>
    var temp = <?php echo json_encode($company_list); ?>;
    for (var i = 0; i < temp.length; i++) {
    	var x=document.createElement("fieldset");
    	x.setAttribute("class","review");
    	var d=document.getElementById("review_set");
    	x.innerHTML="Name :"+temp[i][0]+"<br>"+"<a href="+temp[i][1]+">"+"click here to visit hotel"+"</a>"+"<br>"+"Address :"+temp[i][2]+"<br>"+"Area : "+temp[i][3]+"<br>"+"City :"+temp[i][4]+"<br>"+  "Rating :"+temp[i][5]+"<br>"+"Number of Reviews: "+temp[i][6]+"<br>"+"Hotel Facilities :"+temp[i][7]+"<br>";
    	x.style.color="white";
    	d.appendChild(x);
    }
</script>

</body>
</html>
