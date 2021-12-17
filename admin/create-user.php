<?php
session_start();
require_once 'connect.php';

if(isset($_POST['submit'])){
    $connect = ConnectDB();
    // lấy thông tin từ form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = md5($_POST['user_type']);

   
        // Insert record
        $sql = "INSERT INTO users (username, password, fullname, phone, email, bird, user_img,user_type) 
        VALUES ('$username','$password', '$fullname','$phone', '$email', '$bird', '$user_img','$user_type')";

        if (mysqli_query($connect, $sql)) {
            header('Location: http://localhost/pets-care/admin/user-list.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
        mysqli_close($connect);

    
}
