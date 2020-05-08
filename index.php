<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM login");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
<style>
	img{
		width: 100px;
		height: 100px;
	}
</style>	
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<a href="signup.php">Tambah Data Mahasiswa</a>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>username</th>
		<th>password</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach($mahasiswa as $row) : ?>
	<tr>
		<td><?php echo $i; ?></td>
		<td>	
			<a href="">Ubah</a> |
			<a href="hapus.php?Id=<?php echo $row["Id"]; ?>">Hapus</a>
		</td>
		<td><?php echo $row["username"]; ?></td>
		<td><?php echo $row["password"]; ?></td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>