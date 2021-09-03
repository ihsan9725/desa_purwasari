<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Desa Mandalahaji/Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
      <!-- tampilkan data admin di profil -->
 <?php 
        include 'koneksi.php';
        $data = mysqli_query($koneksi,"select * from tb_login where id='1'");
        while($d = mysqli_fetch_array($data)){ ?>
<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo $d['username']?> </h1></div> <?php }?>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="index_admin.php">Beranda</a></li>
               <!--  <li><a data-toggle="tab" href="#messages">Menu 1</a></li>
                <li><a data-toggle="tab" href="#settings">Menu 2</a></li> -->
              </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                <?php
  include 'koneksi.php';
             $data = mysqli_query($koneksi,"select * from tb_login where id='1'");
                  while($d = mysqli_fetch_array($data)){ ?>
                  <form action="update_akun_admin.php" method="post">
                      <div class="form-group">

                          <!-- tampilkan data dari db / agar bisa di update-->

                          <div class="col-xs-6">
                            <input type="hidden" name="id" id="id" value="<?php echo $d['id']?>">
                              <label for="first_name"><h4>Nama Depan</h4></label>
                              <input type="text" class="form-control" name="nama_dpn" id="nama_dpn" value="<?php echo $d['nama_dpn']?>" title="enter your first name if any." placeholder="Masukan Nama Depan"> 
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Nama Belakang</h4></label>
                              <input type="text" class="form-control" name="nama_blkg" id="nama_blkg" value="<?php echo $d['nama_blkg']?>" title="enter your last name if any." placeholder="Masukan Nama Belakang"> 
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>No Telpon</h4></label>
                              <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="masukan no telpon" title="enter your phone number if any." value="<?php echo $d['no_tlp']?>"> 
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="alamat"><h4>Alamat</h4></label>
                              <input type="text" class="form-control" name="alamat" id="alamat" placeholder="masukan alamat" title="enter your mobile number if any." value="<?php echo $d['alamat']?>"> 
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="username"><h4>Username</h4></label>
                              <input type="text" class="form-control" name="username" id="username" placeholder="masukan username" title="enter your email." value="<?php echo $d['username']?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="text" class="form-control" name="email" id="email" placeholder="masukan email" title="enter a location" value="<?php echo $d['email']?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="text" class="form-control" name="password" id="password" placeholder=" masukan password" title="enter your password." value="<?php echo $d['password']?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verifikasi Password</h4></label>
                              <input type="text" class="form-control" name="ver_pass" id="ver_pass" placeholder=" verifikasi password" title="enter your password2." value="<?php echo $d['ver_pass']?>"> <?php }?>
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Simpan</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                <a href="index_admin.php" class="btn btn-lg btn-success">Beranda</a>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      