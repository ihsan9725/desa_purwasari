<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form\
$id = rand(10,1000000);
$nama_file = $_FILES['surat_masuk']['name'];
$ukuran_file = $_FILES['surat_masuk']['size'];
$tipe_file = $_FILES['surat_masuk']['type'];
$tmp_file = $_FILES['surat_masuk']['tmp_name'];
$no_urut = $_POST['no_urut'];
$klasifikasi = $_POST['klasifikasi'];
$no_surat = $_POST['no_surat'];
$tgl_surat = $_POST['tgl_surat'];
$pengirim = $_POST['pengirim'];
$isi = $_POST['isi'];
$disposisi_kpd = $_POST['disposisi_kpd'];
$isi_disposisi = $_POST['isi_disposisi'];
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
      $query = "INSERT INTO tb_buku_agenda_surat_masuk(id,nama,ukuran,tipe,no_urut,klasifikasi,no_surat,tgl_surat,pengirim,isi,disposisi_kpd,isi_disposisi) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$no_urut."','".$klasifikasi."','".$no_surat."','".$tgl_surat."','".$pengirim."','".$isi."','".$disposisi_kpd."','".$isi_disposisi."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
         echo "<script>alert('Berhasil Menyimpan Data ke database!');document.location='buku_agenda_surat_masuk.php'</script>";// Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
         echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database');document.location='tambah_agenda_surat_masuk.php'</script>";
        
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf, File gagal untuk diupload');document.location='tambah_agenda_surat_masuk.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "<script>alert('Maaf, Ukuran file melebihi 1MB');document.location='tambah_agenda_surat_masuk.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "<script>alert('Maaf, Tipe file yang diupload harus PDF');document.location='tambah_agenda_surat_masuk.php'</script>";
}
?>