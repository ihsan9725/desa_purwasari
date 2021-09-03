<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$id = $_POST['id'];
$nama_dok = $_POST['nama_dok'];


      $query = "INSERT INTO tb_persyaratan(id,nama_dok) VALUES('$id','$nama_dok')";
      $sql = mysqli_query($koneksi, $query) or die (mysqli_errors()); // Eksekusi/ Jalankan query dari variabel $query
       if($sql){ 
        echo "<script>alert('Data berhasil disimpan ke database');document.location='daftar_persyaratan.php'</script>";

    // header("location:daftar_persyaratan.php?pesan=berhasil disimpan!");
// Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        // echo "Pengajuan Surat Berhasil DiKirim"	;
        // echo "<br>Tunggu Prosses ACC surat melalui Whatsapp atau Email";
        // echo "<br><a class='btn btn_primary' href='surat_A.php'>Kembali Mengajukan?</a>";


        // header("location: surat_A.php"); // Redirectke halaman index.php
      
      }else{
        // Jika Gagal, Lakukan :
         echo "<script>alert('Data berhasil disimpan ke database');document.location='daftar_persyaratan.php'</script>";
      
}
?>