<?php
    include '../../admin/connect.php';
    
    
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '' ) {
        //Thuc hien xu lys khi nguoi dung an nut submit vaf day du thong tin
        $connect = ConnectDB();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];

        if($password != $repassword){
            header("location:register.php");
        }
        $sql = "SELECT * FROM users WHERE username='$username' ";
        $result = $connect->query($sql);
        $password = md5($password);
        if( mysqli_num_rows($result) > 0){
            header("location:register.php");
        }

        $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
        mysqli_query($connect,$sql);
        echo "Dax dang ky thanh cong";
    }else {
        header("location:register.php");
    }