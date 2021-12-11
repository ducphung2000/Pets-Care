<?php
    session_start();
    require_once '../../admin/connect.php';
    
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' ) {
        $connect = ConnectDB();
        //Thuc hien xu ly khi nguoi dung an nut submit va day du thong tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
        $user = $connect->query($sql);

        if ($user->num_rows > 0) {
            $_SESSION["users"] = $username;
            $_SESSION["fullname"] = $fullname;
            $_SESSION["phone"] = $phone;
            $_SESSION["email"] = $email;
            $_SESSION["bird"] = $bird;
            $_SESSION["user_img"] = $user_img;

            header("location:../../index.php");

        }else {
            echo "Bạn đã đăng nhập sai username hoặc password. Vui lòng kiểm tra lại!!";
        }
    }else {
        header("location:login.php");
    }