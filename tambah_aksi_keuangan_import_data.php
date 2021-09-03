<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form\
$id = $_POST['id'];
$nama_file = $_FILES['berkas']['name'];
$ukuran_file = $_FILES['berkas']['size'];
$tipe_file = $_FILES['berkas']['type'];
$tmp_file = $_FILES['berkas']['tmp_name'];
$judul = $_POST['judul'];
$tanggal = date("Y-m-d H:i:s");
// Set path folder tempat menyimpan gambarnya
$path = "files/".$nama_file;

if($tipe_file == "application/pdf" || $tipe_file == "application/zip"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 8000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan : 
      // Proses simpan ke Database
      $query = "INSERT INTO tb_berkas(id,nama,ukuran,tipe,judul,tanggal) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$judul."','".$tanggal."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>alert('Berhasi menyimpan data ke database!');document.location='keuangan_import_data.php'</script>"; // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='keuangan_import_data.php'</script>";
        
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf, File gagal untuk diupload!');document.location='keuangan_import_data.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "<script>alert('Maaf, Ukuran file tidak boleh lebih dari 8MB!');document.location='keuangan_import_data.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "<script>alert('Maaf, File yang diupload harus bertipe JPG/PNG/JPEG!');document.location='keuangan_import_data.php'</script>";
}
?>