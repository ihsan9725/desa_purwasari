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
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
         <a href="pengajuan_surat.php" class="list-group-item list-group-item-action bg-light">Lihat Pengajuan Surat</a>
        <a href="about_admin.php" class="list-group-item list-group-item-action bg-light">Tentang Desa</a>
        <a href="galeri.php" class="list-group-item list-group-item-action bg-light">Galeri</a>
         <a href="background.php" class="list-group-item list-group-item-action bg-light">Ganti Background</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
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
        <h1 class="mt-4">Berita Desa Mandalahaji</h1>
        <p>Berbagai Berita Mengenai Desa Mandalahaji</p>
      </div>

      <body>
    <section class="content">
      <div class="row">
        <div class="card-body">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">

             
               <form action="tambah_aksi_about.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                       
                <input type="hidden" name="id">
                <label for="inputName">Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukan Judul">
               
              </div>
              <div class="form-group">
                <label for="inputDescription">Sub Judul</label>
                <input type="text" name="sub_judul" id="inputDescription" class="form-control" rows="" placeholder="Masukkan Sub Judul">
              </div>
               <div class="form-group">
                <label for="inputDescription">Foto</label>
                <input type="file" name="foto" id="inputDescription" class="form-control" rows="" placeholder="Tambahkan Foto">
              </div>
              <div class="form-group">
                <label for="inputDescription">Isi</label>
                <input type="text" name="isi" id="inputDescription" class="form-control" placeholder="Masukkan Isi Pragraf">
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>


      <div class="card mb-5">
          <div class="card-header">
          <div class="col-sm-6">
          </div>
              <div class="table-responsive">
                <!--   <a href="tambah_data_lansia.php" class="btn btn-primary">Tambah data</a> -->
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Sub Judul</th>
                    <th>Foto</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                  </tr>
                    <?php
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from tb_about");
                  while($d = mysqli_fetch_array($data)){ ?>
                    <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['id'] ?></td>
                <td><?php echo $d['judul'] ?></td>
                <td><?php echo $d['sub_judul'] ?></td>
                <td><img src="img/<?php echo $d['nama']?>" width="50" height="50"></td>
                <td><?php echo $d['isi'] ?></td>
                

                  <td>
       <!--  <a href="edit_berita.php?id=<?php echo $d['id']; ?>"class = "btn btn-primary">Edit</a>
        <a href="hapus_blog.php?id=<?php echo $d['id']; ?>" class = "btn btn-secondary">Hapus</a> -->
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

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
