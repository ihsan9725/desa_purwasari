
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
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<div class="loginval">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(img/<?php echo $d['foto']?>);"><?php }?>
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" action="proses_login.php" method="post" onSubmit="return validasi()">
					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Masukan username'">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukan username" id="username" required="required" minlength="2" maxlength="30">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Masukan Password">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukan password" id="password" required="required" minlength="8">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="ckb1">
							<label class="label-checkbox100" for="ckb1">
								Lihat Password
							</label>
							<div>
								<a href="regist.php" class="txt1">Daftar</a>
							</div>

						</div>

						<div>
							<a href="index.php" class="txt1">
								Beranda
							</a>
						</div>

					</div>

					<div class="container-login100-form-btn">
						
						<button class="login100-form-btn" type="submit">
							Login
						</button>

					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function validasi(){
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			if (username != "" && password!= "") {
				return true;
			}else{
				alert('username dan password harus di isi !');
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
	<?php
	if(isset($_POST['submit'])){
		//validasi input data
		if(!preg_match("/>[a-ZA-ZO-9]*$/",$username)){
			echo "Input hanya huruf dan angka yang diijinkan, dan tidak boleh menggunakan spasi!<br>";
		}
	}
	?>
	
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