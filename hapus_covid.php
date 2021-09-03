<?php 
include 'koneksi_srvr.php';
$id = $_GET['id'];
sqlsrv_query($conn, "DELETE FROM tb_covid WHERE id='$id'")or die(sqlsrv_errors());
 
echo "<script>alert('Data berhasil dihapus!');document.location='siaga_covid.php'</script>";
?>