<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = rand(10,1000000);
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$kk = $_POST['kk'];
$ayah = $_POST['ayah']; //ada lambang $ itu dari db kalo yg ga, dari tf
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$status_perkawinan = $_POST['status_perkawinan'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan_ditempuh = $_POST['pendidikan_ditempuh'];
$warga = $_POST['warga'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kota = $_POST['kota'];
$tgl_tiba = $_POST['tgl_tiba'];
$tujuan = $_POST['tujuan'];
$jml_hari = $_POST['jml_hari'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$wajib_pantau = $_POST['wajib_pantau'];
$keluhan_kesehatan = $_POST['keluhan_kesehatan'];
$keterangan = $_POST['keterangan'];

      $query = "INSERT INTO tb_covid(id,nama,nik,kk,ayah,tmp_lahir,tgl_lahir,umur,alamat,status_perkawinan,pekerjaan,pendidikan_ditempuh,warga,agama,jenis_kelamin,kota,tgl_tiba,tujuan,jml_hari,no_hp,email,wajib_pantau,keluhan_kesehatan,keterangan) VALUES('".$id."','".$nama."','".$nik."','".$kk."','".$ayah."','".$tmp_lahir."','".$tgl_lahir."','".$umur."','".$alamat."','".$status_perkawinan."','".$pekerjaan."','".$pendidikan_ditempuh."','".$warga."','".$agama."','".$jenis_kelamin."','".$kota."','".$tgl_tiba."','".$tujuan."','".$jml_hari."','".$no_hp."','".$email."','".$wajib_pantau."','".$keluhan_kesehatan."','".$keterangan."')";

      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
       if($sql){ 
        echo "<script>alert('Berhasil menyimpan data ke database!');document.location='siaga_covid.php'</script>";
      }else{
        // Jika Gagal, Lakukan :
        
        echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='tambah_covid.php'</script>";
      
}
?>