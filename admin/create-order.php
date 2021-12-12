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

    //lấy tên file ảnh
    $order_img = $_FILES['fileToUpload']['name'];
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
        $sql = "INSERT INTO products (name, phone, address, note, total, order_img) 
        VALUES ('$name','$phone', '$address', '$note', '$total', '$order_img')";

        if (mysqli_query($connect, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
        mysqli_close($connect);

        // Upload file
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$link_img.$order_img);

    }
    else {
        print_r("file không đúng dịnh dạng. Vui lòng kiểm tra lại");
    }
}
