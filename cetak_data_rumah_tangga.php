<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		<h2>DAFTAR LAPORAN DATA RUMAH TANGGA</h2> 
		<h4>DESA MANDALAHAJI</h4>

 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
                    <th>Foto</th>
                    <th>Kepala Rumah Tangga</th>
                    <th>NIK</th>
                    <th>Jumlah Anggota</th>
                    <th>Alamat</th>
                    <th>Dusun</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Tanggal Terdaftar</th>
			
		</tr>
		<?php
		include "koneksi.php";
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_rmhtangga");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
                
                <td><img src="img/<?php echo $d['foto']?>" width="50" height="50"></td>
                    <td><?php echo $d['kpl_rmhtangga'] ?></td>
                    <td><?php echo $d['nik'] ?></td>
                    <td><?php echo $d['jml_anggota'] ?></td>
                    <td><?php echo $d['alamat'] ?></td>
                    <td><?php echo $d['dusun'] ?></td>
                    <td><?php echo $d['rt'] ?></td>
                    <td><?php echo $d['rw'] ?></td>
                    <td><?php echo $d['date'] ?></td>
                    
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