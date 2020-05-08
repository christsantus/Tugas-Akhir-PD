<?php
require 'functions.php';
if(isset($_POST["submit"])){
	if(tambah($_POST) > 0){
		echo "
		<script> alert('Berhasil!');
		document.location.href ='index.php';
		</script>";

	}else{
		echo "
		<script> alert('Gagal!');
		</script>";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
<h1>Tambah Data Mahasiswa</h1>
<form action="" method="post">
	<ul>
			<label for="username">username :</label>
			<input type="text" name="username" id="username" required>
		</li>
		<li>
			<label for="password">password :</label>
			<input type="password" name="password" id="password" required="">
		</li>
		<li>
			<button type="submit" name="submit">Submit</button>
		</li>
	</ul>
</form>
	
</form>
</body>
</html>