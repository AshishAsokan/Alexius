<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
    <style>
        .checked {
            color: orange;
    }
</style>
</head>
<body onload="change_star()">
<span id='1' class="fa fa-star"></span>
<span id='2' class="fa fa-star"></span>
<span id='3' class="fa fa-star"></span>
<span id='4' class="fa fa-star"></span>
<span id='5' class="fa fa-star"></span>

</fieldset>
 <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Alexius";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT rate FROM restaurants WHERE name='Jalsa'";
        $result=mysqli_query($conn,$sql);
        $row1=mysqli_fetch_assoc($result);
        $rate= substr($row1["rate"],0,3);
        $rate=floatval($rate);
        $rate=round($rate);
        echo $rate;
 ?>

<script>
       function change_star(){
       var rate1; 
       var i;
       var cnt=1;
       var rate = <?php echo json_encode($rate); if(!isset($rate)){echo "EMPTY";}?>;  
       if (rate != "EMPTY"){
             rate1=parseInt(rate)
             for (i = 1; i <= 5; i++) {
                    for (i = 1; i <= 5; i++) {
                        if (i <= rate1) {
                            var temp = document.getElementById(i.toString())
                            temp.setAttribute("class", "fa fa-star checked")
                        }
                    }
            }
        }
}
</script>
</body>

   
</html>