<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jenis_surat = $_POST['jenis_surat'];
 
mysqli_query($koneksi, "UPDATE tb_surat SET nik='$nik', nama='$nama', email='$email', jenis_surat='$jenis_surat' WHERE id='$id'"); 
echo "<script>alert('Data berhasil diupdate!');document.location='pengajuan_surat.php'</script>";
?>