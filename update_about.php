<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$ukuran = $_POST['ukuran'];
$tipe = $_POST['tipe'];
$judul = $_POST['judul'];
$sub_judul = $_POST['sub_judul'];
$foto = $_POST['foto'];
$isi = $_POST['isi'];
$tahun = $_POST['tahun'];


 
mysqli_query($koneksi, "UPDATE tb_about SET nama='$nama', ukuran='$ukuran', tipe='$tipe', judul='$judul', sub_judul='$sub_judul', foto='$foto', isi='$isi', tahun='$tahun' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='about_admin.php'</script>";
?>