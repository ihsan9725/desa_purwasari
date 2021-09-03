<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$dok_file = $_FILES['dok']['name'];
$ukuran_file = $_FILES['dok']['size'];
$tipe_file = $_FILES['dok']['type'];
$tmp_file = $_FILES['dok']['tmp_name'];
$judul_dok = $_POST['judul_dok'];
$nama_dok = $_POST['nama_dok'];
$uraian = $_POST['uraian'];
$no_keputusan = $_POST['no_keputusan'];
$tgl_keputusan_kades = $_POST['tgl_keputusan_kades'];
$tgl_dilaporkan = $_POST['tgl_dilaporkan'];
$keterangan = $_POST['keterangan'];


 
mysqli_query($koneksi, "UPDATE tb_buku_keputusan_kdesa SET judul_dok='$judul_dok', nama_dok='$nama_dok', uraian='$uraian',no_keputusan='$no_keputusan',tgl_keputusan_kades='$tgl_keputusan_kades',tgl_dilaporkan='$tgl_dilaporkan',keterangan='$keterangan' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='buku_keputusan_kdesa.php'</script>";
?>