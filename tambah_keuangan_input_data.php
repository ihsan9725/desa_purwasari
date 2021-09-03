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
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 

  <title>Desa Mandalahaji / Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/simple-sidebar.css" rel="stylesheet">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><?php echo $username; ?></div> 
      <div class="list-group list-group-flush">
          <a href="siaga_covid.php" class="list-group-item list-group-item-action bg-light"><i class="nav-icon fas fa-viruses"></i> Siaga Covid-19</a>
         <a href="buku_induk_penduduk.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i> Buku Adm Penduduk</a>
         <a href="buku_administrasi_desa.php" class="list-group-item list-group-item-action bg-light"><i class="nav-icon fas fa-book"></i> Buku Administrasi Desa</a>
        <a href="berita_admin.php" class="list-group-item list-group-item-action bg-light"><i class="nav-icon fas fa-tachometer-alt"></i> Berita</a>
        <a href="data_penduduk.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i> Data Penduduk</a>
        <a href="pengajuan_surat.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-envelope"></i> Pengajuan Surat</a>
        <a href="about_admin.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-address-card"></i> Tentang Desa</a>
        <a href="manajemen_akun.php" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-tasks"></i> Manajemen Akun</a>
        <a href="galeri.php" class="list-group-item list-group-item-action bg-light"><i class="far fa-images"></i> Galeri</a>
         <a href="background.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-cogs"></i> Ganti Background</a>
        <a href="pelayanan.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-concierge-bell"></i> Pelayanan</a>
        <a href="staf.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-horse-head"></i> Staf</a>
         <a href="keuangan_import_data.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-money-bill-wave"></i> Keuangan</a>
        <a href="data_sertifikat_tanah.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-certificate"></i> Sertifikat Tanah</a>
        <a href="sekretariat.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-horse-head"></i> Sekretariat</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Hide Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index_admin.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pengaturan
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login.php">Log Out</a>
                <a class="dropdown-item" href="lihat_akun_admin.php">Lihat Akun</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-3">Tambah Anggaran / Realisasi</h1>
      </div>
      <body>
    <section class="content">
      <div class="row">
        <div class="card-body">
          <div class="card card-success">
            <div class="card-header">
              <h4 class="card-title"></h4>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <!-- tampilkan nama foto di form ganti bg -->
              <form action="tambah_aksi_keuangan_input_data.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                <input type="hidden" name="id"> 
                <label for="inputDescription">Tahun</label>
                <input type="text" name="tahun" class="form-control">
              </div>
               <div class="form-group">
                <label for="inputDescription">Jenis Anggaran</label>
                <select class="form-control" name="jenis_anggaran">
                  <option selected="selected">Pilih Jenis Anggaran</option>
                  <option>4.Pendapatan</option>
                  <option>5.Belanja</option>
                  <option>6.Pembiayaan</option>
                </select>    
              </div>
              <div class="form-group">
                <label for="inputDescription">Kode Rincian</label>
                <select class="form-control" name="kode_rincian">
                  <option selected="selected">Pilih Kode Rincian</option>
                  <option>4.1.1. Hasil Usaha Desa</option>
                  <option>4.1.2. Hasil Aset Desa</option>
                  <option>4.1.3. Swadaya Partisipasi dan Gotong Royong</option>
                  <option>4.1.4. Lain-lain Pendapatan Asli Desa</option>
                  <option>4.2.1. Dana Desa</option>
                  <option>4.2.2. Bagi Hasil Pajak dan Retribusi</option>
                  <option>4.2.3. Alokasi Dana Desa</option>
                  <option>4.2.4. Bantuan Keuangan Provinsi</option>
                  <option>4.2.5. Bantuan Keuangan Kabupaten/Kota</option>
                  <option>4.3.1. Penerimaan dari Hasil Kerjasama Antar Desa</option>
                  <option>4.3.2. Penerimaan dari Hasil Kerjasama dengan Pihak Ketiga</option>
                  <option>4.3.3. Penerimaan Bantuan Dari Perusahaan Yang Berlokasi di Desa</option>
                  <option>4.3.4. Hibah dan Sumbangan dari Pihak Ketiga</option>
                  <option>4.3.5. Koreksi Kesalahan Belanja Tahun-tahun Sebelumnya</option>
                  <option>4.3.6. Bunga Bank</option>
                  <option>4.3.7. Lain-lain Pendapatan Desa Yang Sah</option>
                </select>    
              </div>
               <div class="form-group">
                <label for="inputDescription">Nilai Anggaran</label>
                <input type="text" name="nilai_anggaran" id="nilai_anggaran" class="form-control" rows="" placeholder="">     
              </div>
               <div class="form-group">
                <label for="inputDescription">Nilai Realisasi</label>
                <input type="text" name="nilai_real" id="nilai_real" class="form-control" rows="" placeholder="">     
              </div>
              <button type="submit" class="btn btn-primary float-left" onclick="alert('Apakah Data Yang Dimasukkan Sudah Benar?')">Simpan</button>
              <button type="submit" class="btn btn-danger float-right" name="arsipkan">Arsipkan</button>
            </div>
    <!-- /#page-content-wrapper -->
  </div>


    
    


  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>

</html>
  