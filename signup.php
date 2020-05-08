<?php
require 'functions.php';
if(isset($_POST["submit"])){
	if(tambah($_POST) > 0){
		echo "
		<script> alert('Berhasil!');
		document.location.href ='signin.php';
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
	<title>Nikah Kuy!</title>
	<link rel="stylesheet" type="text/css" href="signIn.css">
</head>
<body>
<div class="kepala1 row">
	<div class="col-lg-6">
		<h1>NIKAH KUY</h1>
	</div>
	<div class="col-lg-6 tags">
	</div>
</div>
<div class="susah">
	<div class="bgAja"></div>
	<div class="kosong"></div>	
</div>
<div class="container">
	<div class="gabungin">
		<form action="" method="post">
			<div class="atas">
				<label class="pink" for="username">username :</label>
				<input type="text" name="username" id="username" required>
			</div>
			<div class="bawah" style="margin-top : 30px;">
				<label class ="pink" for="password">password :</label>
				<input type="password" name="password" id="password" required="">
			</div>
			<div class="button">
				<button type="submit" name="submit">Submit</button>
			</div>
		</form>
		</div>
	</div>
</div>
<div class="log">
	<img src="i/log.png" class="log">
</div>
</body>
</html>