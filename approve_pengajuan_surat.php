<?php 
 
include 'koneksi.php';
$id_surat = $_GET['id_surat'];
// $status_post = $_GET['Diterima'];


 
mysqli_query($koneksi, "UPDATE tb_surat SET status_post='Diterima' WHERE id_surat='$id_surat'");
 
 echo "<script>alert('Pengajuan Surat Berhasil DiApprove!');document.location='pengajuan_surat.php'</script>";
?>