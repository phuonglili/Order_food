<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4Fun Food Website</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--Link icon-->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!--link line icon-->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- header section starts  -->
    <header class="header">
        <!--phần header-->
        <div class="grid">
            <nav class="header__navbar">
                <!--Dựng khung web-->
                <!--Vào cửa hàng trên ứng dụng, kết nối-->
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                        Vào cửa hàng trên ứng dụng
                        <!--QR CODE-->
                        <div class="header__qr">
                            <img src="image/qr_code.png" alt="QR code" class="header__qr-img">
                            <div class="header__qr-apps">
                                <a href="" class="header__qr-link">
                                    <img src="image/chplay.png" alt="CH play" class="header__qr-dowload-img">
                                </a>
                                <a href="" class="header__qr-link">
                                    <img src="image/appstore.png" alt="App store" class="header__qr-dowload-img">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="header__navbar-item">
                        <span class="header__navbar-title--no-poiter">Kết nối</span>
                        <a href="" class="header__navbar-icon-link">
                            <!--Do ấn được nên phải để trong thẻ-->
                            <i class="header__navbar-icon1 header__navbar-icon lab la-facebook"></i>
                        </a>
                        <a href="" class="header__navbar-icon-link">
                            <i class="header__navbar-icon1 header__navbar-icon lab la-instagram"></i>
                        </a>
                    </li>
                </ul>
                <!--Thông báo, trợ giúp, đăng kí, đăng nhập-->
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--has-notify">
                        <a href="" class="header__navbar-item-link">
                            <!--Form ẩn dưới chữ thông báo-->
                            <i class="header__navbar-icon fa fa-bell"></i>
                            Thông báo
                            <!--ấn vào được-->
                            <!--notify dưới chữ thông báo-->
                            <!--ấn nhanh Ctrl + D để chọn chữ giống nhau, Shift Alt -> đề chọn hết
                                Bôi đen rồi Alt  với phím-> để di chuyển -->
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link header__notify-item--viewed">
                                            <img src="" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Xác thực chính hãng nguồn gốc các sản phẩm 4FFood</span>
                                                <span class="header__notify-descriotion">HiddenTag là giải pháp xác thực hàng chính hãng bằng công nghệ tiên tiến nhất hiện nay</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link header__notify-item--viewed">
                                            <img src="https://cf.shopee.vn/file/86773ac686448ddcbb60e3b454d2e1f0_tn" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Sale sốc bộ dưỡng Ohui The First Tái tạo trẻ hóa da SALE OFF 70%</span>
                                                <span class="header__notify-descriotion">Gía chỉ còn 375.000 (giá gốc 1.250.000 vnd)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="https://cf.shopee.vn/file/86773ac686448ddcbb60e3b454d2e1f0_tn" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Ohui chính thức ra mắt dòng son lì mới THE FIRST GENITURE LIPSTICK</span>
                                                <span class="header__notify-descriotion">Một làn môi căng mềm, quyến rũ với sắc màu nổi bật luôn là điều mà các quý cô ao ước</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">
                            <i class="header__navbar-icon fa fa-question-circle"></i>
                            Trợ giúp</a>
                        <!--ấn vào được-->
                    </li>
                    <!-- <a href="#" class="header__navbar-item header__navbar-item-strong header__navbar-item--separate" id="login-btn">Đăng nhập</a>
                    <a href="#" class="header__navbar-item header__navbar-item-strong" id="sign-up">Đăng ký</a> -->
                    <li class="header__navbar-item header-navbar-user">
                        <img src="image/admin.jpg" alt="" class="header__navbar-user-img">
                        <span class="header__navbar-user-name">4FFood</span>

                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item">
                                <a href="">Tài khoản của tôi</a>
                            </li>
                            <li class="header__navbar-user-item">
                                <a href="">Đơn mua</a>
                            </li>
                            <li class="header__navbar-user-item header__navbar-user-item--separate">
                                <a href="index.php">Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Form đăng nhập -->
                    <div class="login-form-container login">
                        <div id="close-login-btn" class="fas fa-times close"></div>
                        <form action="login.php" method="POST">
                            <h3>Đăng nhập</h3>
                            <span>Tài khoản</span>
                            <input type="text" name="user_name" class="box" placeholder="User" id="">
                            <span>Mật khẩu</span>
                            <input type="password" name="user_pass" class="box" placeholder="Password" id="">
                            <div class="checkbox">
                                <input type="checkbox" name="" class="remember-me">
                                <label for="remember-me">Nhớ mật khẩu</label>
                            </div>
                            <!-- <input type="submit" value="Sign in" class="btn btn-sign-in" name="login"> -->
                            <input type="submit" name="login" class="btn btn-sign-in">Đăng nhập</input>
                            <p>Quên mật khẩu ? <a href="#">Bấm vào đây</a></p>
                            <?php 

                            ?>
                        </form>
                    </div>

                    <!-- Form đăng kí -->
                    <div class="signup-form-container signup">
                        <div id="close-signup-btn" class="fas fa-times close"></div>
                        <form action="" method="POST">
                            <h3>Đăng ký</h3>
                            <span>Tài khoản</span>
                            <input type="text" name="user_name1" class="box" placeholder="Enter your username" id="">
                            <span>Mật khẩu</span>
                            <input type="password" name="user_pass1" class="box" placeholder="Enter your password" id="">
                            <span>Xác nhận mật khẩu</span>
                            <input type="password" name="user_pass1" class="box" placeholder="Enter your password" id="">
                            <!-- <input type="submit" value="Sign in" class="btn btn-sign-in" name="login"> -->
                            <button type="submit" name="signup" class="btn btn-sign-in">Đăng ký</button>
                            
                        </form>
                    </div>

                </ul>
            </nav>
            <!--Header with search-->
            <div class="header-with-search">
                <div class="header__logo">
                    <a href="index.php" class="header__logo-link">
                        <i class="fas fa-utensils"></i>
                        <span>4FFood</span>
                    </a>
                </div>
                <div class="header__search">
                    <div class="header__search-input-wrap">
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm món ăn">
                        <!--Search history-->
                        <div class="header__search-history">
                            <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                            <ul class="header__search-history-list">
                                <li class="header__search-history-item">
                                    <a href="">Bánh mỳ kẹp bò</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="">Há cảo nướng</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="">Cánh gà chiên</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__search-select">
                        <span class="header__search-select-label">Tên món ăn</span>
                        <i class="header__search-select-icon fas fa-angle-down"></i>
                        <ul class="header__search-option">
                            <li class="header__search-option-item header__search-option-item--active">
                                <span>Tên món</span>
                                <i class="fas fa-check"></i>
                            </li>
                            <li class="header__search-option-item">
                                <span>Loại món</span>
                                <i class="fas fa-check"></i>
                            </li>
                        </ul>
                    </div>
                    <button class="header__search-btn">
                        <i class="header__search-btn-icon fas fa-search"></i>
                    </button>
                </div>
                <!---->
                <div class="header__cart">
                    <div class="header__cart-wrap">
                        <i class="header__cart-icon fas fa-shopping-cart"></i>
                        <span class="header__cart-notice">7</span>

                        <!--không có sản phẩm header__cart-list--no-cart-->
                        <div class="header__cart-list">
                            <img src="image/no_cart.png" alt="" class="header__cart-no-cart-img">
                            <span class="header__cart-list-no-cart-msg">Chưa có sản phẩm</span>

                            <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                            <ul class="header__cart-list-item">
                                <!--giỏ hàng item-->
                                <li class="header__cart-item">
                                    <img src="image/mon1.jpg" alt="" class="header__cart-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">Buger 2 miếng bò phô mai</h5>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">99.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__car-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại: L
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="image/mon1.jpg" alt="" class="header__cart-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">Buger 2 miếng bò phô mai</h5>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">99.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__car-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại: L
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="image/mon1.jpg" alt="" class="header__cart-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">Buger 2 miếng bò phô mai</h5>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">99.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__car-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại: L
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="image/mon1.jpg" alt="" class="header__cart-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">Buger 2 miếng bò phô mai</h5>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">99.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__car-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại: L
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="image/mon1.jpg" alt="" class="header__cart-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">Buger 2 miếng bò phô mai</h5>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">99.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__car-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại: L
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="image/mon1.jpg" alt="" class="header__cart-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">Buger 2 miếng bò phô mai</h5>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">99.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__car-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại: L
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="image/mon1.jpg" alt="" class="header__cart-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-head">
                                            <h5 class="header__cart-item-name">Buger 2 miếng bò phô mai</h5>
                                            <div class="header__cart-item-price-wrap">
                                                <span class="header__cart-item-price">99.000đ</span>
                                                <span class="header__cart-item-multiply">x</span>
                                                <span class="header__car-item-qnt">2</span>
                                            </div>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <span class="header__cart-item-description">
                                                Phân loại: L
                                            </span>
                                            <span class="header__cart-item-remove">Xóa</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="category.php" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section ends  -->
    <!-- search-form  -->
    <section class="search-form-container">
        <form action="">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </section>
    <!-- shopping-cart section  -->
    <!-- login-form  -->
    <!-- home section starts  -->
    <section class="home" id="home">
        <div class="content">
            <span>Chào mừng đến với cửa hàng!</span>
            <h3>Các loại gia vị khác nhau mang đến khẩu vị khác nhau.</h3>
            <a href="order.php" class="btn">Đặt ngay</a>
        </div>
        <div class="image">
            <img src="image/home-img.png" alt="" class="home-img">
            <img src="image/home-parallax-img.png" alt="" class="home-parallax-img">
        </div>
    </section>
    <!-- home section ends  -->
    <!-- category section starts  -->
    <section class="category">
        <a href="#" class="box">
            <img src="image/cat-1.png" alt="">
            <h3>Combo</h3>
        </a>
        <a href="#" class="box">
            <img src="image/cat-2.png" alt="">
            <h3>Pizza</h3>
        </a>
        <a href="#" class="box">
            <img src="image/cat-3.png" alt="">
            <h3>Bugger</h3>
        </a>
        <a href="#" class="box">
            <img src="image/cat-4.png" alt="">
            <h3>Gà chiên</h3>
        </a>
        <a href="#" class="box">
            <img src="image/cat-5.png" alt="">
            <h3>Tráng miệng</h3>
        </a>
        <a href="#" class="box">
            <img src="image/cat-6.png" alt="">
            <h3>Cafe</h3>
        </a>
    </section>
    <!-- category section ends -->
    <!-- about section starts  -->
    <section class="about" id="about">
        <div class="image">
            <img src="image/about-img.png" alt="">
        </div>
        <div class="content">
            <h3 class="title">Những điều đã làm cho món ăn của chúng tôi trở nên ngon hơn!</h3>
            <p>Là công ty tiên phong lĩnh vực đồ ăn, chúng tôi cung cấp thức ăn ngon cho mọi người. Với hơn 14 năm phát triển, 4FF đã tích lũy và có kinh nghiệm trong các lĩnh vực khác nhau. Ngoài việc cung cấp đồ ăn, chúng tôi cũng đang theo đuổi mô hình kinh doanh tối ưu nhằm cung cấp đồ ăn ổn định và lợi ích chi phí.</p>
            <a href="#" class="btn">Đọc thêm</a>
            <div class="icons-container">
                <div class="icons">
                    <img src="image/serv-1.png" alt="">
                    <h3>Giao hàng nhanh</h3>
                </div>
                <div class="icons">
                    <img src="image/serv-2.png" alt="">
                    <h3>Thực phẩm sạch</h3>
                </div>
                <div class="icons">
                    <img src="image/serv-3.png" alt="">
                    <h3>Chất lượng tốt</h3>
                </div>
                <div class="icons">
                    <img src="image/serv-4.png" alt="">
                    <h3>Hỗ trợ 24/7</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->
    <!-- popular section starts  -->

    <section class="banner">
        <div class="heading">
            <h3>Các món ăn giảm giá hôm nay</h3>
        </div>
        <div class="row-banner">
            <div class="content">
                <span>Gấp đôi phô mai</span>
                <h3>Bánh mỳ</h3>
                <p>Với coca và khoai tây chiên</p>
                <a href="order.php" class="btn">Đặt ngay</a>
            </div>
        </div>
        <div class="grid-banner">
            <div class="grid">
                <img src="image/banner-1.png" alt="">
                <div class="content">
                    <span>Giảm giá</span>
                    <h3>Lên đến 50%</h3>
                    <a href="order.php" class="btn">Đặt ngay</a>
                </div>
            </div>
            <div class="grid">
                <img src="image/banner-2.png" alt="">
                <div class="content center">
                    <span>Giảm giá</span>
                    <h3>Lên đến 50%</h3>
                    <a href="#" class="btn">Đặt ngay</a>
                </div>
            </div>
            <div class="grid">
                <img src="image/banner-3.png" alt="">
                <div class="content">
                    <span>Đặc biệt</span>
                    <h3>Hoàn tiền 100%</h3>
                    <a href="order.php" class="btn">Đặt ngay</a>
                </div>
            </div>
        </div>
    </section>
    <div class="app__container">
        <div class="grid">
            <div class="grid__row app__content">
                <!--Danh mục-->


                <!--Product-->
                <div class="home-product">
                    <!--Grid -> Row -> Column-->
                    <div class="grid__row">
                        <div class="grid__column-2-4">
                            <!--Product item-->
                            <div class="products-container">
                                <div class="home-product-item product" data-name="p-1">
                                    <div class="home-product-item__img" style="background-image: url(image/mon1.jpg);"></div>
                                    <h4 class="home-product-item__name">Combo 2 miếng bò khoai giòn tràn phô mai (cocacola)</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">350.000đ</span>
                                        <span class="home-product-item__price-current">299.000đ</span>
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
                                            <i class="home-product-item__star--gold fas fa-star"></i>

                                        </div>
                                        <span class="home-product-item__sold">155 đã bán</span>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">4FFood</span>
                                        <span class="home-product-item__origin-name">57, Thái Hà</span>
                                    </div>

                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">15%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2-4">
                            <!--Product item-->
                            <div class="products-container">
                                <div class="home-product-item product" data-name="p-2">
                                    <div class="home-product-item__img" style="background-image: url(image/mon2.jpg);"></div>
                                    <h4 class="home-product-item__name">Burger 2 miếng bò khoai giòn tràn phô mai (bánh lớn)</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">235.000đ</span>
                                        <span class="home-product-item__price-current">189.000đ</span>
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
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">884 đã bán</span>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">4FFood</span>
                                        <span class="home-product-item__origin-name">57, Thái Hà</span>
                                    </div>

                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">20%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2-4">
                            <!--Product item-->
                            <div class="products-container">
                                <div class="home-product-item product" data-name="p-1">
                                    <div class="home-product-item__img" style="background-image: url(image/mon1.jpg);"></div>
                                    <h4 class="home-product-item__name">Combo 2 miếng bò khoai giòn tràn phô mai (cocacola)</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">350.000đ</span>
                                        <span class="home-product-item__price-current">299.000đ</span>
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
                                            <i class="home-product-item__star--gold fas fa-star"></i>

                                        </div>
                                        <span class="home-product-item__sold">155 đã bán</span>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">4FFood</span>
                                        <span class="home-product-item__origin-name">57, Thái Hà</span>
                                    </div>

                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">15%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2-4">
                            <!--Product item-->
                            <div class="products-container">
                                <div class="home-product-item product" data-name="p-2">
                                    <div class="home-product-item__img" style="background-image: url(image/mon2.jpg);"></div>
                                    <h4 class="home-product-item__name">Burger 2 miếng bò khoai giòn tràn phô mai (bánh lớn)</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">235.000đ</span>
                                        <span class="home-product-item__price-current">189.000đ</span>
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
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">884 đã bán</span>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">4FFood</span>
                                        <span class="home-product-item__origin-name">57, Thái Hà</span>
                                    </div>

                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">20%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2-4">
                            <!--Product item-->
                            <div class="products-container">
                                <div class="home-product-item product" data-name="p-1">
                                    <div class="home-product-item__img" style="background-image: url(image/mon1.jpg);"></div>
                                    <h4 class="home-product-item__name">Combo 2 miếng bò khoai giòn tràn phô mai (cocacola)</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">350.000đ</span>
                                        <span class="home-product-item__price-current">299.000đ</span>
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
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">155 đã bán</span>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">4FFood</span>
                                        <span class="home-product-item__origin-name">57, Thái Hà</span>
                                    </div>

                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">15%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2-4">
                            <!--Product item-->
                            <div class="products-container">
                                <div class="home-product-item product" data-name="p-2">
                                    <div class="home-product-item__img" style="background-image: url(image/mon2.jpg);"></div>
                                    <h4 class="home-product-item__name">Burger 2 miếng bò khoai giòn tràn phô mai (bánh lớn)</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">235.000đ</span>
                                        <span class="home-product-item__price-current">189.000đ</span>
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
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">884 đã bán</span>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">4FFood</span>
                                        <span class="home-product-item__origin-name">57, Thái Hà</span>
                                    </div>

                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">20%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2-4">
                            <!--Product item-->
                            <div class="products-container">
                                <div class="home-product-item product" data-name="p-1">
                                    <div class="home-product-item__img" style="background-image: url(image/mon1.jpg);"></div>
                                    <h4 class="home-product-item__name">Combo 2 miếng bò khoai giòn tràn phô mai (cocacola)</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">350.000đ</span>
                                        <span class="home-product-item__price-current">299.000đ</span>
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
                                            <i class="home-product-item__star--gold fas fa-star"></i>

                                        </div>
                                        <span class="home-product-item__sold">155 đã bán</span>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">4FFood</span>
                                        <span class="home-product-item__origin-name">57, Thái Hà</span>
                                    </div>

                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">15%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-2-4">
                            <!--Product item-->
                            <div class="products-container">
                                <div class="home-product-item product" data-name="p-2">
                                    <div class="home-product-item__img" style="background-image: url(image/mon2.jpg);"></div>
                                    <h4 class="home-product-item__name">Burger 2 miếng bò khoai giòn tràn phô mai (bánh lớn)</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">235.000đ</span>
                                        <span class="home-product-item__price-current">189.000đ</span>
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
                                            <i class="home-product-item__star--gold fas fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">884 đã bán</span>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">4FFood</span>
                                        <span class="home-product-item__origin-name">57, Thái Hà</span>
                                    </div>

                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">20%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <ul class="pagination home-product__pagination">
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="pagination-item pagination-item--active">
                        <a href="" class="pagination-item__link">1</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">2</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">3</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">4</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">5</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">...</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">14</a>
                    </li>
                    <li class="pagination-item">
                        <a href="" class="pagination-item__link">
                            <i class="pagination-item__icon fas fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <!-- order section ends -->
    <!-- blogs section starts  -->
    <section class="blogs" id="blogs">
        <div class="heading">
            <span>Thảo luận</span>
            <h3>Những bài viết hàng ngày</h3>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="tags">
                        <a href="#"> <i class="fas fa-tag"></i> food / </a>
                        <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                        <a href="#"> <i class="fas fa-tag"></i> pizza </a>
                    </div>
                    <h3>Hamburger</h3>
                    <p>Hamburgers ở Úc và New Zealand thường có cà chua, rau diếp, pho mát và một ít thịt (có tẩm nước sốt BBQ hoặc nước sốt cà chua), và thường có củ cải đường, hành tây, trứng, thịt hun khói và dứa (còn gọi là "burger with the lot). "BLT" có nghĩa là hamburger dùng kèm với thịt hun khói, rau diếp, và cà chua mà bạn nên thử.
                    </p>
                    <a href="#" class="btn">Đọc thêm</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="tags">
                        <a href="#"> <i class="fas fa-tag"></i> food / </a>
                        <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                        <a href="#"> <i class="fas fa-tag"></i> pizza </a>
                    </div>
                    <h3>Burrito</h3>
                    <p>Burrito là gì? Burrito là một món bánh truyền thống của Mexico, có hai thành phần chính đó là vỏ bánh và nhân bánh. Sự kết hợp giữa các thành phần trong món bánh Burrito này mang đến cho người thưởng thức cảm giác thích thú, ngon miệng và bị cuốn hút bởi độ dai giòn của vỏ bánh kết hợp với phần nhân bánh thơm ngon mà bạn nên thử.
                    </p>
                    <a href="#" class="btn">Đọc thêm</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="tags">
                        <a href="#"> <i class="fas fa-tag"></i> food / </a>
                        <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                        <a href="#"> <i class="fas fa-tag"></i> pizza </a>
                    </div>
                    <h3>Hamburger Đặc Biệt</h3>
                    <p>Hamburgers có cà chua, rau diếp, pho mát và một ít thịt (có tẩm nước sốt BBQ hoặc nước sốt cà chua), và thường có củ cải đường, hành tây, trứng, thịt hun khói và dứa (còn gọi là "burger with the lot). "BLT" có nghĩa là hamburger dùng kèm với thịt hun khói, rau diếp, và cà chua. Và đặc biệt là có khoai tây chiên mà bạn nên thử.</p>
                    <a href="#" class="btn">Đọc thêm</a>
                </div>
            </div>
        </div>
    </section>
    <!-- blogs section ends -->
    <!-- footer section starts  -->
    <section class="footer">
        <div class="newsletter">
            <h3>Nhận thông tin mới nhất từ chúng tôi</h3>
            <form action="">
                <input type="email" name="" placeholder="Nhập email của bạn" id="">
                <input type="submit" value="Đăng ký">
            </form>
        </div>
        <div class="box-container">
            <div class="box">
                <h3>Hỗ trợ</h3>
                <a href="#"><i class="fas fa-arrow-right"></i> Trung tâm trợ giúp</a>
                <a href="#"><i class="fas fa-arrow-right"></i> 4FFood</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Hướng dẫn mua hàng</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Nhiều hơn nữa...</a>
            </div>
            <div class="box">
                <h3>Đường dẫn</h3>
                <a href="#home"> <i class="fas fa-arrow-right"></i> Trang chủ</a>
                <a href="#popular"> <i class="fas fa-arrow-right"></i> Phổ biến</a>
                <a href="#menu"> <i class="fas fa-arrow-right"></i> Thực đơn</a>
                <a href="#order"> <i class="fas fa-arrow-right"></i> Đặt món</a>
                <a href="#about"> <i class="fas fa-arrow-right"></i> Giới thiệu</a>
                <a href="#blogs"> <i class="fas fa-arrow-right"></i> Thảo luận</a>
            </div>
            <div class="box">
                <h3>Đường dẫn phụ</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> Hóa đơn</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Tài khoản</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Món ăn yêu thích</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Điều khoản sử dụng</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Chính sách</a>
            </div>
            <div class="box">
                <h3>Giờ mở cửa</h3>
                <p>Thứ 2: 7:00 đến 22:30</p>
                <p>Thứ 3: 7:00 đến 22:30</p>
                <p>Thứ 4: 7:00 đến 22:30</p>
                <p>Thứ 5: 7:00 đến 22:30</p>
                <p>Thứ 6: 7:00 đến 22:30</p>
                <p>Thứ 7: 8:00 đến 22:00</p>
                <p>Chủ nhật: 8:00 đến 22:00</p>
            </div>
        </div>
        <div class="bottom">
            <div class="share">
                <a href="https://www.facebook.com/ArChir0/" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/ar_chiroo/" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>
        </div>
    </section>
    <!-- footer section ends -->
    <!-- footer section ends -->
    <!-- custom js file link  -->
    <div class="products-preview">
        <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="image/mon1.jpg" alt="">
            <h3>Combo 2 miếng bò giòn khoai giòn tràn phô mai (cocacola)</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>( 155 )</span>
            </div>

            <div class="price">299.000 VND</div>
            <div class="buttons">
                <a href="order.php" class="buy">Mua ngay</a>
                <a href="category.php" class="cart">Thêm giỏ hàng</a>
            </div>
        </div>

        <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="image/mon2.jpg" alt="">
            <h3>Buger 2 miếng bò khoai giòn tràn phô mai (bánh lớn)</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>( 884 )</span>
            </div>
            <div class="price">189.000 VND</div>
            <div class="buttons">
                <a href="order.php" class="buy">Mua ngay</a>
                <a href="category.php" class="cart">Thêm giỏ hàng</a>
            </div>
        </div>
    </div>
    <div id="toast"></div>
    <script src="js/scripts.js"></script>
</body>

</html>