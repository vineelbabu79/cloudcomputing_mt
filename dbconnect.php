<?php

    $servername = "midtermcc.mysql.database.azure.com";
    $username = "cc_admin@midtermcc";
    $password = "Cloudcomputing123";
    $db = "ccmid";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn) {
        die(mysqli_connect_error());
    }
?>