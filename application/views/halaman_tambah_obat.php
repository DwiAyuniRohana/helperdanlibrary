<!DOCTYPE html>

<head>
	<title>Halaman Tambah</title>
</head>

<body>
	<h3>Halaman Tambah Obat</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
		<table>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr>
				<td>Penyimpanan</td>
				<td>:</td>
				<td><input type="text" name="penyimpanan"></td>
			</tr>
			<tr>
				<td>Penyuplai</td>
				<td>:</td>
				<td><input type="text" name="penyuplai"></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit">Tambah Obat</button></td>
			</tr>
		</table>
	</form>
</body>

</html>