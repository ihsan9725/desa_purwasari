<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$kpl_rmhtangga = $_POST['kpl_rmhtangga'];
$nik = $_POST['nik'];
$jml_anggota = $_POST['jml_anggota'];
$alamat = $_POST['alamat'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];


 
mysqli_query($koneksi, "UPDATE tb_rmhtangga SET kpl_rmhtangga='$kpl_rmhtangga', nik='$nik',jml_anggota='$jml_anggota',alamat='$alamat', dusun='$dusun', rt='$rt' , rw='$rw' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='data_rumah_tangga.php'</script>";
?>