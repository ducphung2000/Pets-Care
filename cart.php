<?php
    session_start();
    require_once 'admin/connect.php';
    $connect = ConnectDB();

    if(!isset($_SESSION["users"])){
        header("location:./account/login/login.php");
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://logosrated.net/wp-content/uploads/parser/Pet-care-Logo-1.png" type="image/x-icon" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Care - Giỏ hàng</title>
    <?php include("./public/layout/head.php");?>
    <link rel="stylesheet" href="./public/csslayout/home.css">
    <link rel="stylesheet" href="./public/csslayout/sanpham.css">
    <link rel="stylesheet" href="./public/csslayout/cart.css">
</head>
<body>
    <?php 
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }
        if(isset($_GET['action'])){
            function update_cart($add = false){
                foreach($_POST['quantity'] as $id => $quantity) {
                    if($quantity == 0){
                        unset($_SESSION['cart'][$id]);

                    }else{
                        if($add){
                            $_SESSION['cart'][$id] += $quantity;
                        }else{
                            $_SESSION['cart'][$id] = $quantity;
                        }
                    }
                }
            }
            switch($_GET['action']){
                case "add":
                    // var_dump($_POST);exit;
                    update_cart(true);
                    header("location:./cart.php");
                    break;

                case "delete":
                    if(isset($_GET['id'])){
                        unset($_SESSION['cart'][$_GET['id']]);
                    }
                    header("location:./cart.php");
                    // var_dump($_SESSION['cart']);exit;
                    break;
                case "submit":
                    if(isset($_POST['update_click'])){ // Cập nhật giỏ hàng
                        update_cart();
                        header("location:./cart.php");
                    }elseif($_POST['order_click']){ // đặt hàng

                    }
                    break;
            }
        }
        if(!empty($_SESSION['cart'])){
            $products = mysqli_query($connect,"SELECT *FROM products WHERE id IN (".implode(",", array_keys($_SESSION["cart"])).")");
        }
    ?>

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
                        
                        <!-- Account -->
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

                        <div class="logo_text">Giỏ Hàng</div>
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
            <div class="grid">
                <form action="cart.php?action=submit" method="POST" class="container-content">
                    <div class="container-content__top">
                        <div class="text__left">Sản Phẩm</div>
                        <div class="text-right__item">Đơn Giá</div>
                        <div class="text-right__item">Số Lượng</div>
                        <div class="text-right__item">Số tiền</div>
                        <div class="text-right__item">Thao Tác</div>
                    </div>

                    <div class="container-content__main">
                        
                        <div class="main-product__list">
                            <?php 
                                $num =1;
                                while($row = mysqli_fetch_array($products)) {
                                echo '
                                    <div class="main-product__item">

                                        <div class="main-product__item-product ">
                                            <a href="#" class="item-product__link">
                                                <img src="./public/img/'.$row['image'].'" alt="Ảnh của sản phẩm" class="item-product__img">
                                            
                                                <div class="item-product__text">'.$row['name'].'</div>
                                            </a>
                                        </div>

                                        <div class="item-product__sectors">
                                            <div class="item-product__sectors-text">
                                                <span>Phân loại hàng:</span> 
                                                <i class="fas fa-sort-down item-product__sectors-icon"></i>
                                            </div>
                                            <input type="text" value="'.$row['type1'].'" class="item-product__sectors-about">
                                        </div>

                                        <div class="item-product__price">
                                            <div class="item-product__price-old">'.$row['old_price'].'</div> 
                                            <div class="item-product__price-sale">'.$row['price'].'</div> 
                                        </div>

                                        <div class="choose-main__quantity-number">
                                            
                                            <input type="text" name="quantity['.$row['id'].']" class="quantity-number__num" value="'?><?=$_SESSION['cart'][$row['id']]?><?php echo '">
                                            
                                        </div>

                                        <div class="item-product__money">'.$row['price'].'</div>

                                        <div class="item-product__delete">
                                            <a href="cart.php?action=delete&id='.$row['id'].'">Xoá</a>
                                        
                                        </div>
                                    </div>

                                    '; } 
                                    
                                ?>
                            <div class="conteainer-content_total">
                                <div class="container-content__bot-left">
                                    <div class="content__bot-text">Tổng Tiền:</div>
                                </div>
                                
                                <div class="container-content__bot-right">
                                    <div class="content__bot-total">0đ</div>
                                    <input type="submit" name="update_click" class="container-content__bot-btn btn btn--primary" value="Cập nhật">
                                </div>
                            </div>
                            
                        </div>

                    </div>

                    
                    <div class="content__top-main">
                        <div class="top-main__address">
                            <i class="fas fa-map-marker-alt"></i>
                            Địa Chỉ Nhận Hàng
                        </div>
                        <div class="top-main__address-text">
                            <div class="address-text__info">
                                <span>Họ & Tên và Số điện thoại:</span>
                                <input class="address-text__info-individual" type="text" placeholder="Nhập tên và số điện thoại của bạn..." value="">
                                <span>Địa chỉ nhận hàng:</span>
                                <input class="address-text__info-address" type="text" placeholder="Nhập  địa chỉ nhận hàng của bạn..." value="">
                            </div>
                        </div>
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


                    <div class="container-content__bottom ">
                        <div class="container-content__bot-payment grid__full-width">
                            <div class="bot-payment__text">Phương thức thanh toán</div>
    
                            <div class="bot-payment__method">
                                <div class="bot-payment__method-live">
                                    <div class="method__btn btn method__btn-onl--active">Thanh toán khi nhận hàng</div>
                                </div>

                                <div class="bot-payment__method-onl">
                                    <!-- <div class="btn method__btn ">Thanh toán trực tuyến</div> -->
                                </div>
                                
                            </div>
                        </div>


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
                </form>
            </div>


            <?php include("./public/layout/footer.php");?>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>


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