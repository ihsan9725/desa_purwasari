<?php
// Load file koneksi.php
include "koneksi_srvr.php";

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['surat_izin_bang']['name'];
$ukuran_file = $_FILES['surat_izin_bang']['size'];
$tipe_file = $_FILES['surat_izin_bang']['type'];
$tmp_file = $_FILES['surat_izin_bang']['tmp_name'];
// Ambil Data yang Dikirim dari Form spptpbb
$nama_file = $_FILES['sppt_pbb']['name'];
$ukuran_file = $_FILES['sppt_pbb']['size'];
$tipe_file = $_FILES['sppt_pbb']['type'];
$tmp_file = $_FILES['sppt_pbb']['tmp_name'];
// Ambil Data yang Dikirim dari Form pernytaan
$nama_file = $_FILES['surat_pernyataan']['name'];
$ukuran_file = $_FILES['surat_pernyataan']['size'];
$tipe_file = $_FILES['surat_pernyataan']['type'];
$tmp_file = $_FILES['surat_pernyataan']['tmp_name'];
// $id = $_POST['id'];
$nik = $_POST['nik'];
$kk = $_POST['kk'];



// Set path folder tempat menyimpan gambarnya
$path = "img/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :	
      // Proses simpan ke Database
      $query = "INSERT INTO tb_sertifikat_tanah(surat_izin_bang,sppt_pbb,surat_pernyataan,ukuran,tipe,nik,kk) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."','".$nik."','".$kk."')";
      $sql = sqlsrv_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location:sertifikat_tanah.php"); // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='sertifikat_tanah.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='sertifikat_tanah.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='sertifikat_tanah.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='sertifikat_tanah.php'>Kembali Ke Form</a>";
}
?>