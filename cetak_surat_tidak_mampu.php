<?php 
//membaca data dari form
$nama = $_POST['nama'];
$nik = $_POST['nik'];//ada lambang $ itu dari db kalo yg ga, dari tf
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$warga1 = $_POST['warga1'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$surat = $_POST['surat'];
$keperluan = $_POST['keperluan'];
$atas_nama = $_POST['atas_nama'];
$staf_desa = $_POST['staf_desa'];
$jabatan = $_POST['jabatan'];
//membaca template yang dibuat
//isi dok dalam bentuk string
$document = file_get_contents("template-surat/surat_ket_kurang_mampu/surat_ket_kurang_mampu.rtf");
$document = str_replace("nama", $nama, $document);
$document = str_replace("nik", $nik, $document);//yang ada $ nya itu ambil data dari db
$document = str_replace("tmp_lahir", $tmp_lahir, $document);
$document = str_replace("tgl_lahir", $tgl_lahir, $document);
$document = str_replace("jenis_kelamin", $jenis_kelamin, $document);
$document = str_replace("warga1", $warga1, $document);
$document = str_replace("agama", $agama, $document);
$document = str_replace("pekerjaan", $pekerjaan, $document);
$document = str_replace("alamat", $alamat, $document);
$document = str_replace("surat", $surat, $document);
$document = str_replace("keperluan", $keperluan, $document);
$document = str_replace("atas_nama", $atas_nama, $document);
$document = str_replace("staf_desa", $staf_desa, $document);
$document = str_replace("jabatan", $jabatan, $document);
//header yang digunakan untuk membuka file rtf dengan ms word
header("Content-type: application/msword");
header("Content-disposition: inline;filename=suratKetKurangMampu.doc");
header("Content-length: ".strlen($document));
echo "$document";
?>


