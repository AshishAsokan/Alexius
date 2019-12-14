<?php
  //session_start();
    include 'dbh.inc.php';
    //include 'dbh.inc.review.php';

   if(isset($_SESSION['username'])){
    $us=$_SESSION['username'];
    echo $us;
        $query = "SELECT * FROM reviews WHERE user_name='$us'";

        $result_review = mysqli_query($conn, $query);

        $details = array();
        while ($row_user = mysqli_fetch_assoc($result_review)) {
            $review_detail = array();
             array_push($review_detail, $row_user['user_name']);           
            array_push($review_detail, $row_user['company_name']);
            array_push($review_detail, $row_user['rating']);
            //array_push($review_detail, $row_user['date']);
            array_push($review_detail, $row_user['review']);
            array_push($details, $review_detail);
        }

   }
   else{
    echo "you are not logged in!";
   }
?>

<script>
    var temp = <?php echo json_encode($details); ?>;
            var count1=0;
        var count2=0;
        var count3=0;
        var count4=0;
        var count5=0;
    for (var i = 0; i < temp.length; i++) {
        var x=document.createElement("fieldset");
        x.setAttribute("class","review");
        var d=document.getElementById("review_id");
        //document.write(temp[i][0]);
        //document.write(temp[i][1]);
        x.innerHTML="User Name :"+temp[i][0]+"<br>"+"Company Name: "+temp[i][1]+"<br>"+"Rating :"+temp[i][2]+"<br>"+"Review: "+temp[i][3]+"<br>";
        x.style.color="black";

        if(temp[i][2]==1){
            count1+=1;
        }
        if(temp[i][2]==2){
            count2+=1;
        }
        if(temp[i][2]==3){
            count3+=1;
        }
        if(temp[i][2]==4){
            count4+=1;
        }        
        if(temp[i][2]==5){
            count5+=1;
        }
        document.getElementById("s1").innerHTML=count1;
        document.getElementById("s2").innerHTML=count2;
        document.getElementById("s3").innerHTML=count3;
        document.getElementById("s4").innerHTML=count4;
        document.getElementById("s5").innerHTML=count5;

        d.appendChild(x);
    }
</script>