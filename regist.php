  <!-- tampilkan bg dari db -->
     <?php
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from tb_bg");
                  while($d = mysqli_fetch_array($data)){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Desa Mandalahaji</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="loginval">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(img/<?php echo $d['foto']?>);"><?php }?>
					<span class="login100-form-title-1">
						Registrasi
					</span>
				</div>
				
				<form class="login100-form validate-form" action="tambah_aksi_regist.php" method="post" onSubmit="return validasi()">
					<input type="hidden" name="id">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Masukan Nama'">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Masukan Nama" id="nama" required="required" maxlength="30" minlength="2">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan Alamat">
						<span class="label-input100">Alamat</span>
						<input class="input100" type="text" name="alamat" placeholder="Masukan Alamat" id="alamat" required="required" maxlength="80" minlength="2">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan NIK">
						<span class="label-input100">No NIK</span>
						<input class="input100" type="text" name="nik" placeholder="Masukan NIK" id="nik" onkeypress="return hanyaAngka(event)" minlength="2" maxlength="18" required="required">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan TGL Lahir">
						<span class="label-input100">Tanggal Lahir</span>
						<input class="input100" type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" id="tgl_lahir" required="required">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan Tempat Lahir">
						<span class="label-input100">Tempat Lahir</span>
						<input class="input100" type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" id="tempat_lahir" required="required" maxlength="20">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan Tempat Lahir">
						<span class="label-input100">Jenis Kelamin</span>
						<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required="required">
						<option selected="selected">Pilih Jenis Kelamin</option>
						<option>Laki-Laki</option>
						<option>Perempuan</option>
						</select>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan No Whatsapp">
						<span class="label-input100">Pekerjaan</span>
						<input class="input100" type="text" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" id="wa" required="required" minlength="2" maxlength="20">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan No Whatsapp">
						<span class="label-input100">Pendidikan</span>
						<input class="input100" type="text" name="pendidikan" id="pendidikan" placeholder="Masukan Pendidikan" required="required" minlength="2" maxlength="15">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan No Whatsapp">
						<span class="label-input100">No Whatsapp</span>
						<input class="input100" type="text" name="wa" placeholder="Masukan No Whatsapp" id="wa" onkeypress="return hanyaAngka(event)" minlength="2" maxlength="13" required="required">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan Username">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukan Username" id="username" required="required" minlength="5" maxlength="30">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan Password">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukan Password" id="password" required="required" minlength="8">
						<span class="focus-input100"></span>
					</div>


					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="ckb1">
							<label class="label-checkbox100" for="ckb1">
								Tampilkan Password<br>

							</label>
							<div>
								<a href="login.php" class="txt1">Login</a>
							</div>

						</div>

						<div>
							<a href="index.php" class="txt1">
								Beranda
							</a>
						</div>

					</div>

					<div class="container-login100-form-btn">
						
						<button class="login100-form-btn" type="submit" nama="simpan">
							Daftar
						</button>

					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
	 
	<script type="text/javascript">
		function validasi(){
			var nama = document.getElementsById("nama").value;
			var alamat = document.getElementsById("alamat").value;
			var nik = document.getElementsById("nik").value;
			var tgl_lahir = document.getElementsById("tgl_lahir").value;
			var tmp_lahir = document.getElementsById("tmp_lahir").value;
			var wa = document.getElementsById("wa").value;
			var username = document.getElementsById("username").value;
			var password = document.getElementsById("password").value;
			if ( nama!= "" && alamat!= "" && nik!= "" && tgl_lahir!= "" && tmp_lahir!= "" && wa!= "" username != "" && password!= "") {
				return true;
			}else{
				alert('Data harus di isi dengan lengkap !'); 
				return false;
			}
			}

	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#ckb1').click(function(){
				if($(this).is(':checked')) {
					$('#password').attr('type','text');
				}else{
					$('#password').attr('type','password');
				}
			});
		});
	</script>
	<script>
		function hanyaAngka(evt){
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))

				return false;
			return true;
		}
	</script>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>