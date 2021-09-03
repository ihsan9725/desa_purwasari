<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$kode_kel = $_POST['kode_kel'];
$nama_kel = $_POST['nama_kel'];
$kategori = $_POST['kategori'];
$ketua_kel = $_POST['ketua_kel'];
$jml_anggota = $_POST['jml_anggota'];
$deskripsi = $_POST['deskripsi'];


 
mysqli_query($koneksi, "UPDATE tb_kelompok SET kode_kel='$kode_kel', nama_kel='$nama_kel', kategori='$kategori', ketua_kel='$ketua_kel',jml_anggota='$jml_anggota',deskripsi='$deskripsi' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='data_kelompok.php'</script>";
?>