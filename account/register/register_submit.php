<?php
    session_start();
    require_once '../../admin/connect.php';
    
    
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '' ) {
        //Thuc hien xu ly khi nguoi dung an nut submit va day du thong tin
        $connect = ConnectDB();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $fullname = $_POST["fullname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        // $fullname = 'Chua co gi';
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

        $sql = "INSERT INTO users (username, password, fullname, phone,email) VALUES ('$username','$password','$fullname','$phone','$email')";
        mysqli_query($connect,$sql);
        $_SESSION["thongbao"] = "Đã đăng ký thành công. CHuyển đến trang đăng nhập.";
        header("location:../login/login.php");
    }else {
        $_SESSION["thongbao"] = "Đăng ký thất bại. Vui lòng nhập đầy đủ thông tin!";
        header("location:register.php");
    }