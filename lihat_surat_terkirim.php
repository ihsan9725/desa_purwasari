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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

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
        <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="text" name="cari" placeholder="Cari Nama.." aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" name="mencari">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
     <!-- get data cari nama -->
            <?php
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              echo "<b>Hasil Pencarian : ".$cari."..</b>";
             }
            ?>
            <!-- batas search form -->

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
        <h1 class="mt-4">Surat Terkirim</h1>
        <p>Pengajuan Surat Pengantar Masyarakat Desa Mandalahaji</p>
      </div>

      <!-- box tabel -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Lihat Surat Keterangan Terkirim ke User</h5>
              </div> 
              <div class="card-body">
               
               <!-- tampilkan data tabel -->
                <div class="card mb-5">
        <div class="card-header">
          <div class="card-title"> <a href="#" class="btn btn-success">Pilihan Lain</a> 
            
             <button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown">
                <span class="sr-only">Toggle Dropdown</span>
                    </button>
                   <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="jenis_surat.php">Cetak Surat Untuk diKantor</a>
                      <a class="dropdown-item" href="jenis_surat_ttdkades.php">Cetak Surat Kepala Desa</a>
                      <a class="dropdown-item" href="kirim_surat_keuser.php">Kirim Surat Ke User</i></a>
                      <a class="dropdown-item" href="lihat_surat_terkirim.php">Lihat Surat Terkirim</i></a>
                      <a class="dropdown-item" href="arsip_layanan_surat.php">Arsip Layanan Surat</a>
                       <a class="dropdown-item" href="panduan_surat.php">Panduan</a>
                       <a class="dropdown-item" href="daftar_persyaratan.php">Daftar Persyaratan</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
          </div>
          <!-- Default box -->
            
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
               <?php
                include "koneksi.php"; 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from tb_surat_keuser where nama_user like '%".$cari."%'");       
  }else{
    $data = mysqli_query($koneksi,"select * from tb_surat_keuser");   
  }
  $no = 1;
  while($d = mysqli_fetch_array($data)){
  ?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-ligh">
                <div class="card-header text-muted border-bottom-0">
                 <h2 class="lead"><b><?php echo $d['nama']?></b></h2>
                </div>
                <div class="card-body pt-0">
                  <div class="row">

                    <div class="col-7">
                      
                      <p class="text-muted text-sm"><b>Nama User: </b><?php echo $d['nama_user']?></p>
                      <p class="text-muted text-sm"><b>Nama Pengirim: </b><?php echo $d['nama_pengirim']?></p>
                      <p class="text-muted text-sm"><b>Jabatan: </b><?php echo $d['jabatan']?></p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Progress: </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar"></i></span> Tanggal Surat Terkirim : <?php echo $d['tanggal']?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="img/mail.png" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-left">
                    <a href="pengajuan_surat.php" class="btn btn-sm btn-success bg-teal">
                      <i class="fas fa-home"></i></a>
                      <a href="hapus_surat_terkirim.php?id=<?php echo $d['id']; ?>" class = "btn btn-sm btn btn-danger bg-teal" onClick="javascript: return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></a>
                    
                    <a href="download_surat.php?filename=<?=$d['nama']?>" class="btn btn-sm btn-primary"> 
                      <i class="fas fa-download"></i> Download File
                    </a>

                  </div>
                </div>
              </div>
            </div>

          <?php } ?>
    <!-- /#page-content-wrapper -->
  </div>
              </div>
            </div>

           
        </div>

  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

</body>

</html>
