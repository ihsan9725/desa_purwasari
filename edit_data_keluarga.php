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
        <h1 class="mt-3">Edit Data Keluarga</h1>
        <p>Edit Data Keluarga Desa Purwasari</p>
      </div>
      <body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"></h3>
          <!-- /.card-header -->
         
          <div class="card-body">
            <div class="row">
               <!-- tampilkan data tabel -->
               <?php
include "koneksi.php";
$id = $_GET['id'];
$query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_keluarga WHERE id='$id'")or die(mysqli_errors());
while($d = mysqli_fetch_array($query_mysqli)){
  ?>
                 
              <div class="col-md-6">

                <div class="form-group">
                  <form action="update_data_keluarga.php" method="post">
                  <label>No KK</label>
                  <input type="hidden" name="id" id="id" value="<?php echo $d['id']?>">
                  <input type="Text" name="kk" id="" class="form-control" value="<?php echo $d['kk']?>" >
                </div>

                <!-- /.form-group -->
                <div class="form-group">
                  <label>Nama Kepala Keluarga</label>
                  <input type="Text" name="kepala_keluarga" id="" class="form-control" value="<?php echo $d['kepala_keluarga']?>">
                </div>
                <!-- /.form-group -->
                 <!-- /.form-group -->
                <div class="form-group">
                  <label>NIK</label>
                  <input type="Text" name="nik" id="" class="form-control" value="<?php echo $d['nik']?>">
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>ID CARD</label>
                  <input type="Text" name="id_card" id="" class="form-control" value="id_card">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Anggota Keluarga</label>
                  <input type="Text" name="jml_anggota" id="" class="form-control" value="<?php echo $d['jml_anggota']?>">
                </div>
                <!-- /.form-group -->
        
                 <!-- /.col -->
                <div class="form-group">
                  <button class="btn btn-primary float-left" type="submit" name="simpan">Simpan</button>
                  <!-- <input type="submit" name="Simpan" class="btn btn-primary float-left" value="Simpan"> -->
                </div>
              </div>
              <!-- batas rata kiri -->
              <!-- /.col -->
              <div class="col-md-6">
                 
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class=" form-control select2"style="width: 100%;" name="jenis_kelamin" id="">
                    <option selected="selected"><?php echo $d['jenis_kelamin']?></option>
                    <option>LAKI-LAKI</option>
                    <option>PEREMPUAN</option>
                  </select>
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
               
                <!-- /.col -->
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" id="" value="<?php echo $d['alamat']?>">
                </div>
                <!-- /.form-group -->
                <!-- /.col -->
                <div class="form-group">
                  <label>Dusun</label>
                  <input type="text" name="dusun" class="form-control" id="" value="<?php echo $d['dusun']?>">
                </div>
                <!-- /.form-group -->
                 <!-- /.col -->
                <div class="form-group">
                  <label>RT</label>
                  <input type="text" name="rt" class="form-control" id="" value="<?php echo $d['rt']?>">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>RW</label>
                  <input type="text" name="rw" class="form-control" id="" value="<?php echo $d['rw']?>">
                </div>
              
                <!-- /.form-group -->
                  <!-- /.col -->
                <div class="form-group">
                  <a href="#" class="btn btn-danger float-right">Batal</a>
                </div>
              </div>
            </form>
            <?php }?>
              <!-- /.col -->
            </div>
            <!-- /.row -->
              </div>
              </div>
            
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          
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
