<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form


$id = $_POST['id'];
$tahun = $_POST['tahun'];
$jenis_anggaran = $_POST['jenis_anggaran'];
$kode_rincian = $_POST['kode_rincian'];
$nilai_anggaran = $_POST['nilai_anggaran'];
$nilai_real = $_POST['nilai_real'];
$tanggal = date("Y-m-d, H:i:s");

      $query = "INSERT INTO tb_input_anggaran(id,tahun,jenis_anggaran,kode_rincian,nilai_anggaran,nilai_real,tanggal) VALUES('$id','$tahun','$jenis_anggaran','$kode_rincian','$nilai_anggaran','$nilai_real','$tanggal')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
       if($sql){ 
        echo "<script>alert('Berhasi menyimpan data ke database!');document.location='keuangan_input_data.php'</script>";

    
// Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        // echo "Pengajuan Surat Berhasil DiKirim"	;
        // echo "<br>Tunggu Prosses ACC surat melalui Whatsapp atau Email";
        // echo "<br><a class='btn btn_primary' href='surat_A.php'>Kembali Mengajukan?</a>";


        // header("location: surat_A.php"); // Redirectke halaman index.php
      
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='tambah_keuangan_input_data.php'</script>";
      
}
?>