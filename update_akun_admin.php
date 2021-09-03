<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama_dpn = $_POST['nama_dpn'];
$nama_blkg = $_POST['nama_blkg'];
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$ver_pass = $_POST['ver_pass'];
 
mysqli_query($koneksi, "UPDATE tb_login SET nama_dpn='$nama_dpn', nama_blkg='$nama_blkg', no_tlp='$no_tlp', alamat='$alamat', username='$username', email='$email', password='$password', ver_pass='$ver_pass'  WHERE id='1'"); 
echo "<script>alert('Data berhasil diupdate!');document.location='lihat_akun_admin.php'</script>";
?>