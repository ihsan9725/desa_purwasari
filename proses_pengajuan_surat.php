<?php 
 
include 'koneksi.php';
$id_surat = $_GET['id_surat'];
$status_post = $_GET['Diproses'];


 
mysqli_query($koneksi, "UPDATE tb_surat SET status_post='Diproses' WHERE id_surat='$id_surat'");
 
header("location:pengajuan_surat.php?pesan=Berhasil di Approve");
?>