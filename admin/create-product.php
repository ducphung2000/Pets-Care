<?php
session_start();

require_once 'connect.php';

if(isset($_POST['submit'])){
    $conn = ConnectDB();
    // lấy thông tin từ form
    $name_product = $_POST['name'];
    $old_price  = $_POST['old_price'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $type1 = $_POST['type1'];
    $type2 = $_POST['type2'];
    $type3 = $_POST['type3'];
    $discount = $_POST['discount'];

    //lấy tên file ảnh
    $name_img = $_FILES['fileToUpload']['name'];
    // //lấy tên file ảnh
    $name_img1 = $_FILES['fileToUpload1']['name'];
    // //lấy tên file ảnh
    // $name_img2 = $_FILES['fileToUpload2']['name2'];
    // //lấy tên file ảnh
    // $name_img3 = $_FILES['fileToUpload3']['name3'];
    // //lấy tên file ảnh
    // $name_img4 = $_FILES['fileToUpload4']['name4'];

    //thư mục upload ảnh
    $target_dir = "upload/";

    $target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
    
    // Select file type
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    
    // Valid file extensions
    // 
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif","jfif");
    // Check extension
    if(isset($_POST['submit'] )){
        // Insert record
        $sql = "INSERT INTO products (name, old_price, price, description, type1, type2, type3, category_id, discount, image, image1) 
        VALUES ('$name_product','$old_price', '$price','$description', '$type1', '$type2', '$type3', '$category_id', '$discount', '$name_img','$name_img1')";

        if (mysqli_query($conn, $sql)) {
            header('Location: http://localhost/pets-care/admin/product-list.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

        // Upload file
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_dir.$name_img);

    }
    else {
        print_r("file không đúng dịnh dạng. Vui lòng kiểm tra lại");
    }
// // ---------------------------------------------------------------------------------------------------------------------------
    // Ảnh thay thế 1
    //thư mục upload ảnh
    // Check extension
    
// // ---------------------------------------------------------------------------------------------------------------------------
}









