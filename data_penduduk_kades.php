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
  <title>Desa Purwasari / Kades</title>
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
       
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
            <a href="index_kades.php" class="nav-link">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Kontak</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Menu</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="logout.php" class="dropdown-item">Log Out</a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Data-data</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                   <li>
                    <a tabindex="-1" href="data_penduduk_kades.php" class="dropdown-item">Data Penduduk</a>
                  </li>
                   <li>
                    <a tabindex="-1" href="data_staf_kades.php" class="dropdown-item">Data Staf Aparat Desa</a>
                  </li>
                  <li>
                    <a tabindex="-1" href="lihat_akun_kades.php" class="dropdown-item">Akun</a>
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

              <h1 class="m-0 text-dark">Selamat datang di Sistem Informasi Desa!.</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index_kades.php">Beranda</a></li>
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
                <h5 class="card-title m-0"><b>Data Penduduk</b></h5><br>
                 <h6 class="card-title">Halaman ini memuat data penduduk masyarakat Desa Mandalahaji.</h6><br>
                 <a href="cetak_data_penduduk_kades.php" class="btn btn-warning"><i class="fas fa-print"></i></a>
              </div>
              <div class="card-body"> 
              

                  <!-- get tabel dari db tentang penduduk -->
                   <div class="table-responsive">
                  <div class="col-sm-6">


                <!--   <a href="tambah_data_lansia.php" class="btn btn-primary">Tambah data</a> -->
                  <table class="table table-bordered" id="datatables" width="100%" cellspacing="0">
                <thead>
                  <tr>
                     <th>No</th>
                    <th>Foto</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No KK</th>
                    <th>Hubungan Dalam Keluarga</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status Penduduk</th>
                    <th>No Akta</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelahiran</th>
                    <th>Tempat Lahir</th>
                    <th>Waktu Lahir</th>
                    <th>Anak Ke</th>
                    <th>Panjang (cm)</th>
                    <th>Tempat Dilahiran</th>
                    <th>Penolong Kelahiran</th>
                    <th>Golongan Darah</th>
                    <th>Akseptor KB</th>
                    <th>Cacat</th>
                    <th>Asuransi</th>
                    <th>Sakit Menahun</th>
                    <th>KTP Elektronik</th>
                    <th>Pendidikan Dalam KK</th>
                    <th>Pendidikan Sedang Ditempuh</th>
                    <th>Pekerjaan</th>
                    <th>NIK Ayah</th>
                    <th>Nama Ayah</th>
                    <th>NIK Ibu</th>
                    <th>Nama Ibu</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>E-mail</th>
                    <th>Status Perkawinan</th>
                    <th>No Akta Nikah</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Perkawinan</th>
                    <th>Tanggal Perceraian</th>
                   
                  </tr>
                     <?php
          // panggil file koneksi
          include "koneksi.php";
          $sql="SELECT * FROM tb_penduduk";
          $no=1;
          //eksekusi query menampilkan data dari tabel Mhsw
          $query= mysqli_query($koneksi,$sql) or die(mysqli_errors());;
          //mengembalikan data row menjadi array dan looping data menggunakan while
          while ($d= mysqli_fetch_array($query)) {
        ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                <td><img src="img/<?php echo $d['foto']?>" width="50" height="50"></td>
                    <td><?php echo $d['nik'] ?></td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo $d['kk'] ?></td>
                    <td><?php echo $d['hub_kel'] ?></td>
                    <td><?php echo $d['jenis_kelamin'] ?></td>
                    <td><?php echo $d['agama'] ?></td>
                    <td><?php echo $d['status_penduduk'] ?></td>
                    <td><?php echo $d['no_akta'] ?></td>
                    <td><?php echo $d['tgl_lahir'] ?></td>
                    <td><?php echo $d['jenis_kelahiran'] ?></td>
                    <td><?php echo $d['tmp_lahir'] ?></td>
                    <td><?php echo $d['waktu_lahir'] ?></td>
                    <td><?php echo $d['anak_ke'] ?></td>
                    <td><?php echo $d['panjang'] ?></td>
                    <td><?php echo $d['tmp_dilahirkan'] ?></td>
                    <td><?php echo $d['penolong_kelahiran'] ?></td>
                    <td><?php echo $d['gol_darah'] ?></td>
                    <td><?php echo $d['akseptor_kb'] ?></td>
                    <td><?php echo $d['cacat'] ?></td>
                    <td><?php echo $d['asuransi'] ?></td>
                    <td><?php echo $d['sakit_menahun'] ?></td>
                    <td><?php echo $d['ktp_el'] ?></td>
                    <td><?php echo $d['pendidikan_kk'] ?></td>
                    <td><?php echo $d['pendidikan_ditempuh'] ?></td>
                    <td><?php echo $d['pekerjaan'] ?></td>
                    <td><?php echo $d['nik_ayah'] ?></td>
                    <td><?php echo $d['nama_ayah'] ?></td>
                    <td><?php echo $d['nik_ibu'] ?></td>
                    <td><?php echo $d['nama_ibu'] ?></td>
                    <td><?php echo $d['alamat'] ?></td>
                    <td><?php echo $d['telepon'] ?></td>
                    <td><?php echo $d['email'] ?></td>
                    <td><?php echo $d['status_perkawinan'] ?></td>
                    <td><?php echo $d['no_akta_nikah'] ?></td>
                    <td><?php echo $d['jenis_kelamin'] ?></td>
                    <td><?php echo $d['tgl_perkawinan'] ?></td>
                    <td><?php echo $d['tgl_perceraian'] ?></td>
       
              </td><?php }?>

              </tr>
        </thead>
        </table>
    </div>
    </div>
    </div>
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
