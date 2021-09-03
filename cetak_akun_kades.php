<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		<h2>DAFTAR AKUN TERDAFTAR PADA SISTEM INFORMASI</h2> 
		<h4>DESA MANDALAHAJI</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
                    <th>Id</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Pendidikan</th>
                    <th>No Whatsapp</th>
                   
			
		</tr>
		<?php
		include "koneksi.php";
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_user");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
                
               <td><?php echo $d['id'] ?></td>
                    <td><?php echo $d['nik'] ?></td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo $d['alamat'] ?></td>
                    <td><?php echo $d['tgl_lahir'] ?></td>
                    <td><?php echo $d['tempat_lahir'] ?></td>
                    <td><?php echo $d['jenis_kelamin'] ?></td>
                    <td><?php echo $d['pekerjaan'] ?></td>
                    <td><?php echo $d['pendidikan'] ?></td>
                    <td><?php echo $d['wa'] ?></td>
                   
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