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
    $user_img = $_FILES['fileToUpload']['username'];
    //thư mục upload ảnh
    $link_img = "upload/";

    $link_file = $link_img . basename($_FILES["fileToUpload"]["name"]);

    // Select file type
    $imgFileType = strtolower(pathinfo($link_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $imgType_arr = array("jpg","jpeg","png","gif","jfif");
    // Check extension
    if( in_array($imgFileType,$imgType_arr) ){
        // Insert record
        $sql = "INSERT INTO products (username, password, fullname, phone, email, bird, user_img) 
        VALUES ('$username','$password', '$fullname','$phone', '$email', '$bird', '$user_img')";

        if (mysqli_query($connect, $sql)) {
            header('Location: http://localhost/pets-care/admin/product-list.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
        mysqli_close($connect);

        // Upload file
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$link_img.$user_img);

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
