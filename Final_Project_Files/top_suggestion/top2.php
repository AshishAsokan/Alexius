<?php
error_reporting(E_ALL ^ E_WARNING);
include "domain.php";
if(isset($_POST['submit'])){

    echo "test";
    $query = "SELECT * FROM hotels ORDER BY hotel_star_rating DESC LIMIT 20";
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
     array_push($fields, $row['site_review_count']);   
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

<?php                     header("Location: http://localhost/phptut/top_suggestion/top_hotel.php"); ?>