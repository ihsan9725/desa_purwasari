<?php include 'koneksi.php'; 
$id_surat = $_GET['id_surat']; 
$query = mysqli_query($koneksi, "DELETE FROM tb_surat WHERE id_surat='$id_surat'")or die(mysqli_error()); 
if ($query){


echo "<script>alert('Data berhasil dihapus!');document.location='pengajuan_surat.php'</script>";
}
 ?>