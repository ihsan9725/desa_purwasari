<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form\
$id = $_POST['id'];
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$kk = $_POST['kk'];
$hub_kel = $_POST['hub_kel'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$status_penduduk = $_POST['status_penduduk'];
$no_akta = $_POST['no_akta'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelahiran = $_POST['jenis_kelahiran'];
$tmp_lahir = $_POST['tmp_lahir'];
$waktu_lahir = $_POST['waktu_lahir'];
$anak_ke = $_POST['anak_ke'];
$panjang = $_POST['panjang'];
$tmp_dilahirkan = $_POST['tmp_dilahirkan'];
$penolong_kelahiran = $_POST['penolong_kelahiran'];
$gol_darah = $_POST['gol_darah'];
$akseptor_kb = $_POST['akseptor_kb'];
$cacat = $_POST['cacat'];
$asuransi = $_POST['asuransi'];
$sakit_menahun = $_POST['sakit_menahun'];
$ktp_el = $_POST['ktp_el'];
$pendidikan_kk = $_POST['pendidikan_kk'];
$pendidikan_ditempuh = $_POST['pendidikan_ditempuh'];
$pekerjaan = $_POST['pekerjaan'];
$nik_ayah = $_POST['nik_ayah'];
$nama_ayah = $_POST['nama_ayah'];
$nik_ibu = $_POST['nik_ibu'];
$nama_ibu = $_POST['nama_ibu'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$status_perkawinan = $_POST['status_perkawinan'];
$no_akta_nikah = $_POST['no_akta_nikah'];
$tgl_perkawinan = $_POST['tgl_perkawinan'];
$tgl_perceraian = $_POST['tgl_perceraian'];
// Set path folder tempat menyimpan gambarnya
$path = "img/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan : 
      // Proses simpan ke Database
      $query = "INSERT INTO tb_penduduk(id,foto,ukuran,tipe,nik,nama,kk,hub_kel,jenis_kelamin,agama,status_penduduk,no_akta,tgl_lahir,jenis_kelahiran,tmp_lahir,waktu_lahir,anak_ke,panjang,tmp_dilahirkan,penolong_kelahiran,gol_darah,akseptor_kb,cacat,asuransi,sakit_menahun,ktp_el,pendidikan_kk,pendidikan_ditempuh,pekerjaan,nik_ayah,nama_ayah,nik_ibu,nama_ibu,alamat,telepon,email,status_perkawinan,no_akta_nikah,tgl_perkawinan,tgl_perceraian) VALUES('".$id."','".$nama_file."','".$ukuran_file."','".$tipe_file."','".$nik."','".$nama."','".$kk."','".$hub_kel."','".$jenis_kelamin."','".$agama."','".$status_penduduk."','".$no_akta."','".$tgl_lahir."','".$jenis_kelahiran."','".$tmp_lahir."','".$waktu_lahir."','".$anak_ke."','".$panjang."','".$tmp_dilahirkan."','".$penolong_kelahiran."','".$gol_darah."','".$akseptor_kb."','".$cacat."','".$asuransi."','".$sakit_menahun."','".$ktp_el."','".$pendidikan_kk."','".$pendidikan_ditempuh."','".$pekerjaan."','".$nik_ayah."','".$nama_ayah."','".$nik_ibu."','".$nama_ibu."','".$alamat."','".$telepon."','".$email."','".$status_perkawinan."','".$no_akta_nikah."','".$tgl_perkawinan."','".$tgl_perceraian."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "<script>alert('Berhasil menyimpan data ke database!');document.location='data_penduduk.php'</script>";// Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
       echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba menyimpan data ke database!');document.location='tambah_data_penduduk.php'</script>";
        
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf, Gambar gagal untuk diupload!');document.location='tambah_data_penduduk.php'</script>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "<script>alert('Maaf, Ukuran file tidak boleh lebih dari 1MB!');document.location='tambah_data_penduduk.php'</script>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "<script>alert('Maaf, File yang diupload harus bertipe JPG/JPEG/PNG!');document.location='tambah_data_penduduk.php'</script>";
}
?>