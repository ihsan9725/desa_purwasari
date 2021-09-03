<?php
// Load file koneksi.php
include "koneksi_srvr.php";

// Ambil Data yang Dikirim dari Form
$id = rand(10,1000000);
$jenis_surat = $_POST['jenis_surat'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$tanda_tangan = $_POST['tanda_tangan'];
$tanggal = date("Y-m-d H:i:s ");
$pengguna = $_POST['pengguna'];

      $query = "INSERT INTO tb_arsip_surat(id,jenis_surat,nama,keterangan,tanda_tangan,tanggal,pengguna) VALUES('$id','$jenis_surat','$nama','$keterangan','$tanda_tangan','$tanggal','$pengguna')";
      $sql = sqlsrv_query($conn, $query) or die (sqlsrv_errors()); // Eksekusi/ Jalankan query dari variabel $query
       if($sql){ 
        header("location:.php?pesan=berhasil disimpan!");

    
// Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        // echo "Pengajuan Surat Berhasil DiKirim"	;
        // echo "<br>Tunggu Prosses ACC surat melalui Whatsapp atau Email";
        // echo "<br><a class='btn btn_primary' href='surat_A.php'>Kembali Mengajukan?</a>";


        // header("location: surat_A.php"); // Redirectke halaman index.php
      
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='#'>Kembali Ke Form</a>";
      
}
?>