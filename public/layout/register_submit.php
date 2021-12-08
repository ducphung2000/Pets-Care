<?php
    require_once '../../admin/connect.php';

    if (isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if( $password != $repassword) {
            header("location:http://localhost/pets-care/index.php");
        }
        $sql = "SELECT * FROM user WHERE username='$username";
        $old = mysqli_query($connect,$sql);
        $password = md5($password);
        if ( mysqli_num_rows($old)>0){
            header("location:http://localhost/pets-care/index.php");
        }
        $sql = "INSERT into user (username,password) VALUE ('$username','$password')";
        mysqli_query($connect,$sql);
        echo "Đã đăng ký thành công";
    }else{
        header("location:http://localhost/pets-care/index.php");
    }
?>