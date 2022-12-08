<?php

    $servername = "10.0.1.157";
    $username = "wpuser";
    $password = "password";
    $dbname = "wordpress";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    } 
