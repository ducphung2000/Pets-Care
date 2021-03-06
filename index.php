<?php
    session_start();
    require_once 'admin/connect.php';
    $connect = ConnectDB();

    // if(!isset($_SESSION["users"])){
    //     header("location:./account/login/login.php");
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://logosrated.net/wp-content/uploads/parser/Pet-care-Logo-1.png" type="image/x-icon" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Care-Trang chủ</title>
    <?php include("./public/layout/head.php");?>
    <link rel="stylesheet" href="./public/csslayout/register.css">
    <link rel="stylesheet" href="./public/csslayout/home.css">

</head>
<body>
    <div class="app">
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
                                <i class="header__navbar-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <p class="no-notify">Không có thông báo.</p>
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
                        <?php 
                            include("./public/layout/header_user.php");
                        ?>

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
                            <a href="index.php" class="header__menu-item-title header__menu-item-title--active">Trang chủ</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-item-title">Giới Thiệu</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="product.php" class="header__menu-item-title">Sản Phẩm</a>
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
            <div class="grid__full-width container-top">
                <div class=" container-top__banner">
                    <img src="./public/img/banner.jpg" alt="banner" class="banner-img">
                </div>
            
                <!-- <a href="./account/login/logout.php" title="logout" class="btn btn--primary">logout</a> -->
                
                <div class="grid">
                    <div class=" container-main">
                        <div class=" main__content">
                            <div class="main__content-item main__content-item--bg1">
                                <div class="main__content-item-img">
                                    <img src="./public/img/dog.png" alt="" class="content-img">
                                </div>  
                                <div class="main__content-item-title">
                                    <p>Tiết Kiệm</p>
                                    <h2>25%</h2>
                                    <a href="product.php" class="main__content-btn">Thức ăn chó mèo</a>
                                </div>
                            </div>

                            <div class="main__content-item main__content-item--bg2">
                                <div class="main__content-item-img ">
                                    <img src="./public/img/cat.png" alt="" class="content-img">
                                </div>  
                                <div class="main__content-item-title">
                                    <p>Tư vấn</p>
                                    <h2>Miễn phí</h2>
                                    <a href="" class="main__content-btn">Tư vấn online</a>
                                </div>
                            </div>

                            <div class="main__content-item main__content-item--bg3">
                                <div class="main__content-item-img">
                                    <img src="./public/img/dog2.png" alt="" class="content-img">
                                </div>  
                                <div class="main__content-item-title">
                                    <p>Có hạn</p>
                                    <p>Tiết kiệm đến</p>
                                    <h2>45%</h2>
                                    <a href="" class="main__content-btn">Nhiều hơn</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid__full-width container-bot">
                <div class="grid">
                    <div class="bot__content">
                        <div class="bot__content-heading">
                            <h2>Sản phẩm đáng quan tâm</h2>
                        </div>
                        <div class="grid__row bot__content-product">
                            <ul class="content-product__list">
                            <?php 
                                            $sql = "select * from products where id < 5 order by create_at DESC";
                                            $result = $connect->query($sql);
                                
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    echo '
                                            <li class="grid__column-2-5 content-product__item">
                                                <div class="content-product__img">
                                                    <img src="admin/upload/'.$row["image"].'" alt="Ảnh sản phẩm" class="product__img">
                                                </div>
                                                <div class="content-product__purchase">
                                                    <p class="content-product__purchase-text">'.$row["name"].'</p>
                                                    <p class="content-product__purchase-price">'?><?= number_format($row['price'],0,",",".")?><?php echo'đ</p>
                                                    <a href="sanpham.php?id='.$row["id"].'" class="content-product__purchase-btn btn btn--primary">Mua hàng</a>
                                                </div>
                                            </li>'
                                ;}}?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid__full-width container-intro">
                <div class="grid">
                    <div class="container-box">
                        <img src="https://www.petcity.vn/media/banner/22_Juld78284be194a2ab39dc420154456e4df.png" alt="" class="container-box__img">
                    </div>
                </div>
            </div>

            <div class="grid__full-width container-news">
                <div class="grid">
                    <div class="news-content">
                        <ul class="news-content__list">
                            <li class="news-content__item">
                                <div class="news-content__item-icon">
                                    <img src="./public/img/intro1.png" alt="" class="news-content__item-icon-img">
                                </div>
                                <div class="news-content__item-box">
                                    <h2 class="news-content__item-heading">Dinh dưỡng</h2>
                                    <p class="news-content__text">Ý kiến chuyên gia về dinh dưỡng & chăm sóc cho thú cưng</p>
                                    <a href="" class="news-content__item-btn btn btn--primary">Đọc ngay</a>
                                </div>
                            </li>
                            <li class="news-content__item">
                                <div class="news-content__item-icon">
                                    <img src="./public/img/intro4.png" alt="" class="news-content__item-icon-img">
                                </div>
                                <div class="news-content__item-box">
                                    <h2 class="news-content__item-heading">Chăm sóc</h2>
                                    <p class="news-content__text">Tips chăm sóc thú cưng & giúp hiểu hành vi thú cưng </p>
                                    <a href="" class="news-content__item-btn btn btn--primary">Đọc ngay</a>
                                </div>
                            </li>
                            <li class="news-content__item">
                                <div class="news-content__item-icon">
                                    <img src="./public/img/intro2.png" alt="" class="news-content__item-icon-img">
                                </div>
                                <div class="news-content__item-box">
                                    <h2 class="news-content__item-heading">Huấn luyện</h2>
                                    <p class="news-content__text">Tips phương pháp huấn luyện & giao tiếp với thú cưng</p>
                                    <a href="" class="news-content__item-btn btn btn--primary">Đọc ngay</a>
                                </div>
                            </li>
                            <li class="news-content__item">
                                <div class="news-content__item-icon">
                                    <img src="./public/img/intro3.png" alt="" class="news-content__item-icon-img">
                                </div>
                                <div class="news-content__item-box">
                                    <h2 class="news-content__item-heading">Hỏi đáp</h2>
                                    <p class="news-content__text">Hỏi - Đáp với Chuyên gia về các vấn đề liên quan tới thú cưng</p>
                                    <a href="" class="news-content__item-btn btn btn--primary">Đọc ngay</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php include("./public/layout/footer.php");?>
        </div>

    </div>

    <!-- Register Form -->
    <?php 
    // include("./public/layout/register.php");
    ?>


    <!-- login Form -->
    <?php
    //  include("./public/layout/login.php");
     ?> 

    <?php
    //  include("./public/layout/js_user.php");
     ?>

</body>
</html>