<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost","root", "","startup");
//ambil data dari table mahasiswa / query data mahasiswa
$result = mysqli_query($conn,"SELECT * FROM login");

//ambil data (fetch) mahasiswa dari objek result
//ada 4 cara melakukan fetch
// 1. mysqli_fetch_row() //mengembalikan array numerik var_dump($mhs[0]);
// 2. mysqli_fetch_assoc() //mengembalikan array associative

// 3. mysqli_fetch_array() //mengembalikan keduanya
// 4. mysqli_fetch_object() // mengembalikan object
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["username"]);
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

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>username</th>
		<th>password</th>
	</tr>


	<?php while($row = mysqli_fetch_assoc($result)) : ?>
	<tr>
		<td>1</td>
		<td>	
			<a href="">Ubah</a> |
			<a href="">Hapus</a> |
		</td>
		<td><?php echo $row["username"] ?></td>
		<td><?php echo $row["password"] ?></td>
	</tr>
	<?php endwhile ?>
</table>
</body>
</html>