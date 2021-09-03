<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$bidang = $_POST['bidang'];
$nama = $_POST['nama'];


 
mysqli_query($koneksi, "UPDATE tb_staf SET bidang='$bidang', nama='$nama' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='staf.php'</script>";
?>