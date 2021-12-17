<?php
session_start();
require_once 'admin/connect.php';
$connect = ConnectDB();

$search = isset($_GET['name']) ? $_GET['name'] : "";
if($search){
    $where = "WHERE name LIKE '%.$search.%'";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://logosrated.net/wp-content/uploads/parser/Pet-care-Logo-1.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Care - Danh mục sản phẩm</title>
    <?php include("./public/layout/head.php");?>
    <link rel="stylesheet" href="./public/csslayout/register.css">
    <link rel="stylesheet" href="./public/csslayout/home.css">
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

                                <span class="no-notify">Không có thông báo!</span>
                                <!-- <ul class="header__notify-list">
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
                                </ul> -->
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
                        <?php include("./public/layout/header_user.php"); ?>

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

                    <?php include("./public/layout/search.php"); ?>


                    <div class="header__cart">
                        <div class="header__cart-wrap">
                            <a href="cart.php">
                                <i class="header__cart-icon fas fa-shopping-cart"></i>
                            </a>
                            <!-- <span class="header__cart-notice">3</span> -->
                            <!-- No cart: header__cart-list--no-cart -->
                            <div class="header__cart-list ">
                                <!-- No cart: -->
                                <h3 class="header__cart-heading">Sản phẩm đã thêm</h3>
                                <div class="header__no-cart-list-item">
                                    <img src="./public/img/no_cart.png" alt="" class="header__cart-no-cart-img">
                                    <span class="header__cart-list-no-cart-msg">
                                        Chưa có sản phẩm
                                    </span>
                                </div>
                                <!-- Has cart: -->
                                <!-- <h3 class="header__cart-heading">Sản phẩm đã thêm</h3>
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

                                <a href="cart.php" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a> -->
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

        <div class="app__container app__product">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <?php
                            include("./public/layout/category.php"); 
                        ?>
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
                        <div class="home-product_list">
                            
                            <div class="home-product">
                                <div id="all_product" class="content-header-title">
                                    <h3 class="tittle1">Tất cả vật phẩm</h3>
                                </div>
                                <div class="grid__row">
                                    <?php
                                    if(isset($_GET['search'])){
                                        $search = $_GET['search'];
                                    }
                                    else{
                                        $search = "";
                                    }
                                    $sql = "SELECT * FROM products WHERE `name` LIKE '%$search%'";
                                    $result = $connect->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo '
                                            <div class="grid__column-2-4">
                                                <!-- product item -->
                                                ' ?>
                                                <a href="sanpham.php?id=<?php echo $row["id"] ?>" class="home-product-item">
                                                <?php 
                                                echo '
                                                    <div class="home-product-item__img">
                                                        <img class="item-img" src="admin/upload/'.$row['image'].'">
                                                    </div>

                                                    <h4 class="home-product-item__name">'.$row['name'].'</h4>
                                                    <div class="home-product-item__price">
                                                        <span class="home-product-item__price-old">'?><?= number_format($row['old_price'],0,",",".")?><?php echo'đ</span>
                                                        <span class="home-product-item__price-current">'?><?= number_format($row['price'],0,",",".")?><?php echo'đ</span>
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
                                                        <span class="home-product-item__sale-off-percent">'.$row['discount'].'%</span>
                                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                                    </div>
                                                </a>
                                            </div>
                                        ';}
                                    }
                                    ?>
                                </div>
                                
                            </div>

                            <div class="home-product">
                                <?php
                                    $sql = "SELECT * FROM categories WHERE id = 1";
                                    $result = $connect->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo '
                                                <div id="1" class="content-header-title">
                                                    <h3 class="tittle1">'.$row['category_name'].'</h3>
                                                </div>
                                    ';}}
                                    ?>
                                <div class="grid__row">
                                    <?php
                                    $sql = "SELECT * FROM products WHERE category_id = 1 AND `name` LIKE '%$search%'" ;
                                    $result = $connect->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo '
                                            <div class="grid__column-2-4">
                                                <!-- product item -->
                                                ' ?>
                                                <a href="sanpham.php?id=<?php echo $row["id"] ?>" class="home-product-item">
                                                <?php 
                                                echo '
                                                    <div class="home-product-item__img">
                                                        <img class="item-img" src="admin/upload/'.$row['image'].'">
                                                    </div>

                                                    <h4 class="home-product-item__name">'.$row['name'].'</h4>
                                                    <div class="home-product-item__price">
                                                        <span class="home-product-item__price-old">'?><?= number_format($row['old_price'],0,",",".")?> <?php echo'đ</span>
                                                        <span class="home-product-item__price-current">'?><?= number_format($row['price'],0,",",".")?> <?php echo'đ</span>
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
                                                        <span class="home-product-item__sale-off-percent">'.$row['discount'].'%</span>
                                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                                    </div>
                                                </a>
                                            </div>
                                        ';}
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <div class="home-product">
                                <?php
                                    $sql = "SELECT * FROM categories WHERE id = 2";
                                    $result = $connect->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo '
                                                <div id="2" class="content-header-title">
                                                    <h3 class="tittle1">'.$row['category_name'].'</h3>
                                                </div>
                                    ';}}
                                    ?>
                                <div class="grid__row">

                                    <?php
                                    $sql = "SELECT * FROM products WHERE category_id = 2 AND `name` LIKE '%$search%'";
                                    $result = $connect->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo '
                                                <div class="grid__column-2-4">
                                                    <!-- product item -->
                                                    ' ?>
                                                    <a href="sanpham.php?id=<?php echo $row["id"] ?>" class="home-product-item">
                                                    <?php 
                                                    echo '
                                                        <div class="home-product-item__img">
                                                            <img class="item-img" src="admin/upload/'.$row['image'].'">
                                                        </div>

                                                        <h4 class="home-product-item__name">'.$row['name'].'</h4>
                                                        <div class="home-product-item__price">
                                                            <span class="home-product-item__price-old">'?><?= number_format($row['old_price'],0,",",".")?> <?php echo'đ</span>
                                                            <span class="home-product-item__price-current">'?><?= number_format($row['price'],0,",",".")?> <?php echo'đ</span>
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
                                                            <span class="home-product-item__sale-off-percent">'.$row['discount'].'%</span>
                                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                                        </div>
                                                    </a>
                                                </div>
                                        ';}
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <div class="home-product">
                                <?php
                                    $sql = "SELECT * FROM categories WHERE id = 3";
                                    $result = $connect->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo '
                                                <div id="3" class="content-header-title">
                                                    <h3 class="tittle1">'.$row['category_name'].'</h3>
                                                </div>
                                    ';}}
                                    ?>
                                <div class="grid__row">

                                    <?php
                                    $sql = "SELECT * FROM products WHERE category_id = 3 AND `name` LIKE '%$search%'";
                                    $result = $connect->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo '
                                            <div class="grid__column-2-4">
                                                <!-- product item -->
                                                ' ?>
                                                <a href="sanpham.php?id=<?php echo $row["id"] ?>" class="home-product-item">
                                                <?php 
                                                echo '
                                                    <div class="home-product-item__img">
                                                        <img class="item-img" src="admin/upload/'.$row['image'].'">
                                                    </div>

                                                    <h4 class="home-product-item__name">'.$row['name'].'</h4>
                                                    <div class="home-product-item__price">
                                                        <span class="home-product-item__price-old">'.$row['old_price'].'</span>
                                                        <span class="home-product-item__price-current">'.$row['price'].'</span>
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
                                                        <span class="home-product-item__sale-off-percent">'.$row['discount'].'%</span>
                                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                                    </div>
                                                </a>
                                            </div>
                                        ';}
                                    }
                                    ?>
                                </div>
                                
                                <?php include("./public/layout/page.php"); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include("./public/layout/footer.php"); ?>

        </div>

       
        <!-- Active category -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>

        <script type="text/javascript">
            $(document).on('click','.categogy-item', function(){
                $(this).addClass('categogy-item--active').siblings().removeClass('categogy-item--active')
            })
        </script>
</body>

</html>