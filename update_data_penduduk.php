<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$kk = $_POST['kk'];
$hub_kel = $_POST['hub_kel'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$status_penduduk = $_POST['status_penduduk'];
$no_akta = $_POST['no_akta'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelahiran = $_POST['jenis_kelahiran'];
$tmp_lahir = $_POST['tmp_lahir'];
$waktu_lahir = $_POST['waktu_lahir'];
$anak_ke = $_POST['anak_ke'];
$panjang = $_POST['panjang'];
$tmp_dilahirkan = $_POST['tmp_dilahirkan'];
$penolong_kelahiran = $_POST['penolong_kelahiran'];
$gol_darah = $_POST['gol_darah'];
$akseptor_kb = $_POST['akseptor_kb'];
$cacat = $_POST['cacat'];
$asuransi = $_POST['asuransi'];
$sakit_menahun = $_POST['sakit_menahun'];
$ktp_el = $_POST['ktp_el'];
$pendidikan_kk = $_POST['pendidikan_kk'];
$pendidikan_ditempuh = $_POST['pendidikan_ditempuh'];
$pekerjaan = $_POST['pekerjaan'];
$nik_ayah = $_POST['nik_ayah'];
$nama_ayah = $_POST['nama_ayah'];
$nik_ibu = $_POST['nik_ibu'];
$nama_ibu = $_POST['nama_ibu'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$status_perkawinan = $_POST['status_perkawinan'];
$no_akta_nikah = $_POST['no_akta_nikah'];
$tgl_perkawinan = $_POST['tgl_perkawinan'];
$tgl_perceraian = $_POST['tgl_perceraian'];

 
mysqli_query($koneksi, "UPDATE tb_penduduk SET nik='$nik', nama='$nama', kk='$kk', hub_kel='$hub_kel', jenis_kelamin='$jenis_kelamin', agama='$agama', status_penduduk='$status_penduduk', no_akta='$no_akta', tgl_lahir='$tgl_lahir', jenis_kelahiran='$jenis_kelahiran', tmp_lahir='$tmp_lahir', waktu_lahir='$waktu_lahir', anak_ke='$anak_ke', panjang='$panjang', tmp_dilahirkan='$tmp_dilahirkan', penolong_kelahiran='$penolong_kelahiran', gol_darah='$gol_darah', akseptor_kb='$akseptor_kb', cacat='$cacat', asuransi='$asuransi', sakit_menahun='$sakit_menahun', ktp_el='$ktp_el', pendidikan_kk='$pendidikan_kk', pendidikan_ditempuh='$pendidikan_ditempuh', pekerjaan='$pekerjaan', nik_ayah='$nik_ayah', nama_ayah='$nama_ayah', nik_ibu='$nik_ibu', nama_ibu='$nama_ibu', alamat='$alamat', telepon='$telepon', email='$email', status_perkawinan='$status_perkawinan', no_akta_nikah='$no_akta_nikah', tgl_perkawinan='$tgl_perkawinan', tgl_perceraian='$tgl_perceraian' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='data_penduduk.php'</script>";
?>