<?php
include 'include/headerr.php';
?>

<style>
    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }
</style>
<div>
    <!--------banner-------->
    <section class="content">
        <div class="banner_slider banner_slider_one">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img alt="banner" src="assets/images/banner/breadcrumb-2.png" style="width:100%">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!------banner end-------------->
    <!---breadcrumb----->
    <a name="skiptomain"></a>
</div>

<section class="ab_msec">

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb1" aria-label="breadcrumb">
                    <ol class="breadcrumb font_size">
                        <li class="breadcrumb-item"><a href="index.php"><img alt="Home"
                                    src="assets/images/social/home-icon2.png" class="homeIcon">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Media</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="footer_content">
            <h4 class="font_size pb-2">Media</h4>
        </div>
        <p>Shyamavsvss Krishi Limited is a public incorporated company. It is classified as Non-govt company and is
            registered at Registrar of Companies. The company provide following services and work mentioned
            below.There are some division which are following please click to link and visit and get the complete
            information about project. Here are some memory of our organisation which are capturde by media and
            people.</p>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <a href="gallery.php">
                    <div class="media-card photo-gallery">
                        Photo Gallery
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="videogallery.php">
                    <div class="media-card video-gallery">
                        Video Gallery
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="news.php">
                    <div class="media-card news-gallery">
                        News Gallery
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>

<style>
    :root {
        --card-height: 80vh;
        --card-width: calc(var(--card-height)/ 1.5);
    }

    .media-card {
        width: var(--card-width);
        height: var(--card-height);
        padding: 3px;
        position: relative;
        border-radius: 6px;
        justify-content: center;
        align-items: center;
        display: flex;
        font-size: 2.5em;
        color: rgb(88, 199, 250 / 0%);
        font-family: cursive;
        font-weight: bolder;
        opacity: 0.7;
    }

    .media-card:hover {
        color: rgb(88, 199, 250);
        transition: color 1s;
        opacity: 1;
        transition: opacity 1s;
        transform: scale(1.05);
        transition: transform 1s;
    }

    .photo-gallery {
        background: url(assets/img/about/silai.jfif);
        background-size: cover;
    }

    .video-gallery {
        background: url(assets/img/about/duckfarm.jpeg);
        background-size: cover;
    }

    .news-gallery {
        background: url(assets/img/notice.jpg);
        background-size: cover;
    }
</style>

<?php
include 'include/footerr.php';
?>