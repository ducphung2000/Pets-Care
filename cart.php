<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://logosrated.net/wp-content/uploads/parser/Pet-care-Logo-1.png" type="image/x-icon" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Care</title>
    <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"></Link>
    <link rel="stylesheet" href="./accsets/css/base.css">
    <link rel="stylesheet" href="./accsets/css/main.css">
    <link rel="stylesheet" href="./accsets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./accsets/css/home.css">
    <link rel="stylesheet" href="./accsets/css/sanpham.css">
    <link rel="stylesheet" href="./accsets/css/cart.css">
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
                        
                         <li class="header__navbar-item header__navbar-user">
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
                                    <a href="user.html">Đơn mua</a>
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
                        <a href="index.html" class="header__logo-link">
                            <img src="./accsets/img/Pet-Care-Logo.png" alt="" class="header__logo-img">
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
                <div class="container-content">
                    <div class="container-content__top">
                        <label for="" class="content__input">
                            <input type="checkbox" class="input__check" >
                        </label>
                        <div class="text__left">Sản Phẩm</div>
                        <div class="text-right__item">Đơn Giá</div>
                        <div class="text-right__item">Số Lượng</div>
                        <div class="text-right__item">Số tiền</div>
                        <div class="text-right__item">Thao Tác</div>
                    </div>

                    <div class="container-content__main">
                        
                        <ul class="main-product__list">
                            <li class="main-product__item">
                                <label for="" class="content__input">
                                    <input type="checkbox" class="input__check" >
                                </label>

                                <div class="main-product__item-product">
                                    <a href="#" class="item-product__link">
                                        <img src="./accsets/img/xucxich.png" alt="Xúc xích chó mèo" class="item-product__img">
                                    
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
                                    <div class="item-product__price-old">150.000đ</div> 
                                    <div class="item-product__price-sale">120.000đ</div> 
                                </div>

                                <div class="choose-main__quantity-number">
                                    <button class="quantity-number__icon-minus">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="text" class="quantity-number__num" value="1">
                                    <button class="quantity-number__icon-plus">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="item-product__money">120.000đ</div>

                                <div class="item-product__delete">Xoá</div>
                            </li>
                            <li class="main-product__item">
                                <label for="" class="content__input">
                                    <input type="checkbox" class="input__check" >
                                </label>

                                <div class="main-product__item-product">
                                    <a href="#" class="item-product__link">
                                        <img src="./accsets/img/xucxich.png" alt="Xúc xích chó mèo" class="item-product__img">
                                    
                                        <div class="item-product__text">xúc xích ở đây ngon lắm ^^</div>
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
                                    <div class="item-product__price-old">150.000đ</div> 
                                    <div class="item-product__price-sale">120.000đ</div> 
                                </div>

                                <div class="choose-main__quantity-number">
                                    <button class="quantity-number__icon-minus">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="text" class="quantity-number__num" value="1">
                                    <button class="quantity-number__icon-plus">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="item-product__money">120.000đ</div>

                                <div class="item-product__delete">Xoá</div>
                            </li>
                            <li class="main-product__item">
                                <label for="" class="content__input">
                                    <input type="checkbox" class="input__check" >
                                </label>

                                <div class="main-product__item-product">
                                    <a href="#" class="item-product__link">
                                        <img src="./accsets/img/xucxich.png" alt="Xúc xích chó mèo" class="item-product__img">
                                    
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
                                    <div class="item-product__price-old">150.000đ</div> 
                                    <div class="item-product__price-sale">120.000đ</div> 
                                </div>

                                <div class="choose-main__quantity-number">
                                    <button class="quantity-number__icon-minus">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="text" class="quantity-number__num" value="1">
                                    <button class="quantity-number__icon-plus">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="item-product__money">120.000đ</div>

                                <div class="item-product__delete">Xoá</div>
                            </li>
                            <li class="main-product__item">
                                <label for="" class="content__input">
                                    <input type="checkbox" class="input__check" >
                                </label>

                                <div class="main-product__item-product">
                                    <a href="#" class="item-product__link">
                                        <img src="./accsets/img/xucxich.png" alt="Xúc xích chó mèo" class="item-product__img">
                                    
                                        <div class="item-product__text">xúc xích ở đây ngon lắm ^^</div>
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
                                    <div class="item-product__price-old">150.000đ</div> 
                                    <div class="item-product__price-sale">120.000đ</div> 
                                </div>

                                <div class="choose-main__quantity-number">
                                    <button class="quantity-number__icon-minus">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="text" class="quantity-number__num" value="1">
                                    <button class="quantity-number__icon-plus">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <div class="item-product__money">120.000đ</div>

                                <div class="item-product__delete">Xoá</div>
                            </li>
                            
                        </ul>

                    </div>

                    <div class="container-content__bot">
                        <div class="container-content__bot-left">
                            <label for="" class="content__input">
                                <input type="checkbox" class="input__check" >
                            </label>
                            <button class="content__bot-select-all">Chọn Tất Cả</button>
                            <div class="content__bot-delete">Xoá</div>
                        </div>
                        
                        <div class="container-content__bot-right">
                            <div class="content__bot-text">Tổng Thanh Toán:</div>
                            <div class="content__bot-total">0đ</div>
                            <a href="pay.html" class="container-content__bot-btn btn btn--primary">Mua Hàng</a>
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
                    <p class="footer__text">© 2021 - Bản quyền thuộc về Đức Phụng</p>
                </div>
            </div>
        </footer>

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