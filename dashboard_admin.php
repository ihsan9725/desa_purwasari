<?php
include "koneksi.php";
session_start();
$id_user=$_SESSION["id_user"];



if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}


$username=$_SESSION["username"];



?>
<!DOCTYPE html>
<html>
<head>
 <!-- Load file CSS Bootstrap offline -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="jumbotron text-center">
  <h1>INI ADALAH HALAMAN ADMIN</h1>
  <?php 

  	$result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id = '".$id_user."' ");

  	while ($row = $result->fetch_assoc()) {
    echo $row['nama']."<br>";
}


   ?>
    <p>Username : <?php echo $username; ?></p>
    <a href="logout.php" class="btn btn-warning" role="button">Logout</a>
</div>

</body>
</html> 