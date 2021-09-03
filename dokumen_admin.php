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
        <a href="pengajuan_surat.php" class="list-group-item list-group-item-action bg-light">Lihat Pengajuan Surat</a>
        <a href="about_admin.php" class="list-group-item list-group-item-action bg-light">Tentang Desa</a>
        <a href="manajemen_akun.php" class="list-group-item list-group-item-action bg-light">Manajemen Akun</a>
        <a href="galeri.php" class="list-group-item list-group-item-action bg-light">Galeri</a>
         <a href="background.php" class="list-group-item list-group-item-action bg-light">Ganti Background</a>
        <a href="pelayanan.php" class="list-group-item list-group-item-action bg-light">Pelayanan</a>
        <a href="staf.php" class="list-group-item list-group-item-action bg-light">Staf</a>
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
                <a class="dropdown-item" href="log_out.php" onClick="javascript: return confirm('Apakah anda yakin untuk log out?');">Log Out</a>
                <a class="dropdown-item" href="lihat_akun_admin.php">Lihat Akun</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <!-- judul -->

      <div class="container-fluid">
        <h1 class="mt-4">Dokumen</h1>
        <p>Dokumen Kantor Desa Mandalahaji</p>
      </div>

       <!-- box tabel -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Jenis Dokumen</h5>
              </div>
              <div class="card-body">
               
               <!-- tampilkan data tabel -->

                <div class="card mb-5">
          <div class="card-header">
            <div class="card-title"> <a href="tambah_dokumen.php" class="btn btn-primary">Tambah Dokumen</a></div>
          <div class="col-sm-6">
          </div>
                   
              <div class="table-responsive">
                <!--   <a href="tambah_data_lansia.php" class="btn btn-primary">Tambah data</a> -->
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Dokumen</th>
                    <th>Ukuran</th>
                    <th>Tipe</th>
                    <th>Nama Dokumen</th>
                    <th>Jenis Informasi</th>
                    <th>Hapus</th>
                  </tr>
                    <?php
                  include 'koneksi_srvr.php';
                  $no = 1;
                  $data = sqlsrv_query($conn,"select * from tb_dokumen ");
                  while($d = sqlsrv_fetch_array($data)){ ?>
                    <tr>
                <td><?php echo $no++ ?></td>
                 <td><img src="img/<?php echo $d['foto']?>" width="50" height="50"></td>
                <td><?php echo $d['jenis_layanan'] ?></td>
                <td><?php echo $d['deskripsi'] ?></td>
                  <td>
        <a href="edit_pelayanan.php?id=<?php echo $d['id']; ?>"class = "btn btn-primary">Edit</a>
                    </td>
                    <td>
        <a href="hapus_pelayanan.php?id=<?php echo $d['id']; ?>" class = "btn btn-secondary" onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a>
               </td>
                
                </tr><?php }?>
                </thead>
                </table>
              </div>
            </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>



              

     


    
    
    


  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
