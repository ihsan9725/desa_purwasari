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
        <a href="data_sertifikat_tanah.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-certificate"></i> Sertifikat Tanah</a>
      </div>
    </div>

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
        <h1 class="mt-4">Edit Manajemen Akun Penduduk</h1> 
        <p>Desa Purwasari</p>
      </div>

      <body>
    <section class="content">
      <div class="row">
        <div class="card-body">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Akun</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                   <h3></h3>
                </button>
              </div>
            </div>
            <div class="card-body">

             
                <!-- tampilkan data yang akan di edit -->
               <?php
                include "koneksi.php";
                $id = $_GET['id'];
                $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id='$id'")or die(mysqli_error());
                while($d = mysqli_fetch_array($query_mysqli)){
                ?>
          
               <form action="update_manajemen_akun.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                       
                <input type="hidden" name="id" value="<?php echo $d['id']?>">
                <input type="hidden" name="nama" value="<?php echo $d['nama']?>">
                <input type="hidden" name="ukuran" value="<?php echo $d['ukuran']?>">
                <input type="hidden" name="tipe" value="<?php echo $d['tipe']?>">

                <label for="inputName">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Judul" value="<?php echo $d['nik']?>">
               
              </div>
              <div class="form-group">
                <label for="inputDescription">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" rows="" placeholder="Masukkan Sub Judul" value="<?php echo $d['nama']?>">
              </div>
               <div class="form-group">
                <label for="inputDescription">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" rows="" placeholder="Tambahkan Foto" value="<?php echo $d['alamat']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Masukkan Isi Pragraf" value="<?php echo $d['tgl_lahir']?>">
              </div>
               <div class="form-group">
                <label for="inputDescription">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukkan Isi Pragraf" value="<?php echo $d['tempat_lahir']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                  <option selected="selected"><?php echo $d['jenis_kelamin']?></option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                
              </div>
              <div class="form-group">
                <label for="inputDescription">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Masukkan Isi Pragraf" value="<?php echo $d['pekerjaan']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Pendidikan</label>
                <input type="text" name="pendidikan" id="pendidikan" class="form-control" placeholder="Masukkan Isi Pragraf" value="<?php echo $d['pendidikan']?>">
              </div>
               <div class="form-group">
                <label for="inputDescription">No WA</label>
                <input type="text" name="wa" id="wa" class="form-control" placeholder="Masukkan Isi Pragraf" value="<?php echo $d['wa']?>">
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
              
    <!-- /#page-content-wrapper -->
  </div>
    <?php } ?>

    
    


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
