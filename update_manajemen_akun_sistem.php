<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$level = $_POST['level'];


mysqli_query($koneksi, "UPDATE tb_auth SET username='$username', pass=md5('$pass'), level='$level' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='manajemen_akun_sistem.php'</script>";
?>