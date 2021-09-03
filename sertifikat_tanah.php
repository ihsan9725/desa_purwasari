<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Desa Mandalahaji</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.icon">

        <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
             <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="plugins/adminlte.min.css">

  
  
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
</body>
   

 <!-- Preloader Start -->
    <main>

        <!-- slider Area Start-->
        <header>
            <div class="header-area">
                <div class="main-header">
                    <div class="header-top d-none d-lg-block">
                        <div class="container-fluid">
                            <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="main-header">
                                        <ul>
                                            <img src="img/kabupaten.jpg" width="50px" height="50px">
                                        </ul>

                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
        </header>
        <!-- background slider -->
         <!-- Main content -->
         <body><blue><center><h2>Pembuatan Surat Online</h2></center></blue></body> 
        <center><h3>Sertifikat Tanah Desa Mandalahaji</h3></center> 

         <body>

          <?php
    if(isset($_GET['alert'])){
      if($_GET['alert']=="gagal_ukuran"){
        ?>
        <div class="alert alert-warning">
          <strong>Warning!</strong> Ukuran File Terlalu Besar
        </div>
        <?php
      }elseif ($_GET['alert']=="gagal_ektensi") {
        ?>
        <div class="alert alert-warning">
          <strong>Warning!</strong> Ekstensi Gambar Tidak Diperbolehkan
        </div>
        <?php
      }elseif ($_GET['alert']=="simpan") {
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong> Gambar Berhasil Disimpan
        </div>
        <?php
      }       
    }
    ?>

    <section class="content">
      <div class="row">
        <div class="card-body">
          <div class="card card">
            <div class="card-header">
              <h3 class="card-title">Surat Online</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">


             <?php
             include "koneksi_srvr.php";
             ?>

               <form method="post" action="tambah_aksi_sertifikat.php" enctype="multipart/form-data">
              <div class="form-group">   

                <input type="hidden" name="id">
                <label for="inputName">Surat Izin Bangunan</label>
                <input type="file" name="surat_izin_bang" id="surat_izin_bang" class="form-control" placeholder="" required="required" multiple> 
              </div>
              <div class="form-group">
                <label for="inputDescription">No NIK</label>
                <input type="text" name="nik" id="inputDescription" class="form-control" rows="" placeholder="Masukkan No NIK">
              </div>
              <div class="form-group">
                <label for="inputDescription">No KK</label>
                <input type="text" name="kk" id="inputDescription" class="form-control" rows="" placeholder="Masukkan No KK">
              </div>
               <div class="form-group">
                <label for="inputDescription">Syarat Pemberitahuan Pajak Terutang Pajak Bumi dan Bangunan Tahunan (SPPT PBB)</label>
                <input type="file" name="sppt_pbb" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Email">
              </div>
              <div class="form-group">
                <label for="inputDescription">Surat Pernyataan</label>
                <input type="file" name="surat_pernyataan" id="inputDescription" class="form-control" placeholder="Masukkan Surat Pernyataan">
              </div>
              <button type="submit" class="btn btn-success swalDefaultSuccess" value="Simpan" name="simpan" onClick="javascript: return confirm('Apakah data yang anda masukkan sudah benar ?');">Simpan</button>
               <a href="index_user.php" class="btn btn-warning btn-md" >Beranda</a>
            </div>

      <!-- buat ke beranda -->
            <!-- /.card-body -->
          </div>
          </body>

          <script type="text/javascript">
  function validasi() {
    var nik = document.getElementById("nik").value;
    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var wa = document.getElementById("wa").value;
    var jenis_surat = document.getElementById("jenis_surat").value;
    var pesan = document.getElementById("pesan").value;
    if (nama != "" && email!="" && alamat !="") {
      return true;
    }else{
      alert('Anda harus mengisi data dengan lengkap !');
    }
  }
</script>
         

        

        <!-- slider Area End-->
        <!-- Services Area Start -->

   
    <!-- JS here -->
    
        <!-- All JS Custom Plugins Link Here here -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="assets/js/gijgo.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="assets/js/wow.min.js"></script>
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

        <script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

</script>
    </body>
</html>