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
   <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

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
          <button class="btn btn-navbar" type="submit">
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
        <h1 class="mt-4">Buku Administrasi Penduduk-Buku Induk Penduduk</h1>
        <p></p>
      </div>
          
          <div class="card-body">
          <div class="card mb-5">
          <div class="card-header">
            <div class="card-title">
              <div class="card-title"> <a href="#" class="btn btn-success">Pilihan Lain</a> 
             <button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown">
                <span class="sr-only">Toggle Dropdown</span>
                    </button>
                   <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="buku_induk_penduduk.php">Buku Induk Penduduk</i></a>
                      <a class="dropdown-item" href="buku_mutasi_penduduk.php">Buku Mutasi Penduduk Desa</a>
                      <a class="dropdown-item" href="buku_rekapitulasi.php">Buku Rekapitulasi Penduduk</a>
                       <a class="dropdown-item" href="buku_penduduk_sementara.php">Buku Penduduk Sementara</a>
                       <a class="dropdown-item" href="buku_ktp_kk.php">Buku KTP dan KK</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
          </div> 
            </div>
          <div class="col-sm-6">
          </div>
        </div>
        
                   
              <div class="table-responsive">
                <!--   <a href="tambah_data_lansia.php" class="btn btn-primary">Tambah data</a> -->
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    <!-- deklarasikan pencarian -->
                <?php
                include "koneksi.php"; 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($koneksi,"select * from tb_penduduk where nama like '%".$cari."%'");       
  }else{
    $data = mysqli_query($koneksi,"select * from tb_penduduk");   
  }
  $no = 1;
  while($d = mysqli_fetch_array($data)){
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
                 
                
                </tr><?php }?>
                </thead>
                </table>
              </div>
            </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
</div>

 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
