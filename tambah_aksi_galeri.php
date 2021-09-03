<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form\
$id = rand(10,1000000);
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
$caption = $_POST['caption'];
$pra1 = $_POST['pra1'];
$pra2 = $_POST['pra2'];
$pra3 = $_POST['pra3'];


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
      $query = "INSERT INTO tb_galeri(id,foto,ukuran,tipe,caption,pra1,pra2,pra3) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$caption."','".$pra1."','".$pra2."','".$pra3."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>alert('Berhasil menyimpan data ke database!');document.location='galeri.php'</script>";
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='galeri.php'</script>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf, Gambar gagal untuk diupload!');document.location='galeri.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
   echo "<script>alert('Maaf, Ukuran gambar yang diupload tidak boleh melebihi dari 8 MB!');document.location='galeri.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "<script>alert('Maaf, Gambar yang diupload harus bertipe JPG/JPEG/PNG!');document.location='galeri.php'</script>";
}
?>