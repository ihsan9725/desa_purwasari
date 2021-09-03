<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$pra1 = $_POST['pra1'];
$pra2 = $_POST['pra2'];
$pra3 = $_POST['pra3'];
$pra4 = $_POST['pra4'];
$kutipan = $_POST['kutipan'];
$penulis = $_POST['penulis'];
$komen = $_POST['komen'];


 
mysqli_query($koneksi, "UPDATE tb_berita SET tanggal='$tanggal', judul='$judul', kategori='$kategori', pra1='$pra1',pra2='$pra2',pra3='$pra3',pra4='$pra4',kutipan='$kutipan', penulis='$penulis' , komen='$komen' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='berita_admin.php'</script>";
?>