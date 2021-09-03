<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$jenis_layanan = $_POST['jenis_layanan'];
$deskripsi = $_POST['deskripsi'];
$pra1 = $_POST['pra1'];
$pra2 = $_POST['pra2'];
$pra3 = $_POST['pra3'];



 
mysqli_query($koneksi, "UPDATE tb_layanan SET jenis_layanan='$jenis_layanan', deskripsi='$deskripsi', pra1='$pra1', pra2='$pra2', pra3='$pra3' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='pelayanan.php'</script>";
?>