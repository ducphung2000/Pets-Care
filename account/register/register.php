<?php
    session_start();
    require_once '../../admin/connect.php';
    $connect = ConnectDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://logosrated.net/wp-content/uploads/parser/Pet-care-Logo-1.png" type="image/x-icon" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Care - Đăng ký</title>
    <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"></Link>
    <link rel="stylesheet" href="../../public/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/csslayout/base.css">
    <link rel="stylesheet" href="register.css">

</head>
<body>
    <header class="header">
        <div class="grid">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate ">
                        <span class="header__navbar-title--no-pointer">Chào mừng quý khách đến với Pets Care ^^ </span> 
                    </li>
                    <li class="header__navbar-item">
                        <span class="header__navbar-title--no-pointer">Kết nối</span>
                        <a href="" class="header__navbar-icon-link">
                            <i class="header__navbar-icon fab fa-facebook"></i>
                        </a>
                        <a href="" class="header__navbar-icon-link">
                            <i class="header__navbar-icon fab fa-instagram"></i>
                        </a>
    
                    </li>
                </ul>
    
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--has-notify">
                        <a href="" class="header__navbar-item-link">
                            Chào bạn đến với trang đăng ký!
                        </a>
                    </li>
    
                    

                    <!-- <li class="header__navbar-item header__navbar-user">
                        <img src="./public/img/balo.jfif" alt="" class="header__navbar-user-img">
                        <span class="header__navbar-user-name">Nguyen Duc Phung</span>
                    
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item">
                                <a href="">Tài khoản của tôi</a>
                            </li>
                            <li class="header__navbar-user-item">
                                <a href="">Địa chỉ của tôi</a>
                            </li>
                            <li class="header__navbar-user-item">
                                <a href="">Đơn mua</a>
                            </li>
                            <li class="header__navbar-user-item header__navbar-user-item--separate">
                                <a href="">Đăng xuất</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
        </div>
    </header>
    <div class="app">

        <div class="main center">
            <!-- Register Form -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 border">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Đăng ký tài khoản.</h1>

                </div>
                <?php
                    if(isset($_SESSION["thongbao"])) {
                        echo $_SESSION["thongbao"];
                        session_unset();
                    }
                ?>
                <form action="register_submit.php" method="POST">
                    <div class="auth-form">
                        <div class="auth-form__container">

                            <div class="auth-form__header">
                                <h3 class="auth-form__heading">Đăng ký</h3>
                                <a href="../login/login.php" class="auth-form__switch-btn js-login-btn">Đăng nhập</a>
                            </div>

                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input type="text" name="username" class="auth-form__input" placeholder="Nhập tên đăng nhập của bạn">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" name="password" class="auth-form__input" placeholder="Nhập mật khẩu của bạn">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" name="repassword" class="auth-form__input" placeholder="Nhập lại mật khẩu của bạn">
                                </div>
                                <!-- <div class="auth-form__group">
                                    <input type="text" name="fullname" class="auth-form__input" require placeholder="Nhập họ & tên của bạn">
                                </div>
                                <div class="auth-form__group">
                                    <input type="text" name="phone" class="auth-form__input" require placeholder="Nhập số điện thoại của bạn">
                                </div>
                                <div class="auth-form__group">
                                    <input type="text" name="email" class="auth-form__input" require placeholder="Nhập email của bạn">
                                </div>
                                <div class="form-group">
                                    <label>Chọn avatar của bạn</label>
                                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file" accept=".jpg,.jpeg,.png,.gif,.jfif">
                                </div> -->
                            </div>

                            <div class="auth-form__aside">
                                <p class="auth-form__policy-text">
                                    Bằng việc đăng ký, bạn đã đồng ý với Pets Care về
                                    <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                                    <a href="" class="auth-form__text-link">Chính sách bảo mật.</a>
                                </p>
                            </div>

                            <div class="auth-form__contrls">
                                <a href="../../index.php" class="btn auth-form__contrl-back btn--normal js-modal-close">Trang chủ</a>
                                <input type='submit' value='Đăng ký' class="btn btn--primary" name='submit'>


                            </div>
                        </div>
                        <div class="auth-form__socials">
                            <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                                <i class="auth-form__social-icon fab fa-facebook-square"></i>
                                <span class="auth-form__socials-title">Kết nối với Facebook</span>
                            </a>
                            <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                                <i class="auth-form__social-icon fab fa-google"></i>
                                <span class="auth-form__socials-title">Kết nối với Google</span>
                            </a>
                        </div>
                    </div>
                </form>
            </main>

        </div>

        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Pets Care Mall</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>

                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Về Pets Care</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Giới thiệu về Pets Care</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Chính hãng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>

                    <div class="grid__column-2-4">
                        
                    </div>

                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Theo dõi chúng tôi trên</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-instagram-square"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-linkedin"></i>
                                    LinkedIn
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Chăm sóc thú cưng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Thức ăn cho thú cưng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Phụ kiện cho thú cưng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Tư vấn miễn phí</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="footer__bottom">
                <div class="grid__row">
                    <p class="footer__text">© 2021 - Bản quyền thuộc về Đức Phụng</p>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>