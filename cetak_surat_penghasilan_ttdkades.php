<?php 
//membaca data dari form
$pilih_dari_nik = $_POST['pilih_dari_nik'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_induk = $_POST['no_induk'];
$jurusan = $_POST['jurusan'];
$sekolah = $_POST['sekolah'];
$semester = $_POST['semester'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$nama_ayah = $_POST['ayah']; //ada lambang $ itu dari db kalo yg ga, dari tf
$nok = $_POST['nok'];
$job = $_POST['job'];
$ibu = $_POST['ibu'];
$noik = $_POST['noik'];
$work = $_POST['work'];
$jml_penghasilan = $_POST['jml_penghasilan'];
$surat = $_POST['surat'];
$atas_nama = $_POST['atas_nama'];
$staf_desa = $_POST['staf_desa'];
$jabatan = $_POST['jabatan'];

//membaca template yang dibuat
//isi dok dalam bentuk string
$document = file_get_contents("template-surat-ttdkades/surat_ket_penghasilan_orangtua/surat_ket_penghasilan_orangtua.rtf");
$document = str_replace("pilih_dari_nik", $pilih_dari_nik, $document);
$document = str_replace("nama", $nama, $document);
$document = str_replace("tmp_lahir", $tmp_lahir, $document);
$document = str_replace("tgl_lahir", $tgl_lahir, $document);
$document = str_replace("nik", $nik, $document);
$document = str_replace("jenis_kelamin", $jenis_kelamin, $document);
$document = str_replace("no_induk", $no_induk, $document);
$document = str_replace("jurusan", $jurusan, $document);
$document = str_replace("sekolah", $sekolah, $document);
$document = str_replace("semester", $semester, $document);
$document = str_replace("agama", $agama, $document);
$document = str_replace("pekerjaan", $pekerjaan, $document);
$document = str_replace("alamat", $alamat, $document);
$document = str_replace("ayah", $nama_ayah, $document);   //yang ada $ nya itu ambil data dari db
$document = str_replace("nok", $nok, $document);
$document = str_replace("job", $job, $document);
$document = str_replace("ibu", $ibu, $document);
$document = str_replace("noik", $noik, $document);
$document = str_replace("work", $work, $document);   //yang ada $ nya itu ambil data dari db
$document = str_replace("jml_penghasilan", $jml_penghasilan, $document);
$document = str_replace("surat", $surat, $document);
// $document = str_replace("keterangan", $keterangan, $document);
$document = str_replace("atas_nama", $atas_nama, $document);
$document = str_replace("staf_desa", $staf_desa, $document);
$document = str_replace("jabatan", $jabatan, $document);



//header yang digunakan untuk membuka file rtf dengan ms word
header("Content-type: application/msword");
header("Content-disposition: inline;filename=suratPenghasilan.doc");
header("Content-length: ".strlen($document));
echo "$document";
?>


