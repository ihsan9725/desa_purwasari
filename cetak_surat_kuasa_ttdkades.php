<?php 
//membaca data dari form
$nama = $_POST['nama'];
$nik = $_POST['nik']; //ada lambang $ itu dari db kalo yg ga, dari tf
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$umur = $_POST['umur'];
$warga1 = $_POST['warga1'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];

$nama2 = $_POST['nama2'];
$nik2 = $_POST['nik2']; //ada lambang $ itu dari db kalo yg ga, dari tf
$tmp_lahir2 = $_POST['tmp_lahir2'];
$tgl_lahir2 = $_POST['tgl_lahir2'];
$umur2 = $_POST['umur2'];
$warga12 = $_POST['warga12'];
$jenis_kelamin2 = $_POST['jenis_kelamin2'];
$pekerjaan2 = $_POST['pekerjaan2'];
$alamat2 = $_POST['alamat2'];

$surat = $_POST['surat'];
$keperluan = $_POST['keperluan'];
$staf_desa = $_POST['staf_desa'];
$jabatan = $_POST['jabatan'];
//membaca template yang dibuat
//isi dok dalam bentuk string
$document = file_get_contents("template-surat-ttdkades/surat_kuasa/surat_kuasa.rtf");
$document = str_replace("nama", $nama, $document);
$document = str_replace("nik", $nik, $document);//yang ada $ nya itu ambil data dari db
$document = str_replace("tmp_lahir", $tmp_lahir, $document);
$document = str_replace("tgl_lahir", $tgl_lahir, $document);
$document = str_replace("umur", $umur, $document);
$document = str_replace("warga1", $warga1, $document);
$document = str_replace("jenis_kelamin", $jenis_kelamin, $document);
$document = str_replace("pekerjaan", $pekerjaan, $document);
$document = str_replace("alamat", $alamat, $document);

$document = str_replace("nama2", $nama2, $document);
$document = str_replace("nik2", $nik2, $document);//yang ada $ nya itu ambil data dari db
$document = str_replace("tmp_lahir2", $tmp_lahir2, $document);
$document = str_replace("tgl_lahir2", $tgl_lahir2, $document);
$document = str_replace("umur2", $umur2, $document);
$document = str_replace("warga12", $warga12, $document);
$document = str_replace("jenis_kelamin2", $jenis_kelamin2, $document);
$document = str_replace("pekerjaan2", $pekerjaan2, $document);
$document = str_replace("alamat2", $alamat2, $document);

$document = str_replace("surat", $surat, $document);
$document = str_replace("keperluan", $keperluan, $document);
$document = str_replace("staf_desa", $staf_desa, $document);
$document = str_replace("jabatan", $jabatan, $document);
//header yang digunakan untuk membuka file rtf dengan ms word
header("Content-type: application/msword");
header("Content-disposition: inline;filename=suratKuasa.doc");
header("Content-length: ".strlen($document));
echo "$document";
?>


