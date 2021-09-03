-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 03:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(50) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sub_judul` varchar(100) NOT NULL,
  `foto` longblob NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tahun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `nama`, `ukuran`, `tipe`, `judul`, `sub_judul`, `foto`, `isi`, `tahun`) VALUES
(14, 'WhatsApp Image 2021-07-08 at 15.52.54.jpeg', 188103, 'image/jpeg', 'Sejarah Desa Purwasari', 'Sejarah Desa Purwasari', '', 'lorem ipsum dolor sir amet lorem ipsum dolor sir amet lorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir ametlorem ipsum dolor sir amet', 1998);

-- --------------------------------------------------------

--
-- Table structure for table `tb_aparat_pemerintahds`
--

CREATE TABLE `tb_aparat_pemerintahds` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `nama_peg` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nipd` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pangkat` varchar(40) NOT NULL,
  `no_sk_pengangkatan` varchar(30) NOT NULL,
  `tgl_sk_pengangkatan` varchar(20) NOT NULL,
  `no_sk_pemberhentian` varchar(30) NOT NULL,
  `tgl_sk_pemberhentian` varchar(20) NOT NULL,
  `masa_jabatan` varchar(20) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_aparat_pemerintahds`
--

INSERT INTO `tb_aparat_pemerintahds` (`id`, `nama`, `ukuran`, `tipe`, `nama_peg`, `nik`, `nipd`, `nip`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `pendidikan`, `agama`, `pangkat`, `no_sk_pengangkatan`, `tgl_sk_pengangkatan`, `no_sk_pemberhentian`, `tgl_sk_pemberhentian`, `masa_jabatan`, `jabatan`, `status`) VALUES
(89002, 'h.jpg', 64357, 'image/jpeg', 'Herdi Muhammad', '3204301412970003', '323232323', '121212121221', 'bandung', '2021-08-26', 'Laki-Laki', 'S1 Teknik Informatika', 'Islam', '2', '56', '2021-08-19', '45454', '2021-08-28', '3', 'Kadis', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip_surat`
--

CREATE TABLE `tb_arsip_surat` (
  `id` int(11) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `tanda_tangan` varchar(30) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_auth`
--

CREATE TABLE `tb_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_auth`
--

INSERT INTO `tb_auth` (`id`, `username`, `pass`, `level`, `id_user`) VALUES
(11223345, 'ihsan', '292752bbe75dbf3bee713e4b7b0dba0a', 'warga', 410412),
(11223346, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 196384),
(11223347, 'kades', '1bd5da988b535455b33007aca5bb5b87', 'kades', 942001);

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pra1` text NOT NULL,
  `pra2` text NOT NULL,
  `pra3` text NOT NULL,
  `pra4` text NOT NULL,
  `kutipan` varchar(500) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `komen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `foto`, `ukuran`, `tipe`, `tanggal`, `judul`, `kategori`, `pra1`, `pra2`, `pra3`, `pra4`, `kutipan`, `penulis`, `komen`) VALUES
