<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$judul_dok = $_POST['judul_dok'];
$uraian = $_POST['uraian'];
$jenis_per = $_POST['jenis_per'];
$no_ditetapkan = $_POST['no_ditetapkan'];
$tgl_ditetapkan = $_POST['tgl_ditetapkan'];
$tgl_kesepakatan = $_POST['tgl_kesepakatan'];
$no_dilaporkan = $_POST['no_dilaporkan'];
$tgl_dilaporkan = $_POST['tgl_dilaporkan'];
$lembaran_desa = $_POST['lembaran_desa'];
$tgl_dlm_lembaran = $_POST['tgl_dlm_lembaran'];
$berita_desa = $_POST['berita_desa'];
$tgl_berita_desa = $_POST['tgl_berita_desa'];
$keterangan = $_POST['keterangan']; 


 
mysqli_query($koneksi, "UPDATE tb_buku_perdes SET judul_dok='$judul_dok', uraian='$uraian', jenis_per='$jenis_per', no_ditetapkan='$tgl_ditetapkan',tgl_kesepakatan='$tgl_kesepakatan',no_dilaporkan='$no_dilaporkan',tgl_dilaporkan='$tgl_dilaporkan',lembaran_desa='$lembaran_desa', tgl_dlm_lembaran='$tgl_dlm_lembaran' , berita_desa='$berita_desa' , tgl_berita_desa='$tgl_berita_desa', keterangan = '$keterangan' WHERE id='$id'");
 
echo "<script>alert('Data berhasil diupdate!');document.location='buku_administrasi_desa.php'</script>";
?>