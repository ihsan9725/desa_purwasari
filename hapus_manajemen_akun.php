<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_user WHERE id='$id'")or die(mysqli_errors());
 
echo "<script>alert('Data berhasil dihapus!');document.location='manajemen_akun.php'</script>";
?>