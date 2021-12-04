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
    <title>Pets Care - Thanh toán</title>
    <?php include("./public/layout/head.php");?> 
    <link rel="stylesheet" href="./public/csslayout/home.css">
    <link rel="stylesheet" href="./public/csslayout/sanpham.css">
    <link rel="stylesheet" href="./public/csslayout/cart.css">
    <link rel="stylesheet" href="./public/csslayout/pay.css">
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
                        </li> 
                    </ul>
                </nav>
        
                <!-- Header with search -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="index.php" class="header__logo-link">
                            <img src="./public/img/Pet-Care-Logo.png" alt="" class="header__logo-img">
                        </a>

                        <div class="logo_text">Thanh Toán</div>
                        
                    </div>
        
                    
                </div>
            </div>
        </header>

        <div class="app__container">
            <div class="grid">
                <div class="container-content">
                    <div class="container-content__top">
                        <div class="content__top-boder">

                        </div>

                        <div class="content__top-main">
                            <div class="top-main__address">
                                <i class="fas fa-map-marker-alt"></i>
                                Địa Chỉ Nhận Hàng
                            </div>
                            <div class="top-main__address-text">
                                <div class="address-text__info">
                                    <div class="address-text__info-individual"> Nguyễn Đức Phụng (+84) 919873827</div>
                                    <div class="address-text__info-address">18 Phố Viên, Phường Đức Thắng, Quận Bắc Từ Liêm, Hà Nội</div>
                                </div>
                                <div class="address-text__change">Thay đổi</div>
                            </div>
                        </div>
                    </div>

                    <div class="container-content__main">
                        <div class="container-content__main-top">
                            <div class="main-top__left">Sản Phẩm</div>
                            <div class="main-top__right">
                                <div class="main-top__right-unit-price">Đơn Giá</div>
                                <div class="main-top__right-quantity">Số Lượng</div>
                                <div class="main-top__right-into-money">Thành Tiền</div>
                            </div>
                        </div>
                        
                        <div class="container-content__main-info">
                            <ul class="main-product__list">
                                <li class="main-product__item">
                                    <div class="main-product__item-product">
                                        <a href="sanpham.php" class="item-product__link">
                                            <img src="./public/img/xucxich.png" alt="Xúc xích chó mèo" class="item-product__img">
                                        
                                            <div class="item-product__text">xúc xích ở đây ngon lắm  ^^</div>
                                        </a>
                                    </div>
    
                                    <div class="item-product__sectors">
                                        <div class="item-product__sectors-text">
                                            <span>Phân loại hàng:</span> 
                                            <i class="fas fa-sort-down item-product__sectors-icon"></i>
                                        </div>
                                        <div class="item-product__sectors-about">Vị Bò</div>
                                    </div>
    
                                    <div class="item-product__price">
                                        <div class="item-product__price-sale">120.000đ</div> 
                                    </div>
    
                                    <div class="quantity-number__num">1</div>
    
                                    <div class="item-product__money">120.000đ</div>
    
                                </li>
                                
                            </ul>
                        </div>

                        <div class="container-content__main-about">
                            <div class="main-about__mess">
                                <div class="main-about__mess-content">
                                    <span>Lời nhắn:</span>
                                    <div class="main-about__input-mess">
                                        <input class="mess-input" type="text" placeholder="Lưu ý cho Người bán..." value="">
                                    </div>
                                </div>
                            </div>
                            <div class="main-about__trans">
                                <div class="main-about__trans-top">
                                    <div class="trans-top__label">Đơn vị vận chuyển:</div>
                                    <div class="trans-top__unit">
                                        <div>Nhanh</div>
                                        <div class="trans-top__unit-appoint">Nhận hàng vào 25 Th10 - 3 Th11</div>
                                    </div>
                                    <div class="trans-top__change">Thay đổi</div>
                                    <div class="trans-top__price-ship">₫20.100</div>
                                </div>
                                <div class="main-about__trans-bot">(Do ảnh hưởng của Covid-19,thời gian giao hàng có thể dài hơn dự kiến từ 1-5 ngày)</div>
                            </div>
                        </div>

                        <div class="container-content__main-statistical">
                            <div class="main-statistical__text">Tổng số tiền (2 sản phẩm):</div>
                            <div class="main-statistical__number">140.100đ</div>
                        </div>
                    </div>

                    <div class="container-content__bottom ">
                        <div class="container-content__bot-payment grid__full-width">
                            <div class="bot-payment__text">Phương thức thanh toán</div>
    
                            <div class="bot-payment__method">
                                <div class="bot-payment__method-live">
                                    <div class="method__btn btn method__btn-onl--active">Thanh toán khi nhận hàng</div>
                                </div>

                                <div class="bot-payment__method-onl">
                                    <div class="btn method__btn ">Thanh toán trực tuyến</div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- <div class="payment-onl__card ">
                            <div class="payment-onl__card-text">Chọn thẻ</div>
                            <div class="payment-onl__card-btn">
                                <ul class="payment-onl__card-list">
                                    <li class="payment-onl__card-item">
                                        <img src="./public/img/bidv.jpg" alt="" class="payment-onl__card-item__img payment-onl__card-item__img--active ">
                                        
                                        <img src="./public/img/agribank.jpg" alt="" class="payment-onl__card-item__img">
                                    </li>
                                    <li class="payment-onl__card-item">
                                        <img src="./public/img/vpbannk.jfif" alt="" class="payment-onl__card-item__img">
                                        
                                        <img src="./public/img/viettinbank.png" alt="" class="payment-onl__card-item__img">
                                    </li>
                                    <li class="payment-onl__card-item">
                                        <img src="./public/img/samcombank.jpg" alt="" class="payment-onl__card-item__img">
                                        
                                        <img src="./public/img/Techcombank.png" alt="" class="payment-onl__card-item__img">
                                    </li>
                                </ul>
                            </div>
                        </div> -->

                        <div class="container-content__bot-pay">
                            <div class="container-content__bot-pay-top">
                                <div class="bot-pay-top__item">
                                    <div class="bot-pay-top__text">Tổng tiền hàng</div>
                                    <div class="bot-pay-top__number">120.000đ</div>
                                </div>
                                <div class="bot-pay-top__item">
                                    <div class="bot-pay-top__text">Phí vận chuyển</div>
                                    <div class="bot-pay-top__number">20.100đ</div>
                                </div>
                                <div class="bot-pay-top__item">
                                    <div class="bot-pay-top__all-pay-text">Tổng thanh toán:</div>
                                    <div class="bot-pay-top__all-pay-number">140.100đ</div>
                                </div>
                            </div>
                            <div class="container-content__bot-pay-bot">
                                <div class="bot-pay-bot__text">Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo <a href="#">Điều khoản của shop</a></div>
                                <button class="bot-pay-bot__btn btn btn--primary">Đặt hàng</button>
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