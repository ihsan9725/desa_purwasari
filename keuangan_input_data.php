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

   <title>Desa Purwasari / Admin</title>
<link rel="shortcut icon" type="image/x-icon" href="img/kabupaten_karawang.png">

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
                <a class="dropdown-item" href="log_out.php" onClick="javascript: return confirm('Apakah anda yakin untuk log out?');">Log Out</a>
                <a class="dropdown-item" href="lihat_akun_admin.php">Lihat Akun</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

        <div class="card-body">
          <div class="card-title">
      <div class="container-fluid">
        <h1 class="mt-4">Manual Input Anggaran dan Realisasi APBDes</h1>
        <p></p>
      </div>
      </div>
      </div>

      <body>
      <div class="card mb-5">
          <div class="card-header">
            <div class="card-header">
            <div class="card-title">
              <div class="card-title"> <a href="tambah_keuangan_input_data.php" class="btn btn-success">Tambah Data Anggaran</a> 
             <button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown">
                <span class="sr-only">Toggle Dropdown</span>
                    </button>
                   <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="keuangan_import_data.php">Import Data</i></a>
                      <a class="dropdown-item" href="#">Laporan</a>
                      <a class="dropdown-item" href="#">Input Data</a>
                      <a class="dropdown-item" href="#">Laporan Manual</a>
                      
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
          </div> 
          </div>
          </div>
          <div class="col-sm-6">
          </div>
              <div class="table-responsive">
                <!--   <a href="tambah_data_lansia.php" class="btn btn-primary">Tambah data</a> -->
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                    <th>Tahun</th>
                    <th>Jenis Anggaran</th>
                    <th>Kode Rincian</th>
                    <th>Nilai Anggaran</th>
                    <th>Nilai Realisasi</th>
                    <th>Tanggal</th>
                  </tr>
                    <?php
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from tb_input_anggaran");
                  while($d = mysqli_fetch_array($data)){ ?>
                    <tr>

                <td><?php echo $no++ ?></td>
                 <td>
        <a href="edit_keuangan_input_data.php?id=<?php echo $d['id']; ?>"class = "btn btn-primary"><i class="fas fa-edit"></i></a></td>
        <td>
        <a href="hapus_keuangan_input_data.php?id=<?php echo $d['id']; ?>" class = "btn btn-danger" onClick="javascript: return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></a>
               </td>
                <td><?php echo $d['tahun'] ?></td>
                <td><?php echo $d['jenis_anggaran'] ?></td>
                <td><?php echo $d['kode_rincian'] ?></td>
                <td><?php echo $d['nilai_anggaran'] ?></td>
                <td><?php echo $d['nilai_real'] ?></td>
                <td><?php echo $d['tanggal'] ?></td>
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

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
