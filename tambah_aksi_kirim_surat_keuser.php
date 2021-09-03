<?php
date_default_timezone_set("Asia/Jakarta");
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form\
$id = $_POST['id'];
$nama_file = $_FILES['dok']['name']; 
$ukuran_file = $_FILES['dok']['size'];
$tipe_file = $_FILES['dok']['type'];
$tmp_file = $_FILES['dok']['tmp_name'];
$id_user = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$nama_pengirim = $_POST['nama_pengirim'];
$jabatan = $_POST['jabatan'];
$tanggal = date("Y-m-d H:i:s ");
// Set path folder tempat menyimpan gambarnya
$path = "files/".$nama_file;

if($tipe_file == "application/pdf" || $tipe_file == "application/msword"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 8000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan : 
      // Proses simpan ke Database
      $query = "INSERT INTO tb_surat_keuser(id,nama,ukuran,tipe,id_user,nama_user,nama_pengirim,jabatan,tanggal) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$id_user."','".$nama_user."','".$nama_pengirim."','".$jabatan."','".$tanggal."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>alert('Data berhasil dikirimkan');document.location='lihat_surat_terkirim.php'</script>"; // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
       echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database');document.location='kirim_surat_keuser.php'</script>";
        
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf, file gagal diupload');document.location='kirim_surat_keuser.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
     echo "<script>alert('Maaf, gambar tidak boleh lebih dari 2MB');document.location='kirim_surat_keuser.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "<script>alert('Maaf, Tipe file yang diupload harus PDF');document.location='kirim_surat_keuser.php'</script>";
}
?>