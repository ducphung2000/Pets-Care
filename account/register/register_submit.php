<?php
    session_status();
    require_once '../../admin/connect.php';
    
    
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '' ) {
        //Thuc hien xu ly khi nguoi dung an nut submit va day du thong tin
        $connect = ConnectDB();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];

        if($password != $repassword){
            $_SESSION["thongbao"] = "Passowrd nhập lại không chính xác!";
            header("location:register.php");
            die();
        }
        $sql = "SELECT * FROM users WHERE username='$username' ";
        $result = $connect->query($sql);
        $password = md5($password);
        if( mysqli_num_rows($result) > 0){
            $_SESSION["thongbao"] = "Username đã tồn tại!";
            header("location:register.php");
            die();
        }

        $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
        mysqli_query($connect,$sql);
        $_SESSION["thongbao"] = "Đã đăng ký thành công. CHuyển đến trang đăng nhập.";
        header("location:../login/login.php");
    }else {
        header("location:register.php");
    }