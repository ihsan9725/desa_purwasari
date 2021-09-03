<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan = $_POST['pendidikan'];
$wa = $_POST['wa'];

mysqli_query($koneksi, "UPDATE tb_user SET nik='$nik', nama='$nama', alamat='$alamat', tgl_lahir='$tgl_lahir',tempat_lahir='$tempat_lahir',jenis_kelamin='$jenis_kelamin',pekerjaan='$pekerjaan',pendidikan='$pendidikan', wa='$wa' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='manajemen_akun.php'</script>";
?>