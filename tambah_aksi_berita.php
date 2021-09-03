<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form\
$id = $_POST['id'];
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$pra1 = $_POST['pra1'];
$pra2 = $_POST['pra2'];
$pra3 = $_POST['pra3'];
$pra4 = $_POST['pra4'];
$kutipan = $_POST['kutipan'];
$penulis = $_POST['penulis'];
$komen = $_POST['komen'];
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
      $query = "INSERT INTO tb_berita(id,foto,ukuran,tipe,tanggal,judul,kategori,pra1,pra2,pra3,pra4,kutipan,penulis,komen) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$tanggal."','".$judul."','".$kategori."','".$pra1."','".$pra2."','".$pra3."','".$pra4."','".$kutipan."','".$penulis."','".$komen."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
         echo "<script>alert('Data berhasil disimpan ke database!');document.location='berita_admin.php'</script>"; // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
          echo "<script>alert('Maaf, Terjadi kesalahan saat menyimpan data ke database!');document.location='tambah_berita_admin.php'</script>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf, gambar gagal untuk diupload!');document.location='tambah_berita_admin.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "<script>alert('Maaf, Gambar yang diupload tidak boleh melebihi dari 8 MB');document.location='tambah_berita_admin.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
      echo "<script>alert('Maaf, Gambar yang diupload harus bertipe JPG/JPEG/PNG');document.location='tambah_berita_admin.php'</script>";

}
?>