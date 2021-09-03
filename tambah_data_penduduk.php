 <!-- tampilkan data user dari db -->
      
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
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
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
                Lainnya
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="data_keluarga.php">Data Keluarga</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
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
        <h1 class="mt-3">Tambah Data Penduduk</h1>
        <p>Data Penduduk Desa Mandalahaji</p>
      </div>
      <body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Select2 (Default Theme)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
         
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                 <form action="tambah_aksi_penduduk.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control" id="foto">
                </div>
                <!-- /.form-group -->
                  <label>NIK</label>
                  <input type="hidden" name="id" id="id">
                  <input type="Text" name="nik" id="nik" class="form-control">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Nama Lengkap (tanpa gelar)</label>
                  <input type="Text" name="nama" id="nama" class="form-control">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>No KK Sebelumnya</label>
                  <input type="Text" name="kk" id="kk" class="form-control">
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Hubungan Dalam Keluarga</label>
                   <select class=" form-control select"style="width: 100%;" name="hub_kel" id="hub_kel">
                    <option selected="selected">Pilih Hubungan Keluarga</option>
                    <option>KEPALA KELUARGA</option>
                    <option>SUAMI</option>
                    <option>ISTRI</option>
                    <option>ANAK</option>
                    <option>MENANTU</option>
                    <option>CUCU</option>
                    <option>ORANG TUA</option>
                    <option>MERTUA</option>
                    <option>KELUARGA</option>
                    <option>PEMBANTU</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Jenis Kelamin</label>
                   <select class=" form-control select"style="width: 100%;" name="jenis_kelamin" id="jenis_kelamin">
                    <option selected="selected">Pilih Jenis Kelamin</option>
                    <option>LAKI-LAKI</option>
                    <option>PEREMPUAN</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Agama</label>
                  <input type="Text" name="agama" class="form-control">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Status Penduduk</label>
                   <select class=" form-control select"style="width: 100%;" name="status_penduduk" id="status_penduduk">
                    <option selected="selected">Pilih Status</option>
                    <option>TETAP</option>
                    <option>TIDAK TETAP</option>
                    <option>PENDATANG</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                 <div class="form-group">
                  <label class="btn-warning">DATA KELAHIRAN :</label>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>No AKTA</label>
                  <input type="Text" name="no_akta" class="form-control" id="no_akta">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="Date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Jenis Kelahiran</label>
                   <select class=" form-control select"style="width: 100%;" name="jenis_kelahiran" id="jenis_kelahiran">
                    <option selected="selected">Pilih Jenis Kelahiran</option>
                    <option>TUNGGAL</option>
                    <option>KEMBAR 2</option>
                    <option>KEMBAR 3</option>
                    <option>KEMBAR 4</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Waktu Lahir</label>
                  <input type="text" name="waktu_lahir" class="form-control" id="waktu_lahir">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Anak Ke (Isi Dengan Angka)</label>
                  <input type="text" name="anak_ke" class="form-control" id="anak_ke">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>Panjang (cm)</label>
                  <input type="text" name="panjang" class="form-control" id="panjang">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Tempat Dilahirkan</label>
                   <select class=" form-control select"style="width: 100%;" name="tmp_dilahirkan" id="tmp_dilahirkan">
                    <option selected="selected">Pilih Tempat Kelahiran</option>
                    <option>RS/RB</option>
                    <option>RUMAH</option>
                    <option>POLINDES</option>
                    <option>PUSKESMAS</option>
                    <option>RUMAH</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Penolong Kelahiran</label>
                   <select class=" form-control select"style="width: 100%;" name="penolong_kelahiran" id="penolong_kelahiran">
                    <option selected="selected">Pilih Penolong Kelahiran</option>
                    <option>DOKTER</option>
                    <option>BIDAN</option>
                    <option>PERAWAT</option>
                    <option>DUKUN</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                  <!-- /.form-group -->
                <div class="form-group">
                  <label class="btn-warning">DATA KESEHATAN</label>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Golongan Darah</label>
                   <select class=" form-control select"style="width: 100%;" name="gol_darah" id="gol_darah">
                    <option selected="selected">Pilih Golongan Darah</option>
                    <option>A</option>
                    <option>B</option>
                    <option>AB</option>
                    <option>O</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>TIDAK TAHU</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Akseptor KB</label>
                   <select class=" form-control select"style="width: 100%;" name="akseptor_kb" id="akseptor_kb">
                    <option selected="selected">Pilih Akseptor KB</option>
                    <option>PIL</option>
                    <option>IUD</option>
                    <option>SUNTIK</option>
                    <option>KONDOM</option>
                    <option>SUSUK KB</option>
                    <option>STERILISASI WANITA</option>
                    <option>STERILISASI PRIA</option>
                    <option>LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                  <!-- /.form-group -->
                 <div class="form-group">
                  <label>Cacat</label>
                   <select class=" form-control select"style="width: 100%;" name="cacat" id="cacat">
                    <option selected="selected">Pilih Jenis Cacat</option>
                    <option>CACAT FISIK</option>
                    <option>CACAT NETRA/BUTA</option>
                    <option>CACAT RUNGU/WICARA</option>
                    <option>CACAT MENTAL/JIWA</option>
                    <option>CACAT NETRA/BUTA</option>
                    <option>CACAT FISIK DAN MENTAL</option>
                    <option>CACAT LAINNYA</option>
                    <option>TIDAK CACAT</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>Asuransi</label>
                   <select class=" form-control select"style="width: 100%;" name="asuransi" id="asuransi">
                    <option selected="selected">Pilih Jenis Asuransi</option>
                    <option>TIDAK/BELUM PUNYA</option>
                    <option>BPJS MENERIMA BANTUAN IURAN</option>
                    <option>BPJS NON MENERIMA BANTUAN IURAN</option>
                    <option>ASURANSI LAINNYA</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                 <div class="form-group">
                  <label>Sakit Menahun</label>
                   <input type="text" name="sakit_menahun" class="form-control" id="sakit_menahun">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <button class="btn btn-primary float-left" method="submit">Simpan</button>
                  <a href="#" class="btn btn-danger float-right">Batal</a>
                </div>
              </div>
              <!-- batas rata kiri -->
              <!-- /.col -->
              <div class="col-md-6">
                 
                <div class="form-group">
                  <label>KTP Elektronik</label>
                  <select class=" form-control select2"style="width: 100%;" name="ktp_el" id="ktp_el">
                    <option selected="selected">KTP-El</option>
                    <option>Belum</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label class="btn-warning">PENDIDIKAN DAN PEKERJAAN</label>
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Pendidikan dalam KK</label>
                  <input type="text" name="pendidikan_kk" class="form-control" id="pendidikan_kk">
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Pendidikan Sedang Ditempuh</label>
                  <input type="text" name="pendidikan_ditempuh" class="form-control" id="pendidikan_ditempuh">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label class="btn-warning">DATA KEWARGANEGARAAN</label>
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>NIK Ayah</label>
                  <input type="text" name="nik_ayah" class="form-control" id="nik_ayah">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Nama Ayah</label>
                  <input type="text" name="nama_ayah" class="form-control" id="nama_ayah">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>NIK Ibu</label>
                  <input type="text" name="nik_ibu" class="form-control" id="nik_ibu">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Nama Ibu</label>
                  <input type="text" name="nama_ibu" class="form-control" id="nama_ibu">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label class="btn-warning">ALAMAT</label>
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="alamat">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" name="telepon" class="form-control" id="telepon">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" id="email">
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label class="btn-warning">STATUS PERKAWINAN</label>
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Status Perkawinan</label>
                  <select class="form-control select2" style="width: 100%;" name="status_perkawinan" id="status_perkawinan">
                    <option selected="selected">Pilih Status Perkawinan</option>
                    <option>BELUM KAWIN</option>
                    <option>KAWIN</option>
                    <option>CERAI HIDUP</option>
                    <option>CERAI MATI</option>
                  </select>
                </div>
                <!-- /.form-group -->
                  <!-- /.col -->
                <div class="form-group">
                  <label>No Akta Nikah</label>
                  <input type="text" name="no_akta_nikah" class="form-control" id="no_akta_nikah">
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Tanggal Perkawinan</label>
                  <input type="date" name="tgl_perkawinan" class="form-control" id="tgl_perkawinan">
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Tanggal Perceraian</label>
                  <input type="date" name="tgl_perceraian" class="form-control" id="tgl_perceraian">
                </div>
                


              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

              </div>
            
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          </form>
          <!-- /.card-body -->
          <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->


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
