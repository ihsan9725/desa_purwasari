<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$kk = $_POST['kk'];
$kepala_keluarga = $_POST['kepala_keluarga'];
$nik = $_POST['nik'];
$id_card = $_POST['id_card'];
$jml_anggota = $_POST['jml_anggota'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$tanggal = $_POST['tanggal'];

      $query = "INSERT INTO tb_keluarga(id,kk,kepala_keluarga,nik,id_card,jml_anggota,jenis_kelamin,alamat,dusun,rt,rw,tanggal) VALUES('".$id."','".$kk."','".$kepala_keluarga."','".$nik."','".$id_card."','".$jml_anggota."','".$jenis_kelamin."','".$alamat."','".$dusun."','".$rt."','".$rw."','".$tanggal."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
       if($sql){ 
        echo "<script>alert('Berhasi menyimpan data ke database!');document.location='data_keluarga.php'</script>";

    
// Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        // echo "Pengajuan Surat Berhasil DiKirim"	;
        // echo "<br>Tunggu Prosses ACC surat melalui Whatsapp atau Email";
        // echo "<br><a class='btn btn_primary' href='surat_A.php'>Kembali Mengajukan?</a>";


        // header("location: surat_A.php"); // Redirectke halaman index.php
      
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='tambah_data_keluarga.php'</script>";
      
}
?>