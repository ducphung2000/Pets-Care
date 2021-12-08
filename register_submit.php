<?php
    require_once './admin/connect.php';

    if (isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['repassword'] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        if( $password != $repassword) {
            header("location:register.php");
        }
        $sql = "SELECT * FROM user WHERE username='$username";
        $old = mysqli_query($connect,$sql);
        $password = md5($password);
        if ( mysqli_num_rows($old)>0){
            header("location:register.php");
        }
        $sql = "INSERT into user (username,password) VALUE ('$username','$password')";
        mysqli_query($connect,$sql);
        echo "Đã đăng ký thành công";
    }else{
        header("location:register.php");
    }
?>