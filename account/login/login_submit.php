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
            $rows = mysqli_fetch_assoc($user);
            $_SESSION["users"] = $username;
            
            // $_SESSION["bird"] = $bird;
            // $_SESSION["user_img"] = $user_img;
            $_SESSION["thongbao"] = "Đăng nhập thành công!";
            if ($rows['user_type'] == '0') {
                $_SESSION["usersz"] = $user;
    
                header('location: ../../admin/index.php');
            }else{
                $_SESSION['users'] = $username;
                // $_SESSION["avatar_user"] = $avatar_user;
                // $_SESSION["fullname"] = $fullname;
                // $_SESSION['success']  = "Bạn đã đăng nhập";
                
                header("location:../../index.php");
                }

        }else {
            $_SESSION["thongbao"] = "Bạn đã đăng nhập sai username hoặc password. Vui lòng kiểm tra lại!";
            header("location:login.php");
        }
    }else {
        $_SESSION["thongbao"] = "Đăng nhập thất bại. Vui lòng nhập đầy đủ thông tin!";
        header("location:login.php");
    }