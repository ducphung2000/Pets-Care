<?php
require_once 'connect.php';

if(isset($_POST['submit'])){
    $connect = ConnectDB();
    // lấy thông tin từ form
    $username = $_POST['username'];
    $password = $_POST['password'];

    
        // Insert record
        $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

        if (mysqli_query($connect, $sql)) {
			echo "New record created successfully";
            header('Location: http://localhost/Pets-Care/admin/user-list.php');
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    mysqli_close($connect);
}
