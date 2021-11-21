<?php
require_once 'connect.php';

if(isset($_POST['submit'])){
    $conn = ConnectDB();
    // lấy thông tin từ form
    $name_product = $_POST['name'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $discount = $_POST['discount'];

    //lấy tên file ảnh
    $name_img = $_FILES['fileToUpload']['name'];

    //thư mục upload ảnh
    $target_dir = "upload/";

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
        // Insert record
        $sql = "INSERT INTO products (name, price, description, category_id, discount, image) VALUES ('$name_product','$price','$description', '$category_id', '$discount', '$name_img')";

        if (mysqli_query($conn, $sql)) {
            header('Location: http://localhost/web-ban-hang/admin/product-list.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

        // Upload file
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_dir.$name_img);

    }
    else {
        print_r("file khong dung dịnh dạng");
    }
}









