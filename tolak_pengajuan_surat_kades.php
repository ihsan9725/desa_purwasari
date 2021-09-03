<?php 
 
include 'koneksi.php';
$id_surat = $_GET['id_surat'];
mysqli_query($koneksi, "UPDATE tb_surat SET status_post='Ditolak' WHERE id_surat='$id_surat'");
 
echo "<script>alert('Pengajuan Surat Ditolak!');document.location='detail_surat.php'</script>";
?>