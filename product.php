<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://logosrated.net/wp-content/uploads/parser/Pet-care-Logo-1.png" type="image/x-icon" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Care</title>
    <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"></Link>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/home.css">
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
                                            <img src="./img/balo.jfif" alt="Mỹ phẩm" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Pets Care đã gửi cho bạn một thông báo </span>
                                                <span class="header__notify-decriotion">Mô tả sản phẩm balo chó mèo: đây là 1 sản phần rất tuyệt vời.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./img/sanpham-1.png" alt="Mỹ phẩm" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Pets Care đã gửi cho bạn một thông báo</span>
                                                <span class="header__notify-decriotion">Mô tả sản phẩm lồng dành cho chó mèo: đây là 1 sản phần rất tuyệt vời.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./img/xucxich.png" alt="Mỹ phẩm" class="header__notify-img">
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
                        <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate js-register-btn">Đăng ký</li>
                        <li class="header__navbar-item header__navbar-item--strong js-login-btn">Đăng nhập</li>
                        <!-- <li class="header__navbar-item header__navbar-user">
                            <img src="./img/balo.jfif" alt="" class="header__navbar-user-img">
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
                        <a href="index.html" class="header__logo-link">
                            <img src="./img/Pet-Care-Logo.png" alt="" class="header__logo-img">
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
                            <a href="cart.html">
                                <i class="header__cart-icon fas fa-shopping-cart"></i>
                            </a>
                            <span class="header__cart-notice">3</span>
                            <!-- No cart: header__cart-list--no-cart -->
                            <div class="header__cart-list ">
                                <!-- No cart: -->
                                <img src="./img/no_cart.png" alt="" class="header__cart-no-cart-img">
                                <span class="header__cart-list-no-cart-msg">
                                    Chưa có sản phẩm
                                </span>
        
                                <!-- Has cart: -->
                                <h3 class="header__cart-heading">Sản phẩm đã thêm</h3>
                                <ul class="header__cart-list-item">
                                    <li class="header__cart-item">
                                        <img src="./img/balo.jfif" alt="" class="header__cart-img">
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
                                        <img src="./img/sanpham-1.png" alt="" class="header__cart-img">
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
                                        <img src="./img/xucxich.png" alt="" class="header__cart-img">
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
                                        <img src="./img/balo.jfif" alt="" class="header__cart-img">
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
                                        <img src="./img/sanpham-1.png" alt="" class="header__cart-img">
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
                                        <img src="./img/xucxich.png" alt="" class="header__cart-img">
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
                                        <img src="./img/balo.jfif" alt="" class="header__cart-img">
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
                                        <img src="./img/sanpham-1.png" alt="" class="header__cart-img">
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
                                        <img src="./img/xucxich.png" alt="" class="header__cart-img">
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
        
                                <a href="cart.html" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>                        
                        
                    </div>
                </div>
        
                <!-- Header Menu -->
                <div class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-item">
                            <a href="index.html" class="header__menu-item-title">Trang chủ</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-item-title">Giới Thiệu</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="product.html" class="header__menu-item-title header__menu-item-title--active">Sản Phẩm</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-item-title">Tin tức</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-item-title">liên hệ</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </header>

        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="categogy">
                            <h3 class="category__heading">
                            
                                Danh mục
                            </h3>
            
                            <ul class="categogy-list">
                                <li class="categogy-item categogy-item--active">
                                    <a href="" class="categogy-item__link"> Tất cả vật phẩm</a>
                                </li>
                                <li class="categogy-item">
                                    <a href="" class="categogy-item__link">Phụ kiện cho thú cưng</a>
                                </li>
                                <li class="categogy-item">
                                    <a href="" class="categogy-item__link">Thức ăn cho chó</a>
                                </li>
                                <li class="categogy-item">
                                    <a href="" class="categogy-item__link">Thức ăn cho mèo</a>
                                </li>
                                <li class="categogy-item">
                                    <a href="" class="categogy-item__link">Vệ sinh cho thú cưng</a>
                                </li>
                                <li class="categogy-item">
                                    <a href="" class="categogy-item__link">Khác...</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
    
                    <div class="grid__column-10">
                        <!-- Lọc sản phẩm -->
                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <buutton class="home-filter__btn btn">Phổ biến</buutton>
                            <buutton class="home-filter__btn btn btn--primary">Mới nhất</buutton>
                            <buutton class="home-filter__btn btn">Bán chạy</buutton>

                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="select-input__icon fas fa-chevron-down"></i>
                                
                                <!-- list options -->
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá:Thấp đến cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá:Cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-curren">1</span>
                                </span>

                                <div class="home-filter__page-control">
                                    <a href="" class="home-filter__page-btn home-filter__page-btn--disable">
                                        <i class="home-filter__page-icon fas fa-chevron-left"></i>
                                    </a>

                                    <a href="" class="home-filter__page-btn">
                                        <i class="home-filter__page-icon fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Danh mục sản phẩm -->
                        <div class="home-product">
                            <div class="grid__row">
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="grid__column-2-4">
                                    <!-- product item -->
                                    <a href="sanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/1ab1ac70d1a06eae4d4ab807945d7071) ;"></div>
                                    
                                        <h4 class="home-product-item__name">[ 6 cây- QUÀ TẶNG]Xúc xích dành cho chó mèo, cung cấp chất dinh dưỡng cho thú cưng vị bò, gà</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">250.000đ</span>
                                            <span class="home-product-item__price-current">199.000đ</span>
                                        </div>

                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin-name">Việt Nam</span>
                                        </div>

                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">20%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div> 
                        </div>
                        <!-- Phân trang -->
                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon">1</i>
                                </a>
                            </li>
                            <!-- <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon">2</i>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon">3</i>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon">4</i>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon">5</i>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon">...</i>
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon">14</i>
                                </a>
                            </li> -->
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
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
                                    <img src="./img/bidv.jpg" alt="" class="footer-item__img">
                                    <img src="./img/agribank.jpg" alt="" class="footer-item__img">
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <img src="./img/vpbannk.jfif" alt="" class="footer-item__img">
                                    <img src="./img/viettinbank.png" alt="" class="footer-item__img">
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <img src="./img/samcombank.jpg" alt="" class="footer-item__img">
                                    <img src="./img/Techcombank.png" alt="" class="footer-item__img">
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
                    <p class="footer__text">© 2021 - Bản quyền thuộc về Đức Phụng</p>
                </div>
            </div>
        </footer>

    </div>
   
</body>
</html>