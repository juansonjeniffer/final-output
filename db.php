<?php
    $servername = "localhost";
    $username = "root"; // Change if diff.
    $password = "";  // Change if you set a password
    $database = "ccit06"; //Name of database in phpmyadmin

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else "Connection successfully";

?>