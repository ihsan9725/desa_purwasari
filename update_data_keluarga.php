<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$kk = $_POST['kk'];
$kepala_keluarga = $_POST['kepala_keluarga'];
$nik = $_POST['nik'];
$id_card = $_POST['id_card'];
$jml_anggota = $_POST['jml_anggota'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];


 
mysqli_query($koneksi, "UPDATE tb_keluarga SET kk='$kk', kepala_keluarga='$kepala_keluarga', nik='$nik', id_card='$id_card',jml_anggota='$jml_anggota',jenis_kelamin='$jenis_kelamin',alamat='$alamat', dusun='$dusun', rt='$rt' , rw='$rw' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='data_keluarga.php'</script>";
?>