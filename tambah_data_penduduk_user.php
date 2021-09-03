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
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

  <!-- tampilkan data admin dari db -->
      
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Desa Purwasari / User</title>
<link rel="shortcut icon" type="image/x-icon" href="img/kabupaten_karawang.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">

  

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index_user.php" class="navbar-brand">
       
        <img src="img/card.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <!-- tampilkan -->
        <?php echo $username;  ?>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
         
          <li class="nav-item">
            <a href="index_user.php" class="nav-link">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Kontak</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Menu</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="logout.php" class="dropdown-item" onClick="javascript: return confirm('Apakah anda yakin untuk log out?');">Log Out Akun</a></li>
              <li><a href="#" class="dropdown-item"></a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Lainnya..</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three -->

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

       

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class=""></i>
            <span class="badge badge-danger navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class=""></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="card-body">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- menampilkan dari db user menggunakan session -->
            <h1 class="m-0 text-dark"> Hallo <small> <?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['nama']; }?>!</small></h1> 

              <h1 class="m-0 text-dark">Selamat datang di Sistem Pengajuan Surat Online.</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index_user.php">Beranda</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card card-body card-outline">
              <div class="card-body">
                 <h5 class="card-title"><B>Data Pengguna</B></h5><br>
                 <p class="card-text">
  <?php 
  $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");

  while ($row = $result->fetch_assoc()) { 
          echo"Nama           : " .$row['nama']."<br>"; 
          echo"Alamat         : " .$row['alamat']."<br>";
          echo"Tempat Lahir   : " .$row['tempat_lahir']."<br>";
           echo"Tanggal Lahir : " .$row['tgl_lahir']."<br>";
           echo"NIK           : ".$row['nik']."<br>";
        }
        ?></p>
                   <!-- tampilkan -->

             <!--  <h5 class="card-title"> Nama : </div></h5>,<br>
                <h5 class="card-title">Alamat : </h5><br> -->
               
              <!--   <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>

          

            
          <!-- /.col-md-6 -->
          <div class="col-12">
            <div class="card card-warning card-outline">
              <div class="card-header">
                <h5 class="card-title m-0"><b>Form Daftar Penduduk Desa Mandalahaji</b></h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Pada halaman ini warga dapat melakukan pendaftaran penduduk secara mandiri di SI Desa Mandalahaji.</h6>
              </div>
              <!-- Main content form daftar penduduk -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Isi Form dengan Lengkap!</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
         
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                 <form action="tambah_aksi_penduduk_user.php" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
                <div class="form-group">
                  <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control" id="foto">
                </div>
                <!-- /.form-group -->
                  <label>NIK</label>
                  <input type="hidden" name="id" id="id">
                  <input type="Text" name="nik" id="nik" class="form-control" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['nik']; }?>" onkeypress="return hanyaAngka(event)" maxlength="19">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Nama Lengkap (tanpa gelar)</label>
                  <input type="Text" name="nama" id="nama" class="form-control" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['nama']; }?>">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>No KK Sebelumnya</label>
                  <input type="Text" name="kk" id="kk" class="form-control" value="" onkeypress="return hanyaAngka(event)" maxlength="18" minlength="2"> 
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Hubungan Dalam Keluarga</label>
                   <select class=" form-control select"style="width: 100%;" name="hub_kel" id="hub_kel">
                    <option selected="selected">Pilih Hubungan Keluarga</option>
                    <option>KEPALA KELUARGA</option>
                    <option>SUAMI</option>
                    <option>ISTRI</option>
                    <option>ANAK</option>
                    <option>MENANTU</option>
                    <option>CUCU</option>
                    <option>ORANG TUA</option>
                    <option>MERTUA</option>
                    <option>KELUARGA</option>
                    <option>PEMBANTU</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Jenis Kelamin</label>
                   <select class=" form-control select"style="width: 100%;" name="jenis_kelamin" id="jenis_kelamin">
                    <option selected="selected">Pilih Jenis Kelamin</option>
                    <option>LAKI-LAKI</option>
                    <option>PEREMPUAN</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Agama</label>
                  <input type="Text" name="agama" id="agama" class="form-control" maxlength="10" onkeypress="return hanyaHuruf(event)" maxlength="15">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Status Penduduk</label>
                   <select class=" form-control select"style="width: 100%;" name="status_penduduk" id="status_penduduk">
                    <option selected="selected">Pilih Status</option>
                    <option>TETAP</option>
                    <option>TIDAK TETAP</option>
                    <option>PENDATANG</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                 <div class="form-group">
                  <label class="btn-warning">DATA KELAHIRAN :</label>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>No AKTA</label>
                  <input type="Text" name="no_akta" class="form-control" id="no_akta" onkeypress="return hanyaAngka(event)" maxlength="18" minlength="2">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="Date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['tgl_lahir']; }?>">
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Jenis Kelahiran</label>
                   <select class=" form-control select"style="width: 100%;" name="jenis_kelahiran" id="jenis_kelahiran">
                    <option selected="selected">Pilih Jenis Kelahiran</option>
                    <option>TUNGGAL</option>
                    <option>KEMBAR 2</option>
                    <option>KEMBAR 3</option>
                    <option>KEMBAR 4</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['tempat_lahir']; }?>">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Waktu Lahir</label>
                  <input type="time" name="waktu_lahir" class="form-control" id="waktu_lahir">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Anak Ke (Isi Dengan Angka)</label>
                  <input type="text" name="anak_ke" class="form-control" id="anak_ke" onkeypress="return hanyaAngka(event)" maxlength="2">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Panjang (cm)</label>
                  <input type="text" name="panjang" class="form-control" id="panjang" onkeypress="return hanyaAngka(event)" maxlength="5">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Tempat Dilahirkan</label>
                   <select class=" form-control select"style="width: 100%;" name="tmp_dilahirkan" id="tmp_dilahirkan">
                    <option selected="selected">Pilih Tempat Kelahiran</option>
                    <option>RS/RB</option>
                    <option>RUMAH</option>
                    <option>POLINDES</option>
                    <option>PUSKESMAS</option>
                    <option>RUMAH</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Penolong Kelahiran</label>
                   <select class=" form-control select"style="width: 100%;" name="penolong_kelahiran" id="penolong_kelahiran">
                    <option selected="selected">Pilih Penolong Kelahiran</option>
                    <option>DOKTER</option>
                    <option>BIDAN</option>
                    <option>PERAWAT</option>
                    <option>DUKUN</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                  <!-- /.form-group -->
                <div class="form-group">
                  <label class="btn-warning">DATA KESEHATAN</label>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Golongan Darah</label>
                   <select class=" form-control select"style="width: 100%;" name="gol_darah" id="gol_darah">
                    <option selected="selected">Pilih Golongan Darah</option>
                    <option>A</option>
                    <option>B</option>
                    <option>AB</option>
                    <option>O</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>TIDAK TAHU</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Akseptor KB</label>
                   <select class=" form-control select"style="width: 100%;" name="akseptor_kb" id="akseptor_kb">
                    <option selected="selected">Pilih Akseptor KB</option>
                    <option>PIL</option>
                    <option>IUD</option>
                    <option>SUNTIK</option>
                    <option>KONDOM</option>
                    <option>SUSUK KB</option>
                    <option>STERILISASI WANITA</option>
                    <option>STERILISASI PRIA</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                  <!-- /.form-group -->
                 <div class="form-group">
                  <label>Cacat</label>
                   <select class=" form-control select"style="width: 100%;" name="cacat" id="cacat">
                    <option selected="selected">Pilih Jenis Cacat</option>
                    <option>CACAT FISIK</option>
                    <option>CACAT NETRA/BUTA</option>
                    <option>CACAT RUNGU/WICARA</option>
                    <option>CACAT MENTAL/JIWA</option>
                    <option>CACAT NETRA/BUTA</option>
                    <option>CACAT FISIK DAN MENTAL</option>
                    <option>CACAT LAINNYA</option>
                    <option>TIDAK CACAT</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Asuransi</label>
                   <select class=" form-control select"style="width: 100%;" name="asuransi" id="asuransi">
                    <option selected="selected">Pilih Jenis Asuransi</option>
                    <option>TIDAK/BELUM PUNYA</option>
                    <option>BPJS MENERIMA BANTUAN IURAN</option>
                    <option>BPJS NON MENERIMA BANTUAN IURAN</option>
                    <option>ASURANSI LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Sakit Menahun</label>
                   <input type="text" name="sakit_menahun" class="form-control" id="sakit_menahun" onkeypress="return hanyaHuruf(event)" maxlength="20">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <button class="btn btn-primary float-left" method="submit">Simpan</button>
                  <a href="#" class="btn btn-danger float-right">Batal</a>
                </div>
              </div>
              <!-- batas rata kiri -->
              <!-- /.col -->
              <div class="col-md-6">
                 
                <div class="form-group">
                  <label>KTP Elektronik</label>
                  <select class=" form-control select2"style="width: 100%;" name="ktp_el" id="ktp_el">
                    <option selected="selected">KTP-El</option>
                    <option>Belum</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label class="btn-warning">PENDIDIKAN DAN PEKERJAAN</label>
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Pendidikan dalam KK</label>
                  <input type="text" name="pendidikan_kk" class="form-control" id="pendidikan_kk" onkeypress="return hanyaHuruf(event)" maxlength="25">
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Pendidikan Sedang Ditempuh</label>
                  <input type="text" name="pendidikan_ditempuh" class="form-control" id="pendidikan_ditempuh" onkeypress="return hanyaHuruf(event)" maxlength="30">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" onkeypress="return hanyaHuruf(event)" maxlength="30">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label class="btn-warning">DATA KEWARGANEGARAAN</label>
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>NIK Ayah</label>
                  <input type="text" name="nik_ayah" class="form-control" id="nik_ayah" onkeypress="return hanyaAngka(event)" maxlength="18" minlength="2">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Nama Ayah</label>
                  <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" onkeypress="return hanyaHuruf(event)" maxlength="30">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>NIK Ibu</label>
                  <input type="text" name="nik_ibu" class="form-control" id="nik_ibu" onkeypress="return hanyaAngka(event)" maxlength="18" minlength="2">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Nama Ibu</label>
                  <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" onkeypress="return hanyaHuruf(event)" maxlength="30">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label class="btn-warning">ALAMAT</label>
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="alamat" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['alamat']; }?>" maxlength="70">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" name="telepon" class="form-control" id="telepon" value="<?php 
              $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");
              while ($row = $result->fetch_assoc()) { echo $row['wa']; }?>" onkeypress="return hanyaAngka(event)">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" id="email" value="" required="email" onkeypress="return hanyaHuruf(event)" maxlength="25">
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label class="btn-warning">STATUS PERKAWINAN</label>
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Status Perkawinan</label>
                  <select class="form-control select2" style="width: 100%;" name="status_perkawinan" id="status_perkawinan">
                    <option selected="selected">Pilih Status Perkawinan</option>
                    <option>BELUM KAWIN</option>
                    <option>KAWIN</option>
                    <option>CERAI HIDUP</option>
                    <option>CERAI MATI</option>
                  </select>
                </div>
                <!-- /.form-group -->
                  <!-- /.col -->
                <div class="form-group">
                  <label>No Akta Nikah</label>
                  <input type="text" name="no_akta_nikah" class="form-control" id="no_akta_nikah" onkeypress="return hanyaAngka(event)" maxlength="18">
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Tanggal Perkawinan</label>
                  <input type="date" name="tgl_perkawinan" class="form-control" id="tgl_perkawinan">
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Tanggal Perceraian</label>
                  <input type="date" name="tgl_perceraian" class="form-control" id="tgl_perceraian">
                </div>
                


              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

              </div>
            
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          </form>
          <!-- /.card-body -->
          
    <!-- /#page-content-wrapper -->
  </div>
              </div>
            </div>

           
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here --> 
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script type="text/javascript">
  function validasi() {
    var nik = document.getElementById("nama").value;
    var nama = document.getElementById("nama").value;
    var kk = document.getElementById("kk").value;
    var hub_kel = document.getElementById("hub_kel").value;
    var jenis_kelamin = document.getElementById("jenis_kelamin").value;
    var agama = document.getElementById("agama").value;
    var status_penduduk = document.getElementById("status_penduduk").value;
    var no_akta = document.getElementById("no_akta").value;
    var tgl_lahir = document.getElementById("tgl_lahir").value;
    var jenis_kelahiran = document.getElementById("jenis_kelahiran").value;
    var tmp_lahir = document.getElementById("tmp_lahir").value;
    var waktu_lahir = document.getElementById("waktu_lahir").value;
    var anak_ke = document.getElementById("anak_ke").value;
    var panjang = document.getElementById("panjang").value;
    var tmp_dilahirkan = document.getElementById("tmp_dilahirkan").value;
    var penolong_kelahiran = document.getElementById("penolong_kelahiran").value;
    var gol_darah = document.getElementById("gol_darah").value;
    var akseptor_kb = document.getElementById("akseptor_kb").value;
    var cacat = document.getElementById("cacat").value;
    var asuransi = document.getElementById("asuransi").value;
    var sakit_menahun = document.getElementById("sakit_menahun").value;
    var ktp_el = document.getElementById("ktp_el").value;
    var pendidikan_kk = document.getElementById("pendidikan_kk").value;
    var pendidikan_ditempuh = document.getElementById("pendidikan_ditempuh").value;
    var pekerjaan = document.getElementById("pekerjaan").value;
    var nik_ayah = document.getElementById("nik_ayah").value;
    var nama_ayah = document.getElementById("nama_ayah").value;
    var nik_ibu = document.getElementById("nik_ibu").value;
    var nama_ibu = document.getElementById("nama_ibu").value;
    var alamat = document.getElementById("alamat").value;
    var telepon = document.getElementById("telepon").value;
    var email = document.getElementById("email").value;
    var status_perkawinan = document.getElementById("status_perkawinan").value;
    var no_akta_nikah = document.getElementById("no_akta_nikah").value;
    var tgl_perkawinan = document.getElementById("tgl_perkawinan").value;
    var tgl_perceraian = document.getElementById("tgl_perceraian").value;
    if (nik != "" && nama!="" && kk !="" && hub_kel !="" && jenis_kelamin !="" && agama !="" && status_penduduk  !="" && no_akta !="" && tgl_lahir !="" && jenis_kelahiran !="" && tmp_lahir !="" && waktu_lahir !="" && anak_ke !="" && panjang !="" && tmp_dilahirkan !="" && penolong_kelahiran !="" && gol_darah !="" && akseptor_kb !="" && cacat !="" && asuransi !="" && sakit_menahun !="" && ktp_el !="" && pendidikan_kk !="" && pendidikan_ditempuh !="" && pekerjaan !="" && nik_ayah !="" && nama_ayah !="" && nik_ibu !="" && nama_ibu !="" && alamat !="" && telepon !="" && email !="" && status_perkawinan !="" && no_akta_nikah !="" && tgl_perkawinan !="" && tgl_perceraian !="") {
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
  <script>
 
function hanyaHuruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
}
 
 
</script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
