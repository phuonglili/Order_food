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
                    <!-- <li class="header__navbar-item header__navbar-item-strong header__navbar-item--separate">Đăng kí</li>
                        <li class="header__navbar-item header__navbar-item-strong">Đăng nhập</li> -->
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
    <section class="order" id="order">
        <form action="">
            <div class="flex">
                <div class="inputBox">
                    <span>Họ và tên</span>
                    <input type="text" placeholder="4 Funn Food" name="" id="">
                </div>
                <div class="inputBox">
                    <span>Số điện thoại</span>
                    <input type="phone" placeholder="096 5269 082" name="" id="">
                </div>
            </div>
            <div class="flex">
                <div class="inputBox">
                    <textarea placeholder="Địa chỉ nhận hàng" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="inputBox">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.525305593949!2d105.81907701493239!3d21.01165718600766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7dbe014e0b%3A0x741128e73301c5ff!2zNTcgUC4gVGjDoWkgSMOgLCBUcnVuZyBMaeG7h3QsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWk!5e0!3m2!1sen!2s!4v1641206928270!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div id="toast">
            </div>
            <div onclick="showSuccessToast();" class="btn_message btn--success">Xác nhận</div>
            <a href="index.php" class="btn btn_huy">Hủy bỏ</a>

        </form>
    </section>
    <script src="js/scripts.js"></script>