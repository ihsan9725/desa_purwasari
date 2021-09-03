<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
// $id = $_POST['id'];
$judul = $_POST['judul'];
$sub_judul = $_POST['sub_judul'];
$isi = $_POST['isi'];
$tahun = $_POST['tahun'];


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
      $query = "INSERT INTO tb_about(nama,ukuran,tipe,judul,sub_judul,isi,tahun) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."','".$judul."','".$sub_judul."','".$isi."','".$tahun."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>alert('Data berhasil disimpan ke database');document.location='about_admin.php'</script>"; // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, data gagal disimpan ke database');document.location='about_admin.php'</script>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf gambar gagal untuk di upload');document.location='about_admin.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "<script>alert('Maaf, gambar yang diupload tidak boleh melebihi dari 1MB');document.location='about_admin.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
 echo "<script>alert('Maaf, gambar yang diupload harus ber tipe JPG/JPEG/PNG');document.location='about_admin.php'</script>";
}
?>