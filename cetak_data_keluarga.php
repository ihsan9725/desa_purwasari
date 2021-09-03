<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		<h2>DAFTAR LAPORAN DATA KELUARGA</h2> 
		<h4>DESA MANDALAHAJI</h4>

 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
                    <th>KK</th>
                    <th>Kepala Keluarga</th>
                    <th>NIK</th>
                    <th>ID Card</th>
                    <th>Jumlah Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Dusun</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Tanggal Terdaftar</th>
			
		</tr>
		<?php
		include "koneksi.php";
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_keluarga");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
                
                 <td><?php echo $d['kk'] ?></td>
                    <td><?php echo $d['kepala_keluarga'] ?></td>
                    <td><?php echo $d['nik'] ?></td>
                    <td><?php echo $d['id_card'] ?></td>
                    <td><?php echo $d['jml_anggota'] ?></td>
                    <td><?php echo $d['jenis_kelamin'] ?></td>
                    <td><?php echo $d['alamat'] ?></td>
                    <td><?php echo $d['dusun'] ?></td>
                    <td><?php echo $d['rt'] ?></td>
                    <td><?php echo $d['rw'] ?></td>
                    <td><?php echo $d['tanggal'] ?></td>
                    
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