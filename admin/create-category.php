<?php
require_once 'connect.php';

if(isset($_POST['submit'])){
    $conn = ConnectDB();
    // lấy thông tin từ form
    $name = $_POST['name'];

    
        // Insert record
        $sql = "INSERT INTO categories (category_name) VALUES ('$name')";

        if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
            header('Location: http://localhost/Pets-Care/admin/category-list.php');
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

   
}









