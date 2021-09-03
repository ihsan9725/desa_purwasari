<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		<h2>DAFTAR LAPORAN DATA PENDUDUK</h2> 
		<h4>DESA MANDALAHAJI</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
                     <th>Foto</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No KK</th>
                    <th>Hubungan Dalam Keluarga</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status Penduduk</th>
                    <th>No Akta</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelahiran</th>
                    <th>Tempat Lahir</th>
                    <th>Waktu Lahir</th>
                    <th>Anak Ke</th>
                    <th>Panjang (cm)</th>
                    <th>Tempat Dilahiran</th>
                    <th>Penolong Kelahiran</th>
                    <th>Golongan Darah</th>
                    <th>Akseptor KB</th>
                    <th>Cacat</th>
                    <th>Asuransi</th>
                    <th>Sakit Menahun</th>
                    <th>KTP Elektronik</th>
                    <th>Pendidikan Dalam KK</th>
                    <th>Pendidikan Sedang Ditempuh</th>
                    <th>Pekerjaan</th>
                    <th>NIK Ayah</th>
                    <th>Nama Ayah</th>
                    <th>NIK Ibu</th>
                    <th>Nama Ibu</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>E-mail</th>
                    <th>Status Perkawinan</th>
                    <th>No Akta Nikah</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Perkawinan</th>
                    <th>Tanggal Perceraian</th>
			
		</tr>
		<?php
		include "koneksi.php";
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_penduduk");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
                
                 <td><img src="img/<?php echo $d['foto']?>" width="50" height="50"></td>
                    <td><?php echo $d['nik'] ?></td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo $d['kk'] ?></td>
                    <td><?php echo $d['hub_kel'] ?></td>
                    <td><?php echo $d['jenis_kelamin'] ?></td>
                    <td><?php echo $d['agama'] ?></td>
                    <td><?php echo $d['status_penduduk'] ?></td>
                    <td><?php echo $d['no_akta'] ?></td>
                    <td><?php echo $d['tgl_lahir'] ?></td>
                    <td><?php echo $d['jenis_kelahiran'] ?></td>
                    <td><?php echo $d['tmp_lahir'] ?></td>
                    <td><?php echo $d['waktu_lahir'] ?></td>
                    <td><?php echo $d['anak_ke'] ?></td>
                    <td><?php echo $d['panjang'] ?></td>
                    <td><?php echo $d['tmp_dilahirkan'] ?></td>
                    <td><?php echo $d['penolong_kelahiran'] ?></td>
                    <td><?php echo $d['gol_darah'] ?></td>
                    <td><?php echo $d['akseptor_kb'] ?></td>
                    <td><?php echo $d['cacat'] ?></td>
                    <td><?php echo $d['asuransi'] ?></td>
                    <td><?php echo $d['sakit_menahun'] ?></td>
                    <td><?php echo $d['ktp_el'] ?></td>
                    <td><?php echo $d['pendidikan_kk'] ?></td>
                    <td><?php echo $d['pendidikan_ditempuh'] ?></td>
                    <td><?php echo $d['pekerjaan'] ?></td>
                    <td><?php echo $d['nik_ayah'] ?></td>
                    <td><?php echo $d['nama_ayah'] ?></td>
                    <td><?php echo $d['nik_ibu'] ?></td>
                    <td><?php echo $d['nama_ibu'] ?></td>
                    <td><?php echo $d['alamat'] ?></td>
                    <td><?php echo $d['telepon'] ?></td>
                    <td><?php echo $d['email'] ?></td>
                    <td><?php echo $d['status_perkawinan'] ?></td>
                    <td><?php echo $d['no_akta_nikah'] ?></td>
                    <td><?php echo $d['jenis_kelamin'] ?></td>
                    <td><?php echo $d['tgl_perkawinan'] ?></td>
                    <td><?php echo $d['tgl_perceraian'] ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>