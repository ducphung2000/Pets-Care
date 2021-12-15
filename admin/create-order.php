<?php
session_start();
require_once 'connect.php';

if(isset($_POST['submit'])){
    $connect = ConnectDB();
    // lấy thông tin từ form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $total = $_POST['total'];
   
   
        $sql = "INSERT INTO products (name, phone, address, note, total) 
        VALUES ('$name','$phone', '$address', '$note', '$total')";

        if (mysqli_query($connect, $sql)) {
            echo "New record created successfully";
            header('Location: http://localhost/Pets-Care/admin/category-list.php');
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
        mysqli_close($connect);
}
