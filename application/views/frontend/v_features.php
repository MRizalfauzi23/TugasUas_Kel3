<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>SEO Dream - Creative SEO HTML5 Template by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() . "asset/frontend/vendor/bootstrap/css/bootstrap.min.css" ?>" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url() . "asset/frontend/assets/css/fontawesome.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "asset/frontend/assets/css/templatemo-seo-dream.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "asset/frontend/assets/css/animated.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "asset/frontend/assets/css/owl.css" ?>">
<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>



<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?= base_url() . "frontend/index" ?>" class="logo">
              <h4>SEO Dream <img src="assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="<?= base_url() . "Frontend/index" ?>" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="<?= base_url() ."Frontend/features" ?>">Features</a></li>
              <li class="scroll-to-section"><a href="<?= base_url() ."Frontend/about" ?>">About Us</a></li>
              <li class="scroll-to-section"><a href="<?= base_url() ."Frontend/komentar" ?>">Comment</a></li> 
              <li class="scroll-to-section"><div class="main-blue-button"><a href="<?= base_url() . "auth/login" ?>">Login</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
    <?php 
            $no=1;
            foreach ($artikel as $a) {
                ?>
  
<div id="features" class="features section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="features-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="first-number number">
                    <h6>01</h6>
                  </div>
                 <a href=""> <img class="img-fluid position-relative" src="<?php echo base_url() . "assets/img/" ?><?php echo $a->gambar1 ?> " alt="">
                  <h4><?php echo $a->artikel1 ?></h4></a>
                  <div class="line-dec"></div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="second-number number">
                    <h6>02</h6>
                  </div>
                  <a href="index.html"><img class="img-fluid position-relative" href="index.html" src="<?php echo base_url() . "assets/img/" ?><?php echo $a->gambar2 ?>"  alt="">
                <h4><?php echo $a->artikel2 ?></h4></a> 
                  <div class="line-dec"></div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="third-number number">
                    <h6>03</h6>
                  </div>
                <a href=""><img class="img-fluid" src="<?php echo base_url() . "assets/img/artikel-3.3.jpg" ?>" alt="">
                  <h4><?php echo $a->artikel3 ?></h4></a>  
                  <div class="line-dec"></div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="fourth-number number">
                    <h6>04</h6>
                  </div>
                 <a href=""><img class="img-fluid" src="<?php echo base_url() . "assets/img/artikel-4.4.jpg" ?>" alt="">
                  <h4><?php echo $a->artikel4 ?></h4></a> 
                  <div class="line-dec"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
