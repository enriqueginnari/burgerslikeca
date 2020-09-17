<?php
    $servername = "bcunagjiru2twe2p7sqq-mysql.services.clever-cloud.com";
    $username = "uf8fmm8tyq65i1ys";
    $password = "mDRUfHTEnTtOUgjLiXLJ";
    $dbname = "bcunagjiru2twe2p7sqq";

    $db = mysqli_connect($servername, $username, $password, $dbname); 

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
