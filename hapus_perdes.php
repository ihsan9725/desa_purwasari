<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_buku_perdes WHERE id='$id'")or die(mysqli_errors());
 
echo "<script>alert('Data berhasil dihapus!');document.location='buku_administrasi_desa.php'</script>";
?>