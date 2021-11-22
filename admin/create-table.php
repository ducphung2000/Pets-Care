<?php
//require_once 'connect.php';
//$connect = ConnectDB();


$servername = "localhost";
$username = "root";
$password = "";

// Delete all tables in database
$conn = mysqli_connect($servername, $username, $password);

$sql_drop = "DROP DATABASE if exists petscare";
if (mysqli_query($conn, $sql_drop)) {
    echo "TDrop all table success";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
//mysqli_close($connect);

// Create database
$sql_createDB = "CREATE DATABASE petscare";
if (mysqli_query($conn, $sql_createDB)) {
//    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//mysqli_close($connect);
$db = "petscare";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}



// sql to create table products
$sql_product = "CREATE TABLE products (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
price VARCHAR(30) NOT NULL,
description VARCHAR(50),
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
category_id INT(6) NOT NULL,
image varchar(100) not null,
discount INT(3)
)";

if (mysqli_query($connect, $sql_product)) {
//    echo "Table products created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

// create table categories
$sql_category = "CREATE TABLE categories (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category_name VARCHAR(30) NOT NULL,
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($connect, $sql_category)) {
    echo "Table categories created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

// create table new
$sql_new = "CREATE TABLE news (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(30) NOT NULL,
body VARCHAR(65535) CHARACTER SET utf8 NOT NULL,
image varchar(100) not null,
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($connect, $sql_new)) {
    echo "Table news created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

mysqli_close($connect);
