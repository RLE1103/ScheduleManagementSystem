<?php

    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "managementsystem";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //echo sql
    if (!$conn) {
        //echo "Error Connection";
        die();
    } 

?>