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
    <title>Pets Care - Chi tiết sản phẩm</title>
    <?php include("./public/layout/head.php");?>
    <link rel="stylesheet" href="./public/csslayout/register.css">
    <link rel="stylesheet" href="./public/csslayout/home.css">
    <link rel="stylesheet" href="./public/csslayout/sanpham.css">
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
                        <?php include("./public/layout/header_user.php");?>

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
        
                <!-- Header with search -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="index.php" class="header__logo-link">
                            <img src="./public/img/Pet-Care-Logo.png" alt="" class="header__logo-img">
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
                            <a href="cart.php">
                                <i class="header__cart-icon fas fa-shopping-cart"></i>
                            </a>
                            <!-- <span class="header__cart-notice">3</span> -->
                            <!-- No cart: header__cart-list--no-cart -->
                            <div class="header__cart-list ">
                                <!-- No cart: -->
                                <img src="./public/img/no_cart.png" alt="" class="header__cart-no-cart-img">
                                <span class="header__cart-list-no-cart-msg">
                                    Chưa có sản phẩm
                                </span>
        
                                <!-- Has cart: -->
                                <h3 class="header__cart-heading">Sản phẩm đã thêm</h3>
                                <ul class="header__cart-list-item">
                                    <li class="header__cart-item">
                                        <img src="./public/img/balo.jfif" alt="" class="header__cart-img">
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
                                        <img src="./public/img/sanpham-1.png" alt="" class="header__cart-img">
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
                                        <img src="./public/img/xucxich.png" alt="" class="header__cart-img">
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
                                        <img src="./public/img/balo.jfif" alt="" class="header__cart-img">
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
                                        <img src="./public/img/sanpham-1.png" alt="" class="header__cart-img">
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
                                        <img src="./public/img/xucxich.png" alt="" class="header__cart-img">
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
                                        <img src="./public/img/balo.jfif" alt="" class="header__cart-img">
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
                                        <img src="./public/img/sanpham-1.png" alt="" class="header__cart-img">
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
                                        <img src="./public/img/xucxich.png" alt="" class="header__cart-img">
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
        
                                <a href="cart.php" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>                        
                        
                    </div>
                </div>
        
                <!-- Header Menu -->
                <div class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-item">
                            <a href="index.php" class="header__menu-item-title">Trang chủ</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-item-title">Giới Thiệu</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="product.php" class="header__menu-item-title header__menu-item-title--active">Sản Phẩm</a>
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
            <div class="grid ">
                <?php
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                    }else{
                        $id = '';
                    }
                    $sql = "SELECT * FROM products WHERE id = '$id'";
                    $result = $connect->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '
                          
                            <div class="container-content">

                                <div class="container-buy__product">
                                    <div class="buy__product-description">
                                        <div class="product-description__intro">
                                            <div class="product-description__intro-image">
                                                <img src="admin/upload/'.$row['image'].'" alt="Hình ảnh" class="intro-image__img" id="main-img">
                                            </div>
                                            <div class="product-description__intro-list-img">
                                                <img src="./public/img/'.$row['image'].'" alt="Hình ảnh" class="intro-item__img intro-item__img--active">
                                                <img src="./public/img/'.$row['image'].'" alt="Hình ảnh" class="intro-item__img">
                                                <img src="./public/img/'.$row['image'].'" alt="Hình ảnh" class="intro-item__img">
                                                <img src="./public/img/'.$row['image'].'" alt="Hình ảnh" class="intro-item__img">
                                                <img src="./public/img/'.$row['image'].'" alt="Hình ảnh" class="intro-item__img">
                                            </div>

                                            
                                        </div>
                                        <div class="product-description__more">
                                            <div class="description__more-share">
                                                <span class="more-share_text">Chia sẻ:</span>
                                                <i class="fab fa-facebook-messenger more-share_icon more-share_icon--mess"></i>
                                                <i class="fab fa-facebook more-share_icon more-share_icon--fb"></i>
                                                <i class="fab fa-pinterest more-share_icon more-share_icon--pinter"></i>
                                                <i class="fab fa-twitter-square more-share_icon more-share_icon--twitter"></i>
                                            </div>
                                            <div class=""></div>
                                            <div class="description__more-liked">
                                                <i class="ti-heart more-liked__icon"></i>
                                                <span class="more-liked__text">Đã bán (4,3k)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buy__product-buying">
                                        <div class="buying-content">
                                            <div class="buying-content__heading">
                                                <span>'.$row['name'].'</span>
                                            </div>

                                            <div class="buying-content__rate">
                                                <div class="buying-content__rate-rating buying-content__rate-rating--color ">
                                                    <div class="rate-rating__number">4.6</div>
                                                    <div class="rate-rating__star">
                                                        <div class="rate-rating__star-content">
                                                            <ul class="rate-rating__list">
                                                                <li class="rate-rating__item">
                                                                    <i class="rate-rating__icon fas fa-star"></i>
                                                                </li>
                                                                <li class="rate-rating__item">
                                                                    <i class="rate-rating__icon fas fa-star"></i>
                                                                </li>
                                                                <li class="rate-rating__item">
                                                                    <i class="rate-rating__icon fas fa-star"></i>
                                                                </li>
                                                                <li class="rate-rating__item">
                                                                    <i class="rate-rating__icon fas fa-star"></i>
                                                                </li>
                                                                <li class="rate-rating__item">
                                                                    <i class="rate-rating__icon fas fa-star-half-alt"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="buying-content__rate-number">
                                                    <div class="rate-number__num"> 3,6k</div>
                                                    <div class="rate-number__text">Đánh Giá</div>
                                                </div>
                                                <div class="buying-content__rate-sold">
                                                    <div class="rate-sold__num">4,3k</div>
                                                    <div class="rate-sold__text">Đã Bán</div>
                                                </div>
                                            </div>

                                            <div class="buying-content__price">
                                                <div class="buying-content__price-main">
                                                    <div class="price-main__old-price">'.$row['old_price'].'</div>
                                                    <div class="price-main__sale-price">
                                                        <div class="price-main__sale-price-number">'.$row['price'].'</div>
                                                        <div class="price-main__sale-price-sticker">'.$row['discount'].'% Giảm</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="buying-content__choose">
                                                <div class="buying-content__choose-main">
                                                    <div class="choose-main__transport">
                                                        <div class="choose-main__transport-label">Vận Chuyển</div>
                                                        <div class="choose-main__transport-text">
                                                            <div class="transport-text__top">
                                                                <img src="./public/img/shipcar.png" alt="Shipcar" class="transport-text__top-img">
                                                                <span class="transport-text__top-text">Miễn Phí Vận Chuyển</span> 
                                                            </div>
                                                            <div class="transport-text__bot">Miễn Phí Vận Chuyển khi đơn đạt giá trị tối thiểu</div>
                                                        </div>
                                                    </div>

                                                    <div class="choose-main__select">
                                                        <div class="choose-main__type">
                                                            <div class="choose-main__type-label">Loại</div>
                                                            <div class="choose-main__type-product">
                                                                <button class="product__variation">'.$row['type1'].'</button>
                                                                <button class="product__variation">'.$row['type2'].'</button>
                                                                <button class="product__variation">'.$row['type3'].'</button>
                                                            </div>
                                                        </div>
                                                        <div class="choose-main__quantity">
                                                            <div class="choose-main__quantity-label">Số Lượng</div>
                                                            <div class="choose-main__quantity-number">
                                                                <button class="quantity-number__icon-minus disabled">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                                <input type="text" class="quantity-number__num" value="1">
                                                                <button class="quantity-number__icon-plus">
                                                                    <i class="fas fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <div class="choose-main__quantity-text">160 sản phẩm có sẵn</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="buying-content__buy">
                                                <button class="buy__add-cart">
                                                    <i class="fas fa-cart-plus buy__add-cart-icon"></i>
                                                    <span type="submit">Thêm Vào Giỏ Hàng</span>
                                                </button>
                                                <a href="cart.php" class="buy_buying-btn btn btn--primary">Mua Ngay</a>
                                            </div>

                                            <div class="buying-content__more"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-buy__details">
                                    <div class="product-content">
                                        <div class="product-details">
                                            <div class="product-details__head">
                                                <div class="details__head-heading">Chi tiết sản phẩm</div>
                                            </div>
                                            <div class="product-details__body">
                                                <div class="details__body-shape">
                                                    <div class="details__body-shape-left">Dạng thức ăn thú cưng</div>
                                                    <div class="details__body-shape-right">Thức ăn ướt</div>
                                                </div>

                                                <div class="details__body-shop">
                                                    <div class="details__body-shop-left">Kho hàng</div>
                                                    <div class="details__body-shop-right">1512</div>
                                                </div>

                                                <div class="details__body-from">
                                                    <div class="details__body-from-left">Gửi từ</div>
                                                    <div class="details__body-from-right">Quận Bắc Từ Liêm, Hà Nội</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-details__descript">
                                            <div class="product-details__head">
                                                <div class="details__descript-heading">Mô tả sản phẩm</div>
                                            </div>
                                            <div class="details__descript-body">
                                                <p>'.$row['description'].'</p>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-reviews">

                                    </div>

                                    <div class="product-other">

                                    </div>
                                </div>
                            </div>
                    ';}}
                ?>
            </div>
            <?php include("./public/layout/footer.php");?>
        </div>
        
    </div>


    <!-------------- JS ---------------->
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <!-- item img -->
    <script>
        $(() => {
            $('.intro-item__img').click(function() {
                let imgPath = $(this).attr('src');
                $('#main-img').attr('src', imgPath);
            })
        })
    </script>
    <script>
        $(document).on('click','.intro-item__img', function(){
            $(this).addClass('intro-item__img--active').siblings().removeClass('intro-item__img--active')
        })
    </script>

    <!-- item Variation -->
    <script type="text/javascript">
        $(document).on('click','.product__variation', function(){
            $(this).addClass('product__variation--active').siblings().removeClass('product__variation--active')
        })
    </script>

    <!-- increment & decrement counter on button click -->

    <script type="text/javascript">
        let plusBtn = document.querySelector('.quantity-number__icon-plus');
        let minusBtn = document.querySelector('.quantity-number__icon-minus');
        let qty = document.querySelector('.quantity-number__num');

        plusBtn.addEventListener('click', function(){
            qty.value = parseInt(qty.value) + 1;
        });

        minusBtn.addEventListener('click', function(){
            if (qty.value <=0){
                qty.value = 0;
            }else {
            qty.value = parseInt(qty.value) - 1;
            }
        });
    </script>
</body>
</html>