<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form\
$id = rand(10,1000000);
$dok_file = $_FILES['dok']['name'];
$ukuran_file = $_FILES['dok']['size'];
$tipe_file = $_FILES['dok']['type'];
$tmp_file = $_FILES['dok']['tmp_name'];
$judul_dok = $_POST['judul_dok'];
$nama_dok = $_POST['nama_dok'];
$uraian = $_POST['uraian'];
$no_keputusan = $_POST['no_keputusan'];
$tgl_keputusan_kades = $_POST['tgl_keputusan_kades'];
$tgl_dilaporkan = $_POST['tgl_dilaporkan'];
$keterangan = $_POST['keterangan'];
// Set path folder tempat menyimpan gambarnya
$path = "files/".$dok_file;

if($tipe_file == "application/pdf" || $tipe_file == "application/msword"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 8000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan : 
      // Proses simpan ke Database
      $query = "INSERT INTO tb_buku_keputusan_kdesa(id,dok,ukuran,tipe,judul_dok,nama_dok,uraian,no_keputusan,tgl_keputusan_kades,tgl_dilaporkan,keterangan) VALUES('".$id."','".$dok_file."','".$ukuran_file."','".$tipe_file."','".$judul_dok."','".$nama_dok."','".$uraian."','".$no_keputusan."','".$tgl_keputusan_kades."','".$tgl_dilaporkan."','".$keterangan."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>alert('Data berhasil disimpan di database!');document.location='buku_keputusan_kdesa.php'</script>"; // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='tambah_buku_keputusan_kdesa.php'</script>";
        
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf, file gagal untuk diupload!');document.location='tambah_buku_keputusan_kdesa.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
     echo "<script>alert('Maaf, File tidak boleh melebihi dari 8MB!');document.location='tambah_buku_keputusan_kdesa.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
   echo "<script>alert('Maaf, file yang diupload harus bertipe JPG/JPEG/PNG!');document.location='tambah_buku_keputusan_kdesa.php'</script>";
}
?>