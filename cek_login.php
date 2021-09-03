<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_login where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){

$data1 = mysqli_fetch_assoc($data);

	if($data1['level']=="admin") {
		//session login dan username

	$_SESSION['username'] = $username;
	$_SESSION['level'] = "admin";
	header("location:index_admin.php");

}else if($data1['level']=="user1"){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "user1";
	header("location:#.php");
}else if($data1['level']=="kades"){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "kades";
	header("location:index_kades.php");
}else{
	header("location:login_gagal.php?pesan=gagal");
}

}

//catatan untuk login perbaiki agar saat login tombol ga 2 dan ga makan memori
?>
