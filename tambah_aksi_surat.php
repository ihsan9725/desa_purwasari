<?php
date_default_timezone_set("Asia/Jakarta");
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$id_surat = $_POST['id_surat'];
$id_user = $_POST['id_user'];
$nik = $_POST['nik'];
$kk = $_POST['kk'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$wa = $_POST['wa'];
$jenis_surat = $_POST['jenis_surat'];
$tanggal = date("Y-m-d H:i:s ");
$pesan = $_POST['pesan'];
$status_post = $_POST['status_post'];
$status_ttd_kades = $_POST['status_ttd_kades'];

      $query = "INSERT INTO tb_surat(id_surat,id_user,nik,kk,nama,alamat,tmp_lahir,tgl_lahir,email,wa,jenis_surat,tanggal,pesan,status_post,status_ttd_kades) VALUES('".$id_surat."','".$id_user."','".$nik."','".$kk."','".$nama."','".$alamat."','".$tmp_lahir."','".$tgl_lahir."','".$email."','".$wa."','".$jenis_surat."','".$tanggal."','".$pesan."','".$status_post."','".$status_ttd_kades."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
       if($sql){ 
        echo "<script>alert('Surat Berhasil diajukan Ke Admin!');document.location='index_user.php'</script>";

    
// Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        // echo "Pengajuan Surat Berhasil DiKirim"	;
        // echo "<br>Tunggu Prosses ACC surat melalui Whatsapp atau Email";
        // echo "<br><a class='btn btn_primary' href='surat_A.php'>Kembali Mengajukan?</a>";


        // header("location: surat_A.php"); // Redirectke halaman index.php
      
      }else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba mengajukan surat ke Admin!');document.location='surat_A.php'</script>";
      
}
?>