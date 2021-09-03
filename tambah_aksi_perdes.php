<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form\
// $id = rand(10,1000000);
$id = $_POST['id'];
$nama_file = $_FILES['dok']['name'];
$ukuran_file = $_FILES['dok']['size'];
$tipe_file = $_FILES['dok']['type'];
$tmp_file = $_FILES['dok']['tmp_name'];
$judul_dok = $_POST['judul_dok'];
$uraian = $_POST['uraian'];
$jenis_per = $_POST['jenis_per'];
$no_ditetapkan = $_POST['no_ditetapkan'];
$tgl_ditetapkan = $_POST['tgl_ditetapkan'];
$tgl_kesepakatan = $_POST['tgl_kesepakatan'];
$no_dilaporkan = $_POST['no_dilaporkan'];
$tgl_dilaporkan = $_POST['tgl_dilaporkan'];
$lembaran_desa = $_POST['lembaran_desa'];
$tgl_dlm_lembaran = $_POST['tgl_dlm_lembaran'];
$berita_desa = $_POST['berita_desa'];
$tgl_berita_desa = $_POST['tgl_berita_desa'];
$keterangan = $_POST['keterangan'];
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
      $query = "INSERT INTO tb_buku_perdes(id,dok,ukuran,tipe,judul_dok,uraian,jenis_per,no_ditetapkan,tgl_ditetapkan,tgl_kesepakatan,no_dilaporkan,tgl_dilaporkan,lembaran_desa,tgl_dlm_lembaran,berita_desa,tgl_berita_desa,keterangan) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$judul_dok."','".$uraian."','".$jenis_per."','".$no_ditetapkan."','".$tgl_ditetapkan."','".$tgl_kesepakatan."','".$no_dilaporkan."','".$tgl_dilaporkan."','".$lembaran_desa."','".$tgl_dlm_lembaran."','".$berita_desa."','".$tgl_berita_desa."','".$keterangan."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
         echo "<script>alert('Data berhasil disimpan ke database');document.location='buku_administrasi_desa.php'</script>"; // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
         echo "<script>alert('Data gagal disimpan ke database');document.location='tambah_perdes.php'</script>";
        
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Gambar gagal di upload');document.location='tambah_perdes.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
   echo "<script>alert('Data tidak boleh lebih dari 8MB');document.location='tambah_perdes.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
 echo "<script>alert('Tipe file yang diupload harus PDF!');document.location='tambah_perdes.php'</script>";
}
?>