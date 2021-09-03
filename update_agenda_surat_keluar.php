<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama_file = $_FILES['surat_keluar']['name'];
$ukuran_file = $_FILES['surat_keluar']['size'];
$tipe_file = $_FILES['surat_keluar']['type'];
$tmp_file = $_FILES['surat_keluar']['tmp_name'];
$no_urut = $_POST['no_urut'];
$klasifikasi = $_POST['klasifikasi'];
$no_surat = $_POST['no_surat'];
$tgl_surat = $_POST['tgl_surat'];
$tujuan = $_POST['tujuan'];
$isi = $_POST['isi'];


 
mysqli_query($koneksi, "UPDATE tb_buku_agenda_surat_keluar SET no_urut='$no_urut', klasifikasi='$klasifikasi', no_surat='$no_surat',tgl_surat='$tgl_surat',tujuan='$tujuan',isi='$isi' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='buku_agenda_surat_keluar.php'</script>";
?>