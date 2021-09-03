<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$caption = $_POST['caption'];
$pra1 = $_POST['pra1'];
$pra2 = $_POST['pra2'];
$pra3 = $_POST['pra3'];



 
mysqli_query($koneksi, "UPDATE tb_galeri SET caption='$caption', pra1='$pra1', pra2='$pra2', pra3='$pra3' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='galeri.php'</script>";
?>