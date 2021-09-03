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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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

      <!-- judul -->

      <div class="container-fluid">
        <h1 class="mt-4">Edit Berita</h1>
        <p>Halaman untuk edit berita Desa Purwasari</p>
      </div>

       <!-- box tabel -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Edit Berita</h5>
              </div>
              <div class="card-body">
               
               <!-- tampilkan data tabel -->
               <?php
include "koneksi.php";
$id = $_GET['id'];
$query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id='$id'")or die(mysqli_errors());
while($d = mysqli_fetch_array($query_mysqli)){
  ?>
               <form action="update_berita.php" method="post" enctype="multipart/form-data">
              <div class="form-group">

<?php 
if(isset($_GET['nik'])){
if($_GET['nik'] == "kosong"){
echo "<h4 style='color:red'>NIK Belum Di Masukkan !</h4>";
}
}
?>          
                <input type="hidden" name="id" value="<?php echo $d['id']?>">
                <label for="inputName">Foto</label>
              <img src="img/<?php echo $d['foto']?>" height="50dp" width="50dp">
               <input type="hidden" name="ukuran" value="<?php echo $d['ukuran']?>">
               <input type="hidden" name="tipe" value="<?php echo $d['tipe']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Tanggal</label>
                <input type="text" name="tanggal" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Tanggal.." value="<?php echo $d['tanggal']?>">
              </div>
               <div class="form-group">
                <label for="inputDescription">Judul</label>
                <input type="text" name="judul" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Judul.." value="<?php echo $d['judul']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Kategori</label>
                <input type="text" name="kategori" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Deskripsi.." value="<?php echo $d['kategori']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Pragraf 1</label>
                <input type="text" name="pra1" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Isi Berita.." value="<?php echo $d['pra1']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Pragraf 2</label>
                <input type="text" name="pra2" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Isi Berita.." value="<?php echo $d['pra2']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Pragraf 3</label>
                <input type="text" name="pra3" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Isi Berita.." value="<?php echo $d['pra3']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Pragraf 4</label>
                <input type="text" name="pra4" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Isi Berita.." value="<?php echo $d['pra4']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Kutipan</label>
                <input type="text" name="kutipan" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Kutipan.." value="<?php echo $d['kutipan']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Penulis</label>
                <input type="text" name="penulis" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Nama Penulis.." value="<?php echo $d['penulis']?>">
              </div>
              
              <div class="form-group">
                <label for="inputDescription">Komentar</label>
                <input type="text" name="komen" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Komentar.." value="<?php echo $d['komen']?>">
              </div>
              <div class="card-body"></div>

             
             
              <button type="submit" class="btn btn-success" value="validasi.php" name="simpan">Simpan</button>
               <a href="pengajuan_surat.php" class="btn btn-warning btn-md" >Beranda</a>
            </div>

      <!-- buat ke beranda -->
             
          <?php } ?>
            <!-- /.card-body -->
          </div>
          </body>



              

     


    
    
    


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
