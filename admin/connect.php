<?php
function  ConnectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "petscare";

// Create connection
    $connect = mysqli_connect($servername, $username, $password, $db);
    mysqli_set_charset($connect,"utf-8");

// Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $connect;
}
?>