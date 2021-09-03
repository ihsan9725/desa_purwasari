<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_penduduk WHERE id='$id'")or die(mysqli_error());
 
echo "<script>alert('Data berhasil dihapus!');document.location='data_penduduk.php'</script>";
?>