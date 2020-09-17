<?php
    $servername = "bzaknq71m4dknxbhqyfg-mysql.services.clever-cloud.com";
    $username = "u4jrewhmxs3wqxup";
    $password = "c4VywrSZtruqUrjgpwHG";
    $dbname = "bzaknq71m4dknxbhqyfg";

    $db = mysqli_connect($servername, $username, $password, $dbname); 

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
