<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$tahun = $_POST['tahun'];
$jenis_anggaran = $_POST['jenis_anggaran'];
$kode_rincian = $_POST['kode_rincian'];
$nilai_anggaran = $_POST['nilai_anggaran'];
$nilai_real = $_POST['nilai_real'];
$tanggal = date("Y-m-d, H:i:s");


 
mysqli_query($koneksi, "UPDATE tb_input_anggaran SET tahun='$tahun', jenis_anggaran='$jenis_anggaran',kode_rincian='$kode_rincian',nilai_anggaran='$nilai_anggaran', nilai_real='$nilai_real', tanggal='$tanggal' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='keuangan_input_data.php'</script>";
?>