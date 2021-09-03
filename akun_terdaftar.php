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
<!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
        <h1 class="mt-4">Data Akun</h1>
        <p>Akun Terdaftar Pada Sistem Informasi Desa Mandalahaji</p>
      </div>

      <!-- box tabel -->

       <!-- /.col-md-6 -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Daftar Akun</h5>
              </div>
              <div class="card-body">
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
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>No HP</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                    <th>Approve</th>
                  </tr>
            <?php
          // panggil file koneksi
          include "koneksi.php";
          $sql="SELECT * FROM tb_user";
          $no=1;
          //eksekusi query menampilkan data dari tabel Mhsw
          $query=mysqli_query($koneksi,$sql) or die(mysqli_errors());;
          //mengembalikan data row menjadi array dan looping data menggunakan while
          while ($data=mysqli_fetch_array($query)) {
        ?>

                    <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['tgl_lahir'] ?></td>
                <td><?php echo $data['tempat_lahir'] ?></td>
                <td><?php echo $data['wa'] ?></td>
                

                  <td>
           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default" data-whatever="" href="#.php?id=<?php echo $d['id'];?>">Edit</button>

       <!--  <a href="#.php?id=<?php echo $d['id']; ?>"class = "btn btn-success" data-toggle="modal" data-whatever="@mdo" data-target="#exampleModal">Edit</a></td> -->
        <td>
        <a href="#.php?id=<?php echo $d['id']; ?>" class = "btn btn-secondary">Hapus</a></td>
        <td>
        <a href="#.php?id=<?php echo$d['id']; ?>" class = "btn btn-primary">Approve</a></td>
       
               </td>  
             <?php } ?>
                </tr>
                </thead>
                </table>
              </div>
            </div>
    </div>
              </div>
            </div>
            <!-- batas box tabel -->

     
    <!-- /#page-content-wrapper -->
  </div>

      <div class="modal fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Primary Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-light">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


    
    
    


  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });


  </script>
</body>
</html>