(1, 'h.jpg', 64357, 'image/jpeg', '2021-08-24', 'Gus Halim Imbau Warga Tetap Rumah', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`id`, `nama`, `ukuran`, `tipe`, `judul`, `tanggal`) VALUES
(0, '109-188-1-SM.pdf', 999146, 'applicatio', 'Apajaaaa', '2021-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bg`
--

CREATE TABLE `tb_bg` (
  `id` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ukuran` int(20) NOT NULL,
  `tipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bg`
--

INSERT INTO `tb_bg` (`id`, `foto`, `ukuran`, `tipe`) VALUES
(132930, '32ab6dbb592b5178d21cc3c6fe4f4846.jpg', 20235, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_agenda_surat_keluar`
--

CREATE TABLE `tb_buku_agenda_surat_keluar` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `no_urut` varchar(10) NOT NULL,
  `klasifikasi` varchar(20) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tgl_surat` varchar(20) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku_agenda_surat_keluar`
--

INSERT INTO `tb_buku_agenda_surat_keluar` (`id`, `nama`, `ukuran`, `tipe`, `no_urut`, `klasifikasi`, `no_surat`, `tgl_surat`, `tujuan`, `isi`) VALUES
(724511, '1.pdf', 2280104, 'applicatio', '2', '2test', '34234243', '2021-08-27', 'Kepala Desa', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_agenda_surat_masuk`
--

CREATE TABLE `tb_buku_agenda_surat_masuk` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `no_urut` varchar(10) NOT NULL,
  `klasifikasi` varchar(20) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `tgl_surat` varchar(20) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `disposisi_kpd` varchar(30) NOT NULL,
  `isi_disposisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku_agenda_surat_masuk`
--

INSERT INTO `tb_buku_agenda_surat_masuk` (`id`, `nama`, `ukuran`, `tipe`, `no_urut`, `klasifikasi`, `no_surat`, `tgl_surat`, `pengirim`, `isi`, `disposisi_kpd`, `isi_disposisi`) VALUES
(456297, 'suratIjinKeramaian(1).doc', 2598928, 'applicatio', '1', '1', '1', '2021-08-19', 'Ihsan Nur', 'Test', 'TestTest', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_keputusan_kdesa`
--

CREATE TABLE `tb_buku_keputusan_kdesa` (
  `id` int(11) NOT NULL,
  `dok` varchar(30) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `judul_dok` varchar(50) NOT NULL,
  `nama_dok` varchar(50) NOT NULL,
  `uraian` text NOT NULL,
  `no_keputusan` varchar(20) NOT NULL,
  `tgl_keputusan_kades` varchar(20) NOT NULL,
  `tgl_dilaporkan` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku_keputusan_kdesa`
--

INSERT INTO `tb_buku_keputusan_kdesa` (`id`, `dok`, `ukuran`, `tipe`, `judul_dok`, `nama_dok`, `uraian`, `no_keputusan`, `tgl_keputusan_kades`, `tgl_dilaporkan`, `keterangan`) VALUES
(678673, 'suratIjinKeramaian(1).doc', 2598928, 'applicatio', 'Test', 'test', 'test', '56', '2021-08-26', '2021-08-28', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_perdes`
--

CREATE TABLE `tb_buku_perdes` (
  `id` int(11) NOT NULL,
  `dok` varchar(30) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `judul_dok` varchar(40) NOT NULL,
  `uraian` text NOT NULL,
  `jenis_per` varchar(30) NOT NULL,
  `no_ditetapkan` varchar(20) NOT NULL,
  `tgl_ditetapkan` varchar(20) NOT NULL,
  `tgl_kesepakatan` varchar(20) NOT NULL,
  `no_dilaporkan` varchar(20) NOT NULL,
  `tgl_dilaporkan` varchar(20) NOT NULL,
  `lembaran_desa` varchar(20) NOT NULL,
  `tgl_dlm_lembaran` varchar(20) NOT NULL,
  `berita_desa` text NOT NULL,
  `tgl_berita_desa` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku_perdes`
--

INSERT INTO `tb_buku_perdes` (`id`, `dok`, `ukuran`, `tipe`, `judul_dok`, `uraian`, `jenis_per`, `no_ditetapkan`, `tgl_ditetapkan`, `tgl_kesepakatan`, `no_dilaporkan`, `tgl_dilaporkan`, `lembaran_desa`, `tgl_dlm_lembaran`, `berita_desa`, `tgl_berita_desa`, `keterangan`) VALUES
(95412, 'OAJIS_53_1818.pdf', 325695, 'applicatio', 'OAJIS', 'Jurnal Ilmu', 'Peraturan Bersama Kepala Desa', '12/SK/899/2021', '2021-08-17', '2021-08-23', '1', '2021-08-24', '23', '2021-08-23', '98', '2021-08-23', 'Jurnal Impian'),
(455851, 'suratPenghasilan.doc', 2573905, 'applicatio', 'Apakah di bawah', '-', 'Peraturan Desa (Perdes)', '-', '2021-08-24', '2021-08-24', '-', '2021-08-25', '-', '2021-09-02', '-', '2021-09-01', '-'),
(455852, '1.pdf', 2280104, 'applicatio', 'jkjhkjhkj', 'jhkhkhhkj', 'Peraturan Desa (Perdes)', '4', '2021-08-20', '2021-08-25', '876767', '2021-09-04', '67', '2021-08-27', '67', '2021-08-27', 'jghjhgjhgjhg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_covid`
--

CREATE TABLE `tb_covid` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan_ditempuh` varchar(50) NOT NULL,
  `warga` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `tgl_tiba` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `jml_hari` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `wajib_pantau` varchar(50) NOT NULL,
  `keluhan_kesehatan` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_covid`
--

INSERT INTO `tb_covid` (`id`, `nama`, `nik`, `kk`, `ayah`, `tmp_lahir`, `tgl_lahir`, `umur`, `alamat`, `status_perkawinan`, `pekerjaan`, `pendidikan_ditempuh`, `warga`, `agama`, `jenis_kelamin`, `kota`, `tgl_tiba`, `tujuan`, `jml_hari`, `no_hp`, `email`, `wajib_pantau`, `keluhan_kesehatan`, `keterangan`) VALUES
(419848, 'Ihsan Nurhakim Aziz', '32043014129700032', '3204305678900099', 'Endang Sopandi', 'Bandung', '1997-12-14', '23', 'Kp Ranca rt 48/15 Desa Mandalahaji Kec Pacet Kab Bandung', 'BELUM KAWIN', 'Mahasiswa', 'SI/Teknik Informatika', 'WNI', 'Islam', 'LAKI-LAKI', 'Banjar', '2021-08-25', 'LIBURAN', '2', '00808080', 'lpk7ohsanna@gmail.com', 'TIDAK', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ukuran` int(100) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `pra1` text NOT NULL,
  `pra2` text NOT NULL,
  `pra3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `foto`, `ukuran`, `tipe`, `caption`, `pra1`, `pra2`, `pra3`) VALUES
(226919, 'icons8-rfid-signal-96.png', 5363, 'image/png', 'sdfsdfsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfsdf', 'sdfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_input_anggaran`
--

CREATE TABLE `tb_input_anggaran` (
  `id` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `jenis_anggaran` varchar(50) NOT NULL,
  `kode_rincian` varchar(50) NOT NULL,
  `nilai_anggaran` varchar(30) NOT NULL,
  `nilai_real` varchar(30) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_input_anggaran`
--

INSERT INTO `tb_input_anggaran` (`id`, `tahun`, `jenis_anggaran`, `kode_rincian`, `nilai_anggaran`, `nilai_real`, `tanggal`) VALUES
(1, '2022', '4.Pendapatan', '4.3.6. Bunga Bank', '200.000.000', '200.000', '2021-08-23, 04:50:29'),
(2, '2021', '5.Belanja', '4.2.3. Alokasi Dana ', '21.000.000', '20.900.000', '2021-08-23, 04:52:14'),
(3, '2019', '4.Pendapatan', '4.2.1. Dana Desa', '21.000.000', '20.900.000', '2021-08-23, 04:54:15'),
(4, '', 'Pilih Jenis Anggaran', '4.3.3. Penerimaan Bantuan Dari Perusahaan Yang Ber', '', '', '2021-08-23, 04:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_surat`
--

CREATE TABLE `tb_jenis_surat` (
  `id` int(11) NOT NULL,
  `jenis_surat` varchar(200) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_surat`
--

INSERT INTO `tb_jenis_surat` (`id`, `jenis_surat`, `link`) VALUES
(106055, 'Penghasilan', 'surat_penghasilan.php'),
(109362, 'Izin Keramaian', 'surat_izin_kerumunan.php'),
(133998, 'Usaha', 'surat_usaha.php'),
(209342, 'Surat Tidak Mampu', 'surat_tidak_mampu.php'),
(247776, 'Beda Nama', 'surat_beda_nama.php'),
(424245, 'Tanah Bangunan', 'surat_tanah_bangunan.php'),
(520411, 'Surat Kuasa', 'surat_kuasa.php'),
(624520, 'SKCK', 'surat_skck.php'),
(979059, 'KTP Dalam Proses', 'surat_ktp_dalam_proses.php');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_surat_ttdkades`
--

CREATE TABLE `tb_jenis_surat_ttdkades` (
  `id` int(11) NOT NULL,
  `jenis_surat` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_surat_ttdkades`
--

INSERT INTO `tb_jenis_surat_ttdkades` (`id`, `jenis_surat`, `link`) VALUES
(1, 'Penghasilan', 'surat_penghasilan_ttdkades.php'),
(2, 'Izin Keramaian', 'surat_izin_kerumunan_ttdkades.php'),
(3, 'Usaha', 'surat_usaha_ttdkades.php'),
(4, 'Surat Tidak Mampu', 'surat_tidak_mampu_ttdkades.php'),
(5, 'Beda Nama', 'surat_beda_nama_ttdkades.php'),
(8, 'Tanah Bangunan', 'surat_tanah_bangunan_ttdkades.php'),
(13, 'Surat Kuasa', 'surat_kuasa_ttdkades.php'),
(14, 'SKCK', 'surat_skck_ttdkades.php'),
(20, 'KTP Dalam Proses', 'surat_ktp_dalam_proses_ttdkades.php');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelompok`
--

CREATE TABLE `tb_kelompok` (
  `id` int(11) NOT NULL,
  `kode_kel` varchar(10) NOT NULL,
  `nama_kel` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `ketua_kel` varchar(50) NOT NULL,
  `jml_anggota` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelompok`
--

INSERT INTO `tb_kelompok` (`id`, `kode_kel`, `nama_kel`, `kategori`, `ketua_kel`, `jml_anggota`, `deskripsi`) VALUES
(790440, '78987', 'Distan', 'Pertanian Padi', 'Ihsan Nurhakim Aziz', '90', 'Bergerak dibidang pertanian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluarga`
--

CREATE TABLE `tb_keluarga` (
  `id` int(11) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `kepala_keluarga` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `id_card` varchar(20) NOT NULL,
  `jml_anggota` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keluarga`
--

INSERT INTO `tb_keluarga` (`id`, `kk`, `kepala_keluarga`, `nik`, `id_card`, `jml_anggota`, `jenis_kelamin`, `alamat`, `dusun`, `rt`, `rw`, `tanggal`) VALUES
(852342, '3204305678900099', 'H Endang Sopandi', '324234234234234', 'id_card', '3', 'PILIH JENIS KELAMIN', 'Kp Ranca rt 48/15 Desa Mandalahaji Kec Pacet Kab Bandung', 'Ranca', '4', '3', '2021-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kirim_surat`
--

CREATE TABLE `tb_kirim_surat` (
  `id_kirim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id` int(11) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `pra1` text NOT NULL,
  `pra2` text NOT NULL,
  `pra3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id`, `foto`, `ukuran`, `tipe`, `jenis_layanan`, `deskripsi`, `pra1`, `pra2`, `pra3`) VALUES
(454264, 'k.jpg', 89958, 'image/jpeg', 'aaaaa', 'ssssdfsdf', 'zxcvzxcv', 'asdfasdf', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelayanan`
--

CREATE TABLE `tb_pelayanan` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `jenis_layanan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelayanan`
--

INSERT INTO `tb_pelayanan` (`id`, `foto`, `ukuran`, `tipe`, `jenis_layanan`, `deskripsi`) VALUES
(5, 'Khaira(1).png', 22624, 'image/png', 'Pembuatan KK (Kartu Keluarga)', 'dalam hal ini pembuatan kk harus melalui proses yang baik'),
(6, 'dhe putri.png', 14775, 'image/png', 'Pembuatan Burger', 'lorem ipsum dolor sir ametsss'),
(7, 'Khaira.png', 17172, 'image/png', 'Pembuatan Spageti', 'lorem ipsum dolor sir amet'),
(8, 'coba.jpeg', 70926, 'image/jpeg', 'dasd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id` int(11) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `hub_kel` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_penduduk` varchar(30) NOT NULL,
  `no_akta` varchar(18) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jenis_kelahiran` varchar(30) NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `waktu_lahir` varchar(40) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `panjang` varchar(10) NOT NULL,
  `tmp_dilahirkan` varchar(30) NOT NULL,
  `penolong_kelahiran` varchar(30) NOT NULL,
  `gol_darah` varchar(20) NOT NULL,
  `akseptor_kb` varchar(30) NOT NULL,
  `cacat` varchar(30) NOT NULL,
  `asuransi` varchar(30) NOT NULL,
  `sakit_menahun` varchar(30) NOT NULL,
  `ktp_el` varchar(20) NOT NULL,
  `pendidikan_kk` varchar(30) NOT NULL,
  `pendidikan_ditempuh` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `no_akta_nikah` varchar(16) NOT NULL,
  `tgl_perkawinan` varchar(20) NOT NULL,
  `tgl_perceraian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id`, `foto`, `ukuran`, `tipe`, `nik`, `nama`, `kk`, `hub_kel`, `jenis_kelamin`, `agama`, `status_penduduk`, `no_akta`, `tgl_lahir`, `jenis_kelahiran`, `tmp_lahir`, `waktu_lahir`, `anak_ke`, `panjang`, `tmp_dilahirkan`, `penolong_kelahiran`, `gol_darah`, `akseptor_kb`, `cacat`, `asuransi`, `sakit_menahun`, `ktp_el`, `pendidikan_kk`, `pendidikan_ditempuh`, `pekerjaan`, `nik_ayah`, `nama_ayah`, `nik_ibu`, `nama_ibu`, `alamat`, `telepon`, `email`, `status_perkawinan`, `no_akta_nikah`, `tgl_perkawinan`, `tgl_perceraian`) VALUES
(291699, 'k.jpg', 89958, 'image/jpeg', '3204301412970003', 'Ihsan Nurhakim Aziz', '879879879878', 'KELUARGA', 'LAKI-LAKI', 'Islam K', 'PENDATANG', '2342345235', '2021-08-19', 'KEMBAR 4', 'Bandung', '12:12', '1', '2', 'RUMAH', 'DUKUN', 'TIDAK TAHU', 'STERILISASI WANITA', 'TIDAK CACAT', 'ASURANSI LAINNYA', '-', 'Belum', 'asdas', 'dsadasdf', 'asdfasdf', '34253675', 'fasdfasdf', '234234234', 'asdfsdf', 'asdfasdfasdfdsf', '234234234', 'asdfasdf', 'BELUM KAWIN', '234234234', '2021-08-16', '2021-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_persyaratan`
--

CREATE TABLE `tb_persyaratan` (
  `id` int(11) NOT NULL,
  `nama_dok` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_persyaratan`
--

INSERT INTO `tb_persyaratan` (`id`, `nama_dok`) VALUES
(2, 'Haloogen'),
(3, 'Haloogenta'),
(4, 'puce');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rmhtangga`
--

CREATE TABLE `tb_rmhtangga` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `kpl_rmhtangga` varchar(30) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jml_anggota` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rmhtangga`
--

INSERT INTO `tb_rmhtangga` (`id`, `foto`, `ukuran`, `tipe`, `kpl_rmhtangga`, `nik`, `jml_anggota`, `alamat`, `dusun`, `rt`, `rw`, `tanggal`) VALUES
(1, 'k.jpg', 89958, 'image/jpeg', 'Robi alqurtubi f', '4132356476', '2', 'kp jalan cagak desa mandalahaji', 'kp Jalan Cagak', '23', '23', '2021-08-24'),
(2, 'icons8-rfid-signal-96.png', 5363, 'image/png', 'Pipih sopiah', 'dsfsdfsdf', '3', 'Kp Ranca rt 48/15 Desa Mandalahaji Kec Pacet Kab Bandung', 'fsadfasdf', 'asf', 'asdf', '2021-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sertifikat_tanah`
--

CREATE TABLE `tb_sertifikat_tanah` (
  `id` int(11) NOT NULL,
  `surat_izin_bang` varchar(40) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `sppt_pbb` varchar(50) NOT NULL,
  `surat_pernyataan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_staf`
--

CREATE TABLE `tb_staf` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `ukuran` varchar(11) NOT NULL,
  `tipe` int(20) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_staf`
--

INSERT INTO `tb_staf` (`id`, `foto`, `ukuran`, `tipe`, `bidang`, `nama`) VALUES
(1, 'crop orange.jpg', '38330', 0, 'Pelayanan', 'Karin (Kelas 4 SD)'),
(5, 'k.jpg', '89958', 0, 'sdfdfsdfsdf', 'sdfsfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nik` varchar(22) NOT NULL,
  `kk` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `status_post` varchar(20) NOT NULL,
  `status_ttd_kades` varchar(100) NOT NULL,
  `dok` varchar(50) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `progres` varchar(50) NOT NULL,
  `alasan` text NOT NULL,
  `jenis_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `id_user`, `nik`, `kk`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `email`, `wa`, `tanggal`, `pesan`, `status_post`, `status_ttd_kades`, `dok`, `ukuran`, `tipe`, `progres`, `alasan`, `jenis_surat`) VALUES
(987057, 410412, '3204301412970003', '3204300707199860004', 'Ihsan Nurhakim Aziz', 'Kp Ranca rt 48/15 Desa Mandalahaji Kec Pacet Kab Bandung', 'Bandung', '2021-06-09', 'lpk7ihsanna@gmail.com', '0898989898', '2021-08-26 07:29:45', 'Gada Palu Gajah', 'Diterima', 'Ada dikantor', '', 0, '', '', '', 'Kehilangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keuser`
--

CREATE TABLE `tb_surat_keuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_keuser`
--

INSERT INTO `tb_surat_keuser` (`id`, `nama`, `ukuran`, `tipe`, `id_user`, `nama_user`, `nama_pengirim`, `jabatan`, `tanggal`) VALUES
(93761, 'suratIjinKeramaian(1).doc', 2598928, 'application/msword', '65682', 'Metty Puspita', 'kjhkjhkjh', 'lkhjlkjlkj', '2021-08-23 07:27:20 '),
(410412, 'suratPenghasilan(3).doc', 2647441, 'application/msword', '410412', 'Ihsan Nurhakim Aziz', 'Ihsan Nurhakim', 'Ketua Gang Motor Antrax', '2021-08-26 07:36:16 '),
(627052, 'suratPenghasilan(3).doc', 2647441, 'application/msword', '627052', 'Pipih sopiah', 'Herdi Muhammad', 'Admin', '2021-08-26 10:11:54 ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `wa` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nik`, `nama`, `alamat`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `pekerjaan`, `pendidikan`, `wa`) VALUES
(196384, '3201212980003', 'aku admin Sistem', 'Kebun Waru Jakarta Barat', '2021-06-29', 'Jakarta', 'Laki-Laki', 'Paruh Waktu', 'SMA', '0898989898'),
(410412, '3204301412970003', 'Ihsan Nurhakim Aziz', 'Kp Ranca rt 48/15 Desa Mandalahaji Kec Pacet Kab Bandung', '2021-06-09', 'Bandung', 'Laki-laki', 'PNS', 'S1 Teknik Informatika', '0898989898'),
(942001, '320430200286', 'Kepala Desa', 'Desa Purwasari Kecamatan Purwasari Kabupaten Karawang', '2021-06-22', 'Bandung', 'Laki-Laki', 'PNS', 'S1 Psikologi', '8078686868');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_aparat_pemerintahds`
--
ALTER TABLE `tb_aparat_pemerintahds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_arsip_surat`
--
ALTER TABLE `tb_arsip_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bg`
--
ALTER TABLE `tb_bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku_agenda_surat_keluar`
--
ALTER TABLE `tb_buku_agenda_surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku_agenda_surat_masuk`
--
ALTER TABLE `tb_buku_agenda_surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku_keputusan_kdesa`
--
ALTER TABLE `tb_buku_keputusan_kdesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku_perdes`
--
ALTER TABLE `tb_buku_perdes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_covid`
--
ALTER TABLE `tb_covid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_input_anggaran`
--
ALTER TABLE `tb_input_anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_surat_ttdkades`
--
ALTER TABLE `tb_jenis_surat_ttdkades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_keluarga`
--
ALTER TABLE `tb_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kirim_surat`
--
ALTER TABLE `tb_kirim_surat`
  ADD PRIMARY KEY (`id_kirim`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rmhtangga`
--
ALTER TABLE `tb_rmhtangga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sertifikat_tanah`
--
ALTER TABLE `tb_sertifikat_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_staf`
--
ALTER TABLE `tb_staf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_surat_keuser`
--
ALTER TABLE `tb_surat_keuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_aparat_pemerintahds`
--
ALTER TABLE `tb_aparat_pemerintahds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=459382;

--
-- AUTO_INCREMENT for table `tb_arsip_surat`
--
ALTER TABLE `tb_arsip_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_auth`
--
ALTER TABLE `tb_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11223386;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_bg`
--
ALTER TABLE `tb_bg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=934513;

--
-- AUTO_INCREMENT for table `tb_buku_agenda_surat_keluar`
--
ALTER TABLE `tb_buku_agenda_surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=724512;

--
-- AUTO_INCREMENT for table `tb_buku_agenda_surat_masuk`
--
ALTER TABLE `tb_buku_agenda_surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=705151;

--
-- AUTO_INCREMENT for table `tb_buku_keputusan_kdesa`
--
ALTER TABLE `tb_buku_keputusan_kdesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789694;

--
-- AUTO_INCREMENT for table `tb_buku_perdes`
--
ALTER TABLE `tb_buku_perdes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455853;

--
-- AUTO_INCREMENT for table `tb_covid`
--
ALTER TABLE `tb_covid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419849;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226920;

--
-- AUTO_INCREMENT for table `tb_input_anggaran`
--
ALTER TABLE `tb_input_anggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=979060;

--
-- AUTO_INCREMENT for table `tb_jenis_surat_ttdkades`
--
ALTER TABLE `tb_jenis_surat_ttdkades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_keluarga`
--
ALTER TABLE `tb_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=932919;

--
-- AUTO_INCREMENT for table `tb_kirim_surat`
--
ALTER TABLE `tb_kirim_surat`
  MODIFY `id_kirim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=454265;

--
-- AUTO_INCREMENT for table `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291700;

--
-- AUTO_INCREMENT for table `tb_persyaratan`
--
ALTER TABLE `tb_persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_rmhtangga`
--
ALTER TABLE `tb_rmhtangga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sertifikat_tanah`
--
ALTER TABLE `tb_sertifikat_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_staf`
--
ALTER TABLE `tb_staf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987060;

--
-- AUTO_INCREMENT for table `tb_surat_keuser`
--
ALTER TABLE `tb_surat_keuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=966333;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD CONSTRAINT `tb_auth_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD CONSTRAINT `tb_surat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
