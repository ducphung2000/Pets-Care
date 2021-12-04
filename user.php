<?php
require_once 'admin/connect.php';
$connect = ConnectDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://logosrated.net/wp-content/uploads/parser/Pet-care-Logo-1.png" type="image/x-icon" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Care - User</title>
    <?php include("./public/layout/head.php");?>
    <link rel="stylesheet" href="./public./csslayout/home.css">
    <link rel="stylesheet" href="./public./csslayout/sanpham.css">
    <link rel="stylesheet" href="./public./csslayout/cart.css">
    <link rel="stylesheet" href="./public./csslayout/user.css">
</head>
<body>
    <div class="app">
        <header class="header ">
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
                                <i class="header__navbar-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="./public/img/balo.jfif" alt="Mỹ phẩm" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Pets Care đã gửi cho bạn một thông báo </span>
                                                <span class="header__notify-decriotion">Mô tả sản phẩm balo chó mèo: đây là 1 sản phần rất tuyệt vời.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./public/img/sanpham-1.png" alt="Mỹ phẩm" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Pets Care đã gửi cho bạn một thông báo</span>
                                                <span class="header__notify-decriotion">Mô tả sản phẩm lồng dành cho chó mèo: đây là 1 sản phần rất tuyệt vời.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./public/img/xucxich.png" alt="Mỹ phẩm" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Pets Care đã gửi cho bạn một thông báo</span>
                                                <span class="header__notify-decriotion">Mô tả sản phẩm xúc xích cho chó mèo: đây là 1 sản phần rất tuyệt vời.</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
        
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-question-circle"></i>
                                Trợ giúp
                            </a>
                            
                        </li>
                        
                         <li class="header__navbar-item header__navbar-user">
                            <img src="./public/img/avt.jpg" alt="" class="header__navbar-user-img">
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
                        </li> 
                    </ul>
                </nav>
        
                <!-- Header with search -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="index.php" class="header__logo-link">
                            <img src="./public/img/Pet-Care-Logo.png" alt="" class="header__logo-img">
                        </a>

                        <div class="logo_text">Tài Khoản</div>
                    </div>
        
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="search" class="header__search-input" placeholder="Nhập để tìm kiếm sản phẩm...">
                            
                            <!-- search hístory -->
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Balo chó mèo</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">Xúc xích cho chó con</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="header__search-select">
                            <span class="header__search-select-lable">Trong shop</span>
                            <i class="header__search-select-icon fas fa-chevron-down"></i>
                            
                            <ul class="header__search-option">
                                <li class="header__search-option-item header__search-option-item--active">
                                    <span>Trong shop</span>
                                    <i class="fas fa-check"></i>
                                </li>
        
                                <li class="header__search-option-item ">
                                    <span>Ngoài shop</span>
                                    <i class="fas fa-check"></i>
                                </li>
                            </ul>
                        </div> -->
                        <button class="header__search-btn">
                        <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <div class="app__container">
            <div class="grid__full-width">
                <div class="container grid">
                    <div class="account">
                        <div class="profile">
                            <a href="#" class="profile__avt">
                                <div class="profile__avt-img">
                                    <img src="./public/img/avt.jpg" alt="avatar" class="avt-img">
                                </div>
                            </a>

                            <div class="profile__user">
                                <div class="user__name">nguyenducphung2000</div>
                                <div class="user__edit">
                                    <a href="#" class="user__edit-btn">
                                        <i class="fas fa-pen"></i>
                                        <span>Sửa Hồ Sơ</span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category__header">
                                <i class="category__icon far fa-user"></i>
                                <span class="category__text">Tài khoản của tôi</span>
                            </div>
                            <div class="category__body">
                                <div class="category__item">
                                    <a href="" class="category__item-btn">
                                        <i class="category__icon fas fa-file-alt"></i>
                                        <span class="category__text active">Hồ sơ</span>
                                    </a>    
                                </div>
                                <div class="category__item">
                                    <a href="" class="category__item-btn">
                                        <i class="category__icon fas fa-map-marker-alt"></i>
                                        <span class="category__text">Địa chỉ</span>
                                    </a>    
                                </div>
                                <div class="category__item">
                                    <a href="" class="category__item-btn">
                                        <i class="category__icon fas fa-key"></i>
                                        <span class="category__text">Đổi mật khẩu</span>
                                    </a>    
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="infor">
                        <div class="info__content">
                            <div class="info__content-body">
                                <div class="myfile__header">
                                    <h1>Hồ Sơ Của Tôi</h1>
                                    <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                                </div>
                                <div class="myfile__body">
                                    <div class="myfile__body-info">
                                        <div class="body-info__list">
                                            <div class="body-info__item">
                                                <label>Tên Đăng Nhập</label>
                                                <div>nguyenducphung2000</div>
                                            </div>

                                            <div class="body-info__item">
                                                <label>Tên</label>
                                                <div class="item__input">
                                                    <input class="input__text" type="text" placeholder="" maxlength="255" value="Nguyen Duc Phung">
                                                </div>
                                            </div>

                                            <div class="body-info__item">
                                                <label>Email</label>
                                                <div class="item__email">
                                                    <span>ducphung2k@gmail.com</span>
                                                    <button class="item__btn">Thay Đổi</button>
                                                </div>
                                            </div>

                                            <div class="body-info__item">
                                                <label>Số điện thoại</label>
                                                <div class="item__email">
                                                    <span>0866****00</span>
                                                    <button class="item__btn">Thay Đổi</button>
                                                </div>
                                            </div>

                                            <div class="body-info__item">
                                                <label>Giới Tính</label>
                                                <div class="item__input">
                                                    <input class="input__text input__sex" name="gender" type="radio" placeholder="" value="Nam" checked> <span>Nam</span>
                                                    <input class="input__text input__sex" name="gender" type="radio" placeholder="" value="Nữ"> <span>Nữ</span>
                                                    <input class="input__text input__sex" name="gender" type="radio" placeholder="" value="Khác"> <span>Khác</span>
                                                </div>
                                            </div>

                                            <div class="body-info__item">
                                                <label>Ngày Sinh</label>
                                                <div class="item__input">
                                                    <input class="input__text input__birth" type="text" placeholder="" maxlength="255" value="Ngày 15">
                                                    <input class="input__text input__birth" type="text" placeholder="" maxlength="255" value="Tháng 12">
                                                    <input class="input__text input__birth" type="text" placeholder="" maxlength="255" value="Năm 2000">
                                                </div>
                                            </div>

                                            <div class="body-info__item">
                                                <button class="save__btn btn btn--primary">Lưu</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="myfile__body-avatar">
                                        <div class="avatar__content">
                                            <div class="avatar__image">
                                                <img class="avatar__img" src="./public/img/avt.jpg" alt="Avatar">
                                            </div>
                                            <input class="input__elect" type="file" accept=".jpg,.jpeg,.png" >
                                            <button type="button" class="avatar__btn btn btn--primary">Chọn ảnh</button>
                                            <div class="avatar__info">
                                                <div class="avatar__text">Dụng lượng file tối đa 1 MB</div>
                                                <div class="avatar__text">Định dạng:.JPEG, .PNG</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("./public/layout/footer.php");?>
    </div>
</body>
</html>