<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$nama_file = $_FILES['surat_masuk']['name'];
$ukuran_file = $_FILES['surat_masuk']['size'];
$tipe_file = $_FILES['surat_masuk']['type'];
$tmp_file = $_FILES['surat_masuk']['tmp_name'];
$no_urut = $_POST['no_urut'];
$klasifikasi = $_POST['klasifikasi'];
$no_surat = $_POST['no_surat'];
$tgl_surat = $_POST['tgl_surat'];
$pengirim = $_POST['pengirim'];
$isi = $_POST['isi'];
$disposisi_kpd = $_POST['disposisi_kpd'];
$isi_disposisi = $_POST['isi_disposisi'];


 
mysqli_query($koneksi, "UPDATE tb_buku_agenda_surat_masuk SET no_urut='$no_urut', klasifikasi='$klasifikasi', no_surat='$no_surat',tgl_surat='$tgl_surat', pengirim='$pengirim', isi='$isi', disposisi_kpd='$disposisi_kpd', isi_disposisi='$isi_disposisi' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='buku_agenda_surat_masuk.php'</script>";
?>