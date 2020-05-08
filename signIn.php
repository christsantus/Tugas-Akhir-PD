<?php
// require 'functions.php';
$conn = mysqli_connect("localhost","root", "","proyek");
if(isset($_POST["login"])){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
	
	if (mysqli_num_rows($result) == 1) {
		header("Location: oindex.php");
	} else {
		$error = true;
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

<?php if(isset($error)) :?>
<p style="color: red">Username / Password Salah!</p>
<?php endif ?>
		<form action="" method="post">
			<div class="atas">
				<label class="pink" for="username">Username :</label>
				<input type="text" name="username" id="username" required>
			</div>
			<div class="bawah" style="margin-top : 30px;">
				<label class ="pink" for="password">Password :</label>
				<input type="password" name="password" id="password" required>
			</div>
			<div class="button">
				<button type="submit" name="login">login</button>
			</div>
		</form>
	</div>
	<div class="newUser pink">
		<p>Don't have any account? 
			<a href="signup.php" class="ungu">
				SIGN UP
			</a>
		</p>
	</div>
</div>
<div class="log">
	<img src="i/log.png" class="log">
</div>
</body>
</html>