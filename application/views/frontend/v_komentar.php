<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>momskyparenting</title>

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
            <a href="index.html" class="logo">
              <h4>momskyparenting<img src="assets/images/logo-icon.png" alt=""></h4>
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
  </header>
<div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6>Komentar</h6>
                  <h2>Beri Kami Tanggapan <span>Dan</span> Saran <em>Mu</em> 
                </div>
              </div>
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
              <?= $this->session->flashdata('message'); ?>
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                    <script src="<?= base_url() ."asset/dist/sweetalert2.all.min.js" ?>"></script>
                    <form action="<?php echo base_url(). 'welcome/contact' ?>" method="post">
                      <input type="text" name="nama" id="nama" placeholder="Name" autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="text" name="email" id="email" placeholder="email" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="komentar" type="text" class="form-control" name="message" id="message" placeholder="Message" required=""></textarea>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button" onclick="Swal('Komentar!','anda','Telah ditambahkan')">Kirim Komentar</button>
                    </fieldset>
                    <script src="<?= base_url() ."asset/dist/sweetalert2.all.min.js" ?>"></script>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="contact-info">
                  <ul>
                    <li>
                      <div class="icon ">
                        <img src="<?= base_url() . "assets/frontend/assets/images/facebook.png" ?>"  alt="">
                      </div>
                      <a href="#">MOMSKY PARENTING</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="<?= base_url() . "assets/frontend/assets/images/instagram.png" ?>" alt="phone">
                      </div>
                      <a href="#">@RIZAL_FZI23</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="<?= base_url() . "assets/frontend/assets/images/email.png" ?>" alt="location">
                      </div>
                      <a href="#">rf769986@gmail.com</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
