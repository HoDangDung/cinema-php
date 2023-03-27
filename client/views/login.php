<?php
include_once('shares/header.php');
?>
<section class="main-page-header speaker-banner" style="background-image: url('https://sharebox.vn/wp-content/uploads/2020/05/Galaxy-Play.jpg'); background-position: center;">
    <div class="container">
        <div class="speaker-banner-content">
            <h2 class="title">Đăng Nhập</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>login</li>
            </ul>
        </div>
    </div>
</section>

<section class="account-section">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <span class="cate">hello !</span>
                    <h2 class="title">welcome back</h2>
                </div>
                <form class="account-form" method="POST" action="?route=login">
                    <div class="form-group">
                        <label for="email">Email<span>*</span></label>
                        <input type="text" placeholder="Email" id="email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu<span>*</span></label>
                        <input type="password" placeholder="Password" id="pass" name="pass" required />
                    </div>
                    <div class="form-group">
                        <?php if (isset($_SESSION['Error'])) { ?>
                            <p class="text-danger"><?php echo $_SESSION['Error'] ?></p>
                        <?php }
                        unset($_SESSION['Error']);
                        ?>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Đăng nhập" name="submit" />
                    </div>
                </form>
                <div class="option">
                    Chưa có tài khoản? <a href="?route=register">đăng ký</a>.
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once('shares/footer.php');
