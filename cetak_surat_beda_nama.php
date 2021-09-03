<?php 
//membaca data dari form
$nama = $_POST['nama']; //ada lambang $ itu dari db kalo yg ga, dari tf
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$form_identitas = $_POST['form_identitas'];
$form_nama = $_POST['form_nama'];
$form_tmplahir = $_POST['form_tmplahir'];
$form_tgllahir = $_POST['form_tgllahir'];
$form_sex = $_POST['form_sex'];
$form_alamat = $_POST['form_alamat'];
$form_agama = $_POST['form_agama'];
$form_pekerjaan = $_POST['form_pekerjaan'];
$form_keterangan = $_POST['form_keterangan'];
$surat = $_POST['surat'];
$atas_nama = $_POST['atas_nama'];
$staf_desa = $_POST['staf_desa'];
$jabatan = $_POST['jabatan'];
//membaca template yang dibuat
//isi dok dalam bentuk string
$document = file_get_contents("template-surat/surat_ket_beda_nama/surat_ket_beda_nama.rtf");
$document = str_replace("tmp_lahir", $tmp_lahir, $document);//yang ada $ nya itu ambil data dari db
$document = str_replace("tgl_lahir", $tgl_lahir, $document);
$document = str_replace("agama", $agama, $document);
$document = str_replace("jenis_kelamin", $jenis_kelamin, $document);
$document = str_replace("pekerjaan", $pekerjaan, $document);
$document = str_replace("alamat", $alamat, $document);
$document = str_replace("form_identitas", $form_identitas, $document);
$document = str_replace("form_nama", $form_nama, $document);
$document = str_replace("form_tmplahir", $form_tmplahir, $document);
$document = str_replace("form_tgllahir", $form_tgllahir, $document);
$document = str_replace("form_sex", $form_sex, $document);
$document = str_replace("form_alamat", $form_alamat, $document);
$document = str_replace("form_agama", $form_agama, $document);
$document = str_replace("form_pekerjaan", $form_pekerjaan, $document);
$document = str_replace("form_keterangan", $form_keterangan, $document);
$document = str_replace("surat", $surat, $document);
$document = str_replace("atas_nama", $atas_nama, $document);
$document = str_replace("staf_desa", $staf_desa, $document);
$document = str_replace("jabatan", $jabatan, $document);
//header yang digunakan untuk membuka file rtf dengan ms word
header("Content-type: application/msword");
header("Content-disposition: inline;filename=suratKetBedaNama.doc");
header("Content-length: ".strlen($document));
echo "$document";
?>


