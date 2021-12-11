<?php 
    if(isset($_SESSION['users'])){
        $users = $_SESSION['users'];
    }else{
        $users = '';
    }

    if(isset($_SESSION['fullname'])){
        $fullname = $_SESSION['fullname'];
    }else{
        $fullname = 'Xin chào';
    }

    if (isset($_SESSION['users']) && $_SESSION['users']){
        echo '
            <li class="header__navbar-item header__navbar-user">
                <img src="./public/img/balo.jfif" alt="" class="header__navbar-user-img">
                <span class="header__navbar-user-name">'.$_SESSION['fullname'].'</span>

                <ul class="header__navbar-user-menu">
                    <li class="header__navbar-user-item">
                        <a href="user.php">Tài khoản của tôi</a>
                    </li>
                    <li class="header__navbar-user-item">
                        <a href="">Địa chỉ của tôi</a>
                    </li>
                    <li class="header__navbar-user-item">
                        <a href="">Đơn mua</a>
                    </li>
                    <li class="header__navbar-user-item header__navbar-user-item--separate">
                        <a href="./account/login/logout.php">Đăng xuất</a>
                    </li>
                </ul>
            </li>
        ';
    }else{
        echo '
            <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate js-register-btn">
            <a href="./account/register/register.php" class="header__navbar-item header__navbar-item--strong">Đăng ký</a>
        
            </li>
            <li class="header__navbar-item header__navbar-item--strong js-login-btn">
                <a href="./account/login/login.php" class="header__navbar-item header__navbar-item--strong">Đăng nhập</a>
            </li>
        ';
    }
?>
