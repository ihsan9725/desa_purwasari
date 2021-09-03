<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form


$id = rand(10,1000000);
$jenis_surat = $_POST['jenis_surat'];

      $query = "INSERT INTO tb_jenis_surat(id,jenis_surat) VALUES('".$id."','".$jenis_surat."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
       if($sql){ 
        echo "<script>alert('Berhasi menyimpan data ke database!');document.location='jenis_surat.php'</script>";

    
// Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        // echo "Pengajuan Surat Berhasil DiKirim"	;
        // echo "<br>Tunggu Prosses ACC surat melalui Whatsapp atau Email";
        // echo "<br><a class='btn btn_primary' href='surat_A.php'>Kembali Mengajukan?</a>";


        // header("location: surat_A.php"); // Redirectke halaman index.php
      
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalah saat mencoba menyimpan data ke database!');document.location='jenis_surat.php'</script>";
      
}
?>