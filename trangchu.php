<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://logosrated.net/wp-content/uploads/parser/Pet-care-Logo-1.png" type="image/x-icon" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Care</title>
    <?php include(head.html); ?>
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
                                            <img src="./accsets/img/balo.jfif" alt="Mỹ phẩm" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Pets Care đã gửi cho bạn một thông báo </span>
                                                <span class="header__notify-decriotion">Mô tả sản phẩm balo chó mèo: đây là 1 sản phần rất tuyệt vời.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./accsets/img/sanpham-1.png" alt="Mỹ phẩm" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Pets Care đã gửi cho bạn một thông báo</span>
                                                <span class="header__notify-decriotion">Mô tả sản phẩm lồng dành cho chó mèo: đây là 1 sản phần rất tuyệt vời.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./accsets/img/xucxich.png" alt="Mỹ phẩm" class="header__notify-img">
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
                        <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng ký</li>
                        <li class="header__navbar-item header__navbar-item--strong">Đăng nhập</li>
                        <!-- <li class="header__navbar-item header__navbar-user">
                            <img src="./accsets/img/balo.jfif" alt="" class="header__navbar-user-img">
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

                <!-- Header with search -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="#" class="header__logo-link">
                            <img src="./accsets/img/Pet-Care-Logo.png" alt="" class="header__logo-img">
                        </a>
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

                    <div class="header__cart">
                        <div class="header__cart-wrap">
                            <i class="header__cart-icon fas fa-shopping-cart"></i>
                            <span class="header__cart-notice">3</span>
                            <!-- No cart: header__cart-list--no-cart -->
                            <div class="header__cart-list ">
                                <!-- No cart: -->
                                <img src="./accsets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
                                <span class="header__cart-list-no-cart-msg">
                                    Chưa có sản phẩm
                                </span>

                                <!-- Has cart: -->
                                <h3 class="header__cart-heading">Sản phẩm đã thêm</h3>
                                <ul class="header__cart-list-item">
                                    <li class="header__cart-item">
                                        <img src="./accsets/img/balo.jfif" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Balo dành cho chó mèo </h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">2.000.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: to
                                                </span>
                                                <Span class="header__cart-item-remove">Xoá</Span>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./accsets/img/sanpham-1.png" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Lồng cho chó mèo</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">1.500.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: to
                                                </span>
                                                <Span class="header__cart-item-remove">Xoá</Span>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./accsets/img/xucxich.png" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">100.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">10</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: Xúc xích vị bò 
                                                </span>
                                                <Span class="header__cart-item-remove">Xoá</Span>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./accsets/img/balo.jfif" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Balo cho chó mèo</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">2.000.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: to
                                                </span>
                                                <Span class="header__cart-item-remove">Xoá</Span>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./accsets/img/sanpham-1.png" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Lồng cho chó mèo</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">1.500.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: to
                                                </span>
                                                <Span class="header__cart-item-remove">Xoá</Span>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./accsets/img/xucxich.png" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Xúc xích chó mèo</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">100.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">10</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: Xúc xích vị bò 
                                                </span>
                                                <Span class="header__cart-item-remove">Xoá</Span>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./accsets/img/balo.jfif" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Balo cho chó mèo</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">2.000.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: to
                                                </span>
                                                <Span class="header__cart-item-remove">Xoá</Span>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./accsets/img/sanpham-1.png" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Lồng cho chó mèo</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">1.500.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">2</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: to
                                                </span>
                                                <Span class="header__cart-item-remove">Xoá</Span>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="./accsets/img/xucxich.png" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Xúc xích chó mèo</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">100.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">10</span>
                                                </div>
                                            </div>

                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: Xúc xích vị bò 
                                                </span>
                                                <Span class="header__cart-item-remove">Xoá</Span>

                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <a href="#" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>                        
                        
                    </div>
                </div>

                <!-- Header Menu -->
                <div class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-item">
                            <a href="trangchu.html" class="header__menu-item-title header__menu-item-title--active">Trang chủ</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="" class="header__menu-item-title">Giới Thiệu</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="index.html" class="header__menu-item-title">Sản Phẩm</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="" class="header__menu-item-title">Tư vấn</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="" class="header__menu-item-title">liên hệ</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </header>

        <div class="app__container">
            <div class="grid__full-width app__main">
                <div class="grid">
                    <div class=" app__main-content">
                        <div class="intro__list">
                            <div class=" intro__item">
                                <h2 class="intro__heading2">Mua hàng Online ngay!!!</h2>
                                <h3 class="intro__heading3">Tiết kiệm TIỀN</h3>
                                <p class="intro__text">Tiết kiệm cho những thứ quan trọng của bạn</p>
                                <p class="intro__text">Tại cửa hàng và trực tuyến!</p>
                                <a href="index.html" class="btn intro__btn">
                                    <span>Bắt đầu</span>
                                </a>
                            </div>
    
                            <div class=" intro__item">
                                <h2 class="intro__heading2">Chăm sóc cho thú cưng của bạn!!!</h2>
                                <h3 class="intro__heading3">Nhanh và tiện lợi</h3>
                                <p class="intro__text">Thú cưng là một người bạn tuyệt vời của bạn</p>
                                <p class="intro__text">Hay trân trọng vì chúng đã và đang ở đây <3</p>
                                <a href=" " class="btn intro__btn">
                                    <span>Tư vấn</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
                        <h3 class="footer__heading">Thanh toán</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <img src="./accsets/img/bidv.jpg" alt="" class="footer-item__img">
                                    <img src="./accsets/img/agribank.jpg" alt="" class="footer-item__img">
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <img src="./accsets/img/vpbannk.jfif" alt="" class="footer-item__img">
                                    <img src="./accsets/img/viettinbank.png" alt="" class="footer-item__img">
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <img src="./accsets/img/samcombank.jpg" alt="" class="footer-item__img">
                                    <img src="./accsets/img/Techcombank.png" alt="" class="footer-item__img">
                                </a>
                            </li>
                        </ul>
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
                    <p class="footer__text">© 2021 - Bản quyền thuộc về Công ty TNHH Pets Care</p>
                </div>
            </div>
        </footer>
</body>
</html>