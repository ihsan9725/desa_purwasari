<?php 
 
include 'koneksi.php';
$id_surat = $_GET['id_surat'];
mysqli_query($koneksi, "UPDATE tb_surat SET status_post='Ditolak' WHERE id_surat='$id_surat'");
 
echo "<script>alert('Pengajuan Surat Ditolak!');document.location='pengajuan_surat.php'</script>";
?>