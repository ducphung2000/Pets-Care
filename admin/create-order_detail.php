<?php
session_start();
require_once 'connect.php';

if(isset($_POST['submit'])){
    $connect = ConnectDB();
    // lấy thông tin từ form
    $order_id = $_POST['order_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    

     // Insert record
     $sql = "INSERT INTO products (order_id, product_id, quantity, price) 
        VALUES ('$order_id','$product_id', '$quantity', '$price')";


     if (mysqli_query($connect, $sql)) {
         echo "New record created successfully";
        //  header('Location: http://localhost/Pets-Care/admin/product-list.php');
         
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($connect);
     }
     mysqli_close($connect);
}
