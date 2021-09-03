<?php

require('pdf/fpdf.php');


class PDF extends FPDF{
    function logo($gambar){
        $this->Image($gambar, 10,5,20,25);
    }
    function judul($teks1, $teks2, $teks3, $teks4, $teks5, $teks6, $teks7, $teks8, $teks9, $teks10, $teks11, $teks12, $teks13,$teks14, $teks15,$teks16,$teks17,$teks18,$teks19,$teks20,$teks21,$teks22){
        //untuk baris pertama
        $this->Cell(95);
        $this->SetFont('Times','B','14');
        $this->Cell(180,5,$teks1,0,1,"C");
          //untuk baris kedua
        $this->Cell(95);
        $this->SetFont('Times','B','14');
        $this->Cell(180,5,$teks2,0,1,"C");
        //untuk baris ketiga
        $this->Cell(95);
        $this->SetFont('Times','BU','6');
        $this->Cell(180,5,$teks3,0,1,"C");
        //untuk baris keempat
        $this->Cell(95);
        $this->SetFont('Times','BU','11');
        $this->Cell(180,50,$teks4,0,1,"C");
         //untuk baris kelima
        $this->Cell(95);
        $this->SetFont('Times','','11');
        $this->Cell(180,-20,$teks5,0,1,"C");
        //untuk baris keenam
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(180,50,$teks6,0,1,"L");
        //untuk baris ketujuh
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,-30,$teks7,0,1,"L");
        //untuk baris kedelapan
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,40,$teks8,0,1,"L");
        //untuk baris kesembilan
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,-30,$teks9,0,1,"L");
        //untuk baris kesepuluh
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,40,$teks10,0,1,"L");
        //untuk baris kesebelas
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,-30,$teks11,0,1,"L");
        //untuk baris keduabelas
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,40,$teks12,0,1,"L");
        //untuk baris ketiga belas
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,-5,$teks13,0,1,"L");
        //untuk baris keempat belas
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,15,$teks14,0,1,"L");
        //untuk baris kelima belas
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,-4,$teks15,0,1,"L");
        //untuk baris enam belas
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,15,$teks16,0,1,"L");
        //untuk baris tujuh belas
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,-5,$teks17,0,1,"L");
        //untuk baris delapan belas
        $this->Cell(115);
        $this->SetFont('Times','','11');
        $this->Cell(1,15,$teks18,0,1,"L");
         //untuk baris sembilan belas
        $this->Cell(200);
        $this->SetFont('Times','','11');
        $this->Cell(1,30,$teks19,0,1,"L");
        //untuk baris dua puluh
        $this->Cell(205);
        $this->SetFont('Times','','11');
        $this->Cell(1,-20,$teks20,0,1,"L");
        //untuk baris dua puluh satu
        $this->Cell(205);
        $this->SetFont('Times','','11');
        $this->Cell(1,30,$teks21,0,1,"L");
        //untuk baris dua puluh dua
        $this->Cell(210);
        $this->SetFont('Times','','11');
        $this->Cell(1,30,$teks22,0,1,"L");

    }

}

//menampilkan data
$pdf = new pdf();
//mengatur margin
$pdf->SetMargins(-80,20,10);
// atur page break
$pdf->SetAutoPageBreak(true,5);
//membuat halaman dengan potrait dan a4
$pdf->AddPage('P','A4');

$pdf->logo('img/kabupaten.jpg');

                


$pdf->judul('PEMERINTAH DESA MANDALAHAJI KECAMATAN PACET','KABUPATEN BANDUNG','JLN RAYA CIGAGAK NO 17 DESA MANDALAHAJI KECAMATAN PACET KABUPATEN BANDUNG KODE POS 40385','SURAT KETERANGAN USAHA (SKU)','Nomor........./........./2021','Saya yang bertanda tangan dibawah, Kepala Desa Mandalahaji menerangkan bahwa:','Nama: ','NIK:','Tempat/Tgl lahir:','Jenis Kelamin:','pekerjaan:','alamat:','Nama yang tertera diatas adalah benar-benar penduduk kami yang berdomisili Desa','Mandalahaji kecamatan Pacet Kabupaten Bandung.','Berdasarkan pengamatan Kami bahwa nama tersebut diatas benar memiliki Usaha...........','di Desa Mandalahaji.','Demikian surat keterangan usaha ini dibuat dengan sebenarnya dan agar dapat','dipergunakan dengan semestinya.','Dikeluarkan di : Desa Mandalahaji','Pada tanggal.............2021','Kepala Desa Mandalahaji','H Endang Jumara');



$pdf->output();