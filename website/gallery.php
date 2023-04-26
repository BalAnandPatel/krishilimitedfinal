<?php 
include 'include/headerr.php'; 
?>
<?php
$url = $URL."gallery/read_galley.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>  
  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <style>
        .photo-gallery {
            color: #313437;
            background-color: #fff;
        }

            .photo-gallery p {
                color: #7d8285;
            }


            .photo-gallery h2 {
                font-weight: bold;
                margin-bottom: 40px;
                padding-top: 40px;
                color: inherit;
            }

            /*.media (max-width:767px) {
          .photo-gallery h2 {
            margin-bottom:25px;
            padding-top:25px;
            font-size:24px;
          }
        }*/

            .photo-gallery .intro {
                font-size: 16px;
                max-width: 500px;
                margin: 0 auto 40px;
            }

                .photo-gallery .intro p {
                    margin-bottom: 0;
                }

            .photo-gallery .photos {
                padding-bottom: 20px;
            }

            .photo-gallery .item {
                padding-bottom: 30px;
            }
    </style>
</head>

<body>


    <div>

        <!--------banner-------->

        <section class="content">

            <div class="banner_slider banner_slider_one">

                <div class="swiper mySwiper">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <img alt="banner" src="assets/images/banner/breadcrumb-banner-1.jpg" style="width:100%">

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
                            <li class="breadcrumb-item"><a href="index.php"><img alt="Home" src="assets/images/social/home-icon2.png" class="homeIcon">Home</a></li>
                            <li class="breadcrumb-item">Media</li>
                            <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="footer_content">
                <h4 class="font_size pb-2">Photo Gallery</h4>
            </div>

            <div class="photo-gallery">
                <div class="container">

                    <div class="row photos">
                    <?php 
                       
                       $counter=0;  
                       foreach($result as $key => $value){
                       foreach($value as $key1 => $value1)
                      {
                      $image = $GALLERY_IMG_PATH."gallery_img".$value1->id.".png";
                    ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 pt-3 item"><a href="#" data-lightbox="photos" data-alt="YogaDay1"><img class="img-fluid img-thumbnail" src="<?php echo $image; ?>" alt="gallery image"></a></div>
                     <?php } } ?>
                    </div>
                </div>
            </div>
            <br />
            <br />

            <ul>

                <!-- <li class="breadcrumb-item font_size active" aria-current="page">Publish Date :16-10-2022</li>  -->

            </ul>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>    
    <script src="/public/js/lightbox.js"></script>
</body>

</html>





  <?php 
include 'include/footerr.php'; 
?>
  