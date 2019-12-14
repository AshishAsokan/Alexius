<?php
    session_start();
    include 'dbh.inc.php';

   if(isset($_SESSION['username'])){
    $us=$_SESSION['username'];
        $sql="SELECT * FROM users WHERE user_name='$us'";
        $query = "SELECt * FROM reviews where user_name='$us'";

        $result_review = mysqli_query($conn, $query);
        $result = mysqli_query($conn,$sql);
        $row1 = mysqli_fetch_assoc($result);
        $details = array();
        while ($row_user = mysqli_fetch_assoc($result_review)) {
            $review_detail = array();
            //array_push($review_detail, $row_user['company_name']);
            array_push($review_detail, $row_user['rating']);
            //array_push($review_detail, $row_user['date']);
            array_push($review_detail, $row_user['review']);
            array_push($details, $review_detail);
        }
        $email=$row1['email'];
        $name=$row1['name'];
   }
   else{
    echo "you are not logged in!";
   }
?>

<script>

        var temp = <?php echo json_encode($details); ?>;
    for (var i = 0; i < temp.length; i++) {
        var x = document.createElement("fieldset");
        x.setAttribute("class", "review");
        var d = document.getElementById("review_id");
        x.innerHTML = "User Name :" + temp[i][0] + "<br>" + "Company Name: " + temp[i][1] + "<br>" + "Rating :" + temp[i][2] + "<br>" + "Review " + temp[i][3] + "<br>";
        x.style.color = "white";
        rate1 = parseInt(temp[i][2])
        var div = document.createElement("div")
        for (i = 1; i <= 5; i++) {
            var sp = document.createElement("span")
            if (i <= rate1) {
                sp.setAttribute("class", "fa fa-star checked")
            }
            div.appendChild(sp)
            x.appendChild(div);
            d.appendChild(x);
        }
</script>
 

<!--             var temp = <?php //echo json_encode($details); ?>;
    for (var i = 0; i < temp.length; i++) {
        var x=document.createElement("fieldset");
        x.setAttribute("class","review");
        var d=document.getElementById("review_id");
        x.innerHTML="User Name :"+temp[i][0]+"<br>"+"Company Name: "+temp[i][1]+"<br>"+"Rating :"+temp[i][2]+"<br>"+"Review "+temp[i][3]+"<br>";
        x.style.color="white";
        d.appendChild(x); -->