<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		<h2>LAPORAN PENGAJUAN SURAT MASYARAKAT</h2>
		<h4>DESA MANDALAHAJI</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
                    
                    <th>NIK</th>
                    <th>KK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No Wa</th>
                    <th>Jenis Surat</th>
                    <th>Tanggal</th>
                    <th>Pesan</th>
                    <th>Status</th>
			
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_surat where status_post='Diterima'");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
                
                <td><?php echo $d['nik'] ?></td>
                <td><?php echo $d['kk'] ?></td>
                <td><?php echo $d['nama'] ?></td>
                <td><?php echo $d['alamat'] ?></td>
                <td><?php echo $d['email'] ?></td>
                <td><?php echo $d['wa'] ?></td>
                <td><?php echo $d['jenis_surat'] ?></td>
                <td><?php echo $d['tanggal'] ?></td>
                <td><?php echo $d['pesan'] ?></td>
                <td><?php echo $d['status_post']?></td>
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