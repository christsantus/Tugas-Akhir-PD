<?php 
//Koneksi ke database
$conn = mysqli_connect("localhost","root", "","proyek");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;

		$username = htmlspecialchars($data["username"]);
		$password = htmlspecialchars($data["password"]);

		//query insert data
		$query = "INSERT INTO login 
		VALUES
		('','$username', '$password')
		";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
}

function hapus($Id){
	global $conn;
	mysqli_query($conn, "DELETE FROM login WHERE Id = $Id");

	return mysqli_affected_rows($conn);
}

 ?>


