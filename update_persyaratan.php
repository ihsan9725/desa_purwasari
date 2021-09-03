<?php 
 
include 'koneksi_srvr.php';
$id = $_POST['id'];
$nama_dok = $_POST['nama_dok'];


 
sqlsrv_query($conn, "UPDATE tb_persyaratan SET nama_dok='$nama_dok' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='daftar_persyaratan.php'</script>";
?>