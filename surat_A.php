 <!-- tampilkan data user dari db -->
      
<?php
include "koneksi.php"; 
session_start();
$id_user=$_SESSION["id_user"];


if (!isset($_SESSION["username"])) {
  echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
  exit;
}
$username=$_SESSION["username"];


?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Desa Purwasari / User</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/kabupaten_karawang.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <!-- ikon page bar -->
        
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
                                            <img src="img/kabupaten_karawang.png" width="50px" height="50px">
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
        <center><h3>Desa Mandalahaji</h3></center> 

         <body>
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
               <form method="post" action="tambah_aksi_surat.php" enctype="multipart/form-data" onSubmit="return validasi()">
              <div class="form-group">   
                <input type="hidden" name="id_surat" id="id_surat" value="">

                <input type="hidden" name="id_user" id="id_user" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['id']; }?>">

                <label for="inputName">No NIK</label>
                <input type="text" name="nik" class="form-control" placeholder="Masukan No NIK" id="nik" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['nik']; }?>" onkeypress="return hanyaAngka(event)"> 
              </div>
              <div class="form-group">
                <label for="inputDescription">No KK</label>
                <input type="text" name="kk" id="kk" class="form-control" rows="" placeholder="Masukkan No KK" value=""onkeypress="return hanyaAngka(event)" minlength="1" maxlength="19">
              </div>
              <div class="form-group">
                <label for="inputDescription">Nama Lengkap (*Sesuai KTP)</label>
                <input type="text" name="nama" id="nama" class="form-control" rows="" placeholder="Masukkan Nama" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['nama']; }?>"> 
              </div>
              <div class="form-group">
                <label for="inputDescription">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" rows="" placeholder="Masukkan Alamat" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['alamat']; }?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" rows="" placeholder="Masukkan Tempat Lahir" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['tempat_lahir']; }?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" rows="" placeholder="Masukkan Tanggal Lahir" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['tgl_lahir']; }?>">
              </div>
               <div class="form-group">
                <label for="inputDescription">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" rows="" placeholder="Masukkan Email" maxlength="25" required="E-mail">
              </div>
              <div class="form-group">
                <label for="inputDescription">No Whatsapp</label>
                <input type="text" name="wa" id="wa" class="form-control" placeholder="Masukkan No Whatsapp" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['wa']; }?>" onkeypress="return hanyaAngka(event)">
              </div>
              <div class="form-group">
                <label for="inputStatus">Pilih Jenis Surat</label>
                <select id="jenis_surat" class="form-control custom-select" name="jenis_surat">
                  <option disabled>Pilih Satu</option>
                   <?php 
                    include 'koneksi.php';
                     $data = mysqli_query($koneksi,"select * from tb_jenis_surat");
                  while($d = mysqli_fetch_array($data)){ ?>
                  <option><?php echo $d['jenis_surat']?></option> <?php }?>
                  <option selected>Tidak Ada</option>
                </select>

              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Pesan</label>
                <input type="hidden" name="tanggal" value="<?php echo date("d-m-y");?>">
               <textarea class="form-control" type="text" name="pesan" placeholder="Masukkan Pesan.." id="pesan"></textarea>
               <input type="hidden" name="status_post" value="Diproses">
               <input type="hidden" name="status_ttd_kades" value="Belum di Tanda tangan!">
              </div>
              <button type="submit" class="btn btn-success swalDefaultSuccess" value="Simpan" name="simpan" onClick="javascript: return confirm('Apakah data yang anda masukkan sudah benar ?');">Ajukan</button>
               <a href="index_user.php" class="btn btn-warning btn-md" >Beranda</a>
            </div>

      <!-- buat ke beranda -->
            <!-- /.card-body -->
          </div>
          </body>

<script type="text/javascript">
  function validasi() {
    var nik = document.getElementById("nik").value;
    var kk = document.getElementById("kk").value;
    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var wa = document.getElementById("wa").value;
    var jenis_surat = document.getElementById("jenis_surat").value;
    
    if (nik != "" && kk!="" && nama !="" && email !="" && wa !="" && jenis_surat !="") {
      return true;
    }else{
      alert('Anda harus mengisi data dengan lengkap !');
      return false;
    }
  }
</script>
<script>
    function hanyaAngka(evt){
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
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