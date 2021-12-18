<?php
require_once 'connect.php';
session_start();

if(isset($_POST['save'])){
    $conn = ConnectDB();
    // lấy thông tin từ form
    
    $id = $_POST['id'];
    $category_name = $_POST['name'];
    

    
    // Insert record
    $sql = "UPDATE `categories` SET `category_name`='$category_name' WHERE `id`='$id'";

    if (mysqli_query($conn, $sql)) {
        $message = "Bạn đã sửa thành công";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:./category-list.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}




















