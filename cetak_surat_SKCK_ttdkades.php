<?php 
//membaca data dari form
$pilih_dari_nik = $_POST['pilih_dari_nik'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$kk = $_POST['kk'];
$nama_ayah = $_POST['ayah']; //ada lambang $ itu dari db kalo yg ga, dari tf
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$status_perkawinan = $_POST['status_perkawinan'];
$pendidikan_ditempuh = $_POST['pendidikan_ditempuh'];
$pekerjaan = $_POST['pekerjaan'];
$warga1 = $_POST['warga1'];
$agama = $_POST['agama'];
$surat = $_POST['surat'];
$keterangan = $_POST['keterangan'];
$atas_nama = $_POST['atas_nama'];
$staf_desa = $_POST['staf_desa'];
$jabatan = $_POST['jabatan'];
//membaca template yang dibuat
//isi dok dalam bentuk string
$document = file_get_contents("template-surat-ttdkades/surat_ket_catatan_kriminal/surat_ket_catatan_kriminal.rtf");
$document = str_replace("pilih_dari_nik", $pilih_dari_nik, $document);
$document = str_replace("nama", $nama, $document);
$document = str_replace("nik", $nik, $document);
$document = str_replace("kk", $kk, $document);
$document = str_replace("ayah", $nama_ayah, $document);   //yang ada $ nya itu ambil data dari db
$document = str_replace("tmp_lahir", $tmp_lahir, $document);
$document = str_replace("tgl_lahir", $tgl_lahir, $document);
$document = str_replace("umur", $umur, $document);
$document = str_replace("alamat", $alamat, $document);
$document = str_replace("status_perkawinan", $status_perkawinan, $document);
$document = str_replace("pendidikan_ditempuh", $pendidikan_ditempuh, $document);
$document = str_replace("pekerjaan", $pekerjaan, $document);
$document = str_replace("warga1", $warga1, $document);
$document = str_replace("agama", $agama, $document);
$document = str_replace("surat", $surat, $document);
$document = str_replace("keterangan", $keterangan, $document);
$document = str_replace("atas_nama", $atas_nama, $document);
$document = str_replace("staf_desa", $staf_desa, $document);
$document = str_replace("jabatan", $jabatan, $document);
//header yang digunakan untuk membuka file rtf dengan ms word
header("Content-type: application/msword");
header("Content-disposition: inline;filename=suratSKCK.doc");
header("Content-length: ".strlen($document));
echo "$document";
?>


