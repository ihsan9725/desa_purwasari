<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
// $id = $_POST['id'];
$kpl_rmhtangga = $_POST['kpl_rmhtangga'];
$nik = $_POST['nik'];
$jml_anggota = $_POST['jml_anggota'];
$alamat = $_POST['alamat'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$tanggal = $_POST['tanggal'];


// Set path folder tempat menyimpan gambarnya
$path = "img/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 8000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :   
      // Proses simpan ke Database
      $query = "INSERT INTO tb_rmhtangga(id,foto,ukuran,tipe,kpl_rmhtangga,nik,jml_anggota,alamat,dusun,rt,rw,tanggal) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$kpl_rmhtangga."','".$nik."','".$jml_anggota."','".$alamat."','".$dusun."','".$rt."','".$rw."','".$tanggal."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>alert('Berhasil menyimpan data ke database!');document.location='data_rumah_tangga.php'</script>"; // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='tambah_data_rmhtangga.php'</script>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
    echo "<script>alert('Maaf, Gambar gagal untuk diupload!');document.location='tambah_data_rmhtangga.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "<script>alert('Maaf, Gambar yang diupload tidak boleh lebih dari 8 MB!');document.location='tambah_data_rmhtangga.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG/JPEG/PNG!');document.location='tambah_data_rmhtangga.php'</script>";
}
?>