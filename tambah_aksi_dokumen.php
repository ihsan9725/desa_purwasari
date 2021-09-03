<?php
// Load file koneksi.php
include "koneksi_srvr.php";

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['dokumen']['name'];
$ukuran_file = $_FILES['dokumen']['size'];
$tipe_file = $_FILES['dokumen']['type'];
$tmp_file = $_FILES['dokumen']['tmp_name'];
// $id = $_POST['id'];
// $dokumen = $_POST['dokumen'];
$nama_dok = $_POST['nama_dok'];
$jenis_info = $_POST['jenis_info'];



// Set path folder tempat menyimpan gambarnya
$path = "files/".$nama_file;

if($tipe_file == "application/pdf" || $tipe_file == "application/pdf"){ // Cek apakah tipe file yang diupload adalah PDF
  // Jika tipe file yang diupload PDF, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path)){ // Cek apakah file berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :	
      // Proses simpan ke Database
      $query = "INSERT INTO tb_dokumen(dokumen,ukuran,tipe,nama_dok,jenis_info) VALUES('$nama_file','$ukuran_file','$tipe_file','$nama_dok','$jenis_info')";
      $sql = sqlsrv_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
         echo "<script>alert('Berhasil menyimpan data ke database!');document.location='dokumen_admin.php'</script>"; // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
         echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='tambah_dokumen.php'</script>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf, File gagal untuk diupload!');document.location='tambah_dokumen.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "<script>alert('Maaf, Ukuran file yang diupload tidak boleh melebihi dari 1MB!');document.location='tambah_dokumen.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
 echo "<script>alert('Maaf, Tipe gambar yang diupload harus bertipe JPG/PNG/JPEG!');document.location='tambah_dokumen.php'</script>";
}
?>