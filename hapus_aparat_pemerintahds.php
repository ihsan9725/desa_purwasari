<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_aparat_pemerintahds WHERE id='$id'")or die(koneksi_errors());
 
echo "<script>alert('Data berhasil dihapus!');document.location='buku_aparat_pemerintahds.php'</script>";
?>