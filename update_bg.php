<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$foto = $_POST['foto'];
$ukuran = $_POST['ukuran'];
$tipe = $_POST['tipe'];

 
mysqli_query($koneksi, "UPDATE tb_bg SET foto='$foto', ukuran='$ukuran', tipe='$tipe' WHERE id='1'"); 
echo "<script>alert('Data berhasil diupdate!');document.location='background.php'</script>";
?>