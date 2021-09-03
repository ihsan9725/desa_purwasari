<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];

$nama_peg = $_POST['nama_peg'];
$nik = $_POST['nik'];
$nipd = $_POST['nipd'];
$nip = $_POST['nip'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];
$pangkat = $_POST['pangkat'];
$no_sk_pengangkatan = $_POST['no_sk_pengangkatan'];
$tgl_sk_pengangkatan = $_POST['tgl_sk_pengangkatan'];
$no_sk_pemberhentian = $_POST['no_sk_pemberhentian'];
$tgl_sk_pemberhentian = $_POST['tgl_sk_pemberhentian'];
$masa_jabatan = $_POST['masa_jabatan'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];



 
mysqli_query($koneksi, "UPDATE tb_aparat_pemerintahds SET nama_peg='$nama_peg', nik='$nik', nipd='$nipd', nip='$nip',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',pendidikan='$pendidikan',agama='$agama' , pangkat='$pangkat' , no_sk_pengangkatan='$no_sk_pengangkatan', tgl_sk_pengangkatan = '$tgl_sk_pengangkatan' , no_sk_pemberhentian = '$no_sk_pemberhentian', tgl_sk_pemberhentian = '$tgl_sk_pemberhentian', masa_jabatan = '$masa_jabatan', jabatan = '$jabatan', status = '$status'  WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='buku_aparat_pemerintahds.php'</script>";
?>