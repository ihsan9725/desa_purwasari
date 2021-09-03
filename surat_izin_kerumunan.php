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
        <h1 class="mt-3">Surat Izin Kerumunan</h1>
        <p>Halaman Ini Digunakan Untuk Mencetak Surat Izin Kerumunan</p>
      </div>
      <body>
    <section class="content">
      <div class="row">
        <div class="card-body">
          <div class="card card-primary">
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
               <form action="cetak_surat_izin_kerumunan.php" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                <label for="inputDescription">Pilih Dari NIK</label>
                <select class="form-control" name="pilih_dari_nik" onchange="changeValueNIK(this.value)">
                  <option selected="selected">Pilih Dari NIK</option>
                  <?php
                  include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from tb_penduduk");
                  $jsArray = "var prdName = new Array();\n";
                  while($d = mysqli_fetch_array($data)){ 
                    echo '<option value="'.$d['nik']. '">'.$d['nama'].' -- '.$d['nik'].'</option>';
                  $jsArray .= "prdName['" . $d['nik'] . "'] = {nama:'".addslashes($d['nama'])."',nik:'".addslashes($d['nik'])."',kk:'".addslashes($d['kk'])."',ayah:'".addslashes($d['nama_ayah'])."',nik_ayah:'".addslashes($d['nik_ayah'])."',tmp_lahir:'".addslashes($d['tmp_lahir'])."',tgl_lahir:'".addslashes($d['tgl_lahir'])."',alamat:'".addslashes($d['alamat'])."',status_perkawinan:'".addslashes($d['status_perkawinan'])."',pendidikan_ditempuh:'".addslashes($d['pendidikan_ditempuh'])."',pekerjaan:'".addslashes($d['pekerjaan']). "',agama:'".addslashes($d['agama']). "',jenis_kelamin:'".addslashes($d['jenis_kelamin']). "'};\n";
                  ?>
                <?php } ?>
                </select>  
              </div>
               <div class="form-group">
                <label for="inputDescription">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" rows="" placeholder="">     
              </div>
               <div class="form-group">
                <label for="inputDescription">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" rows="" placeholder="">     
              </div>
              <div class="form-group">
                <label for="inputDescription">KK</label>
                <input type="text" name="kk" id="kk" class="form-control" rows="" placeholder="">     
              </div>
               <div class="form-group">
                <label for="inputDescription">Nama Ayah/NIK</label>
                <input type="text" name="ayah" id="ayah" class="form-control" rows="" placeholder=""> 
                <input type="text" name="nik_ayah" id="nik_ayah" class="form-control" rows="" placeholder="">     
              </div>
              <div class="form-group">
                <label for="inputDescription">Tempat/Tanggal lahir/Umur</label>
                <input type="hidden" name="id" id="id">
                <input type="text " name="tmp_lahir" id="tmp_lahir" class="form-control" rows="" placeholder="">
                <input type="text " name="tgl_lahir" id="tgl_lahir" class="form-control" rows="" placeholder="">
                <input type="text " name="umur" id="umur" class="form-control" rows="" placeholder="">     
              </div>
              <div class="form-group">
                <label for="inputDescription">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" rows="" placeholder="">     
              </div>
              <div class="form-group">
                <label for="inputDescription">Status</label>
                <input type="text" name="status_perkawinan" id="status_perkawinan" class="form-control" rows="" placeholder="">     
              </div>
               <div class="form-group">
                <label for="inputDescription">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" rows="" placeholder="">     
              </div>
              <div class="form-group">
                <label for="inputDescription">Pendidikan/Warga Negara/Agama</label>
                <input type="text " name="pendidikan_ditempuh" id="pendidikan_ditempuh" class="form-control" rows="" placeholder="">
                <input type="text " name="warga1" id="warga1" class="form-control" rows="" placeholder="">
                <input type="text " name="agama" id="agama" class="form-control" rows="" placeholder="">     
              </div>
              <div class="form-group">
                <label for="inputDescription">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" rows="" placeholder="">     
              </div>
               <div class="form-group">
                <label for="inputDescription">No Surat</label>
                <input type="text" name="surat" id="" class="form-control" rows="" placeholder="Masukan No Surat..">
              </div>
              <div class="form-group">
                <label for="inputDescription">Jenis Acara</label>
                <input type="text" name="acara" id="acara" class="form-control" rows="" placeholder="Masukan Jenis Acara..">     
              </div>
               <div class="form-group">
                <label for="inputDescription">Keperluan</label>
                <input type="text" name="keperluan" id="" class="form-control" rows="" placeholder="Masukan Keperluan..">     
              </div>
              <div class="form-group">
                <label for="inputDescription">Berlaku Dari - Sampai</label>
                <input type="date" name="masa_berlaku" id="" class="form-control" rows="" placeholder="Masukan Nama Staf..">
                <input type="date" name="masa_tenggang" id="" class="form-control" rows="" placeholder="Masukan Nama Staf..">     
              </div>
              <div class="form-group">
                <label for="inputDescription">Tertanda Atas Nama</label>
                <select class="form-control" name="atas_nama">
                  <option selected="">PILIH ATAS NAMA</option>
                  <option>A.N Kepala Desa</option>
                  <option>A.N Sekertaris Desa</option>
                </select>  
              </div>
              <div class="form-group">
                <label for="inputDescription">Staf Pemerintah Desa</label>
                 
                <select class="form-control" name="staf_desa">
                  <option selected="">PILIH STAF</option>
                  <?php
                  include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from tb_staf");
                  while($d = mysqli_fetch_array($data)){ ?>
                  <option><?php echo $d['nama']?></option><?php }?>
                </select>      
              </div>
              <div class="form-group">
                <label for="inputDescription">Menjabat Sebagai</label>
                <select class="form-control" name="jabatan">
                  <option selected="">PILIH JABATAN</option>
                  <option>Kepala Desa</option>
                  <option>Sekertaris Desa</option>
                </select>      
              </div>
              <button type="submit" class="btn btn-primary float-left" onClick="javascript: return confirm('Apakah Data Yang Anda Masukkan Sudah Benar?');"><i class="fas fa-print"></i>  Cetak</button>
              <a href="jenis_surat.php" class="btn btn-danger float-right" onClick="javascript: return confirm('Apakah Anda Yakin Untuk Batal?');">Batal</a>
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
  <script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValueNIK(nik){
      document.getElementById('nama').value = prdName[nik].nama;
      document.getElementById('nik').value = prdName[nik].nik;
      document.getElementById('kk').value = prdName[nik].kk;
      document.getElementById('ayah').value = prdName[nik].ayah;
      document.getElementById('nik_ayah').value = prdName[nik].nik_ayah;
      document.getElementById('tmp_lahir').value = prdName[nik].tmp_lahir;
      document.getElementById('tgl_lahir').value = prdName[nik].tgl_lahir;
      document.getElementById('alamat').value = prdName[nik].alamat;
      document.getElementById('status_perkawinan').value = prdName[nik].status_perkawinan;
      document.getElementById('pendidikan_ditempuh').value = prdName[nik].pendidikan_ditempuh;
      document.getElementById('pekerjaan').value = prdName[nik].pekerjaan;
      document.getElementById('agama').value = prdName[nik].agama;
      document.getElementById('jenis_kelamin').value = prdName[nik].jenis_kelamin;
    };
  </script>

</body>

</html>
