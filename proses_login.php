<?php
session_start();

include "koneksi.php";

$username = $_POST["username"];
$p = md5($_POST["password"]);

$sql = "select * FROM tb_auth where username='".$username."' and pass='".$p."' limit 1 ";
$hasil = mysqli_query ($koneksi,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id_user"]=$row["id_user"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["nama"]=$row["nama"];
		$level = $_SESSION["level"]=$row["level"];


		if($level == 'warga'){
			header("Location:index_user.php");
		}elseif($level == 'admin'){
			header("Location:index_admin.php");
		}elseif($level == 'kades'){
			header("Location:index_kades.php");
		}

		
		
	}else {
		echo "<script>alert('Maaf, Username atau Password Anda Salah!');document.location='login.php'</script>";
	}
?>