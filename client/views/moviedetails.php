<?php
include 'shares/header.php';
?>
<section class="details-banner" style="background:url('https://images.unsplash.com/photo-1458053688450-eef5d21d43b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGNpbmVtYSUyMHJvb218ZW58MHx8MHx8&w=1000&q=80')">
    <div class="container">
        <div class="details-banner-wrapper">
            <?php foreach ($movies as $mv) { ?>
                <div class="details-banner-thumb">
                    <img src="<?php echo $mv['poster']; ?>" alt="movie" />
                    <a href="https://www.youtube.com/watch?v=<?php echo $mv['link'] ?>" class="video-button video-popup">
                        <i class="fal fa-play"></i>
                    </a>
                </div>
                <div class="details-banner-content offset-lg-4">
                    <h3 class="title"><?php echo $mv['movieName']; ?></h3>
                    <div class="tags">
                        <a href="#">2D</a>
                    </div>
                    <a href="#" class="button"><?php echo $mv['type'] ?></a>
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fal fa-clock"></i><span><?php echo $movie['time']; ?> phút</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<section class="book-section">
    <div class="container">
        <div class="book-wrapper offset-lg-4">
            <div class="left-side">
                <div class="item">
                    <div class="item-header">
                        <h5 class="title">5.0</h5>
                        <div class="rated">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                        <div class="rated rate-it">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="title">0.0</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="movie-details-section padding-top padding-bottom">
    <div class="container" style="padding-top: 10rem;">
        <div class="row justify-content-center flex-wrap-reverse mb--50">
            <div class="col-lg-9 mb-50">
                <div class="movie-details">
                    <div class="tab summery-review">
                        <ul class="tab-menu">
                            <li class="active">Chi tiết</li>
                        </ul>
                        <div class="tab-area">
                            <div class="tab-item active">
                                <div class="item">
                                    <p><?php echo $movie['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once('shares/footer.php');
