<?php
include_once('shares/header.php');
?>
<?php

?>
<section class="banner-section">
    <div class="banner-bg bg-fixed" style="background:url('views/assets/img/banner/banner-1.jpg')"></div>
    <div class="container">
        <div class="banner-content">
            <h1 class="title  cd-headline clip"><span class="d-block">Galaxy Play</span> for
                <span class="color-theme cd-words-wrapper p-0 m-0">
                    <b class="is-visible">Movie</b>
                </span>
            </h1>
        </div>
    </div>
</section>
<section class="search-ticket-section padding-top pt-lg-0">
    <div class="container">
        <div class="search-tab">
            <div class="row align-items-center mb--20">
                <div class="col-lg-6 mb-20">
                    <div class="search-ticket-header">
                        <h6 class="category">search movies </h6>
                        <h3 class="title">find your movies now</h3>
                    </div>
                </div>
                <div class="tab-item active">
                    <form class="ticket-search-form" method="post" action="?route=search">
                        <div class="form-group large">
                            <input type="text" name="search" placeholder="Tìm kiếm phim..." name="search" />
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <button type="submit" class="filter-btn"><i class="far fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="movie-section padding-top bg-two">
    <div class="container">
        <div class="row flex-wrap-reverse justify-content-center">
            <div class="col-lg-12">
                <div class="article-section padding-bottom">
                    <div class="section-header-1">
                        <h2 class="title">movies</h2>
                        <a class="view-more" href="?">View More <i class="fal fa-long-arrow-alt-right"></i> </a>
                    </div>
                    <div class="row mb-30-none justify-content-center">
                        <?php
                        foreach ($movies as $v) {
                        ?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb" style="height: 500px">
                                        <a href="?route=movie-details&movieId=<?php echo $v['movieId']; ?>">
                                            <img src="<?php echo $v['poster']; ?>" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content">
                                        <h5 class="title m-0">
                                            <a href="?route=movie-details&movieId=<?php echo $v['movieId']; ?>" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden; width: 300px;" title="<?php echo $v['movieName']; ?>">
                                                <?php echo $v['movieName']; ?></a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <!-- <i class="fal fa-shopping-cart"></i>
                                                <span class="content">88.8k</span> -->
                                            </li>
                                            <li>
                                                <i class="fal fa-star"></i>
                                                <span class="content">5.0</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once('shares/footer.php');
