<?php
    include '../../admin/connect.php';
    $connect = ConnectDB();
    
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' ) {
        //Thuc hien xu ly khi nguoi dung an nut submit va day du thong tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
        $user = $connect->query($sql);

        if ($user->num_rows > 0) {
            echo "Bạn đã đăng nhập thành công.";
        }else {
            echo "Bạn đã đăng nhập sai username hoặc password. Vui lòng kiểm tra lại!!";
        }
    }else {
        header("location:login.php");
    }