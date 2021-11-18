<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Obat</title>
</head>
<body>
	<h3>Halaman Edit Obat</h3>
	<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
	<table>
		<tr>
			<td>ID</td>
			<td>:</td>
			<td><input type="text" name="id" value="<?php echo $queryObtDetail->id ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $queryObtDetail->nama ?>"></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td><input type="text" name="deskripsi" value="<?php echo $queryObtDetail->deskripsi ?>"></td>
		</tr>
		<tr>
			<td>Penyimpanan</td>
			<td>:</td>
			<td><input type="text" name="penyimpanan" value="<?php echo $queryObtDetail->penyimpanan ?>"></td>
		</tr>
		<tr>
			<td>Penyuplai</td>
			<td>:</td>
			<td><input type="text" name="penyuplai" value="<?php echo $queryObtDetail->penyuplai ?>"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Update Obat</button></td>
		</tr>
	</table>
	</form>
</body>
</html>