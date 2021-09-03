<?php
// Load file koneksi.php
include "koneksi.php";


// Ambil Data yang Dikirim dari Form
$id = rand(10,1000000);
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan = $_POST['pendidikan'];
$wa = $_POST['wa'];
$username = $_POST['username'];
$password = $_POST['password'];


$cek_identitas = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE nik = '$nik'") or die(mysqli_errors($koneksi));
if(mysqli_num_rows($cek_identitas) > 0) {
  echo "<script>alert('Maaf No NIK Anda Sudah Terdaftar Pada Sistem!');document.location='regist.php'</script>";
} else {
  mysqli_query($koneksi,"INSERT INTO tb_user (id, nik, nama, alamat, tgl_lahir, tempat_lahir, jenis_kelamin ,pekerjaan , pendidikan, wa)
VALUES ('$id','".$nik."', '".$nama."', '".$alamat."', '".$tgl_lahir."', '".$tempat_lahir."', '".$jenis_kelamin."','".$pekerjaan."','".$pendidikan."','".$wa."');");

mysqli_query($koneksi,"INSERT INTO tb_auth (id, id_user, username, pass, level)
VALUES ('', '".$id."', '".$username."', '".md5($password)."', 'warga');");

echo "<script>alert('Akun Berhasil Didaftarkan!');document.location='login.php'</script>";
}
$koneksi->close();

?> 