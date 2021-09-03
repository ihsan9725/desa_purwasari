<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$kk = $_POST['kk'];
$ayah = $_POST['ayah']; //ada lambang $ itu dari db kalo yg ga, dari tf
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$status_perkawinan = $_POST['status_perkawinan'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan_ditempuh = $_POST['pendidikan_ditempuh'];
$warga = $_POST['warga'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kota = $_POST['kota'];
$tgl_tiba = $_POST['tgl_tiba'];
$tujuan = $_POST['tujuan'];
$jml_hari = $_POST['jml_hari'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$wajib_pantau = $_POST['wajib_pantau'];
$keluhan_kesehatan = $_POST['keluhan_kesehatan'];
$keterangan = $_POST['keterangan'];



 
mysqli_query($koneksi, "UPDATE tb_covid SET nama='$nama', nik='$nik', kk='$kk', ayah='$ayah', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', umur='$umur', alamat='$alamat', status_perkawinan='$status_perkawinan', pekerjaan='$pekerjaan', pendidikan_ditempuh='$pendidikan_ditempuh', warga='$warga', agama='$agama', jenis_kelamin='$jenis_kelamin', kota='$kota', tgl_tiba='$tgl_tiba', tujuan='$tujuan', jml_hari='$jml_hari', no_hp='$no_hp', email='$email', wajib_pantau='$wajib_pantau', keluhan_kesehatan='$keluhan_kesehatan' , keterangan='$keterangan' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='siaga_covid.php'</script>";
?>