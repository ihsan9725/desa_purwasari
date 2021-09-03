<?php 
 
include 'koneksi.php';
$id_surat = $_GET['id_surat'];
mysqli_query($koneksi, "UPDATE tb_surat SET status_ttd_kades='Berhasil di Tanda Tangan' WHERE id_surat='$id_surat'");
 
echo "<script>alert('Pengajuan Surat Berhasil Di Tanda tangani!');document.location='detail_surat.php'</script>";
?>