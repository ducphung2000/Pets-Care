<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://logosrated.net/wp-content/uploads/parser/Pet-care-Logo-1.png" type="image/x-icon" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Care</title>
    <?php include("./accsets/layout/head.html"); ?> 
</head>
<body>
    <div class="app">
        <?php include("./accsets/layout/header.html"); ?>

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
                                    <a href="sanpham.php" class="home-product-item">
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
                                    <a href="sanpham.php" class="home-product-item">
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
                                    <a href="sanpham.php" class="home-product-item">
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
                                    <a href="sanpham.php" class="home-product-item">
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
                                    <a href="sanpham.php" class="home-product-item">
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
                                    <a href="sanpham.php" class="home-product-item">
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
                                    <a href="sanpham.php" class="home-product-item">
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
                                    <a href="sanpham.php" class="home-product-item">
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
                                    <a href="sanpham.php" class="home-product-item">
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
                                    <a href="sanpham.php" class="home-product-item">
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

        
        <?php include("./accsets/layout/footer.html"); ?>

    </div>
    
</body>
</html>