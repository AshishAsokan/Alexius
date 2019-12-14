<?php
error_reporting(E_ALL ^ E_WARNING);
include "domain.php";

$query = "SELECT * FROM restaurants ORDER BY rate DESC LIMIT 20";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$company_list = array();
while ($row = mysqli_fetch_assoc($result)) {
    $fields = array();
    array_push($fields, $row['name']);
    array_push($fields, $row['address']);
    array_push($fields, $row['url']);
    array_push($fields, $row['rest_type']);
    array_push($fields, $row['rate']);
    array_push($fields, $row['phone']);
    array_push($fields, $row['cuisine']);
    array_push($company_list, $fields);
}
?>

<!-- Javascript code to access PHP variables -->
<script>
    var temp = <?php echo json_encode($company_list); ?>;
    for (var i = 0; i < temp.length; i++) {
    	var x=document.createElement("fieldset");
    	x.setAttribute("class","review");
    	var d=document.getElementById("review_set");
    	x.innerHTML="Name :"+temp[i][0]+"<br>"+"Address :"+temp[i][1]+"<br>"+"<a href="+temp[i][2]+">"+"click here to visit restaurant"+"</a>"+"<br>"+"Restaurant Type :"+temp[i][3]+"<br>"+  "Rating :"+temp[i][4]+"<br>"+"Phone Number :"+temp[i][5]+"<br>"+"Cuisine :"+temp[i][6]+"<br>";
    	x.style.color="white";
    	d.appendChild(x);
    }
</script>