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
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
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
                                        <li>(Isi Pake No telp Desa)</li>
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
                                    <a href="index.php" class="big-logo"><img src="img/logo_karawang.png" alt="" height="100px" width="250px"></a>
                                    <!-- logo-2 -->
                                    <a href="index.php" class="small-logo"><img src="img/logo_karawang.png" alt="" height="50px" width="100px"></a>
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
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- tampilkan data tabel -->
               <?php
                    include "koneksi.php";
                    $id = $_GET['id'];
                    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_about WHERE id='$id'")or die(mysqli_errors());
                    while($d = mysqli_fetch_array($query_mysqli)){
                     ?>
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="img/<?php echo $d['nama']?>">
                <div class="container">
                    <div class="row">
                         
                        <div class="col-lg-10 col-xl-8">
                            <div class="hero-cap hero-cap2 pt-120">
                                <h2><?php echo $d['judul']?></h2>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Details Start -->
        <div class="services-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-services section-padding2">
                            <div class="details-img mb-40">
                                <img src="img/<?php echo $d['nama']?>" alt="">
                            </div>
                            <div class="details-caption">
                                <p><?php echo $d['judul']?></p>

                                <p class="mb-50"><?php echo $d['sub_judul']?></p>

                                <h3></h3>
                                <p><?php echo $d['isi']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Services Details End -->
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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