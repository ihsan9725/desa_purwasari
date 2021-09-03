<?php 
//membaca data dari form
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$jenis_tanah = $_POST['jenis_tanah'];
$atas_nama = $_POST['atas_nama'];
$bukti_kepemilikan = $_POST['bukti_kepemilikan'];
$nomor_kepemilikan = $_POST['nomor_kepemilikan'];
$luas_tanah = $_POST['luas_tanah'];
$utara = $_POST['utara'];
$timur = $_POST['timur'];
$selatan = $_POST['selatan'];
$barat = $_POST['barat'];
$asal_tanah = $_POST['asal_tanah'];
$bukti_pendukung = $_POST['bukti_pendukung'];

$surat = $_POST['surat'];
$staf_desa = $_POST['staf_desa'];
$jabatan = $_POST['jabatan'];
//membaca template yang dibuat
//isi dok dalam bentuk string
$document = file_get_contents("template-surat/surat_ket_kepemilikan_tanah/surat_ket_kepemilikan_tanah.rtf");
$document = str_replace("nama", $nama, $document);//yang ada $ nya itu ambil data dari db
$document = str_replace("tmp_lahir", $tmp_lahir, $document);
$document = str_replace("tgl_lahir", $tgl_lahir, $document);
$document = str_replace("umur", $umur, $document);
$document = str_replace("jenis_kelamin", $jenis_kelamin, $document);
$document = str_replace("pekerjaan", $pekerjaan, $document);
$document = str_replace("alamat", $alamat, $document);
$document = str_replace("jenis_tanah", $jenis_tanah, $document);
$document = str_replace("atas_nama", $atas_nama, $document);
$document = str_replace("bukti_kepemilikan", $bukti_kepemilikan, $document);
$document = str_replace("nomor_kepemilikan", $nomor_kepemilikan, $document);
$document = str_replace("luas_tanah", $luas_tanah, $document);
$document = str_replace("utara", $utara, $document);
$document = str_replace("timur", $timur, $document);
$document = str_replace("selatan", $selatan, $document);
$document = str_replace("barat", $barat, $document);
$document = str_replace("asal_tanah", $asal_tanah, $document);
$document = str_replace("bukti_pendukung", $bukti_pendukung, $document);

$document = str_replace("surat", $surat, $document);
$document = str_replace("staf_desa", $staf_desa, $document);
$document = str_replace("jabatan", $jabatan, $document);
//header yang digunakan untuk membuka file rtf dengan ms word
header("Content-type: application/msword");
header("Content-disposition: inline;filename=suratTanahBangunan.doc");
header("Content-length: ".strlen($document));
echo "$document";
?>


