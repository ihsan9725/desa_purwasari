<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form\
$id = rand(10,1000000);
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
$nama_peg = $_POST['nama_peg'];
$nik = $_POST['nik'];
$nipd = $_POST['nipd'];
$nip = $_POST['nip'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];
$pangkat = $_POST['pangkat'];
$no_sk_pengangkatan = $_POST['no_sk_pengangkatan'];
$tgl_sk_pengangkatan = $_POST['tgl_sk_pengangkatan'];
$no_sk_pemberhentian = $_POST['no_sk_pemberhentian'];
$tgl_sk_pemberhentian = $_POST['tgl_sk_pemberhentian'];
$masa_jabatan = $_POST['masa_jabatan'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];
// Set path folder tempat menyimpan gambarnya
$path = "img/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 2000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan : 
      // Proses simpan ke Database
      $query = "INSERT INTO tb_aparat_pemerintahds(id,nama,ukuran,tipe,nama_peg,nik,nipd,nip,tmp_lahir,tgl_lahir,jenis_kelamin,pendidikan,agama,pangkat,no_sk_pengangkatan,tgl_sk_pengangkatan,no_sk_pemberhentian,tgl_sk_pemberhentian,masa_jabatan,jabatan,status) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$nama_peg."','".$nik."','".$nipd."','".$nip."','".$tmp_lahir."','".$tgl_lahir."','".$jenis_kelamin."','".$pendidikan."','".$agama."','".$pangkat."','".$no_sk_pengangkatan."','".$tgl_sk_pengangkatan."','".$no_sk_pemberhentian."','".$tgl_sk_pemberhentian."','".$masa_jabatan."','".$jabatan."','".$status."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>alert('Berhasil menyimpan ke database!');document.location='buku_aparat_pemerintahds.php'</script>";// Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalahan saat menyimpan data ke database!');document.location='tambah_aparat_pemerintahds.php'</script>";
        
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
        echo "<script>alert('Maaf, File gagal untuk diupload!');document.location='tambah_aparat_pemerintahds.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
      echo "<script>alert('Maaf, ukuran file lebih dari 1MB!');document.location='tambah_aparat_pemerintahds.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
   echo "<script>alert('Maaf, File yang diupload harus bertipe JPG/PNG!');document.location='tambah_aparat_pemerintahds.php'</script>";
}
?>