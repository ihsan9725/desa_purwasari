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
        <h1 class="mt-3">Staf Pemerintah Desa</h1>
      </div>
      <body>
    <section class="content">
      <div class="row">
        <div class="card-body">
          <div class="card card-success">
            <div class="card-header">
              <h4 class="card-title">Edit Data Staf Pemerintah Desa</h4>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
             
              <form action="update_aparat_pemerintahds.php" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                <label for="inputDescription">Pilih Dari NIK</label>
                <select class="form-control" name="" onchange="changeValueNIK(this.value)">
                  <option selected="selected">Pilih Dari NIK</option>
                  <?php
                  include 'koneksi_srvr.php';
                  $data = sqlsrv_query($conn,"select * from tb_penduduk");
                  $jsArray = "var prdName = new Array();\n";
                  while($d = sqlsrv_fetch_array($data)){ 
                    echo '<option value="'.$d['nik']. '">'.$d['nama'].' -- '.$d['nik'].'</option>';
                  $jsArray .= "prdName['" . $d['nik'] . "'] = {nama_peg:'".addslashes($d['nama'])."',nik:'".addslashes($d['nik'])."',tmp_lahir:'".addslashes($d['tmp_lahir'])."',tgl_lahir:'".addslashes($d['tgl_lahir'])."',jenis_kelamin:'".addslashes($d['jenis_kelamin'])."',pendidikan:'".addslashes($d['pendidikan_ditempuh'])."',agama:'".addslashes($d['agama']). "'};\n";
                  ?>
                <?php } ?>
                </select>  
              </div>
               <!-- tampilkan data tabel -->
               <?php
include "koneksi.php";
$id = $_GET['id'];
$query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_aparat_pemerintahds WHERE id='$id'")or die(mysqli_errors());
while($d = mysqli_fetch_array($query_mysqli)){
  ?>
                 <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $d['id']?>">
                <label for="inputDescription">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control" value="<?php echo $d['nama']?>">
              </div>
               <div class="form-group">
                <label for="inputDescription">Nama Pegawai Desa</label>
                <input type="text" name="nama_peg" id="nama_peg" class="form-control" rows="" value="<?php echo $d['nama_peg']?>">     
              </div>
               <div class="form-group">
                <label for="inputDescription">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" rows="" value="<?php echo $d['nik']?>">     
              </div>
               <div class="form-group">
                <label for="inputDescription">NIPD</label>
                <input type="text" name="nipd" id="nipd" class="form-control" rows="" value="<?php echo $d['nipd']?>">     
              </div>
              <div class="form-group">
                <label for="inputDescription">NIP</label>
                <input type="text" name="nip" id="nip" class="form-control" rows="" value="<?php echo $d['nip']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" rows="" value="<?php echo $d['tmp_lahir']?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" rows="" value="<?php echo $d['tgl_lahir']?>">     
              </div>
              <div class="form-group">
                <label for="inputDescription">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                  <option selected="selected"><?php echo $d['jenis_kelamin']?></option>
                  <option>Laki-Laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputDescription">Pendidikan</label>
                <input type="text" name="pendidikan" id="pendidikan" class="form-control" rows="" value="<?php echo $d['pendidikan']?>"> 
              </div>
              <div class="form-group">
                <label for="inputDescription">Agama</label>
                <input type="text" name="agama" id="agama" class="form-control" rows="" value="<?php echo $d['agama']?>"> 
              </div>
              <div class="form-group">
                <label for="inputDescription">Pangkat/Gol</label>
                <input type="text" name="pangkat" id="pangkat" class="form-control" rows="" value="<?php echo $d['pangkat']?>"> 
              </div>
              <div class="form-group">
                <label for="inputDescription">No SK Pengangkatan</label>
                <input type="text" name="no_sk_pengangkatan" id="no_sk_pengangkatan" class="form-control" rows="" value="<?php echo $d['no_sk_pengangkatan']?>"> 
              </div>
              <div class="form-group">
                <label for="inputDescription">Tgl SK Pengangkatan</label>
                <input type="date" name="tgl_sk_pengangkatan" id="tgl_sk_pengangkatan" class="form-control" rows="" value="<?php echo $d['tgl_sk_pengangkatan']?>"> 
              </div>
              <div class="form-group">
                <label for="inputDescription">No SK Pemberhentian</label>
                <input type="text" name="no_sk_pemberhentian" id="no_sk_pemberhentian" class="form-control" rows="" value="<?php echo $d['no_sk_pemberhentian']?>"> 
              </div>
              <div class="form-group">
                <label for="inputDescription">Tgl SK Pemberhentian</label>
                <input type="date" name="tgl_sk_pemberhentian" id="tgl_sk_pemberhentian" class="form-control" rows="" value="<?php echo $d['tgl_sk_pemberhentian']?>"> 
              </div>
              <div class="form-group">
                <label for="inputDescription">Masa Jabatan (Usia/Periode)</label>
                <input type="text" name="masa_jabatan" id="masa_jabatan" class="form-control" rows="" value="<?php echo $d['masa_jabatan']?>"> 
              </div>
               <div class="form-group">
                <label for="inputDescription">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" rows="" value="<?php echo $d['jabatan']?>"> 
              </div>
               <div class="form-group">
                <label for="inputDescription">Status Pegawai Desa</label> 
                <select selected="" name="status" class="form-control">
                  <option selected="selected"><?php echo $d['status']?></option>
                  <option>Aktif</option>
                  <option>Tidak Aktif</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary float-left" onclick="alert('Apakah Data Yang Dimasukkan Sudah Benar?')">Simpan</button>
              <button type="submit" class="btn btn-danger float-right" name="arsipkan">Arsipkan</button>
            <?php } ?>
              </form>
            </div>
    <!-- /#page-content-wrapper -->
  </div>

<script type="text/javascript">
    <?php echo $jsArray; ?>
    function changeValueNIK(nik){
      document.getElementById('nama_peg').value = prdName[nik].nama_peg;
      document.getElementById('nik').value = prdName[nik].nik;
      document.getElementById('tmp_lahir').value = prdName[nik].tmp_lahir;
      document.getElementById('tgl_lahir').value = prdName[nik].tgl_lahir;
      document.getElementById('jenis_kelamin').value = prdName[nik].jenis_kelamin;
      document.getElementById('pendidikan').value = prdName[nik].pendidikan;
      document.getElementById('agama').value = prdName[nik].agama;
    };
  </script>
    
    


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
  