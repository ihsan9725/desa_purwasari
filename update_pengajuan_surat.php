<?php 
 
include 'koneksi.php';
$id_surat = $_POST['id_surat'];
$id_user = $_POST['id_user'];
$nik = $_POST['nik'];
$kk = $_POST['kk'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$wa = $_POST['wa'];
$tanggal = $_POST['tanggal'];
$pesan = $_POST['pesan'];
$status_post = $_POST['status_post'];
$progres = $_POST['progres'];
$alasan = $_POST['alasan'];
$jenis_surat = $_POST['jenis_surat'];

 
mysqli_query($koneksi, "UPDATE tb_surat SET nik='$nik', kk='$kk', nama='$nama', alamat='$alamat',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir', email='$email' , wa='$wa',tanggal='$tanggal',pesan='$pesan',status_post='$status_post',progres = '$progres',alasan = '$alasan', jenis_surat='$jenis_surat' WHERE id_surat='$id_surat'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='pengajuan_surat.php'</script>";
?>