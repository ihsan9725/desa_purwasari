<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		<h2>DAFTAR LAPORAN PEMUDIK DITENGAH PANDEMI COVID-19</h2> 
		<h4>DESA MANDALAHAJI</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Asal Pemudik</th>
                    <th>Tanggal Tiba</th>
                    <th>Tujuan Pemudik</th>
                    <th>Kontak</th>
                    <th>Status</th>
                    <th>Keluhan</th>
                    <th>Wajib Pantau</th>
			
		</tr>
		<?php
		include "koneksi.php";
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_covid");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
                
                 <td><?php echo $d['nik'] ?></td>
                <td><?php echo $d['nama'] ?></td>
                <td><?php echo $d['umur'] ?></td>
                <td><?php echo $d['jenis_kelamin'] ?></td>
                <td><?php echo $d['alamat'] ?></td>
                <td><?php echo $d['kota'] ?></td>
                <td><?php echo $d['tgl_tiba'] ?></td>
                <td><?php echo $d['tujuan'] ?></td>
                <td><?php echo $d['no_hp'] ?></td>
                <td><?php echo $d['status_perkawinan'] ?></td>
                <td><?php echo $d['keluhan_kesehatan'] ?></td>
                <td><?php echo $d['wajib_pantau'] ?></td>
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