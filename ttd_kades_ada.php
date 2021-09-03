<?php 
 
include 'koneksi.php';
$id_surat = $_GET['id_surat'];
mysqli_query($koneksi, "UPDATE tb_surat SET status_ttd_kades='Ada dikantor' WHERE id_surat='$id_surat'");
 
echo "<script>alert('Pengajuan Surat Akan Di Tanda tangani di Kantor!');document.location='surat_belum_ttd.php'</script>";
?>