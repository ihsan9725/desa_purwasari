<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_surat_keuser WHERE id='$id'")or die(mysqli_errors());
 
echo "<script>alert('Data berhasil dihapus!');document.location='lihat_surat_terkirim.php'</script>";
?>