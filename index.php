<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Desa Purwasari</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="img/kabupaten_karawang.png">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="scss/main.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder-logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li>+62 81573074357</li>
                                        <li>Desa Purwasari</li>
                                        <li>Senin - Jumat 08:00 - 16:00</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="index.php" class="big-logo"><img src="img/logo_karawang.png" height="100px" width="250px" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="index.php" class="small-logo"><img src="img/logo_karawang.png" height="50px" width="100px" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href="index.php">Beranda</a></li>
                                            <li><a href="about.php">Tentang Kami</a></li>
                                            <li><a href="services.php">Pelayanan</a>
                                            <ul class="submenu">
                                                <li><a href="#">#</a></li>
                                                
                                            </ul>
                                        </li>
                                            <li><a href="blog.php">Berita</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Portal Berita</a></li>
                                                    <!-- <li><a href="single-blog.html">Blog Details</a></li> -->
                                                </ul>
                                            </li>
                                           <!--  <li><a href="#">Pages</a> -->
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="project_details.html">Projects Details</a></li>
                                                    <li><a href="services_details.html">Services Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Kontak</a></li>
                                             <li><a href="#">Menu</a>
                                                <ul class="submenu">
                                                    <li><a href="login.php">Login</a></li>
                                                    <!-- <li><a href="single-blog.html">Blog Details</a></li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn">Kontak Sekarang</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>
        <!-- tampilkan bg dari database -->
          <?php
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from tb_bg ");
                  while($d = mysqli_fetch_array($data)){ ?>
        <!-- slider Area Start-->
        <!-- background slider -->
        <div class="slider-area ">
            <div class="slider-active">

                <div class="single-slider  hero-overly slider-height d-flex align-items-center" img src="img/hh.jpg" data-background="img/<?php echo $d['foto']?>"><?php }?>

            <div class="container">
                <div class="row">
                     <div class="col-xl-12">
                        <div class="hero__caption">
                            <div class="hero-text1">
                                    <span data-animation="fadeInUp" data-delay=".3s">Pelayanan Masyarakat Desa Purwasari</span>
                            </div>
                                    <div class="hero-cap" data-animation="fadeInUp" data_delay=".8s">
                                        
                                <h2>Desa Purwasari</h2>
                                <div class="hero-text1">
                                    <span data-animation="fadeInUp" data-delay=".3s">Kecamatan Purwasari</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="/img/wuhan.jpeg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Pelayanan Warga Masyarakat Desa Purwasari</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Construction</h2>
                                        <h2>Construction</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="services.html">Pelayanan Desa</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Area Start -->
        <div class="services-area1 section-padding30">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">
                            <div class="front-text">
                                <h2 class="">Pelayanan Kami</h2>
                            </div>
                            <span class="back-text">Pelayanan</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <?php
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from tb_layanan");
                  while($d = mysqli_fetch_array($data)){ ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="img/<?php echo $d['foto']?>" alt="" height="300dp" width="50dp"> <!-- foto jenis pelayanan -->
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.php?id=<?php echo $d['id']?>"><?php echo $d['jenis_layanan']?></a></h4>
                                <a href="services_details.php?id=<?php echo $d['id']?>" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    
        <!-- Services Area End -->
        <!-- About Area Start -->
        <!-- halaman profil desa -->
         <?php 
            include 'koneksi.php';
            $data = mysqli_query($koneksi,"select * from tb_about");
            while($d = mysqli_fetch_array($data)){ ?>

        <section class="support-company-area fix pt-10">
            <div class="support-wrapper align-items-end">
                <div class="left-content">

                    
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class=""><?php echo $d['judul']?></h2>
                        </div>
                        <span class="back-text"><?php echo $d['judul']?></span>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top"><?php echo $d['sub_judul']?></p>
                        <p><?php echo $d['isi']?></p>
                        <a href="about_details.php?id=<?php echo $d['id']?>" class="btn red-btn2">Baca</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="img/<?php echo $d['nama']?>" alt="" width="100dp" height="500dp"> <!-- foto konten about -->
                    </div>
                    <div class="support-img-cap text-center">
                        <p>Sejak</p>
                        <span><?php echo $d['tahun']?></span>
                    </div>
                </div>
            </div>
        </section>
        <?php }?>
        <!-- About Area End -->
        <!-- Project Area Start -->

        <!-- Project Area Start -->
        <section class="project-area  section-padding30">
            <div class="container">
               <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3">
                                <div class="front-text">
                                    <h2 class="">Galeri</h2>
                                </div>
                                <span class="back-text">Galeri</span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="properties__button">
                                <!--Nav Button  -->                                            
                                <nav> 
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> Show  all </a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Intorior</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Recent</a>
                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Big building</a>
                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Park</a>
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
               </div>

              
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->      

                                <div class="project-caption">
                                    <div class="row">
                                          <!-- ambil dari database -->
            <?php
               include 'koneksi.php';
               $data = mysqli_query($koneksi,"select * from tb_galeri");
               while($d=mysqli_fetch_array($data)){ ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/<?php echo $d['foto']?>" alt="" width="100dp" height="350dp">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.php?id=<?php echo $d['id']?>" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.php?id=<?php echo $d['id']?>"><?php echo $d['caption']?></a></h4>
                                                    <h4><a href="project_details.php?id=<?php echo $d['id']?>"></a></h4>
                                                </div>

                                            </div>
                                            
                                        </div>
                                        <?php }?>   
                                    </div>
                                </div>
                             </div>
            
                
      </section>
        <!-- Project Area End -->
        <!-- contact with us Start -->
        <section class="contact-with-area" data-background="assets/img/gallery/section-bg2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 offset-xl-1 offset-lg-1">
                        <div class="contact-us-caption">
                            <div class="team-info mb-30 pt-45">
                                <!-- Section Tittle -->
                                <div class="section-tittle section-tittle4">
                                    <div class="front-text">
                                        <h2 class="">Hubungi Kita di...</h2>
                                    </div>
                                    <span class="back-text">Hubungi</span>
                                </div>
                                <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.</p>
                                <a href="#" class="white-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact with us End-->
        <!-- CountDown Area Start -->
          <!-- untuk menampilkan banyak row pada tb -->
        <?php 
        include 'koneksi.php';
        $data_surat = mysqli_query($koneksi, "SELECT * FROM tb_surat");
        $jumlah_surat = mysqli_num_rows($data_surat);
        ?>
        <div class="count-area">
            <div class="container">
                <div class="count-wrapper count-bg" data-background="assets/img/gallery/section-bg3.jpg">
                    <div class="row justify-content-center" >
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter"><?php echo $jumlah_surat ?></span>
                                    </div>
                                    <div class="count-text">
                                        <p>Pengajuan Surat</p>
                                        <h5>Surat</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
        include 'koneksi.php';
        $data_penduduk = mysqli_query($koneksi, "SELECT * FROM tb_penduduk");
        $jumlah_penduduk = mysqli_num_rows($data_penduduk);
        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter"><?php echo $jumlah_penduduk; ?></span>
                                    </div>
                                    <div class="count-text">
                                        <p>Jumlah Penduduk</p>
                                        <h5>Penduduk</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <!-- untuk menampilkan banyak row pada tb -->
         <?php 
        include 'koneksi.php';
        $data_covid = mysqli_query($koneksi, "SELECT * FROM tb_covid");
        $jumlah_covid = mysqli_num_rows($data_covid);
        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter"><?php echo $jumlah_covid; ?></span>
                                    </div>
                                    <div class="count-text">
                                        <p>Jumlah Pantauan Covid-19</p>
                                        <h5>Orang</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CountDown Area End -->
        <!-- Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle5 mb-50">
                            <div class="front-text">
                                <h2 class="">Staf Kami</h2>
                            </div>
                            <span class="back-text">Our Stuff</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <?php
                  include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from tb_staf");
                  while($d = mysqli_fetch_array($data)){ ?>
                    <!-- single Tem -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="img/<?php echo $d['foto']?>" alt="" height="300dp" width="100dp">
                            </div>
                            <div class="team-caption">
                                <span><?php echo $d['bidang']?></span>
                                <h3><?php echo $d['nama']?></h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <!-- Team End -->
        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle6 mb-50">
                            <div class="front-text">
                                <h2 class="">Testimoni</h2>
                            </div>
                            <span class="back-text">Timbal Balik</span>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjn.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                            <span>Jessya Inn</span>
                                            <p>Co Founder</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjn.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                            <span>Jessya Inn</span>
                                            <p>Co Founder</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!--latest Nnews Area start -->
        <div class="latest-news-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle7 mb-50">
                            <div class="front-text">
                                <h2 class="">Berita Terupdate </h2>
                            </div>
                            <span class="back-text">Our Blog</span>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "select * from tb_berita");
                        while($d = mysqli_fetch_array($data)){ ?>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-news -->
                         

                        <div class="single-news mb-30">
                            <div class="news-img">
                                <img src="img/<?php echo $d['foto']?>" alt="" width="200dp" height="320dp">
                                <div class="news-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="news-caption">
                                <ul class="david-info">
                                    <li> | &nbsp; &nbsp;  <?php echo $d['kategori']?></li>
                                </ul>
                                <h2><a href="single-blog.php?id=<?php echo $d['id']?>"><?php echo $d['judul']?></a></h2>
                                <a href="single-blog.php?id=<?php echo $d['id']?>" class="d-btn">Read more »</a>

                            </div>

                        </div>

                    </div>
                    <?php } ?>

               </div>

            </div>
        </div>

        
        <!--latest News Area End -->

    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-main">
                <div class="footer-area footer-padding">
                    <div class="container">
                        <div class="row  justify-content-between">
                            <div class="col-lg-4 col-md-4 col-sm-8">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Link</h4>
                                        <ul>
                                            <li><a href="#">Tentang Kami</a></li>
                                            <li><a href="#">Pelayanan</a></li>
                                            <li><a href="#">Kontak</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-7">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Kontak</h4>
                                        <div class="footer-pera">
                                            <p class="info1">Jalan Raya Cigagak No.17 Desa Purwasari Kec.Purwasari</p>
                                        </div>
                                        <ul>
                                            <li><a href="#">Telpon Kantor : 0908xxxxxx</a></li>
                                            <li><a href="#">Telpon Seluler : 088xxxxxxx</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <!-- Form -->
                                    <div class="footer-form">
                                        <div id="mc_embed_signup">
                                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                                <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                                <div class="form-icon">
                                                    <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                        SIGN UP
                                                    </button>
                                                </div>
                                                <div class="mt-10 info"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Map -->
                                    <div class="map-footer">
                                        <img src="assets/img/gallery/map-footer.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Copy-Right -->
                        <div class="row align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>Ihsan Nurhakim Aziz<i class="" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Footer End-->
    </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
               
        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="./assets/js/jquery.counterup.min.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>