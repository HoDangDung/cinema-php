<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Website xem phim</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fal fa-long-arrow-alt-up"></i>
    </a>
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="?">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="?" class="active">Home</a>
                    </li>
                    <li>
                        <a href="#">Cá nhân</a>
                        <ul class="submenu">
                            <?php
                            if (isset($_SESSION['userId'])) { ?>

                                <li>
                                    <a href="?route=myaccount&userId=<?php echo $_SESSION['userId'] ?>"><i class="fal fa-long-arrow-alt-right"></i>Tài khoản: <?php echo $_SESSION["Name"] ?> </a>
                                </li>
                                <li>
                                    <a href="?route=logout"><i class="fal fa-long-arrow-alt-right"></i>Đăng xuất</a>
                                </li>
                            <?php } else { ?>
                                <li>
                                    <a href="?route=login"><i class="fal fa-long-arrow-alt-right"></i>Đăng nhập</a>
                                </li>
                                <li>
                                    <a href="?route=register"><i class="fal fa-long-arrow-alt-right"></i>Đăng ký</a>
                                </li>
                            <?php  } ?>
                        </ul>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>