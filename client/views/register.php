<?php
include_once('shares/header.php');
?>
<section class="main-page-header speaker-banner" style="background-image: url('https://sharebox.vn/wp-content/uploads/2020/05/Galaxy-Play.jpg');background-position: center;">
    <div class="container">
        <div class="speaker-banner-content">
            <h2 class="title">Đăng ký</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>register</li>
            </ul>
        </div>
    </div>
</section>

<section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <span class="cate">welcome !</span>
                    <h2 class="title">Tạo tài khoản</h2>
                </div>
                <form class="account-form" method="POST" action="?route=register">
                    <div class="form-group">
                        <label for="ho_ten">Họ tên<span>*</span></label>
                        <input type="text" placeholder="Nhập họ tên" id="name" name="name" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email<span>*</span></label>
                        <input type="text" placeholder="Nhập Email" id="email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password<span>*</span></label>
                        <input type="password" placeholder="Mật khẩu" id="pass" name="pass" required />
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Đăng ký" name="submit" />
                    </div>
                </form>
                <div class="option">
                    Đã có tài khoản? <a href="?route=login">Đăng nhập</a>.
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once('shares/footer.php');
