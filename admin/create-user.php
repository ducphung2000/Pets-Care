<?php
session_start();
require_once 'connect.php';

if(isset($_POST['submit'])){
    $connect = ConnectDB();
    // lấy thông tin từ form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $bird = $_POST['bird'];

    //lấy tên file ảnh
    $user_img = $_FILES['fileToUpload']['name'];
    //thư mục upload ảnh
    $target_dir = "upload/";

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif","jfif");
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
        // Insert record
        $sql = "INSERT INTO products (name, old_price, price, description, type1, type2, type3, category_id, discount, image) 
        VALUES ('$name_product','$old_price', '$price','$description', '$type1', '$type2', '$type3', '$category_id', '$discount', '$name_img')";

        if (mysqli_query($connect, $sql)) {
            header('Location: http://localhost/pets-care/admin/product-list.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
        mysqli_close($connect);

        // Upload file
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_dir.$name_img);

    }
    else {
        print_r("file không đúng dịnh dạng. Vui lòng kiểm tra lại");
    }
    
        // // Insert record
        // $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";

        // if (mysqli_query($connect, $sql)) {
		// 	echo "New record created successfully";
        //     header('Location: http://localhost/Pets-Care/admin/user-list.php');
            
        // } else {
        //     echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        // }
        // mysqli_close($connect);
}
