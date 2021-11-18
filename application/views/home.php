<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HOME</title>
	<link rel="stylesheet" href="">
</head>

<body>
	<h1>Apotek Scorpion</h1>

	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Obat</a>
	<br>
	<a href="<?php echo base_url('/shopping_cart/index') ?>">keranjang</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>No</td>
			<td>ID</td>
			<td>Nama</td>
			<td>Deskripsi</td>
			<td>Penyimpanan</td>
			<td>Penyuplai</td>
			<td>Aksi</td>
		</tr>
		<?php
		$count = 0;
		foreach ($queryAllObt as $row) {
			$count = $count + 1;
		?>
			<tr>
				<td><?php echo $count ?></td>
				<td><?php echo $row->id ?></td>
				<td><?php echo $row->nama ?></td>
				<td><?php echo $row->deskripsi ?></td>
				<td><?php echo $row->penyimpanan ?></td>
				<td><?= Kosong($row->penyuplai) ?></td>
				<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->id ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->id ?>">Delete</a></td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>