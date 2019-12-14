<?php
    // error_reporting(E_ALL ^ E_WARNING);
    // include "initiate_connect.php";
    // $connect = create_connection();
    include 'domain.php';

    $dom_object = new DOMDocument('1.0', 'utf-8');
    $dom_object->load("top_suggestion_template.php");
    $reviews = $dom_object->getElementById("review_set");

    if ($reviews != NULL) {
        echo "this works";
    }
    $query = "SELECT * FROM restaurants ORDER BY rate DESC LIMIT 30";
    $result = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        // echo "
        // <script>
        //     reviews = document.getElementById('review_set');
        //     var name = document.createElement('p');
        //     name.content = $row['name'];
        //     reviews.append(name);
        // </script>
        // ";
        // $company = $dom_object->createElement("fieldset", "");

        // $name_p = $dom_object->createElement("p", $row['name']);
        // $company->appendChild($name_p);

        // $name_p = $dom_object->createElement("p", $row['rest_type']);
        // $company->appendChild($name_p);

        // $name_p = $dom_object->createElement("p", $row['rate']);
        // $company->appendChild($name_p);

        // $name_p = $dom_object->createElement("p", $row['address']);
        // $company->appendChild($name_p);

        // $name_p = $dom_object->createElement("p", $row['url']);;
        // $company->appendChild($name_p);
        // $reviews->appendChild($company);
    }
?>