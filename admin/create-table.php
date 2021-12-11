<?php
require_once 'connect.php';
$connect = ConnectDB();


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
old_price VARCHAR(30) NOT NULL,
price VARCHAR(30) NOT NULL,
description VARCHAR(10000),
type1 VARCHAR(50),
type2 VARCHAR(50),
type3 VARCHAR(50),
category_id INT(6) NOT NULL,
image varchar(100) not null,
-- image1 varchar(100) not null,
-- image2 varchar(100) not null,
-- image3 varchar(100) not null,
-- image4 varchar(100) not null,
discount NVARCHAR(3),
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($connect, $sql_product)) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

// create table categories
$sql_category = "CREATE TABLE categories (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category_name VARCHAR(255) NOT NULL,
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($connect, $sql_category)) {
    echo "Table categories created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

//create table user
$sql_user = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
fullname VARCHAR(255) NOT NULL,
phone VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
bird VARCHAR(255) NOT NULL,
user_img VARCHAR(255) NOT NULL,
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($connect, $sql_user)) {
    echo "Table user created successfully";
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

//create table order
$sql_order = "CREATE TABLE orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
phone VARCHAR(255) NOT NULL,
address VARCHAR(255) NOT NULL,
note VARCHAR(255) NOT NULL,
price VARCHAR(255) NOT NULL,
total VARCHAR(255) NOT NULL,
order_img VARCHAR(255) NOT NULL,
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($connect, $sql_order)) {
    echo "Table order created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}