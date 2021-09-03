<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		<h2>DAFTAR STAF DESA AKTIF</h2> 
		<h4>DESA MANDALAHAJI</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
                     <th>Foto</th>
                    <th>Nama NIP/NIPD NIK</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Pangkat/Golongan</th>
                    <th>Jabatan</th>
                    <th>Pendidikan Terakhir</th>
                    <th>No SK Pengangkatan</th>
                    <th>Tgl SK Pengangkatan</th>
                    <th>No SK Pemberhentian</th>
                    <th>Tgl SK Pemberhentian</th>
                    <th>Masa/Periode Jabatan</th>
                    <th>Status Pegawai Desa</th>
                   
			
		</tr>
		<?php
		include "koneksi.php";
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_aparat_pemerintahds");
		while($d = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
                
                 <td><img src="img/<?php echo $d['nama']?>" width="100dp" height="100dp"></td>
                <td><?php echo $d['nama_peg'] ?><br>
                  NIP/NIPD : <?php echo $d['nipd'] ?>/<?php echo $d['nip'] ?>
                  NIK      : <?php echo $d['nik'] ?>
                </td>
                <td><?php echo $d['tmp_lahir'] ?> <?php echo $d['tgl_lahir'] ?></td>
                <td><?php echo $d['jenis_kelamin'] ?></td>
                <td><?php echo $d['agama'] ?></td>
                <td><?php echo $d['pangkat'] ?></td>
                <td><?php echo $d['jabatan'] ?></td>
                <td><?php echo $d['pendidikan'] ?></td>
                <td><?php echo $d['no_sk_pengangkatan'] ?></td>
                <td><?php echo $d['tgl_sk_pengangkatan'] ?></td>
                <td><?php echo $d['no_sk_pemberhentian'] ?></td>
                <td><?php echo $d['tgl_sk_pemberhentian'] ?></td>
                <td><?php echo $d['jabatan'] ?></td>
                <td><?php echo $d['status'] ?></td>
                   
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