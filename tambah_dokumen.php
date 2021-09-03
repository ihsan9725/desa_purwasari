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
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><?php echo $username; ?></div> 
      <div class="list-group list-group-flush">
        <a href="pengajuan_surat.php" class="list-group-item list-group-item-action bg-light">Lihat Pengajuan Surat</a>
        <a href="about_admin.php" class="list-group-item list-group-item-action bg-light">Tentang Desa</a>
        <a href="manajemen_akun.php" class="list-group-item list-group-item-action bg-light">Manajemen Akun</a>
        <a href="galeri.php" class="list-group-item list-group-item-action bg-light">Galeri</a>
         <a href="background.php" class="list-group-item list-group-item-action bg-light">Ganti Background</a>
        <a href="pelayanan.php" class="list-group-item list-group-item-action bg-light">Pelayanan</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
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

        <div class="card-body">
          <div class="card-header">
      <div class="container-fluid">
        <h1 class="mt-4">Tambah Dokumen</h1>
        <p>Tambahkan Dokumen Pengantar</p>
      </div>
      </div>
      </div>

      <body>
    <section class="content">
      <div class="row">
        <div class="card-body">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
               <form action="tambah_aksi_dokumen.php" method="post" enctype="multipart/form-data">
             
               <div class="form-group">
                <label for="inputDescription">Dokumen</label>
                <input type="file" name="dokumen" id="dokumen" class="form-control" rows="" placeholder="Tambahkan Foto">
              </div>
              <div class="form-group">
                <label for="inputDescription">Nama Dokumen</label>
                <input type="text" name="nama_dok" id="nama_dok" class="form-control" placeholder="Masukkan Nama Dokumen">
              </div>
              <div class="form-group">
                <label for="inputDescription">Jenis Informasi</label>
                <input type="text" name="jenis_info" id="jenis_info" class="form-control" placeholder="Jenis Informasi">
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
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
