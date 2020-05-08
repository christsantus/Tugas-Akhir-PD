<?php 
require 'functions.php';
$Id = $_GET["Id"];

if(hapus($Id) > 0){
			echo "<script>
					alert('data berhasil dihapus');
					document.location.href = 'index.php';
				</script>
			";
		}else{
			echo "<script>
					alert('gagal');
				";
		}
 ?>
