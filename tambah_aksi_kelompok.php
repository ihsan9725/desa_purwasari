<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = rand(10,1000000);
$kode_kel = $_POST['kode_kel'];
$nama_kel = $_POST['nama_kel'];
$kategori = $_POST['kategori'];
$ketua_kel = $_POST['ketua_kel'];
$jml_anggota = $_POST['jml_anggota'];
$deskripsi = $_POST['deskripsi'];


      $query = "INSERT INTO tb_kelompok(id,kode_kel,nama_kel,kategori,ketua_kel,jml_anggota,deskripsi) VALUES('".$id."','".$kode_kel."','".$nama_kel."','".$kategori."','".$ketua_kel."','".$jml_anggota."','".$deskripsi."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
       if($sql){ 
        echo "<script>alert('Berhasi menyimpan data ke database!');document.location='data_kelompok.php'</script>";

    
// Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        // echo "Pengajuan Surat Berhasil DiKirim"	;
        // echo "<br>Tunggu Prosses ACC surat melalui Whatsapp atau Email";
        // echo "<br><a class='btn btn_primary' href='surat_A.php'>Kembali Mengajukan?</a>";


        // header("location: surat_A.php"); // Redirectke halaman index.php
      
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='tambah_data_kelompok.php'</script>";
      
}
?>